<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Marauders RFC: Basket</title>
    <link rel="stylesheet" href="../view/CSS/main.css">
    <script src="../view/javascript.js" charset="utf-8"></script>
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
  <div class="mainBodyBasket">
    <table>  
    <thead>
        <tr><b>
            <th>Date</th>
            <th>Match Type</th>
            <th>Opponent</th>
            <th>Price</th>
            <th>Seat Area</th>
        </tr></b>
    </thread>
    <tbody>
        <?php foreach($ticketsInBasket as $ticket): ?>
            <tr>
                <td><?= $ticket->date; ?></td>
                <td><?= $ticket->matchType; ?></td>
                <td><?= $ticket->opponent; ?></td>
                <td><?= $ticket->price; ?></td>
                <td><?= $ticket->seatArea; ?></td>
                </td>
            </tr>
            <?php endforeach?>
        </tbody>
        <a href=#> Checkout </a>
    </table>
    <p>------  Items in basket: <?= $numItems ?></p>
    <p>------  Basket Total: £<?= $total?></p>
    <p><a href="../controller/tickets.php"> Back to Tickets </a></p>
    <p><input type="button" onclick="popup()" value="Submit Order"></p>
    <form action="basket.php" method="POST">
          <button type="button" name = "clearBasket" value="clearBasket"> Clear Basket </button>
    </form>
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
</html>
