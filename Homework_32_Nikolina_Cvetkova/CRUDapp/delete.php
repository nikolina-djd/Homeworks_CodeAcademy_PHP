<?php 
if(isset($_GET['id'])){
$link = mysqli_connect('127.0.0.1', 'homestead', 'secret', 'crud_app', '3306');
$delete = "DELETE FROM users WHERE id =".$_GET['id'];
mysqli_query($link, $delete);
mysqli_close($link);

header('Location: index.php');

}