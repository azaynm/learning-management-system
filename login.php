<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/login.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
    <title>Login</title>
</head>

<body>
    <div class="login">
        <img src="images/logo.jpg" alt="ICT">
        <form action="action_page.php" method="post">
            <div class="text">
              <p>ඔබ දැනටමත් ලියාපදිංචි වී ඇත්නම් දුරකතන අංකය හා මුරපදය පහත යොමු කරන්න</p></br>
              <p>නැත්නම් ඔබගේ දුරකතන අංකය සහ මුරපදයක් ඇතුලු කර ගිණුමක් විවෘත කළ හැකිය.</p>
            </div>
          
            <div class="container">
              <input type="text" placeholder="Enter Username" name="uname" required>
              <input type="password" placeholder="Enter Password" name="psw" required>
          
              <button type="submit">Login</button>
              <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
              </label>
            </div>
        
            <div class="container" style="background-color:#f1f1f1">
              <button type="button" class="cancelbtn">Cancel</button>
              <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
          </form>
    </div>
    <?php include 'php/footer.php';?>
</body>

</html>