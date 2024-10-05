<?php include "db_connect/connection.php"; ?>
<?php include "include/header.php"; ?>
<?php include "include/sidebar.php"; ?>

<!--start main wrapper-->
<main class="main-wrapper">
    <div class="main-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Components</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Validations</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary">Settings</button>
                    <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"> 
                        <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">
                        <a class="dropdown-item" href="javascript:;">Action</a>
                        <a class="dropdown-item" href="javascript:;">Another action</a>
                        <a class="dropdown-item" href="javascript:;">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:;">Separated link</a>
                    </div>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->

        <h6 class="mb-0 text-uppercase">STORE DETAILS</h6>
        <hr>

        <div class="row">
            <div class="col-xl-6 mx-auto">
                <div class="card">
                    <div class="card-header px-4 py-3">
                        <h5 class="mb-0">EDIT PRODUCT</h5>
                    </div>
                    <div class="card-body p-4">
                        <?php
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            $select = "SELECT * FROM product WHERE id = ?";
                            $stmt = mysqli_prepare($conn, $select);
                            mysqli_stmt_bind_param($stmt, 'i', $id);
                            mysqli_stmt_execute($stmt);
                            $result = mysqli_stmt_get_result($stmt);

                            if ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <form class="row g-3 needs-validation" method="post" enctype="multipart/form-data" novalidate>
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <div class="col-md-12">
                                        <label for="bsValidation3" class="form-label">PRODUCT_NAME</label>
                                        <input type="text" class="form-control" id="bsValidation3" placeholder="PRODUCT_NAME" value="<?php echo $row['product_name']; ?>" name="product_name" required>
                                        <div class="invalid-feedback">Please choose a PRODUCT_NAME.</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="bsValidation5" class="form-label">PRODUCT_IMAGE</label>
                                        <input type="file" class="form-control" id="bsValidation5" name="image[]" multiple>
                                        <div class="invalid-feedback">Please provide a PRODUCT_IMAGE.</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="bsValidation4" class="form-label">PRODUCT_CATEGORY</label>
                                        <input type="text" class="form-control" id="bsValidation4" placeholder="PRODUCT_CATEGORY" value="<?php echo $row['product_category']; ?>" name="product_category" required>
                                        <div class="invalid-feedback">Please provide a valid PRODUCT_CATEGORY.</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="bsValidation4" class="form-label">PRODUCT_QUANTITY</label>
                                        <input type="text" class="form-control" id="bsValidation4" placeholder="PRODUCT_QUANTITY" value="<?php echo $row['product_quantity']; ?>" name="product_quantity" required>
                                        <div class="invalid-feedback">Please provide a valid PRODUCT_QUANTITY.</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="bsValidation5" class="form-label">PRODUCT_PRICE</label>
                                        <input type="text" class="form-control" id="bsValidation5" placeholder="PRODUCT_PRICE" value="<?php echo $row['product_price']; ?>" name="product_price" required>
                                        <div class="invalid-feedback">Please provide a PRODUCT_PRICE.</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="bsValidation9" class="form-label">SELECT_STORE</label>
                                        <input type="text" class="form-control" id="bsValidation5" placeholder="STORE_CREATED_AT" value="<?php echo $row['select_store']; ?>" name="select_store" required>
                                        <div class="invalid-feedback">Please select a valid STORE.</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="bsValidation9" class="form-label">SELECT_STORE</label>
                                        <input type="text" class="form-control" id="bsValidation5" placeholder="supplier" value="<?php echo $row['supplier']; ?>" name="supplier" required>
                                        <div class="invalid-feedback">Please select a valid STORE.</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="bsValidation5" class="form-label">STORE_CREATED_AT</label>
                                        <input type="date" class="form-control" id="bsValidation5" placeholder="STORE_CREATED_AT" value="<?php echo $row['created_at']; ?>" name="created_at" required>
                                        <div class="invalid-feedback">Please provide a STORE_CREATED_AT.</div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="d-md-flex d-grid align-items-center gap-3">
                                            <button type="submit" name="update_product" class="btn btn-grd-primary px-4">Update</button>
                                            <button type="reset" class="btn btn-grd-info px-4">Reset</button>
                                        </div>
                                    </div>
                                </form>
                        <?php 
                            } else {
                                echo "Product not found.";
                            }
                            mysqli_stmt_close($stmt);
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
<!--end main wrapper-->

<footer class="page-footer">
    <p class="mb-0">Copyright © 2024. All right reserved.</p>
</footer>

<!--bootstrap js-->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>

<?php
if (isset($_POST['update_product'])) {
    $id = $_POST['id'];
    $product_name = $_POST['product_name'];
    $product_category = $_POST['product_category'];
    $product_quantity = $_POST['product_quantity'];
    $product_price = $_POST['product_price'];
    $select_store = $_POST['select_store'];
    $supplier = $_POST['supplier'];
    $created_at = $_POST['created_at'];

    $imageFiles = $_FILES["image"];
    $fileNames = array();
    $uploadDirectory = "product_image/";

    if (!is_dir($uploadDirectory)) {
        mkdir($uploadDirectory, 0777, true);
    }

    if (!empty($imageFiles['name'][0])) {
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
        $imageList = implode(',', $fileNames);
        $sql_query = "UPDATE product SET product_name=?, product_image=?, product_category=?, product_quantity=?, product_price=?, select_store=?,supplier=? created_at=? WHERE id=?";
        $stmt = mysqli_prepare($conn, $sql_query);
        mysqli_stmt_bind_param($stmt, "sssssssi", $product_name, $imageList, $product_category, $product_quantity, $product_price, $select_store,$supplier, $created_at, $id);
    } else {
        $sql_query = "UPDATE product SET product_name=?, product_category=?, product_quantity=?, product_price=?, select_store=?,supplier=?, created_at=? WHERE id=?";
        $stmt = mysqli_prepare($conn, $sql_query);
        mysqli_stmt_bind_param($stmt, "ssssssi", $product_name, $product_category, $product_quantity, $product_price, $select_store,$supplier, $created_at, $id);
    }

    if (mysqli_stmt_execute($stmt)) {
        echo "Product updated successfully";
        header('Location: add_product.php');
    } else {
        echo "Error: " . mysqli_stmt_error($stmt);
    }
    mysqli_stmt_close($stmt);
}
?>
