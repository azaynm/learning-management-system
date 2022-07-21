<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/profile.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
    <title>Document</title>
</head>

<body>
    <?php include 'php/header.php';?>
    <div class="profile">
        <form action="/action_page.php" class="form">
            <div class="name">
                <input type="text" name="firstname" placeholder="First Name" class="fname" size="30" >
                <input type="text" name="lastname" placeholder="Last Name" class="lname" size="30" >
            </div>
            <div class="name">
                <input type="text" id="school" name="school" placeholder="School Name" class="school" size="30">
                <input type="text" id="address" name="address" placeholder="Address" class="address" size="30">
            </div>

            <div class="name">
                <input type="text" id="school" name="school" placeholder="WhatsApp No" class="whatsapp" size="30">
                <input type="text" id="address" name="address" placeholder="Telegram No" class="telegram" size="30">
            </div>
            <div class="name">
                <select id="district" name="district">
                    <option value="advanced">Advanced Level</option>
                    <option value="ordinary">Ordinary Level</option>
                </select>
            </div>
            <div class="name">
                <div class="info">
                    <h2>Important For Recieving Tutes</h2>
                    <h5>නිබන්ධන ලබාගැනීම සදහා වැදගත් වේ</h5>
                </div>
            </div>

            <select id="classType" name="classType">
                <option value="physical">Physical</option>
                <option value="online">Online</option>
            </select>

            <select id="district" name="district">
                <option value="colombo">Colombo</option>
                <option value="puttalam">Puttalam</option>
                <option value="ampara">Ampara</option>
            </select>

            <input type="submit" value="Save">
        </form>
        <div class="sidebar">
            <div>
                <a href="#default" class="logo"><img src="images/logo.jpg" alt="ICT"></a>
            </div>
            <div class="upload">
            <div className="upload-file">
            <input type="file" id="demo-file" />
            </div>
            <input type="submit" value="Upload Picture">
        </div>
        </div>
    </div>
    <?php include 'php/footer.php';?>
</body>

</html>