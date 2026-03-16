<?php
/**
 * Single Project API
 * Returns one project by ID as JSON
 */
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

require_once __DIR__ . '/../includes/db.php';

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

if ($id <= 0) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Invalid project ID']);
    exit;
}

try {
    $pdo  = getDB();
    $stmt = $pdo->prepare(
        'SELECT id, title, thumbnail, demo_link, project_date
         FROM projects WHERE id = :id LIMIT 1'
    );
    $stmt->execute([':id' => $id]);
    $project = $stmt->fetch();

    if (!$project) {
        http_response_code(404);
        echo json_encode(['success' => false, 'message' => 'Project not found']);
        exit;
    }

    echo json_encode(['success' => true, 'data' => $project]);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Database error']);
}
