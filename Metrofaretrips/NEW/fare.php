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



<html>
<head>
</head>



<body>
<br>
<br>
<br>
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
  <input type="text" name="fare" value="<?php echo $fair;?>"></td></tr>
	</table>				  
</body>
</html>
