<?php

?>


<html>
<head>
  <meta charset="UTF-8">
  <meta name="description" content="charge">
  <meta name="keywords" content="project,energy,Charge,">
  <meta name="author" content="Groep3">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="js/.js" type="text/javascript"></script>
  <link href="CSS/evenementen.css" rel="stylesheet" type="text/css"></link>
  <script src="JS/evenementen.js" type="text/javascript"></script>


</head>
<body>
    <header>
    <section class="groot">
      <nav id="navbar">
      <div class="topnav">
        <a href="home.php" href="#home">Home</a>
        <a href="Producten.php">Producten</a>
        <a class="active">Evenementen</a>
        <img class="logo" src="imgevEnementen/logo.png" height="5%"alt="">
        <a href="FAQ.php">FAQ</a>
        <a href="contact.php">Contact</a>
    </div>
    </section>
    <section class="telefoon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <div class="topnav">
        <a href="Evenementen.php" class="active">Evenementen</a>
        <div id="myLinks">
        <a href="Home.php">Home</a>
            <a href="Producten.php">Producten</a>
            <a href="Contact.php">Contact</a>
            <a href="FAQ.php">FAQ</a>
        </div>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
        </div>
    </section>
    </header>
    <main>
      <h1 class="pagina">Evenementen</h1>
      <p class="Text1">Ontdek wereldwijde Charge energy events.<br>Verken evenementen kalender om de volgende evenementen te zien:<br>bike, motorsport, surfing, winter sport, music, gaming en veel meer.</P>
      <p class="empty">Alsje<br> dit leest<br>dan ben je dan ben je een banaan</P>
    <section class="Datum">
    <h2>Evenementen<br>Kalender</h2>
    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "energy";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connection_error);
    }


    $sql = "SELECT * FROM evenementen";
    if($result = $conn->query($sql)) {
        while($row = $result->fetch_row()) {
            echo $row[0]." ".$row[1]." ".$row[2]."<br/>";
        }
        $result->close();
    }

    $conn->close();

    ?>
    </section>
    </main>
    <button></button>
    <div id="test" style="background-size: 100% 100%;"></div>
    <footer>
    </footer>
</body>
</html>