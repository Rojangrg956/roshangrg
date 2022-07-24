<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>C programming</title>
  
  <!-- HTML -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script> <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

  <!-- Custom Styles -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark"> <div class="container-fluid"> <a class="navbar-brand" href="#"><i>web app</i></a> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button> <div class="collapse navbar-collapse" id="navbarSupportedContent"> <ul class="navbar-nav ms-auto mb-2 mb-lg-0"> <li class="nav-item"> <a class="nav-link active" aria-current="page" href="#a">Airthmetic</a> </li> <li class="nav-item"> <a class="nav-link" href="#b">Even prime</a> </li>
<li class="nav-item"> <a class="nav-link" href="#c">Reverse</a> </li>
<li class="nav-item"> <a class="nav-link" href="#d">Ascending</a> </li>
<li class="nav-item"> <a class="nav-link" href="#e">Rashi</a> </li>
<li class="nav-item"> <a class="nav-link" href="#f">Marriage</a> </li>
<li class="nav-item"> <a class="nav-link" href="#g">Lucky Country</a> </li>
</div> </div> </nav>
<div id="a" align="center" class="arithmetic">
    <h2 align="center">ARITHMETIC</h2>
    <form method="POST">
    <table>
      <thead>
        <td>First value</td>
        <td>Second Value</td>
      </thead>
      <tbody>
        <td><input name="a" type="number" required value="<?php
        if(isset($_POST["a"])){print $_POST["a"];}?>">
        
        </td>
        <td>
        <input name="b" type="number" required value="<?php
        if(isset($_POST["b"])){print $_POST["b"];}?>"></td>
      </tbody>
    </table>
    <br>
    <div class="items">
      <input type="submit" name="add" value="Add">
      <input type="submit" name="sub" value="Sub">
      <input type="submit" name="mul" value="Mul">
      <input type="submit" name="div" value="Div">
    </div>
    <br>
    <br>
    </form>
    <?php
  
  if(isset($_POST["add"])){
  $x=$_POST["a"];
  $y=$_POST["b"];
  $z=$x+$y;
  echo '<input class="n1" value="'.$z.'" readonly>';
  }
  if(isset($_POST["sub"])){
  $x=$_POST["a"];
  $y=$_POST["b"];
  $z=$x-$y;
  echo '<input class="n1" value="'.$z.'" readonly>';
  }
if(isset($_POST["mul"])){
  $x=$_POST["a"];
  $y=$_POST["b"];
  $z=$x*$y;
  echo '<input class="n1" value="'.$z.'" readonly>';
  }
  if(isset($_POST["div"])){
  $x=$_POST["a"];
  $y=$_POST["b"];
  $z=$x/$y;
  echo '<input class="n1" value="'.$z.'" readonly>';
  }
  
?>
</div>
<div id="b" class="prime">
  <form id="" method="POST">
  <h2>Even Prime</h2>
  <h2>*****Enter A Number******</h2>
  <br>
  <input type="number" id="even" name="c" required
   value="<?php if(isset($_POST["c"])){print $_POST["c"];}?>">
  <br>
  <div class="semi">
    <br>
    <input type="submit" name="ceven" value="Check for Even"><input type="submit" name="cprime" value="Check for Prime"><br>
  <br><br>
    <?php
    if (isset($_POST["ceven"])) {
      $a=$_POST["c"];
      if ($a%2==0) {
        echo '<input class="n1" value="Even" readonly>';
      }
      else {
       echo '<input class="n1" value="Odd" readonly>';
      }
    }
    if (isset($_POST["cprime"])) {
      $a=$_POST["c"];
      $c=0;
      for ($i= 2; $i <=$a/2; $i++) {
        if ($a/$i==0) {
          $c=1;
          break;
        }
      }
      if ($c==0) {
      echo '<input class="n1" value="PRIME" readonly>';
      }
      else {
        echo '<input class="n1" value="COMPOSITE" readonly>';
      }
    }
    ?>
  </div>
  </form>
</div>
<div id="c" class="reverse">
  <form id="" method="POST">
    <h2 align="center">REVERSE YOUR <br>NAME</h2>
    <h3>Enter Name</h3>
 <label style="text-align:center;"><input type="text" name="d" required></label>
  <br>
    <div class="creverse">
      <br>
     <input type="submit" name="rev" value="change into reverse" value="<?php
        if(isset($_POST["rev"])){print $_POST["rev"];}?>">
    </div>
  </form>
  <?php
  if (isset($_POST["rev"])) {
    $m=$_POST["d"];
      $m=strrev($m);
      echo '<input class="n1" value="'.$m.'" readonly>';
  }
  ?>
</div>

<div id="d"class="array">
  <h2>Sorts in <br>Ascending</h2>
  <h3>Sorts N Number from array</h3>
  <h3>Select the value of n</h3>
  <form id="" method="POST">
  <select name="n">
      <option value="">choose</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
    </optgroup>
  </select>
  <input type="submit" name="sort" value="Enter">
  </form>
  <?php 
  if (isset($_POST["sort"])) {
    $n=$_POST["n"];
    print '<form action="" method="POST">';
    for ($i = 0; $i < $n; $i++) {
    print '<input type="number" class="n2" name="'.$i.'" >';
    }
    print '<input type="hidden" value="'.$n.'" name="n">';
    print '<input name="yy" type="submit" value="SORT ???" class="btn-sort">';
    
    print '</form>';
  }
  if (isset($_POST["yy"])) {
    $n=$_POST["n"];
    $num=array();
    for ($i = 0; $i < $n; $i++) {
       $num[]=$_POST["$i"];
    }
    echo '<br>The number before sorting are<br>';
    for ($i = 0; $i < $n; $i++) {
     echo '<input class="n2" type="number" value="'.$num[$i].'"disabled >';
    }
    $t=0;
    for ($i = 0; $i < $n; $i++) {
       for ($k=$i+1; $k < $n; $k++) {
          if ($num[$i]>$num[$k]) {
            $t=$num[$i];
            $num[$i]=$num[$k];
            $num[$k]=$t;
          }
       }
    }
      echo '<br>The number after sorting are<br>';
      for ($i = 0; $i < $n; $i++) {
        echo '<input value="'.$num[$i].'" class="n2" disabled>';
      }
  }
  ?>
</div>
<div id="e" class="rashi">
  <h2>Rashi</h2>
  <h3>According To English Calender</h3>
  <form id="" method="POST">
    <select name="m"> 				 	
    <option value="">Month</option> 				 	
    <option value="Jan">Jan</option> 				 	
    <option value="Feb">Feb</option> 				 
    <option value="Mar">Mar</option> 				 
    <option value="Apr">Apr</option> 		
    <option value="May">May</option> 				
    <option value="Jun">Jun</option> 				 
    <option value="Jul">Jul</option> 				
    <option value="Aug">Aug</option> 			
    <option value="Sept">Sept</option> 				
    <option value="Oct">Oct</option> 				 	
    <option value="Nov">Nov</option> 				 	
    <option value="Dec">Dec</option> 				
    </select>
    <label style="color:white;">Day</label>
    <input type="number" name="d" required>
  <br>
  <br>
  <input type="submit" name="ro" value="Find Your Rashi">
  </form>
  <?php
  if (isset($_POST["ro"])) {
  $m=$_POST["m"];
  $d=$_POST["d"];
  if(($m=="Mar" && $d>=21 && $d<=31)||($m=="Apr" && $d>=1 && $d<=19))
  { 
  print '<input type="text" class="n3" value="ARIES (Mesh, मेष राशी)"readonly>';
  }
 elseif(($m=="Apr" && $d>=20 && $d<=30)||($m=="May" && $d>=1 && $d<=20)){ print '<input type="text" class="n3" value="TAURUS (Brish, वृष राशि )" readonly>';} 
 elseif(($m=="May" && $d>=21 && $d<=31)||($m=="Jun" && $d>=1 && $d<=21)){ print '<input type="text" class="n3"value="GEMINI (Mithun, मिथुन राश)" readonly>';}
 elseif(($m=="Jun" && $d>=22 && $d<=30)||($m=="Jul" && $d>=1 && $d<=22)){ print '<input type="text" class="n3" value="CANCER (Karkat, क्यान्सर राशी )"readonly >';} 
 elseif(($m=="Jul" && $d>=23 && $d<=30) || ($m=="Aug" && $d>=1 && $d<=22)){ print '<input type="text" class="n3" value="LEO (siha, सिंह राशी )"readonly >';}
elseif(($m=="Aug" && $d>=23 && $d<=31) || ($m=="Sept" && $d>=1 && $d<=22)){ print '<input type="text" class="n3"value="VIRGO (Kanya, कन्या राशि )"readonly >';
}
elseif(($m=="Sept" && $d>=23 && $d<=30)||($m=="Oct" && $d>=1 && $d<=22)){ print '<input type="text" class="n3"value="LIBRA (Tula, तुला राशि )"readonly>';
}
elseif(($m=="Oct" && $d>=23 && $d<=31)||($m=="Nov" && $d>=1 && $d<=21)){ print '<input type="text" class="n3"value="SCORPIO (Brishik, वृश्चिक राशी )"readonly>';

} elseif(($m=="Nov" && $d>=22 && $d<=31) || ($m=="Dec" && $d>=1 && $d<=21)){ print '<input type="text" class="n3"value="SAGITTARIUS (Dhanu, धनु राशि )" readonly>';

} elseif(($m=="Dec" && $d>=22 && $d<=31)||($m=="Jan" && $d>=1 && $d<=19)){ print '<input type="text" class="n3"value="CAPRICORN (Makar, मकर राशि )"readonly >';

} elseif(($m=="Jan" && $d>=20 && $d<=31)||($m=="Feb" && $d>=1 && $d<=18)){ print '<input type="text" class="n3"value="AQUARIUS (kumba, कुम्भ राशी )"readonly >';
}
elseif(($m=="Feb" && $d>=19 && $d<=29)||($m=="Mar" && $d>=1 && $d<=20)){ print '<input type="text" class="n3" value="PISCES (min,मीन राशी )" readonly>';
}
  }
  ?>
</div>
<div id="f" class="marriage">
  <h2>Marriage</h2>
  <br>
  <br>
  <form id="" method="POST">
  <h3>Enter your age</h3>
  <input type="number" name="h" required value="<?php
        if(isset($_POST["mm"])){print $_POST["mm"];}?>">
  <br>
  <br>
  <br>
  <input type="submit" name="p" value="Find">
  </form>
  <?php
    if (isset($_POST["p"])) {
      $age=$_POST["h"];
      $s=$age+5;
      $e=$age+10;
      $uu=rand($s,$e);
      echo '<br><br>Your marrage age is<br>';
      echo '<input class="n1" value="'.$uu.'" readonly>';
    }
    ?>
</div>
<div id="g" class="lucky">
  <h2>Lucy country</h2>
  <h3>Enter Your Rashi name or name</h3>
  <form id="" method="POST">
    <input type="text" name="aa" placeholder="Enter Name"required value="<?php
        if(isset($_POST["aa"])){print $_POST["aa"];}?>">
    <br>
    <br>
    <input type="submit" name="cc" value="Lucky country">  </form>
  <?php
  
  if (isset($_POST["cc"])) {
    $n=$_POST["aa"];
    $conn=array('Canada','Usa','Japan','Uk','Nepal','China','Indai','Australia','Brazil');
    $r=rand(0,8);
    echo '<input class="n1" value="'.$conn[$r].'" readonly>';
  }
  
  ?>
</div>
<div id="scrolltop">
    <i class="fa-solid fa-arrow-up"></i>
</div>
<script>
const scrolltop = document.querySelector("#scrolltop");

scrolltop.addEventListener("click", () => {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
});
 </script>
</body>
</html>
