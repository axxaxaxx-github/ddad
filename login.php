<!DOCTYPE html>
<?= session_start()?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Marauders RFC: Login</title>
    <link rel="stylesheet" href="../view/CSS/main.css">
  </head>
  <body>

<!-- Banner Section Start -->
<section>
  <div class="banner">

        <h1>Marauders</h1>
    <div class="navi">
    <ul>
    <li>
        <div class="box1">
          <a href="index.php"> Home </a>
        </div>
    </li>
    <li>    
        <div class="box2">
          <a href="matches.php"> Matches </a>
        </div>
    </li>
    <li>
        <div class="box3">
          <a href="tickets.php"> Tickets </a>
        </div>
    </li>
    <li>
        <div class="box4">
          <a href="basket.php"> Basket </a>
        </div>
    </li>
    </ul>
    </div>
  </div>
</section>
<!-- Banner Section End -->

<!-- Main Section Start -->
<section>
  <div class="mainBody">

<p> 
<form action="login.php" method="GET">
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username"><br>
    <label for="password">Password:</label><br>
    <input type="text" id="password" name="password">
    <input type="submit" value="Submit">
</form> 
  
</p>

<p>
<?= $loginStatus?></br>
Username variable: <?= var_dump($_REQUEST['username'])?></br>
Password variable: <?= var_dump($_REQUEST['password'])?></br>
Users variable: <?= var_dump($users)?></br>
User variable: <?= var_dump($user)?>
</p>

  </div>
</section>

<!-- Main Section End -->
<section>
  <div class="">

  </div>
</section>

<!-- Main Section End -->

  </body>
  <script src="JS/main.js" charset="utf-8"></script>
</html>
