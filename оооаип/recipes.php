<?php

$recipes = [
  [
    "title" => "Яичница",
    "imageURL" => "https://attuale.ru/wp-content/uploads/2017/11/shutterstock_659571517-1440x954.jpg",
    "description" => "Пожарьте яйца"
  ],
  [
    "title" => "Борщ",
    "imageURL" => "https://zhizn-mira.ru/uploads/posts/2021-03/1615531528_screenshot_21.jpg",
    "description" => "Сделайте борщ"
  ],
  [
    "title" => "Щи",
    "imageURL" => "https://kartinkin.net/uploads/posts/2021-07/1626351619_4-kartinkin-com-p-shchi-s-kapustoi-yeda-krasivo-foto-4.jpg",
    "description" => "Сделайте щи"
  ]
];

$profileInfo = [
  "name" => "Ксения",
  "email" => "example@gmail.com"
];

?>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Poppins:wght@100&family=Roboto+Condensed:wght@300&family=Yuji+Boku&display=swap');
  </style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X_UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, inititial-scale=1.0">
    <link rel="stylesheet" href="profil.css">
    <title>Document</title>
</head>
<body>
  <div id="container">
    <div class="profile-info">
      <div class="profile-info-top">
        <div class="profile-photo">
          <img src="images/camera.png" alt="">
        </div>
        <div class="profile-settings">
          <h2><? echo $profileInfo["name"]; ?></h2>
          <p><? echo $profileInfo["email"]; ?></p>
          <button>Редактировать</button>
        </div>
      </div>
      <hr>
      <div class="profile-info-bottom">
        <h2>Рецепты</h2>
        <?for($i = 0; $i < count($recipes); $i++){?>
        <div class="recipe">
          <? echo "<img src='".$recipes[$i]["imageURL"]."'>"; ?>
          <div>
            <? echo "<h4>".$recipes[$i]["title"]."</h4>"; ?>
            <? echo  "<p>".$recipes[$i]["description"]."</p>"; ?>
          </div>
        </div>
        <?}?>
      </div>
    </div>
    <div class="profile-menu">
      <h1>ЕДЫ.НЕТ</h1>
      <nav>
        <ul>
          <li><a href="./profile.php">Профиль</a></li>
          <li class="active"><a href="./recipes.php">Мои рецепты</a></li>
          <li><a href="./friendsRecipes.php">Рецепты друзей</a></li>
          <li><a href="./friends.php">Друзья</a></li>
        </ul>
      </nav>
    </div>
  </div>
</body>