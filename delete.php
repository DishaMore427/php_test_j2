<?php
session_start();
include 'db.php';
if (isset($_GET['id'])) {
    # code...
    $id=$_GET['id'];
    $sql=$conn->prepare('delete from product where id=?');
    $sql->bind_param('i',$id);
    if ($sql->execute()) {
        # code...
        header("Location:home.php");
    }
    
}
?>