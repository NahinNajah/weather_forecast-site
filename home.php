<?php

$apiKey ="8354878f82c1dce3899c0288b3f3a84f";
if (isset($_POST['country']))
 {
   $cityId =$_POST['country'];
 }
 else{
   $cityId ='Dhaka';
 }
$url = "https://api.openweathermap.org/data/2.5/forecast?q=". $cityId ."&lang=en&units=metric&appid=". $apiKey;
$clima = json_decode(file_get_contents($url), true);

$current_time = date("F j,Y, g:i a");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Weather Forecast webpage</title>
</head>
<body class="bg">

    <section class="weather">

       <div class="search-form">
            <form action=""  method="post" class="search">
                    <input type="search" name="country" id="search-box" placeholder="Search Country">
                    <label for="search-box" class="fa fa-search"></label>
            </form>
        </div>
        <div class="current">
            <div class="content-1">
                <img src="https://openweathermap.org/img/w/<?php echo $clima ['list'][0]['weather'][0]['icon']; ?>.png" class="weather_icon" >
                <h1><?php echo $clima ['list'][0]['main']['temp']; ?><span>°C</span></h1>
            </div>
            <div class="content-2">
                <h2 class="cont"> <?php echo $clima ['city']['name']; ?><br><span><?php echo $current_time; ?></span> </h2>
                <p class="detail"><?php echo $clima ['list'][0]['weather'][0]['main']; ?><br>
                 Humidity: <?php echo $clima ['list'][0]['main']['humidity']; ?>%<br>
                 Visibility: <?php echo $clima ['list'][0]['visibility']; ?>mi<br>
                 Wind:<?php echo $clima ['list'][0]['wind']['speed']; ?>mph<br>
                </p>
            </div>
        </div>

        <div class="weather-forcast">
            <div class="content">
                <h3>SUN</h3>
                <img src="https://openweathermap.org/img/w/<?php echo $clima ['list'][1]['weather'][0]['icon']; ?>.png" class="weather_icon" >
                <h3><?php echo $clima ['list'][1]['main']['temp']; ?><span>°C</span></h3>
            </div>

            <div class="content">
                <h3>MON</h3>
                <img src="https://openweathermap.org/img/w/<?php echo $clima ['list'][2]['weather'][0]['icon']; ?>.png" class="weather_icon" >
                <h3><?php echo $clima ['list'][2]['main']['temp']; ?><span>°C</span></h3>
            </div>

            <div class="content">
                <h3>TUES</h3>
                <img src="https://openweathermap.org/img/w/<?php echo $clima ['list'][3]['weather'][0]['icon']; ?>.png" class="weather_icon" >
                <h3><?php echo $clima ['list'][3]['main']['temp']; ?><span>°C</span></h3>

            </div>

            <div class="content">
                <h3>WED</h3>
                <img src="https://openweathermap.org/img/w/<?php echo $clima ['list'][4]['weather'][0]['icon']; ?>.png" class="weather_icon" >
                <h3><?php echo $clima ['list'][4]['main']['temp']; ?><span>°C</span></h3>

            </div>

            <div class="content">
                <h3>THURS</h3>
                <img src="https://openweathermap.org/img/w/<?php echo $clima ['list'][5]['weather'][0]['icon']; ?>.png" class="weather_icon" >
                <h3><?php echo $clima ['list'][5]['main']['temp']; ?><span>°C</span></h3>
            </div>

            <div class="content">
                <h3>FRI</h3>
                <img src="https://openweathermap.org/img/w/<?php echo $clima ['list'][6]['weather'][0]['icon']; ?>.png" class="weather_icon" >
                <h3><?php echo $clima ['list'][6]['main']['temp']; ?><span>°C</span></h3>
            </div>

            <div class="content">
                <h3>SAT</h3>
                <img src="https://openweathermap.org/img/w/<?php echo $clima ['list'][7]['weather'][0]['icon']; ?>.png" class="weather_icon" >
                <h3><?php echo $clima ['list'][7]['main']['temp']; ?><span>°C</span></h3>
            </div>
        </div>
    </section>    
</body>
</html>

