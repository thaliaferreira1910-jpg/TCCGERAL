<?php
include "../conexao.php";
$lan_id = $_GET['id'];

$sql="DELETE FROM lanches WHERE
lan_id=$lan_id";
$conn->query($sql);
header("Location:formLanches.php");
?>
