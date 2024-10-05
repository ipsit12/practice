<?php include "db_connect/connection.php";?>
<?php 
if(isset($_POST['submit_store'])){
    $store_name = $_POST['store_name'];
    $store_address = $_POST['store_address'];
    $store_employee = $_POST['store_employee'];
    $created_at = $_POST['created_at'];
   
   
    $sql_query = "INSERT INTO `store`(`store_name`, `store_address`, `store_employee`, `created_at`) VALUES 
    ('$store_name','$store_address','$store_employee','$created_at')";

    $sql_result = mysqli_query($conn,$sql_query);
    if($sql_result){
        ?>
        <script>
            alert("data inserted successfully");
            window.location.assign("./add_store.php");
        </script>
        <?php
    }
    else{
        ?>
          <script>
            alert("data failed to insert");
        </script>
        <?php
    }

}


if (isset($_POST['submit_product'])) {
    $product_name = $_POST['product_name'];
    $product_category = $_POST['product_category'];
    $product_quantity = $_POST['product_quantity'];
    $product_price = $_POST['product_price'];
    $select_store = $_POST['select_store'];
    $created_at = $_POST['created_at'];
    $supplier = $_POST['supplier'];
    $imageFiles = $_FILES["image"];
    $fileNames = array();
    $uploadDirectory = "product_image/";
    
    if (!is_dir($uploadDirectory)) {
        mkdir($uploadDirectory, 0777, true);
    }

    foreach ($imageFiles["tmp_name"] as $key => $tmpName) {
        $fileName = basename($imageFiles["name"][$key]);
        $targetPath = $uploadDirectory . $fileName;

        if (move_uploaded_file($tmpName, $targetPath)) {
            $fileNames[] = $fileName;
        } else {
            echo "Error uploading file: $fileName<br>";
            exit;
        }
    }
    
    if (!empty($fileNames)) {
        $imageList = implode(',', $fileNames);
        $sql_query = "INSERT INTO `product`(`product_name`, `product_image`, `product_category`, `product_quantity`, `product_price`, `select_store`,`supplier`, `created_at`)
         VALUES (?,?,?,?,?,?,?,?)";

        $stmt = mysqli_prepare($conn, $sql_query);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ssssssss", $product_name, $imageList, $product_category, $product_quantity, $product_price, $select_store,$supplier, $created_at);
            if (mysqli_stmt_execute($stmt)) {
                echo "Product inserted successfully";
                header('Location: add_product.php');
            } else {
                echo "Error: " . mysqli_stmt_error($stmt);
            }
            mysqli_stmt_close($stmt);
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "<script>alert('Failed to upload the image');</script>";
    }
}

if (isset($_POST['submit_sales_person'])) {
    $name = $_POST['name'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    $select_store = $_POST['select_store'];
    // $select_store = $_POST['select_store'];
    $join_at = $_POST['join_at'];

    $imageFiles = $_FILES["image"];
    $fileNames = array();
    $uploadDirectory = "person_image/";
    
    if (!is_dir($uploadDirectory)) {
        mkdir($uploadDirectory, 0777, true);
    }

    foreach ($imageFiles["tmp_name"] as $key => $tmpName) {
        $fileName = basename($imageFiles["name"][$key]);
        $targetPath = $uploadDirectory . $fileName;

        if (move_uploaded_file($tmpName, $targetPath)) {
            $fileNames[] = $fileName;
        } else {
            echo "Error uploading file: $fileName<br>";
            exit;
        }
    }
    
    if (!empty($fileNames)) {
        $imageList = implode(',', $fileNames);
        $sql_query = "INSERT INTO `sales_person`(`name`, `phone_number`, `address`, `select_store`, `join_at`, `image`)
         VALUES (?,?,?,?,?,?)";

        $stmt = mysqli_prepare($conn, $sql_query);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ssssss", $name,$phone_number, $address, $select_store, $join_at, $imageList);
            if (mysqli_stmt_execute($stmt)) {
                echo "Product inserted successfully";
                header('Location: add_sales_person.php');
            } else {
                echo "Error: " . mysqli_stmt_error($stmt);
            }
            mysqli_stmt_close($stmt);
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "<script>alert('Failed to upload the image');</script>";
    }
}


if (isset($_POST['submit_suppliers_person'])) {
    $name = $_POST['name'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    // $select_store = $_POST['select_store'];
    // $select_store = $_POST['select_store'];
    // $join_at = $_POST['join_at'];

    $imageFiles = $_FILES["image"];
    $fileNames = array();
    $uploadDirectory = "supplier_image/";
    
    if (!is_dir($uploadDirectory)) {
        mkdir($uploadDirectory, 0777, true);
    }

    foreach ($imageFiles["tmp_name"] as $key => $tmpName) {
        $fileName = basename($imageFiles["name"][$key]);
        $targetPath = $uploadDirectory . $fileName;

        if (move_uploaded_file($tmpName, $targetPath)) {
            $fileNames[] = $fileName;
        } else {
            echo "Error uploading file: $fileName<br>";
            exit;
        }
    }
    
    if (!empty($fileNames)) {
        $imageList = implode(',', $fileNames);
        $sql_query = "INSERT INTO `supplier_person`(`name`, `phone_number`, `address`, `image`)
         VALUES (?,?,?,?)";

        $stmt = mysqli_prepare($conn, $sql_query);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ssss", $name,$phone_number, $address,$imageList);
            if (mysqli_stmt_execute($stmt)) {
                echo "Product inserted successfully";
                header('Location: add_supplier.php');
            } else {
                echo "Error: " . mysqli_stmt_error($stmt);
            }
            mysqli_stmt_close($stmt);
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "<script>alert('Failed to upload the image');</script>";
    }
}
?>
