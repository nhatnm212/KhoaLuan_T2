<?php
    require('inc/essentials.php'); 
    adminLogin(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Băng chuyền | Admin Sun's Elearning</title>
    <link rel="stylesheet" href="./css/admin_styles.css">
    <?php require('inc/links.php');?>
</head>
<body class="bg-light">
    <?php require('inc/header.php');?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">BĂNG CHUYỀN</h3>

                <!-- Carousel section -->
                <div class="card border-0 shadow-sm mb-4" style="position: static">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Hình ảnh</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#carousel-s">
                                <i class="bi bi-plus-square"></i> Thêm
                            </button>
                        </div>

                        <div class="row" id="carousel_data">
                            
                        </div>
                    </div>
                </div>
                
                <!-- Carousel modal -->
                <div class="modal fade" id="carousel-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1">
                    <div class="modal-dialog">
                        <form id="carousel_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5">Thêm hình ảnh</h1>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Hình ảnh</label>
                                        <input type="file" name="carousel_picture" id="carousel_picture_inp" accept="[.jpg, .png, .webp, .jpeg]" class="form-control shadow-none" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="picture.value=''" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Đóng</button>
                                    <button type="submit" class="btn btn-dark text-light shadow-none">Xác nhận</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php require('inc/scripts.php'); ?>

    <script src="scripts/carousel.js"></script>

</body>
</html>

