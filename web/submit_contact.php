<?php
$name = htmlspecialchars($_POST['name']);
$message = htmlspecialchars($_POST['message']);

// バリデーション
if (empty($name) || empty($message)) {
    $error = "Name and message are required.";
    header("Location: contact.php?error=" . urlencode($error));
    exit;
}

echo "Thank you, $name. Your message has been received: $message";
?>