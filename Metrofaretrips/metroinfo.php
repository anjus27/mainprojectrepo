<?php
include 'connection.php';
include 'dbconnection.php';
$db= new DbConnection;
session_start();

//$lid=$_SESSION['lid'];

if(isset($_POST['submit'])){

$source=$_POST['source'];
$destination=$_POST['destination'];

 $f="select * from tbl_fair where source='$source' and destination='$destination'";

$result = mysqli_query($con,$f) ;
while($res=mysqli_fetch_array($result)){
$fair=$res['fair'];
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <style>
  .body{
    body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-image:url("metrofaretrips/download.jpg");
  background-repeat: no-repeat;
  background-size: cover;
}
 
  }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <!-- <a class="navbar-brand" href="#">WebSiteName</a> -->
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <!-- <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li> -->
    </ul>
  </div>
</nav>
  
<div class="container">
 <h1>Kochi Metro Information</h1>

 <form action="#" method="POST">


 <table align="center">
<tr>
<tr><td ><label>Select Source</label>
                 <select  name="source" id="source">
                     <option value="Aluva "> Aluva </option>
                     <option value="Pulinchodu"> Pulinchodu </option>
                     <option value="Companypady"> Companypady</option>
                     <option value="Ambattukavu "> Ambattukavu </option>
                     <option value=" Muttom"> Muttom </option>
                     <option value="Kalamassery"> Kalamassery </option>
                     <option value=" Pathadipalam"> Pathadipalam </option>
                     <option value="Edapally"> Edapally </option>
                     <option value="Changampuzha Park"> Changampuzha Park </option>
                     <option value=" Palarivattom "> Palarivattom  </option>
                     <option value="JLN Stadium "> JLN Stadium </option>
                     <option value="Kaloor"> Kaloor </option>
                     <option value="Lissie"> Lissie </option>
                     <option value="M.G Road"> M.G Road </option>
                     <option value="Maharaja’s College"> Maharaja’s College  </option>
                     <option value="Ernakulam south"> Ernakulam south </option>
                     <option value="Kadavanthra "> Kadavanthra  </option>
                     <option value=" Elamkulam"> Elamkulam </option>
                     <option value="Vytila "> Vytila </option>
                     <option value="Thaikoodam"> Thaikoodam </option>
                       </select></td></tr>


        <tr><td> <label>Select Destination</label>
                 <select  name="destination" id="destination" >
                     <option value="Aluva"> Aluva </option>
                     <option value="Pulinchodu"> Pulinchodu </option>
                     <option value="Companypady"> Companypady</option>
                     <option value="Ambattukavu "> Ambattukavu </option>
                     <option value="Muttom"> Muttom </option>
                     <option value="Kalamassery"> Kalamassery </option>
                     <option value="Pathadipalam "> Pathadipalam </option>
                     <option value="Edapally "> Edapally </option>
                     <option value="Changampuzha Park"> Changampuzha Park </option>
                     <option value="Palarivattom"> Palarivattom  </option>
                     <option value="JLN Stadium"> JLN Stadium </option>
                     <option value="Kaloor"> Kaloor </option>
                     <option value="Lissie"> Lissie </option>
                     <option value="M.G Road"> M.G Road </option>
                     <option value="Maharaja’s College"> Maharaja’s College  </option>
                     <option value="Ernakulam south"> Ernakulam south </option>
                     <option value="Kadavanthra "> Kadavanthra  </option>
                     <option value="Elamkulam"> Elamkulam </option>
                     <option value="Vytila "> Vytila </option>
                     <option value="Thaikoodam"> Thaikoodam </option>
                       </select></td></tr>
                       <tr><td><label>Calculate Fare (in Rupees)</label>
  <input type="submit" name="submit" value="Calculate" >
  <input type="text" name="fair" value="<?php echo $fair;?>"></td></tr>
  </tr>
  </table>
 <h3> Metro Stations</h3>
  
<ol>
  <li>Aluva</li>
  <li>Pulinchodu</li>
  <li>Companypady</li>
  <li>Ambattukavu</li>
  <li>Muttom</li>
  <li>Kalamassery</li>
  <li>Cochin University</li>
  <li>Pathadipalam</li>
  <li>Edapally</li>
  <li>Changampuzha Park</li>
  <li>Palarivattom</li>
  <li>JLN Stadium</li>
  <li>Kaloor</li>
  <li>Lissie</li>
  <li>M.G Road</li>
  <li>Maharaja’s College</li>
  <li>Ernakulam south</li>
  <li>Kadavanthra</li>
  <li>Elamkulam</li>
  <li>Vytila</li>
  <li>Thaikoodam</li>
  <li>Petta</li>
</ol>
<div>
<img src=timw.png align:"middile">
    <br>
    <h3>Themed Stations</h3>
    <br>
<table style="width:100%">
  <tr>
   
  <tr>
    <td width="50">Aluva</td>
    <td>Abundant bounty of nature in kerala with a special focus on western ghats, Periyar & other rivers</td>
    <td>
There are 44 rivers in Kerala, all but three originating in the Western Ghats. 41 of them flow westward and 3 eastward. The rivers of Kerala are small, in terms of length, breadth and water discharge. The rivers flow faster, owing to the hilly terrain and the short distance between the Western Ghats and the sea.Major rivers: Periyar, Pamba, Bharathapuzha, Chaliyar, Chalakudi, Kadalundi.</td>
  </tr>
  <tr>
    <td>Pulinchodu</td>
    <td>Western Ghats – Ecological region, flora & fauna</td>
    <td>Ecoregions – South Western Ghats moist deciduous forests
Ecoregions – South Western Ghats montane rain forests
The sheer number of species of plants (exceeding 4000) in the Western Ghats of Kerala, of which nearly 1500 i.e. more than 30% are endemic to this region.</td>
  </tr>
  <tr>
    <td>Companypadi</td>
    <td>Western Ghats – Snails, slugs & snakes</td>
    <td>Wayanad, Silent valley, Anaimalai hills, Cardamom hills, Agastya hills, Nilgiri Hills</td>
  </tr>

  <tr>
    <td>Ambattukavu</td>
    <td>Western Ghats – Hills & peaks</td>
    <td>Ariophantidae,
Indrella ampulla,
Naninia banggaiensis
King Cobra, Malabar pit viper, Banded kukri, Green vine snake, Montane trinket snake, Travancore wolf snake, Khaire’s black shield tail Indian rock python, Indian cobra, Indian krait)</td>
  </tr>
</table>


</div>

</body>
</html>
