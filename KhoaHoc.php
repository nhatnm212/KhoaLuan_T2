<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khoá học | Sun's Elearning</title>
    <?php require('inc/link.php'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./css/styles.css">

    <style>
        
    </style>
</head>

<body class="bg-light">

    <?php require('inc/header.php'); ?>

    <div class="my-5 px-4">
        <br><br><br><br>
        <h2 class="text-center fw-bold" style="font-family: Montserrat; font-size: 2.5rem">CÁC KHOÁ HỌC
        </h2>
        <div class="h-line bg-dark"></div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 mb-lg-0 mb-4">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2 fw-bold">CHỌN LỌC</h4>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
                            <div class="border bg-light p-3 rounded mb-3">
                                <label class="form-label mb-3" style="font-size: 18px;">Ngày khai giảng</label>
                                <input type="date" class="form-control shadow-none mb-3">
                                <label class="form-label mb-3" style="font-size: 18px;">Ngày kết thúc</label>
                                <input type="date" class="form-control shadow-none mb-3">
                            </div>
                            <div class="border bg-light p-3 rounded mb-3">
                                <div class="mb-3" style="font-size: 18px;">Lớp học</div>
                                <div class="mb-2">
                                    <input type="checkbox" id="l10" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="l10">Lớp 10</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="l11" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="l11">Lớp 11</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="l12" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="l12">Lớp 12</label>
                                </div>
                            </div>
                            <div class="border bg-light p-3 rounded mb-3">
                                <div class="mb-3" style="font-size: 18px;">Môn học</div>
                                <div class="mb-2">
                                    <input type="checkbox" id="mh1" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="mh1">Tin học</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="mh2" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="mh2">Toán học</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="col-lg-9 col-md-12 px-4">
                <div class="card mb-4 border-0 shadow hover-effect">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-4 mb-lg-0 mb-md-0 mb-3">
                            <img src="image/KhoaHoc/Tin 10_CDHT_KHMT.png" class="img-fluid rounded" style="width: 100%; height: auto;">
                        </div>
                        <div class="col-md-6 px-lg-4 px-md-3 px-0">
                            <h5 class="mb-3 fw-bold">Chuyên đề học tập Tin học 10 - Định hướng KHMT</h5>
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
                        </div>
                        <div class="col-md-2 text-center">
                            <h6 class="mb-4">1,000,000 đồng</h6>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark custom-bg text-light shadow-none mb-2">Đăng ký ngay</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">Xem thêm</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 shadow hover-effect">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-4 mb-lg-0 mb-md-0 mb-3">
                            <img src="image/KhoaHoc/Tin 10_CDHT_KHMT.png" class="img-fluid rounded" style="width: 100%; height: auto;">
                        </div>
                        <div class="col-md-6 px-lg-4 px-md-3 px-0">
                            <h5 class="mb-3 fw-bold">Chuyên đề học tập Tin học 10 - Định hướng KHMT</h5>
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
                        </div>
                        <div class="col-md-2 text-center">
                            <h6 class="mb-4">1,000,000 đồng</h6>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark custom-bg text-light shadow-none mb-2">Đăng ký ngay</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">Xem thêm</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 shadow hover-effect">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-4 mb-lg-0 mb-md-0 mb-3">
                            <img src="image/KhoaHoc/Tin 10_CDHT_KHMT.png" class="img-fluid rounded" style="width: 100%; height: auto;">
                        </div>
                        <div class="col-md-6 px-lg-4 px-md-3 px-0">
                            <h5 class="mb-3 fw-bold">Chuyên đề học tập Tin học 10 - Định hướng KHMT</h5>
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
                        </div>
                        <div class="col-md-2 text-center">
                            <h6 class="mb-4">1,000,000 đồng</h6>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark custom-bg text-light shadow-none mb-2">Đăng ký ngay</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>

            

        </div>
    </div>

    <?php require('inc/footer.php'); ?>

</body>

</html>