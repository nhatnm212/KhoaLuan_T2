<div class="container-fluid mt-5" style="
    background: url('http://localhost/KLTN/image/AnhBia/Trong-dong.png') 
    no-repeat center center;
    background-size: cover;"> 
    <br>
    <div class="row">
        <div class="col-lg-4 p-4">
            <h3 class="h-font fw-bold fs-2 mb-2 text-white">Sun's Elearning</h3>
            <br>
            <p style="text-align: justify; color: white">
                Đây là dự án website mô phỏng cho Khoá luận tốt nghiệp của sinh viên Nguyễn Minh Nhật,
                47.01.103.073, Khoa Công nghệ Thông tin, Trường Đại học Sư phạm Thành phố Hồ Chí Minh, với đề tài:
                "Xây dựng Website hỗ trợ học tập Chuyên đề học tập tin học 10 Định hướng khoa học máy tính".
            </p>
        </div>
        <div class="col-lg-4 p-4">
            <h5 class="mb-3 text-white">Liên kết</h5>
            <a href="index.php" class="text-white d-inline-block mb-2 text-dark text-decoration-none">Trang chủ</a> <br>
            <a href="GioiThieu.php" class="text-white d-inline-block mb-2 text-dark text-decoration-none">Giới thiệu</a><br>
            <a href="KhoaHoc.php" class="text-white d-inline-block mb-2 text-dark text-decoration-none">Khoá học</a><br>
            <a href="TLTK.php" class="text-white d-inline-block mb-2 text-dark text-decoration-none">Tài liệu tham khảo</a><br>
            <a href="PhanHoi.php" class="text-white d-inline-block mb-2 text-dark text-decoration-none">Phản hồi</a>
        </div>
        <div class="col-lg-4 p-4 text-white">
            <h5>Theo dõi tác giả trên</h5>
            <a href="<?php echo $contact_r['fb'] ?>" class="d-inline-block mb-2">
                <span class="badge text-white fs-6 p-2" style="background-color: #aa4c06">
                    <i class="bi bi-facebook me-1"></i> Facebook
                </span>
            </a>
            <br>
            <a href="<?php echo $contact_r['yt'] ?>" class="d-inline-block mb-2">
                <span class="badge text-white fs-6 p-2" style="background-color: #aa4c06">
                    <i class="bi bi-youtube me-1"></i> Youtube
                </span>
            </a>
            <br>
            <a href="<?php echo $contact_r['zl'] ?>" class="d-inline-block mb-2">
                <span class="badge text-white fs-6 p-2" style="background-color: #aa4c06">
                    <i class="bi bi-telephone me-1"></i> Zalo
                </span>
            </a>
            <br>
            <?php 
                if ($contact_r['tw'] != '') {
                    echo<<<data
                        <a href="$contact_r[tw]" class="d-inline-block mb-2">
                            <span class="badge text-white fs-6 p-2" style="background-color: #aa4c06">
                                <i class="bi bi-twitter me-1"></i> Twitter
                            </span>
                        </a>
                    data; 
                }
            ?>
        </div>
    </div>
    <hr style="border: 1px solid white;"><br>
    <p class="text-center text-white">Copyright © 2024 Sun's Elearning
        <br>Liên hệ đăng ký và hỗ trợ: nhatnm203@gmail.com
    </p><br>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

<script>
    function setActive() {
        let navbar = document.getElementById('nav-bar'); 
        let a_tags = navbar.getElementsByTagName('a'); 

        for (i=0; i<a_tags.length; i++) {
            let file = a_tags[i].href.split('/').pop(); 
            let file_name = file.split('.')[0]; 

            if (document.location.href.indexOf(file_name) >= 0) {
                a_tags[i].classList.add('active'); 
            }
        }
    }
    setActive(); 
</script>