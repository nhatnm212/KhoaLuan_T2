<?php
    require('inc/essentials.php'); 
    adminLogin(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lí | Admin Sun's Elearning</title>
    <link rel="stylesheet" href="./css/admin_styles.css">
    <?php require('inc/links.php');?>
    <style>
        .custom-alert {
            position: fixed; 
            top: 80px; 
            right: 25px; 
        }
    </style>
</head>
<body class="bg-light">
    
    <?php require('inc/header.php');?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                Dashboard 
            </div>
        </div>
    </div>

    <?php require('inc/scripts.php'); ?>
</body>
</html>