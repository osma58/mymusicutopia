<?php

require "pages/functions.php";


$connect  = Dbconnect();
$sql3 = 'SELECT * FROM `home.php`';
$statement3= $connect->query($sql3);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="css/slide.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/up.css">
    <link rel="stylesheet" href="css/search.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>My Music Utopia</title>
    <style>
         #toggleMenu:checked ~ main {
            margin-left: 10em;
        }
        nav {
            position: fixed;

        }
        .toggleLabel::after {
            content:'\2630';
            cursor: pointer;
            color: white;
        }
        #toggleMenu:checked ~ main .toggleLabel::after {
            content: '\2715';
            cursor: pointer;
            color: white;
        }
        main {
            position: absolute;
            margin-left: 0;
            transition: margin-left .6s cubic-bezier(.17,.67,.83,.136);
        }
        body {
            overflow-x: hidden;
        }

       
    </style>
</head>
<body>

        <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
        <input type="checkbox"  id="toggleMenu">
        <nav>
            <h4>Menu</h4>
            <ul>
                <li>
                    <a href="index.php" class="active">Home</a>
                </li>
                <li>
                    <a href="pages/information.php">Info</a>
                </li>
                <li>
                    <a href="pages/artiesten.php">Artiesten</a>
                </li>
                <li>
                        <a href="pages/album.php">Album</a>
                    </li>
                    
                        <li>
                                <a href="pages/index.php">Evenementen</a>
                            </li>
                            <li>
                                    <a href="pages/contact.php">Contact</a>
                                </li>
            </ul>
        </nav>
        
    <main> 
    <form >
<input  type="text" size="30" onkeyup="showResult(this.value)">
<div class="fa fa-search" id="livesearch"></div>
</form>
    <label class="toggleLabel" for="toggleMenu"></label>
    <div class="div">
 <slider>
  <slide><p> </p></slide>
  <slide><p></p></slide>
  <slide><p></p></slide>
  <slide><p></p></slide>
 </slider>
</div>
    <br>
    <h2>Welkom</h2><bR>
    <div class=begin><p>Welkom op mijn Utopia. Als je dit leest dan heb je officieel je ticket gehaald om door mijn little Utopia te kijken.<br>
            In mijn Utopia zal je misschien bekende misschien onbekende artiesten tegen komen. Ook zul je mijn favorieten albums zien. Wat er verder op jou te wachten staat<br>
            mag je lekker zelf uit zoeken. <br>
            There you go. </p></div>
    <div class="homeImg-container">
    <?php foreach ($statement3 as $homeimg):?>
    <img class="hoi" src="<?php echo $homeimg["image"]?>" alt="" srcset=""><?php endforeach;?>
        
   
    </div>
    <div class="spotifyHome">
            <iframe src="https://open.spotify.com/embed/album/4pQRdAYAsNDD0nYWzrKwMk" class="SP"  width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
            <iframe src="https://open.spotify.com/embed/album/7fCZc7ZVM0IafcF3xFt3d9"  class="SP" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
            <iframe src="https://open.spotify.com/embed/album/5WxbWFIGeqnc0QkKQz3OH5"class="SP"  width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                <hr style="width: 90%; margin-top: 30px; margin-bottom: 0;">
    </div>
    </main>
<script src="js/slide.js"></script>
<script src="js/up.js"></script>
<script>
function showResult(str) {
  if (str.length==0) { 
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>

</body>
</html>