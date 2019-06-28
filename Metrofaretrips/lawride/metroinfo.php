<?php
include 'connection.php';
include 'dbconnection.php';
$db= new DbConnection;
session_start();

$lid=$_SESSION['lid'];

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
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;


}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
body {
  font-family: Arial;
  color: black;
}

.split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}

.left {
  left: 20;
  background-color: white;
}

.right {
  right: 0;
  background-color: white;
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

th, td {
  padding: 10px;
  text-align: left;
}
</style>


   
</head>
<body>

<div class="split left">
 <!-- <div class="centered">
  </div>-->
 
  <br>
  <br>

  <a href="../index.php">Back to home</a>
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
<br>
</div>
<br>
<br>

<img src=../lawride/img/timw.png align:"middile">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</div>

<div class="split right">

<!-- <p align="center"><button id="myBtn">Calculate Fare</button></p> -->


   
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
                       <tr><td><label>Calculate Fare</label>
  <input type="submit" name="submit" value="Calculate">
  <input type="text" name="fair" value="<?php echo $fair;?>"></td></tr>
  </div>

</div>


   </div>
   <script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>

     

</html> 
