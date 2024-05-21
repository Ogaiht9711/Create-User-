<?php
include "./conection.php";

$name = $_GET["fullname"];
$email = $_GET["endereco"];
$number = $_GET["celular"];
$CPF = $_GET["cpf"];

$sql ="INSERT INTO tabelateste(Name, Email,CPF, Number) 
VALUES('$name','$email','$CPF','$number')";

if($conn->query($sql)===TRUE) {
    echo "Dados foram atualizados com sucesso";
} else {
    echo "Error " .$sql ."<br>" . $conn->error; 
}
$conn->close();
?>