<?php
    require('inc/essentials.php'); 
    require('inc/db_config.php'); 
    adminLogin(); 

    if (isset($_GET['seen'])) {
        $frm_data = filteration($_GET); 

        if ($frm_data['seen'] == 'all') {
            $q = "UPDATE `user_queries` SET `seen`=?"; 
            $values = [1]; 
            if (update($q, $values, 'i')) {
                alert('success', 'Tất cả đã được đọc!'); 
            } else {
                alert('error', 'Thao tác thất bại!'); 
            }
        } else {
            $q = "UPDATE `user_queries` SET `seen`=? WHERE `sr_no`=?"; 
            $values = [1, $frm_data['seen']]; 
            if (update($q, $values, 'ii')) {
                alert('success', 'Xác nhận đã đọc phản hồi!'); 
            } else {
                alert('error', 'Thao tác thất bại!'); 
            }
        }
    }

    if (isset($_GET['del'])) {
        $frm_data = filteration($_GET);
    
        if ($frm_data['del'] == 'all') {
            $q = "DELETE FROM `user_queries`";
            if (mysqli_query($con, $q)) { 
                alert('success', 'Tất cả đã được xóa!');
            } else {
                alert('error', 'Thao tác thất bại!');
            }
        } else {
            $q = "DELETE FROM `user_queries` WHERE `sr_no`=?";
            $values = [(int)$frm_data['del']]; 
            if (delete($q, $values, 'i')) { 
                alert('success', 'Đã xóa thành công!');
            } else {
                alert('error', 'Thao tác thất bại!');
            }
        }
    }    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phản hồi | Admin Sun's Elearning</title>
    <link rel="stylesheet" href="./css/admin_styles.css">
    <?php require('inc/links.php');?>
    <style>
        .custom-alert {
            position: fixed; 
            top: 80px; 
            right: 25px; 
        }
    </style>
</head>
<body class="bg-light">
    <?php require('inc/header.php');?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">XỬ LÝ PHẢN HỒI</h3>

                <div class="card border-0 shadow-sm mb-4" style="position: static">
                    <div class="card-body">

                        <div class="text-end mb-4">
                            <a href="?seen=all" class="btn btn-dark rounded-pill shadow-none btn-sm">
                                <i class="bi bi-check-all"></i> Đọc tất cả
                            </a>
                            <a href="?del=all" class="btn btn-danger rounded-pill shadow-none btn-sm">
                                <i class="bi bi-trash"></i> Xóa tất cả
                            </a>
                        </div>

                        <div class="table-responsive-md" style="height: 450px; overflow-y: scroll;">
                            <table class="table table-hover border">
                                <thead class="sticky-top">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col" width="15%">Họ và tên</th>
                                        <th scope="col">E-mail</th>
                                        <th scope="col" width="15%">Chủ đề</th>
                                        <th scope="col" width="25%">Nội dung</th>
                                        <th scope="col">Ngày gửi đi</th> 
                                        <th scope="col">Trạng thái</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $q = "SELECT * FROM `user_queries` ORDER BY `sr_no` DESC"; 
                                        $data = mysqli_query($con, $q); 
                                        $i = 1; 

                                        while($row = mysqli_fetch_assoc($data)) {
                                            $seen = ''; 
                                            if ($row['seen'] != 1) {
                                                $seen = "<a href='?seen=$row[sr_no]' class='btn btn-sm rounded-pill btn-primary'>Bấm đã đọc</a> <br>"; 
                                            }
                                            $seen .= "<a href='?del=$row[sr_no]' class='btn btn-sm rounded-pill btn-danger mt-2'>Xóa</a>"; 

                                            echo<<<query
                                                <tr>
                                                    <td>$i</td>
                                                    <td>$row[name]</td>
                                                    <td>$row[email]</td>
                                                    <td>$row[subject]</td>
                                                    <td>$row[message]</td>
                                                    <td>$row[date]</td>
                                                    <td>$seen</td>
                                                </tr>
                                            query; 
                                            $i++; 
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php require('inc/scripts.php'); ?>

</body>
</html>

