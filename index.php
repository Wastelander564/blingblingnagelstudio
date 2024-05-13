<?php
require_once 'app/controller/Controller.php';

// Instantiate the Controller
$controller = new Controller();

// Handle form submission
$controller->handleFormSubmission();

// Display appointments
$controller->readAfspraken();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afspraak maken</title>
</head>
<body>
    <!-- Laad de View (HTML-formulier) -->
    <?php require_once 'app/view/view.php'; ?>
</body>
</html>