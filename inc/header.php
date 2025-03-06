    <?php 
        require('admin/inc/db_config.php'); 
        require('admin/inc/essentials.php'); 

        $contact_q = "SELECT * FROM `contact_details` WHERE `sr_no` = ?"; 
        $values = [1]; 
        $contact_r = mysqli_fetch_assoc(select($contact_q, $values, 'i')); 
    ?>

    <nav id="nav-bar" class="navbar navbar-expand-lg"
        style="background-color:rgb(255, 255, 255); position: fixed; top: 0; left: 0; right: 0; z-index: 1000;">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 h-font" style="color: #98261f;" href="index.php">
                <i class="bi bi-laptop"></i>
                Sun's Elearning
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style=""></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="color: #98261f;">
                    <li class="nav-item">
                        <a class="nav-link me-2" href="index.php">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="GioiThieu.php">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="KhoaHoc.php">Khoá học</a>
                    </li>
                    <!--<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="KhoaHoc.php" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Khoá học
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Tin học 10</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Tin học 11</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Tin học 12</a></li>
                        </ul>
                    </li>-->
                    <li class="nav-item">
                        <a class="nav-link me-2" href="TLTK.php">Tài liệu tham khảo</a> 
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="PhanHoi.php">Phản hồi</a>
                    </li>
                </ul>
                <button type="button" class="btn btn-outline-light shadown-none me-lg-3 me-2" style="background-color: #98261f;" data-bs-toggle="modal"
                    data-bs-target="#loginModal">
                    Đăng nhập
                </button>
                <button type="button" class="btn btn-outline-light shadown-none" style="background-color: #98261f;" data-bs-toggle="modal"
                    data-bs-target="#registerModal">
                    Đăng ký
                </button>
            </div>
        </div>
    </nav>

    <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-circle fs-3 me-2"></i>
                            ĐĂNG NHẬP
                        </h5>
                        <button type="reset" class="btn-close shadown-none" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Mật khẩu</label>
                            <input type="password" class="form-control shadow-none">
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <button type="submit" class="btn btn-dark shadow-none">Đăng nhập</button>
                            <a href="javascript: void(0)" class="text-secondary text-decoration-none">Quên mật khẩu?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-add fs-3 me-2"></i>
                            ĐĂNG KÝ TÀI KHOẢN
                        </h5>
                        <button type="reset" class="btn-close shadown-none" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="d-flex justify-content-center">
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base text-center">
                                Em vui lòng điền chính xác thông tin khi đăng ký
                            </span>
                        </div>
                        <div class="cointaner-fluid">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Họ và tên</label>
                                    <input type="text" class="form-control shadown-none">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control shadown-none">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Số điện thoại</label>
                                    <input type="number" class="form-control shadown-none">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Ảnh đại diện</label>
                                    <input type="file" class="form-control shadown-none">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="form-label">Địa chỉ</label>
                                    <textarea class="form-control shadown-none" rows="1"></textarea>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Pincode</label>
                                    <input type="number" class="form-control shadown-none">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Ngày sinh</label>
                                    <input type="date" class="form-control shadown-none">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Mật khẩu</label>
                                    <input type="password" class="form-control shadown-none">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Nhập lại mật khẩu</label>
                                    <input type="password" class="form-control shadown-none">
                                </div>
                            </div>
                        </div>
                        <div class="text-center my-1">
                            <button type="submit" class="btn btn-dark shadown-none">Đăng ký</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <button onclick="scrollToTop()" id="scrollTopBtn" title="Lên đầu trang" 
        style="
            position: fixed; 
            bottom: 20px; 
            right: 20px; 
            width: 50px; 
            height: 50px; 
            background-color: #aa4c06; 
            color: white; 
            border: none; 
            border-radius: 50%; 
            font-size: 24px; 
            cursor: pointer; 
            display: none; 
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
        ">
        ↑
    </button>

<script>
    window.onscroll = function () {
        var scrollBtn = document.getElementById("scrollTopBtn");
        if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
            scrollBtn.style.display = "block";
        } else {
            scrollBtn.style.display = "none";
        }
    };

    function scrollToTop() {
        window.scrollTo({ top: 0, behavior: "smooth" });
    }
</script>
