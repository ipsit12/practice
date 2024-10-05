<?php include "db_connect/connection.php";
$id=$_GET['id'];
$sql="Delete from sales_person where id='$id'";
$result=mysqli_query($conn,$sql);
if($result){
    ?>
    <script>
        alert("item deleted successfully");
        window.location.assign('add_sales_person.php');
    </script>
    <?php
}
else{
    ?>
    <script>
        alert("Failed to delete");
        window.location.assign('add_sales_person.php');
    </script>
    <?php

}
?>
