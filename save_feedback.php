<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$feedbackFile = 'feedbacks.json';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $rating = intval($_POST['rating'] ?? 0);
    $comment = htmlspecialchars($_POST['comment'] ?? '');
    
    if (empty($name) || $rating < 1 || $rating > 5 || empty($comment)) {
        echo json_encode(['success' => false, 'message' => 'Invalid data']);
        exit;
    }
    
    $feedback = [
        'name' => $name,
        'rating' => $rating,
        'comment' => $comment,
        'date' => date('Y-m-d H:i:s')
    ];
    
    $feedbacks = [];
    if (file_exists($feedbackFile)) {
        $content = file_get_contents($feedbackFile);
        $feedbacks = json_decode($content, true) ?: [];
    }
    
    array_unshift($feedbacks, $feedback);
    
    if (file_put_contents($feedbackFile, json_encode($feedbacks, JSON_PRETTY_PRINT)) === false) {
        echo json_encode(['success' => false, 'message' => 'Failed to save feedback']);
        exit;
    }
    
    echo json_encode(['success' => true, 'feedback' => $feedback]);
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $feedbacks = file_exists($feedbackFile) ? json_decode(file_get_contents($feedbackFile), true) : [];
    echo json_encode($feedbacks);
}
?>
