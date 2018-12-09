<?php
session_start();
require "db.php";
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
$session_id = session_id();
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bomanchan</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<div class="navbar">
    <a class="navbar-item" href="index.php">Home</a>
    <a class="navbar-item" href="passcode.php">Buy passcode</a>
    <a class="navbar-item" href="info.php">Info</a>
</div>
<div class="content">
    <h1>Info:</h1>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi debitis dicta dignissimos doloremque, eveniet exercitationem nesciunt nobis porro quaerat quibusdam quos ratione reiciendis repellendus, saepe, sed suscipit tempore unde voluptate voluptates voluptatum. Accusamus cum cupiditate, delectus dignissimos et eveniet excepturi ipsum magnam necessitatibus nobis praesentium quo, saepe unde vero voluptatum? Ad aspernatur commodi culpa cupiditate debitis distinctio dolor dolore earum eveniet fugiat incidunt inventore iure labore libero magni mollitia nam neque, nesciunt nihil non nostrum obcaecati officia optio possimus provident quia quidem quo quod sapiente sed veritatis vitae voluptas voluptatibus! Culpa cum cupiditate et inventore neque placeat quam, quis soluta. Ad aperiam corporis, dolores ducimus enim nobis repellendus repudiandae sint soluta tempore. Ab architecto cumque cupiditate facere non. Architecto aspernatur cum cumque doloremque id illum nemo quae qui, vitae voluptatibus. Ab adipisci consectetur cum deleniti deserunt eos fuga fugiat fugit harum itaque labore qui quod rerum sunt temporibus vero, voluptate voluptates voluptatum! Ab aliquid at atque corporis eius enim error exercitationem inventore ipsa iste labore minima nihil officiis, omnis optio placeat quae qui repellat, sed sunt suscipit unde, vitae? Aliquam assumenda consectetur distinctio ducimus error quae quia quo repellendus! Aspernatur maiores neque quas quibusdam sed sequi vitae. Aliquam animi ipsa nisi optio tempora? Ab at, autem, deleniti dolor doloribus earum exercitationem explicabo harum id inventore ipsum magnam magni maiores non officia perferendis provident quae quisquam rem suscipit tempore vero voluptas! Ab animi dignissimos minus obcaecati, provident repellat sint tempora tempore tenetur? Ab aliquam aliquid, commodi consequuntur culpa cupiditate distinctio dolorem doloremque ducimus error fugiat impedit in ipsa ipsum iste laudantium minus modi molestias nisi odit perspiciatis placeat qui quidem quos sapiente sed soluta, suscipit tenetur ullam ut velit veniam voluptate voluptatum! Cupiditate dolore minima minus quae quam? Aliquam beatae blanditiis doloribus minima neque, quo temporibus vero voluptatum? Ad amet beatae consectetur consequatur eaque facere illo ipsam ipsum magni odio odit officia possimus quae, quaerat sint suscipit ut velit. Alias aliquid animi architecto at atque cum dolores earum error est exercitationem harum impedit ipsam laboriosam laborum minima molestias mollitia necessitatibus non praesentium provident quas quia quibusdam, repudiandae rerum saepe unde voluptas? A aperiam atque deserunt, eos ipsa nesciunt odio placeat quam sapiente ullam. Alias aliquam animi beatae dolore dolorum eveniet itaque totam veniam voluptate! Aliquid aperiam at, atque cupiditate dignissimos dolorem dolores ea eaque esse est et eveniet facilis hic impedit inventore laboriosam molestias neque nisi nobis nulla officia optio perspiciatis quidem quisquam quod repellendus sed similique temporibus unde ut vitae voluptas voluptate, voluptates? Amet aspernatur autem dignissimos doloribus, expedita fugiat, illo illum nam, omnis placeat quaerat quasi quibusdam soluta tempora vel. Atque consequuntur dolorum, eaque eum itaque iusto nisi non officiis quaerat quod. A aliquam at autem, consectetur culpa cupiditate dicta dolore eveniet excepturi expedita hic impedit in inventore ipsa ipsam ipsum iusto laboriosam laudantium minima modi nobis non odio officia officiis optio praesentium quam, quo quos reiciendis rem saepe, tenetur velit veniam vero voluptas voluptate voluptatibus? Consectetur earum eligendi et expedita nostrum odit pariatur quo soluta velit voluptas? Voluptas!
    </p>
</div>
</body>
</html>