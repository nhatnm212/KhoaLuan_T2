<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ | Sun's Elearning</title>
    <?php require('inc/link.php'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./css/styles.css">

    <style>
    @media screen and (max-width: 575px) {
        .availability-form {
            margin-top: 25px;
            padding: 0 35px;
        }
    }
    </style>
</head>

<body class="bg-light">

    <?php require('inc/header.php'); ?>

    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <?php 
                    $res = selectAll('carousel'); 
                    while ($row = mysqli_fetch_assoc($res)) {
                        $path = CAROUSEL_IMG_PATH; 
                        echo <<<data
                            <div class="swiper-slide">
                                <img src="$path$row[image]" class="w-100 d-block" />
                            </div>
                        data; 
                    }
                ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <br><br>
    <hr>

    <h2 class="mt-5 pt-2 mb-5 text-center fw-bold" style="font-family: Montserrat; font-size: 2.5rem">NGUYÊN TẮC DẠY VÀ
        HỌC</h2>
    <div class="h-line bg-dark"></div>
    <br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-4 text-center bg-dark rounded shadow py-5 my-3 mx-3 hover-effect">
                <i class="bi bi-lightbulb fs-1" style="color: white;"></i>
                <h5 class="mt-3 text-light">SÁNG TẠO</h5>
            </div>
            <div class="col-lg-3 col-md-4 text-center bg-white rounded shadow py-5 my-3 mx-3 hover-effect">
                <i class="bi bi-graph-up-arrow fs-1"></i>
                <h5 class="mt-3">PHÁT TRIỂN</h5>
            </div>
            <div class="col-lg-3 col-md-4 text-center bg-dark rounded shadow py-5 my-3 mx-3 hover-effect">
                <i class="bi bi-search-heart fs-1" style="color: white;"></i>
                <h5 class="mt-3 text-light">TRUNG THỰC</h5>
            </div>
        </div>
    </div>

    <br><br><br>
    <hr>

    <h2 class="mt-5 pt-4 text-center fw-bold" style="font-family: Montserrat; font-size: 2.5rem">CÁC KHOÁ HỌC</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
        Một số khoá học đã và đang được dạy tại Website
    </p>

    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow hover-effect" style="max-width: 300px; margin: auto;">
                    <img src="image/KhoaHoc/Tin 10_CDHT_KHMT.png" class="card-img-top">
                    <div class="card-body">
                        <h5 style="font-family: Montserrat; font-weight: bold">Chuyên đề học tập Tin học 10 - Định hướng KHMT</h5>
                        <h6 class="mb-4">Học phí: 1,000,000 đồng</h6>
                        <div class="features mb-3">
                            <h6 class="mb-1">Lớp học</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Lớp 10
                            </span>
                        </div>
                        <div class="features mb-3">
                            <h6 class="mb-1">Môn học</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Tin học
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Xếp hạng</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm btn-outline-dark custom-bg text-light shadow-none">Đăng ký
                                ngay</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow hover-effect" style="max-width: 300px; margin: auto;">
                    <img src="image/KhoaHoc/Tin 10_CDHT_KHMT.png" class="card-img-top">
                    <div class="card-body">
                        <h5 style="font-family: Montserrat; font-weight: bold">Chuyên đề học tập Tin học 10 - Định hướng
                            KHMT</h5>
                        <h6 class="mb-4">Học phí: 1,000,000 đồng</h6>
                        <div class="features mb-3">
                            <h6 class="mb-1">Lớp học</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Lớp 10
                            </span>
                        </div>
                        <div class="features mb-3">
                            <h6 class="mb-1">Môn học</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Tin học
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Xếp hạng</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm btn-outline-dark custom-bg text-light shadow-none">Đăng ký
                                ngay</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow hover-effect" style="max-width: 300px; margin: auto;">
                    <img src="image/KhoaHoc/Tin 10_CDHT_KHMT.png" class="card-img-top">
                    <div class="card-body">
                        <h5 style="font-family: Montserrat; font-weight: bold">Chuyên đề học tập Tin học 10 - Định hướng
                            KHMT</h5>
                        <h6 class="mb-4">Học phí: 1,000,000 đồng</h6>
                        <div class="features mb-3">
                            <h6 class="mb-1">Lớp học</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Lớp 10
                            </span>
                        </div>
                        <div class="features mb-3">
                            <h6 class="mb-1">Môn học</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Tin học
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Xếp hạng</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm btn-outline-dark custom-bg text-light shadow-none">Đăng ký
                                ngay</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Xem thêm >>></a>
            </div>
        </div>
    </div>

    <br><br><br>
    <hr>
    
    <h2 class="mt-5 pt-2 mb-5 text-center fw-bold" style="font-family: Montserrat; font-size: 2.5rem">THÔNG TIN LIÊN LẠC
    </h2>
    <div class="h-line bg-dark"></div>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounđed">
                <iframe class="w-100" rounded height="320px"
                    src="<?php echo $contact_r['iframe'] ?>"
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Điện thoại</h5>
                    <a href="tel: <?php echo $contact_r['pn1'] ?>" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> 0<?php echo $contact_r['pn1'] ?>
                    </a>
                    <br>
                    <?php 
                        if ($contact_r['pn2'] != '') {
                            echo <<< data
                                <a href="tel: $contact_r[pn2]" class="d-inline-block mb-2 text-decoration-none text-dark">
                                    <i class="bi bi-telephone-fill"></i> 0$contact_r[pn2]
                                </a>
                            data; 
                        }
                    ?>
                </div>
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Theo dõi tác giả trên</h5>
                    <?php 
                        if ($contact_r['fb'] != '') {
                            echo<<<data
                                <a href="$contact_r[fb]" class="d-inline-block mb-2">
                                    <span class="badge bg-light text-dark fs-6 p-2">
                                        <i class="bi bi-facebook me-1"></i> Facebook
                                    </span>
                                </a>
                                <br>
                            data; 
                        }
                    ?>
                    
                    <a href="<?php echo $contact_r['yt']?>" class="d-inline-block mb-2">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-youtube me-1"></i> Youtube
                        </span>
                    </a>
                    <br>
                    <a href="<?php echo $contact_r['zl']?>" class="d-inline-block mb-2">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-telephone-fill me-1"></i> Zalo
                        </span>
                    </a>
                    <br>
                    <a href="<?php echo $contact_r['tw']?>" class="d-inline-block mb-2">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-twitter me-1"></i> Twitter
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <br><br><br>

    <?php require('inc/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 4500,
            disableOnInteraction: false,
        },
    });
    </script>

</body>

</html>