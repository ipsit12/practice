<?php include "db_connect/connection.php";?>
<?php include "include/header.php";
include "include/sidebar.php"; ?>

<!--start main wrapper-->
<main class="main-wrapper">
    <div class="main-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Components</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                      
                    </ol>
                </nav>
            </div>
            
        </div>
        <!--end breadcrumb-->


        <!--end row-->


        <!--end row-->

        <a href="sales_person_details.php"><button class="btn btn-primary mb-5">Sales Person Details</button></a>

        

        <div class="row">
            <div class="col-xl-6 mx-auto">
                <div class="card">
                    <div class="card-header px-4 py-3">
                        <h5 class="mb-0">ADD SALES PERSON</h5>
                    </div>
                    <div class="card-body p-4">
                        <form class="row g-3 needs-validation" action="./config.php" method="post" enctype="multipart/form-data" novalidate>
                            
                            <div class="col-md-12">
                                <label for="bsValidation3" class="form-label">NAME</label>
                                <input type="text" class="form-control" id="bsValidation3" placeholder="NAME" name="name" required>
                                <div class="invalid-feedback">
                                    Please choose a NAME.
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="bsValidation5" class="form-label">IMAGE</label>
                                <input type="file" class="form-control" id="bsValidation5" placeholder="IMAGE" name="image[]" multiple required>
                                <div class="invalid-feedback">
                                    Please provide a IMAGE.
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="bsValidation4" class="form-label">PHONE_NUMBER</label>
                                <input type="TEXT" class="form-control" id="bsValidation4" placeholder="PHONE_NUMBER" name="phone_number" required>
                                <div class="invalid-feedback">
                                    Please provide a valid PHONE_NUMBER.
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="bsValidation4" class="form-label">ADDRESS</label>
                                <input type="TEXT" class="form-control" id="bsValidation4" placeholder="ADDRESS" name="address" required>
                                <div class="invalid-feedback">
                                    Please provide a valid ADDRESS.
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <label for="bsValidation9" class="form-label">SELECT_STORE</label>
                                <select id="bsValidation9" name="select_store" class="form-select" required>
                                <?php
                                    $select = "SELECT * FROM store";
                                    $result = mysqli_query($conn, $select);

                                    if(mysqli_num_rows($result) > 0) {
                                        while($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                    <option value="<?php echo $row['store_name'] ?>"><?php echo $row['store_name'] ?></option>
                                    <?php }}?>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid STORE.
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="bsValidation5" class="form-label">Join_AT</label>
                                <input type="DATE" class="form-control" id="bsValidation5" placeholder="Join_AT" name="join_at" required>
                                <div class="invalid-feedback">
                                    Please provide a Join_AT.
                                </div>
                            </div>
                            
                           
                            <div class="col-md-12">
                                <div class="d-md-flex d-grid align-items-center gap-3">
                                    <button type="submit" name="submit_sales_person" class="btn btn-grd-primary px-4">Submit</button>
                                    <button type="reset" class="btn btn-grd-info px-4">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
<!--end main wrapper-->


<!--start overlay-->
<div class="overlay btn-toggle"></div>
<!--end overlay-->


<footer class="page-footer">
    <p class="mb-0">Copyright © 2024. All right reserved.</p>
</footer>


<!--start cart-->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasCart">
    <div class="offcanvas-header border-bottom h-70">
        <h5 class="mb-0" id="offcanvasRightLabel">8 New Orders</h5>
        <a href="javascript:;" class="primaery-menu-close" data-bs-dismiss="offcanvas">
            <i class="material-icons-outlined">close</i>
        </a>
    </div>
    <div class="offcanvas-body p-0">
        <div class="order-list">
            <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
                <div class="order-img">
                    <img src="assets/images/orders/01.png" class="img-fluid rounded-3" width="75" alt="">
                </div>
                <div class="order-info flex-grow-1">
                    <h5 class="mb-1 order-title">White Men Shoes</h5>
                    <p class="mb-0 order-price">$289</p>
                </div>
                <div class="d-flex">
                    <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
                    <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
                </div>
            </div>

            <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
                <div class="order-img">
                    <img src="assets/images/orders/02.png" class="img-fluid rounded-3" width="75" alt="">
                </div>
                <div class="order-info flex-grow-1">
                    <h5 class="mb-1 order-title">Red Airpods</h5>
                    <p class="mb-0 order-price">$149</p>
                </div>
                <div class="d-flex">
                    <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
                    <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
                </div>
            </div>

            <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
                <div class="order-img">
                    <img src="assets/images/orders/03.png" class="img-fluid rounded-3" width="75" alt="">
                </div>
                <div class="order-info flex-grow-1">
                    <h5 class="mb-1 order-title">Men Polo Tshirt</h5>
                    <p class="mb-0 order-price">$139</p>
                </div>
                <div class="d-flex">
                    <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
                    <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
                </div>
            </div>

            <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
                <div class="order-img">
                    <img src="assets/images/orders/04.png" class="img-fluid rounded-3" width="75" alt="">
                </div>
                <div class="order-info flex-grow-1">
                    <h5 class="mb-1 order-title">Blue Jeans Casual</h5>
                    <p class="mb-0 order-price">$485</p>
                </div>
                <div class="d-flex">
                    <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
                    <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
                </div>
            </div>

            <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
                <div class="order-img">
                    <img src="assets/images/orders/05.png" class="img-fluid rounded-3" width="75" alt="">
                </div>
                <div class="order-info flex-grow-1">
                    <h5 class="mb-1 order-title">Fancy Shirts</h5>
                    <p class="mb-0 order-price">$758</p>
                </div>
                <div class="d-flex">
                    <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
                    <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
                </div>
            </div>

            <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
                <div class="order-img">
                    <img src="assets/images/orders/06.png" class="img-fluid rounded-3" width="75" alt="">
                </div>
                <div class="order-info flex-grow-1">
                    <h5 class="mb-1 order-title">Home Sofa Set </h5>
                    <p class="mb-0 order-price">$546</p>
                </div>
                <div class="d-flex">
                    <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
                    <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
                </div>
            </div>

            <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
                <div class="order-img">
                    <img src="assets/images/orders/07.png" class="img-fluid rounded-3" width="75" alt="">
                </div>
                <div class="order-info flex-grow-1">
                    <h5 class="mb-1 order-title">Black iPhone</h5>
                    <p class="mb-0 order-price">$1049</p>
                </div>
                <div class="d-flex">
                    <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
                    <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
                </div>
            </div>

            <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
                <div class="order-img">
                    <img src="assets/images/orders/08.png" class="img-fluid rounded-3" width="75" alt="">
                </div>
                <div class="order-info flex-grow-1">
                    <h5 class="mb-1 order-title">Goldan Watch</h5>
                    <p class="mb-0 order-price">$689</p>
                </div>
                <div class="d-flex">
                    <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
                    <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas-footer h-70 p-3 border-top">
        <div class="d-grid">
            <button type="button" class="btn btn-grd btn-grd-primary" data-bs-dismiss="offcanvas">View Products</button>
        </div>
    </div>
</div>
<!--end cart-->


<!--start switcher-->
<button class="btn btn-grd btn-grd-primary position-fixed bottom-0 end-0 m-3 d-flex align-items-center gap-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop">
    <i class="material-icons-outlined">tune</i>Customize
</button>

<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="staticBackdrop">
    <div class="offcanvas-header border-bottom h-70">
        <div class="">
            <h5 class="mb-0">Theme Customizer</h5>
            <p class="mb-0">Customize your theme</p>
        </div>
        <a href="javascript:;" class="primaery-menu-close" data-bs-dismiss="offcanvas">
            <i class="material-icons-outlined">close</i>
        </a>
    </div>
    <div class="offcanvas-body">
        <div>
            <p>Theme variation</p>

            <div class="row g-3">
                <div class="col-12 col-xl-6">
                    <input type="radio" class="btn-check" name="theme-options" id="BlueTheme" checked>
                    <label class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4" for="BlueTheme">
                        <span class="material-icons-outlined">contactless</span>
                        <span>Blue</span>
                    </label>
                </div>
                <div class="col-12 col-xl-6">
                    <input type="radio" class="btn-check" name="theme-options" id="LightTheme">
                    <label class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4" for="LightTheme">
                        <span class="material-icons-outlined">light_mode</span>
                        <span>Light</span>
                    </label>
                </div>
                <div class="col-12 col-xl-6">
                    <input type="radio" class="btn-check" name="theme-options" id="DarkTheme">
                    <label class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4" for="DarkTheme">
                        <span class="material-icons-outlined">dark_mode</span>
                        <span>Dark</span>
                    </label>
                </div>
                <div class="col-12 col-xl-6">
                    <input type="radio" class="btn-check" name="theme-options" id="SemiDarkTheme">
                    <label class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4" for="SemiDarkTheme">
                        <span class="material-icons-outlined">contrast</span>
                        <span>Semi Dark</span>
                    </label>
                </div>
                <div class="col-12 col-xl-6">
                    <input type="radio" class="btn-check" name="theme-options" id="BoderedTheme">
                    <label class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4" for="BoderedTheme">
                        <span class="material-icons-outlined">border_style</span>
                        <span>Bordered</span>
                    </label>
                </div>
            </div><!--end row

      </div>
    </div> -->
        </div>
        <!--start switcher-->

        <!--bootstrap js-->
        <script src="assets/js/bootstrap.bundle.min.js"></script>

        <!--plugins-->
        <script src="assets/js/jquery.min.js"></script>
        <!--plugins-->
        <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
        <script src="assets/plugins/metismenu/metisMenu.min.js"></script>
        <script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            });
        </script>
        <script>
            $(document).ready(function() {
                var table = $('#example2').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf', 'print']
                });

                table.buttons().container()
                    .appendTo('#example2_wrapper .col-md-6:eq(0)');
            });
        </script>
        <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
        <script src="assets/js/main.js"></script>


        </body>


        <!-- Mirrored from codervent.com/maxton/demo/vertical-menu/table-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Aug 2024 14:14:22 GMT -->

        </html>