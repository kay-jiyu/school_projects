<?php
require('connexion.inc.php');

$req= sprintf("INSERT INTO contact (id, nom, email, message) VALUES (NULL, '%s','%s','%s')", $_POST['nom'], $_POST['email'], $_POST['msg']);
                
$result= mysqli_query($conn,$req);

header("location:index.php?pg=ok");
?>