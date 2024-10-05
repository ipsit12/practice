<?php include "db_connect/connection.php";
$id=$_GET['id'];
$sql="Delete from store where id='$id'";
$result=mysqli_query($conn,$sql);
if($result){
    ?>
    <script>
        alert("item deleted successfully");
        window.location.assign('add_store.php');
    </script>
    <?php
}
else{
    ?>
    <script>
        alert("Failed to delete");
        window.location.assign('add_store.php');
    </script>
    <?php

}
?>
