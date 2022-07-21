<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/admin.css">
    
    <title>Document</title>
</head>
<body>
<?php include 'php/header.php';?>
<div class='admin'>
    <div class='side-bar'>
        <a id="myBtn1">Add Year</a>
        <a id="myBtn2">Add Lesson</a>
        <a id="myBtn3">Change Lesson</a>
        <a id="myBtn4">Delete Lesson</a>
        <a id="myBtn5">Change Password</a>
        <a id="myBtn6">Delete Account</a>

        <?php include 'php/addYear.php';?>  
        <script type="text/javascript" src="scripts/addYear.js"></script> 

        <?php include 'php/addLesson.php';?>  
        <script type="text/javascript" src="scripts/addLesson.js"></script> 

        <?php include 'php/changeLesson.php';?>  
        <script type="text/javascript" src="scripts/changeLesson.js"></script>

        <?php include 'php/deleteLesson.php';?>  
        <script type="text/javascript" src="scripts/deleteLesson.js"></script>

        <?php include 'php/changePassword.php';?>  
        <script type="text/javascript" src="scripts/changePassword.js"></script>

        <?php include 'php/deleteAccount.php';?>  
        <script type="text/javascript" src="scripts/deleteAccount.js"></script>
         
    
    </div>
   
    <div class='middle'>
        <img src="images/user.jpg" alt="ICT">
        <h4>Hello User!</h4>
    </div>
</div>
</body>
</html>