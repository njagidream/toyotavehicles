<?php
//developed on 30th May 2022 By Arnold Njagi

$Toyota['Toyota Corolla']="https://upload.wikimedia.org/wikipedia/commons/9/9e/2014_Toyota_Corolla_%28ZRE172R%29_Ascent_sedan_%282014-04-11%29.jpg"; 
$Toyota['Toyota Allion']="https://upload.wikimedia.org/wikipedia/commons/6/62/2017_Toyota_Allion_rear.jpg";
$Toyota['Toyota Axio']="https://upload.wikimedia.org/wikipedia/commons/8/87/Toyota_Corolla_Axio_%28E160%29_front_%28cropped%29.JPG";
$Toyota['Toyota Belta']="https://upload.wikimedia.org/wikipedia/commons/5/5f/2008_Toyota_Belta_01.jpg";
$Toyota['Toyota Mark X']="https://upload.wikimedia.org/wikipedia/commons/1/1d/Toyota_MARK_X_250S_%28DBA-GRX130-AETSH%29_%28cropped%29.jpg";
$Toyota['Toyota Vitz']="https://upload.wikimedia.org/wikipedia/commons/a/a8/2008_Toyota_Vitz_01.jpg";
$Toyota['Toyota Passo']="https://upload.wikimedia.org/wikipedia/commons/b/b3/Toyota_Passo_103.JPG";
$Toyota['Toyota Porte']="https://upload.wikimedia.org/wikipedia/commons/9/91/Toyota_PORTE_1.5G_%28NP14%29_front.JPG";
$Toyota['Toyota Rumion']="https://upload.wikimedia.org/wikipedia/commons/8/83/2007_Toyota_Corolla-Rumion_01.jpg";
$Toyota['Toyota Sienta']="https://upload.wikimedia.org/wikipedia/commons/5/51/2006_Toyota_Sienta_03.jpg";
$Toyota['Toyota Wish']="https://upload.wikimedia.org/wikipedia/commons/8/8f/2009_Toyota_Wish_01.jpg";
$Toyota['Toyota Fielder']="https://upload.wikimedia.org/wikipedia/commons/f/f4/Toyota_Corolla_Fielder_in_Tomsk.JPG";
$Toyota['Toyota ISIS']="https://upload.wikimedia.org/wikipedia/commons/5/54/2007_Toyota_Isis_01.jpg";
$Toyota['Toyota Auris']="https://upload.wikimedia.org/wikipedia/commons/d/d9/Toyota_Auris_1.6_Life%2B_%28Facelift%29_%E2%80%93_Frontansicht%2C_21._Juni_2011%2C_Ratingen.jpg";
$Toyota['Toyota Voxy/Noah']="https://upload.wikimedia.org/wikipedia/commons/4/49/2nd_generation_Toyota_Noah.jpg";
$Toyota['Toyota Alphard/Vellfire']="https://upload.wikimedia.org/wikipedia/commons/c/c0/Toyota_Alphard_in_Angat%2C_Bulacan_%28cropped%29.JPG";
$Toyota['Toyota LandCruiser Prado TX/GX/VX']="https://upload.wikimedia.org/wikipedia/commons/5/5a/2013_Toyota_Land_Cruiser_Prado_%28KDJ150R_MY13%29_Altitude_5-door_wagon_%282015-07-09%29_01.jpg";
$Toyota['Toyota LandCruiser Prado VX V8']="https://s1.cdn.autoevolution.com/images/gallery/TOYOTA-Land-Cruiser-200---V8-6002_29.jpg";
//https://t1-cms-1.images.toyota-europe.com/toyotaone/euen/toyota-Land-Cruiser-v8-2015-exterior-tme-008-a-full_tcm-11-502773.jpg
$Toyota['Toyota Fortuner']="https://upload.wikimedia.org/wikipedia/commons/6/66/2015_Toyota_Fortuner_%28New_Zealand%29.jpg";
$Toyota['Toyota Hilux']="https://upload.wikimedia.org/wikipedia/commons/a/a6/2020_Toyota_Hilux_Revo_Single-Cab_2.8_Entry.jpg";
$Toyota['Toyota Landcruiser (J70)']="https://upload.wikimedia.org/wikipedia/commons/4/46/2008_Toyota_Land_Cruiser_%28VDJ78R%29_WorkMate_Troop_Carrier_3-door_wagon_%282009-08-21%29.jpg";
$Toyota['Toyota RAV 4']="https://upload.wikimedia.org/wikipedia/commons/e/e6/Toyota_RAV4_III_2._Facelift_front_20100612.jpg";
$Toyota['Toyota Harrier']="https://upload.wikimedia.org/wikipedia/commons/9/9e/2015_Toyota_Harrier_Premium_2WD_2.0_DBA-ZSU60W_%28190316%29.jpg";
$Toyota['Toyota Vanguard']="https://upload.wikimedia.org/wikipedia/commons/6/60/2007_Toyota_Vanguard_01.jpg";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Toyota Vehicles</title>
  <meta charset="UTF-8">
  <meta name="description" content="All Toyota Cars and Photos">
  <meta name="keywords" content="Toyota, Cars, Vehicles">
  <meta name="author" content="Arnold Njagi">
  <meta name="date" content="30th May 2022">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="//upload.wikimedia.org"/>
  <link rel="shortcut icon" href="toyofun1.ico"/>
  <style rel="text/css">
  h1,p{color:purple; font-family:Georgia,serif; font-size:20px;}
  p{padding:6px; letter-spacing:1.1px;}
  h1{font-size:28px;}
  h2{color: red; font-size:24px;}
  h1,h2{font-family:"Trebuchet MS",sans-serif;}
  #content{padding:12px;margin:0 auto;background-color: #e5fbfa;}
  
  </style>
</head>
<body>
<div id='content'>
<h1>Toyota Vehicles</h1>
<p> Kenya has over 2 million cars on its roads. Many have been bought in the last 10 years starting 2010.</br>
Toyota cars outnumber all other types of cars on the roads. It easy to see why.<br/>
Toyota has invested in variety of cars which are reliable and loved by Kenyans across 
the board. <br/>Am yet to come across a Kenyan with something negative to say about Toyota cars.<br/>
Clearly they have perfected their art and technology and ensure they do not compromise on quality.
<br/><br/>Enjoy the Summary of the most common brands below.</p>
<?php
  $count=1;
  foreach($Toyota as $name => $photo_url) {
  echo "<h2>$count &nbsp;$name</h2>";
  echo "<img src='".$photo_url."' height='300' width='500' alt='car'><br/>";
$count++;}

/*
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);

for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}
*/
?>
</div></body></html>
