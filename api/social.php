<?php
/**
 * Social Links API
 * Returns all social media links as JSON
 */
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

require_once __DIR__ . '/../includes/db.php';

try {
    $pdo  = getDB();
    $stmt = $pdo->query(
        'SELECT id, name, icon, url FROM social_links ORDER BY id ASC'
    );
    $links = $stmt->fetchAll();

    echo json_encode(['success' => true, 'data' => $links]);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Database error']);
}
