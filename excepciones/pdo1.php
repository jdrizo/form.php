<?php
//PDO= PHP data objects
//dsn= data source name
$dsn='mysql:host=localhost;dbname=adsi';
$user='root';
$psw='';
$conexion;
try{
$conexion= new PDO($dsn,$user,$psw);
$statement= $conexion->prepare('SELECT *from aprendiz');
$statement->execute();
}
catch(PDOException $e) {
    echo $e->getMessage();
}
foreach($statement as $key) {
    echo 'Nombre: '.$key['nombre'].' - ';
    echo 'Documento: '.$key['documento'].' - ';
    echo 'Formacion: '.$key['formacion'].' - ';
    echo 'Sexo  : '.$key['sexo'].'<br>';
}
echo '<br>-----------------------------------------------------------------------<br>';
$statement->execute();
while ($key=$statement->fetch()) {
    echo $key['nombre'].'<br>';
}
$statement->execute();
echo '<br>------------------------------------------------------------------------<br>';
$resultados = $statement->fetchAll();
//var_dump($resultados);
foreach ($resultados as $key) {
    echo $key['documento'].'<br>';
}
echo '<br>------------------------------------num--------------------------------<br>';
$statement->execute();
while ($key=$statement->fetch(PDO::FETCH_NUM)) {
    echo $key[0].'<br>';
}
echo '<br>-------------------------------asociativo-------------------------------------<br>';
$statement->execute();
while ($key=$statement->fetch(PDO::FETCH_ASSOC)) {
    echo $key['nombre'].'<br>';
}
echo '<br>-------------------------------objetos--------------------------------------<br>';
// $statement->execute();
// while ($key=$statement->fetch(PDO::FETCH_OBJ)) {
//     echo $key->nombre.'<br>';
// }
$statement= $conexion->prepare("INSERT INTO aprendiz VALUES ('Simon Bolivar','556655','gobernador','masculino')");
$statement->execute();
// var_dump($statement);
// print_r($statement);
?>