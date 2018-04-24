<!DOCTYPE html> 
<html> 
 <head> 
   <meta charset="utf-8"> 
   <title>Baza danych noworodków</title> 
   <link rel="Stylesheet" type="text/css" href="style.css" />
   <meta name="description" content="Baza danych">
   <meta name="keywords" content="baza danych">
   <meta name="author" content="Gal Anonim">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
 </head>
 <body>

  <div id="header">
    <h1>BAZA DANYCH NOWORODKÓW</h1>
  </div>

  <div id="menu">
    <ul>
      <li><a href="index.php?id=home">Home</a></li>
      <li><a href="index.php?id=A">Podpunkt A</a></li>
      <li><a href="index.php?id=B">Podpunkt B</a></li>
      <li><a href="index.php?id=C">Podpunkt C</a></li>
      <li><a href="index.php?id=D">Podpunkt D</a></li>
      <li><a href="index.php?id=E">Podpunkt E</a></li>
    </ul>
        
    </nav>
  </div>
  
  <div id="content">
    <p>
    <?php
    require('config.inc.php');
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    } 

    $id = isset($_GET['id'])?$_GET['id']:"";
    
    switch($id)
    {
        case"home":require('home.inc.html'); break;
        case"A":require('a.inc.html'); break;
        case"B":require('b.inc.html'); break;
        case"C":require('c.inc.html'); break;
        case"D":require('d.inc.html'); break;
        case"E":require('e.inc.html'); break;
        default: require('home.inc.html');
    }
    mysqli_close($conn);
    ?>
    </p>
  </div>

  <div id="footer">
        &copy; 2018 Gal Anonim
  </div>

</body>
</html>	