<?php
/**
 * Projects API
 * Returns latest projects as JSON
 */
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

require_once __DIR__ . '/../includes/db.php';

$limit = isset($_GET['limit']) ? (int) $_GET['limit'] : 6;
$limit = max(1, min($limit, 20)); // clamp 1–20

try {
    $pdo  = getDB();
    $stmt = $pdo->prepare(
        'SELECT id, title, thumbnail, demo_link, project_date
         FROM projects
         ORDER BY project_date DESC
         LIMIT :lim'
    );
    $stmt->bindValue(':lim', $limit, PDO::PARAM_INT);
    $stmt->execute();
    $projects = $stmt->fetchAll();

    echo json_encode(['success' => true, 'data' => $projects]);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Database error']);
}
