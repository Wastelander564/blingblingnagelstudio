<?php
require_once 'app/controller.php';

// Instantiëer de Controller
$controller = new Controller();

// Roep de methode aan om het formulier te verwerken
$controller->handleFormSubmission();
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
    <?php require_once 'app/view.php'; ?>
</body>
</html>