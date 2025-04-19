<?php

require_once 'config.php';
if (isset($_POST['bm'])) {
    $thesisId = $_POST['thesis_id'];
    $userEmail = $_POST['user_email'];

    $stmt = $conn->prepare('SELECT bookmarks FROM accounts WHERE email = ?');
    $stmt->bind_param('s', $userEmail);
    $stmt->execute();
    $row = $stmt->get_result()->fetch_assoc();

    if (str_contains($row['bookmarks'], $thesisId)) {
        $bookmarks = explode('-', $row['bookmarks']);
        $bookmarks = array_diff($bookmarks, [$thesisId]);
        $newBookmarks = implode('-', $bookmarks);
    } else {
        $newBookmarks = $row['bookmarks'] . '-' . $thesisId;
    }

    $update = $conn->prepare('UPDATE accounts SET bookmarks = ? WHERE email = ?');
    $update->bind_param('ss', $newBookmarks, $userEmail);
    $update->execute();
}

header('location: library.php?view=' . $thesisId);
exit();