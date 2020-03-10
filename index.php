<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Marauders RFC: Home</title>
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
  <div class="mainBodyHome">

    <div class="upcomingMatchesHome">
      <div class="firstMatch">
        <h2>Match Ref: <?= $firstMatch->ticketid?></h2>
        <h2>Match type: <?= $firstMatch->matchType?></h2>
        <h2>Date: <?= $firstMatch->date?></h2>
        <h2>Opponent: <?= $firstMatch->opponent?></h2>
      </div>

      <div class="secondMatch">
        <h2>Match Ref: <?= $secondMatch->ticketid?></h2>
        <h2>Match type: <?= $secondMatch->matchType?></h2>
        <h2>Date: <?= $secondMatch->date?></h2>
        <h2>Opponent: <?= $secondMatch->opponent?></h2>
      </div>
    </div>


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
