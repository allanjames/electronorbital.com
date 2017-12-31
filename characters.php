<html>
<title>Language Sampler</title>
<head>
<style type="text/css">
body { font-family: "Courier"; font-size: 18px;}
h2 { font-size: 22px;}
th { font-size: 34px;}
table{ background-color: gray;}
span { background-color: gray; font-size: 68px; text-decoration: underline;font-weight:bold;}

.formatstubbornlist {
   font-size: 26px; font-weight:bold; font-family: "Courier"; }
.setBorder{ border-style:solid;background-color: white;
border-color:black;
border-width:8px; font-size: 86px; text-align: center; }​
</style>
</head>
<body>
<span>
Sample Asian Characters
</span>
<p>
<form action="characters.php" method="post">
<table cellpadding=15>
<tr>
<th>
English<br> Word<br>
</th>
<th>
Chinese<br> Equivalent<br>
</th>
<th>
Korean<br> Equivalent<br>
</th>
<th>
Japanese<br>Equivalent<br>
</th>
</tr>
<tr valign="top">
<td>
<table border=1>
<tr>
<td>
<select name="word" size=12 class="formatstubbornlist">
<option value="person">Person</option>
<option value="land">Land</option>
<option value="home">Home</option>
<option value="city">City</option>
<option value="water">Water</option>
<option value="gold">Gold</option>
<option value="dragon">Dragon</option>
<option value="fortune">Fortune</option>
<option value="occupation">Occupation</option>
<option value="economy">Economy</option>
<option value="military">Military</option>
<option value="war">War</option>
</select>
</td>
</tr>
</table>
</td>
<td>
<div class="setBorder">
<?php 
if (isset($_POST['word'])){
$char=$_POST['word']; 
switch ($char)
{
case "person":
  echo "人";
  break;
case "land":
  echo "土地";
  break;
case "home":
  echo "家";
  break;
case "city":
  echo "城市";
  break;
case "water":
  echo "水";
  break;
case "gold":
  echo "金";
  break;
case "dragon":
  echo "龍";
  break;
case "fortune":
  echo "運氣";
  break;
case "occupation":
  echo "佔用";
  break;
case "economy":
  echo "經濟";
  break;
case "military":
  echo "軍事";
  break;
case "war":
  echo "是";
  break;  
default:
  echo "no selection made";
}}
else{
echo "<h2>"."no selection"."</h2>";
}
?>
</div>
</td>
<td>
<div class="setBorder">
<?php
if (isset($_POST['word'])){
$char=$_POST['word'];
switch ($char)
{
case "person":
  echo "사람";
  break;
case "land":
  echo "토지";
  break;
case "home":
  echo "집";
  break;
case "city":
  echo "도시";
  break;
case "water":
  echo "물";
  break;
case "gold":
  echo "금";
  break;
case "dragon":
  echo "용";
  break;
case "fortune":
  echo "행운";
  break;
case "occupation":
  echo "점령";
  break;
case "economy":
  echo "경제";
  break;
case "military":
  echo "군";
  break;
case "war":
  echo "전쟁";
  break;    
default:
  echo "no selection made";
}
}
else{
echo "<h2>"."no selection"."</h2>";
}
?>
</div>
</td>
<td>
<div class="setBorder">
<?php
if (isset($_POST['word'])){
$char=$_POST['word'];
switch ($char)
{
case "person":
  echo "人";
  break;
case "land":
  echo "土地";
  break;
case "home":
  echo "ホーム";
  break;
case "city":
  echo "都市";
  break;
case "water":
  echo "水";
  break;
case "gold":
  echo "金";
  break;
case "dragon":
  echo "ドラゴン";
  break;
case "fortune":
  echo "運勢";
  break;
case "occupation":
  echo "職業";
  break;
case "economy":
  echo "龍";
  break;
case "military":
  echo "軍の";
  break;
case "war":
  echo "だった";
  break;   
default:
  echo "no selection made";
}
}
else{
echo "<h2>"."no selection"."</h2>";
}
?>
</div>
</td>
</tr>
<tr>
<td>
<p>
<input type="submit" value="Translate">
</td>
</table>
</form>
</body>
</html>
