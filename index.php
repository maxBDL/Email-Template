<?php
// Boilerplate for exercice DAY 3 at university MIW 05
// Code is bad and poor... but just enough for skills students :-) 

// Redirect to script to send email
if (!empty($_POST['email'])) {

    // Sending invitation by email
    header('Location: send_email.php?email=' . $_POST['email']);
    exit;

}

$body_class = "";

// Display delivery status, (tips anti-refreshing) 
if (!empty($_GET['delivery']) and $_GET['delivery'] === "sent") {

    // Sending invitation by email
    // echo "OK c'est envoyé..";
    $body_class = "delivery_sent";
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>MIW Party</title>
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<div class="container <?= $body_class ?>">
    <div class="container_form">
        <form action="send_email.php" method="post">
            <input type="email" name="email" placeholder="Ton email de star..." required autofocus/>
            <button type="submit"><p>Inscris-toi !!!</p><img src="https://i.ibb.co/WkntvCL/vip.png" alt="Image logo vip"></button>
        </form>
    </div>

    <div class="container_send">
        <div class="image_send">
            <svg xmlns="http://www.w3.org/2000/svg" width="239.325" height="194.271" viewBox="0 0 239.325 194.271"><defs><style>.a{fill:#c30078;}</style></defs><path class="a" d="M435.018,107.669l-34.712,28.244-13.858-16.229a3.391,3.391,0,1,0-5.158,4.4l16.009,18.75a3.392,3.392,0,0,0,4.719.428L439.3,112.933a3.391,3.391,0,0,0-4.281-5.261Zm0,0" transform="translate(-232.716 -63.937)"/><path class="a" d="M177.8-3.742a61.5,61.5,0,0,0-61.412,57.927H22.767A22.8,22.8,0,0,0,.193,74.045a3.381,3.381,0,0,0-.153,1.611c-.024.431-.039.865-.039,1.3v90.8a22.667,22.667,0,0,0,5.255,14.535,3.391,3.391,0,0,0,1.127,1.253,22.708,22.708,0,0,0,16.385,6.983H158.419a22.7,22.7,0,0,0,16.37-6.968,3.661,3.661,0,0,0,.508-.41,3.389,3.389,0,0,0,.628-.851,22.656,22.656,0,0,0,5.263-14.542V119.22A61.528,61.528,0,0,0,177.8-3.742ZM22.767,60.968h93.588a61.234,61.234,0,0,0,16.716,39.069,62.41,62.41,0,0,0,4.744,4.524L99.706,136.884a14.007,14.007,0,0,1-18.168.008L7.087,73.85A16.013,16.013,0,0,1,22.767,60.968Zm0,122.779a15.93,15.93,0,0,1-9.592-3.205L54.088,138.7a3.392,3.392,0,1,0-4.848-4.744L8.724,175.391a15.9,15.9,0,0,1-1.943-7.632V82.478l70.375,59.59a20.765,20.765,0,0,0,26.936-.012l39.235-33.274a60.754,60.754,0,0,0,31.079,10.44v48.537a15.863,15.863,0,0,1-1.957,7.658l-40.759-41.469a3.391,3.391,0,0,0-4.836,4.753l41.137,41.856a15.909,15.909,0,0,1-9.571,3.19ZM177.8,112.53A54.165,54.165,0,0,1,145.4,101.941a3.935,3.935,0,0,0-.452-.343A55.541,55.541,0,0,1,138,95.378a54.743,54.743,0,1,1,39.8,17.151Zm0,0" transform="translate(0 3.742)"/></svg>
        </div>
    </div>
</div>
</body>
</html>