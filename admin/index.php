<?php
    require('inc/essentials.php'); 
    require('inc/db_config.php'); 

    session_start(); 
    if (isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] == true) {
        redirect('dashboard.php'); 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập QL | Sun's Elearning</title>
    <?php require('inc/links.php');?>
    <link rel="stylesheet" href="css/admin_styles.css">
    <style>
        div.login-form{
            position: absolute; 
            top: 50%; 
            left: 50%; 
            transform: translate(-50%, -50%); 
            width: 400px;
        }
        body {
            background-image: url('image/bg_admin_login.png'); 
            background-position: center center; 
            background-repeat: no-repeat;
            background-size: cover; 
            height: 100vh; 
            margin: 0; 
        }
    </style>
</head>
<body>
    
    <div class="login-form text-center rounded shadow overflow-hidden" style="background-color: white !important;">
        <form method="POST">
            <h4 class="bg-dark text-white py-3">ĐĂNG NHẬP ADMIN</h4>
            <div class="p-4">
                <div class="mb-3">
                    <input name="admin_name" required type="text" class="form-control shadow-none text-center" placeholder="Tên đăng nhập">
                </div>
                <div class="mb-4">
                    <input name="admin_pass" required type="password" class="form-control shadow-none text-center" placeholder="Mật khẩu">
                </div>
                <button name="login" type="submit" class="btn btn-dark shadow-none">Đăng nhập</button>
            </div>
        </form>
    </div>

    <?php
        if(isset($_POST['login'])) {
            $frm_data = filteration($_POST); 
            
            $query = "SELECT * FROM `admin_cred` WHERE `admin_name`=? AND `admin_pass`=?"; 
            $values = [$frm_data['admin_name'],$frm_data['admin_pass']]; 

            $res = select($query,$values,"ss"); 
            if($res->num_rows==1) {
                $row = mysqli_fetch_assoc($res); 
                session_start(); 
                $_SESSION['adminLogin'] = true; 
                $_SESSION['adminId'] = $row['sr_no']; 
                redirect('dashboard.php'); 
            }
            else {
                alert('error','Đăng nhập không thành công - Thông tin đăng nhập không hợp lệ'); 
            }
        }
    ?>

    <?php require('inc/scripts.php');?>
</body>
</html>