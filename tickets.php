
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Marauders RFC: Tickets </title>
    
    <link rel="stylesheet" href="../view/CSS/main.css">
    <script src="../view/javascript.js"></script>
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
  <div class="mainBodyTickets">
  <div class="radioButtons"></div>
    <!--- Search Box -->
    <input type="text" id="textInput" onkeyup="filterTickets()" placeholder="Search" class="searchBox"></br>
    <!-- Radio Buttons -->
    <input type="radio" id="date" name="search" value="Search by Date">
    <label for ="date"> Search by Date </label></br>
    <input type="radio" id="matchType" name="search" value="Search by Match Type">
    <label for ="matchType"> Search by Match Type </label></br>
    <input type="radio" id="opponent" name="search" value="Search by Opponent">
    <label for ="opponent"> Search by Opponent </label>
  </div>
  <table id="tickets">
    <thead>
        <tr><b>
            <th class="first">Date</th>
            <th>Match Type</th>
            <th>Opponent</th>
            <th>Price</th>
            <th>Seat Area</th>
        </tr></b>
    </thread>
    <tbody>
        <?php foreach($tickets as $ticket): ?>
            <tr>
                <td><?= $ticket->date; ?></td>
                <td><?= $ticket->matchType; ?></td>
                <td><?= $ticket->opponent; ?></td>
                <td><?= $ticket->price; ?></td>
                <td><?= $ticket->seatArea; ?></td>
                <td>
                  <form action="tickets.php" method="POST">
                    <input type="hidden" value=<?= $ticket->ticketid ?> name="addTicket">
                    <input type="submit" name="addTicketButton" value="Add Ticket to Basket">
                  </form>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <p>------  Items in basket: <?= sizeof($_SESSION['basket']) ?></p>
    <a href="../controller/basket.php">View Basket</a></p>
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
