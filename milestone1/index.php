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
    <header>
        <nav>
            <img src="netflix.png" alt="">
        </nav>
    </header>

    <main>  
    <div class="container">
    <?php 
    foreach($discs as $disc){
        /* var_dump($disc); */
        ?>
        
        
            <div class="card">
                <img src="<?php echo $disc['poster']?>" alt="">
                <h1><?php echo $disc['title']?></h1>
                <span><?php echo $disc['author']?></span>
                <span><?php echo $disc['year']?></span>
            </div>
       
    <?php
    }
    ?>
     </div>
    </main>
    <!-- VUEJS -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <!-- JS -->
    <script src="./dist/js/app.js"></script>
</body>
</html>