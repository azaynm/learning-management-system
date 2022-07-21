<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/lessons.css">
    <link rel="stylesheet" href="styles/footer.css">
    <script type="text/javascript" src="scripts/lessons.js"></script>
    
    <title>Document</title>
</head>
<body>
<?php include 'php/header.php';?>
      <div class='lessons'>
        <!-- Here a loader is created which 
             loads till response comes -->
        <div class="d-flex justify-content-center">
            <div class="spinner-border" role="status" id="loading">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- table for showing data -->
        <div id="lessons" ></div>
      </div>
      <?php include 'php/footer.php';?>
</body>
</html>