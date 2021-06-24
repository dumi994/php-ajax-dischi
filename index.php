<?php include __DIR__ . '/db.php'; ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="./dist/css/app.css">
    <title>Document</title>
</head>
<body>

    
    <h1>aaa</h1>
    <?php 
    foreach($discs as $disc){
        var_dump($disc);
    }
    ?>
    <!-- VUEJS -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <!-- JS -->
    <script src="./dist/js/app.js"></script>
</body>
</html>