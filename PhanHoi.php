<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phản hồi | Sun's Elearning</title>
    <?php require('inc/link.php'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./css/styles.css">
    <style>
        .custom-alert {
            position: fixed; 
            top: 80px; 
            right: 25px; 
        }
    </style>
</head>

<body class="bg-light">

    <?php require('inc/header.php'); ?>

    <div class="my-5 px-4">
        <br><br><br><br>
        <h2 class="text-center fw-bold" style="font-family: Montserrat; font-size: 2.5rem">PHẢN HỒI Ý KIẾN
        </h2>
        <div class="h-line bg-dark"></div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                <iframe class="w-100" rounded height="320px"
                    src="<?php echo $contact_r['iframe'] ?>"
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                <h5 class="mt-4">Địa chỉ</h5>
                <a href="<?php echo $contact_r['gmap'] ?>" target="_blank" class="d-inline-block text-decoration-none text-dark">
                    <i class="bi bi-geo-alt-fill"></i> <?php echo $contact_r['address'] ?>
                </a>
                <h5 class="mt-4">Điện thoại</h5>
                <a href="tel: <?php echo $contact_r['pn1'] ?>" target="_blank" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone-fill"></i> 0<?php echo $contact_r['pn1'] ?>
                </a>
                <br>
                <?php 
                    if ($contact_r['pn2'] != '') {
                        echo<<<data
                            <a href="tel: $contact_r[pn2]" target="_blank" class="d-inline-block mb-2 text-decoration-none text-dark">
                                <i class="bi bi-telephone-fill"></i> 0$contact_r[pn2]
                            </a> 
                        data; 
                    }
                ?>
                <h5 class="mt-4">E-mail</h5>
                <a href="mailto: <?php echo $contact_r['email'] ?>" target="_blank" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-envelope-fill"></i> <?php echo $contact_r['email'] ?>
                </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    <form method="POST">
                        <br>
                        <h3 class="fw-bold text-center">BIỂU MẪU PHẢN HỒI</h3>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500; ">Họ và tên</label>
                            <input name="name" required type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500; ">E-mail</label>
                            <input name="email" required type="email" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500; ">Chủ đề</label>
                            <input name="subject" required type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500; ">Nội dung</label>
                            <textarea name="message" required class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
                        </div>
                        <div class="mt-3">
                            <button type="submit" name="send" class="btn btn-outline-dark custom-bg text-light shadow-none mt-3">Gửi đi</button>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
        if (isset($_POST['send'])) {
            $frm_data = filteration($_POST); 
        
            $q = "INSERT INTO `user_queries`(`name`, `email`, `subject`, `message`) VALUES (?, ?, ?, ?)"; 
            $values = [$frm_data['name'], $frm_data['email'], $frm_data['subject'], $frm_data['message']]; 
        
            $res = insert($q, $values, 'ssss'); 
            if ($res == 1) {
                alert('success', 'Mail sent!'); 
            } 
            else {
                alert('error', 'Server Down! Try again later.'); 
            }
        }
    ?>

    <?php require('inc/footer.php'); ?>

</body>

</html>