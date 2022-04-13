<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);


        $servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "administrativa";

$con = mysqli_connect($servername, $username, $password, $dbname);
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");

$sql="SELECT id,cedula,codigo,correo,descripcion,departamento,municipio  FROM proceso WHERE cedula = '".$q."'";

$result = mysqli_query($con,$sql);


while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['codigo'] . "</td>";


                    
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>

