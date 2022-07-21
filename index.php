<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
    <script type="text/javascript" src="scripts/fetchLessons.js"></script>
    <title>Document</title>
</head>
<body>
    <?php include 'php/header.php';?>
    <div class="index">
        <!-- Here a loader is created which 
             loads till response comes -->
        <div class="d-flex justify-content-center">
            <div class="spinner-border" role="status" id="loading">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- table for showing data -->
        <div id="lectures" style="display:flex; flex-direction:row; flex-wrap: wrap;justify-content: center;"></div>
    </div>
    <?php include 'php/footer.php';?>
</body>
</html>