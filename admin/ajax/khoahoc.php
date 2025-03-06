<?php

use Dom\Document;

    require('../inc/db_config.php');
    require('../inc/essentials.php');
    adminLogin();

    if (isset($_POST['add-khoahoc'])) {
        $frm_data = filteration($_POST);
        $flag = 0;
    
        $ql = "INSERT INTO `khoahoc`(`name`, `grade`, `subject`, `price`, `description`) VALUES (?,?,?,?,?)";
        $values = [$frm_data['name'], $frm_data['grade'], $frm_data['subject'], $frm_data['price'], $frm_data['desc']];
    
        if (insert($ql, $values, 'sssis')) {
            $flag = 1;
        }
    
        echo $flag; 
    }

    if (isset($_POST['get_all_khoahoc'])) {
        $res = selectAll('khoahoc');
        $i = 1;

        $data = "";

        while ($row = mysqli_fetch_assoc($res)) {
            
            if ($row['status'] == 1) {
                $status = "<button onclick='toggle_status($row[id],0)' class='btn btn-success btn-sm'>Đang hoạt động</button>";
            }
            else {
                $status = "<button onclick='toggle_status($row[id],1)' class='btn btn-warning btn-sm'>Ngưng hoạt động</button>";
            }

            $formatted_price = number_format($row['price'] ?? 0, 0, ',', '.') . " VNĐ";
            
            if ($row['price'] == 0) {
                $formatted_price = "Miễn phí";
            }


            $data .= "
                <tr class='align-middle'>
                    <td>$i</td>
                    <td>$row[name]</td>
                    <td>$row[grade]</td>
                    <td>$row[subject]</td>
                    <td>$formatted_price</td>
                    <td>$status</td>
                    <td>
                        <button type='button' onclick='edit_details($row[id])' class='btn btn-outline-secondary shadow-none btn-sm' data-bs-toggle='modal' data-bs-target='#edit-khoahoc'>
                            <i class='bi bi-pencil-square'></i> 
                        </button>
                        <button type='button' onclick='khoahoc_images($row[id], \"$row[name]\")' class='btn btn-outline-info shadow-none btn-sm' data-bs-toggle='modal' data-bs-target='#khoahoc-images'>
                            <i class='bi bi-images'></i> 
                        </button>
                    </td>
                </tr>
            ";
            $i++;
        }
        echo $data;
    }

    if (isset($_POST['get_khoahoc'])) {
        $frm_data = filteration($_POST); 
    
        $res1 = select("SELECT * FROM khoahoc WHERE id=?", [$frm_data['get_khoahoc']], 'i');
    
        if ($res1) {
            $khoahocdata = mysqli_fetch_assoc($res1);
            $data = ["khoahocdata" => $khoahocdata];
            echo json_encode($data);
        } else {
            echo json_encode(["error" => "Không tìm thấy khóa học!"]);
        }
    }

    if (isset($_POST['edit_khoahoc'])) {
        $frm_data = filteration($_POST);
        $flag = 0;

        $ql = "UPDATE `khoahoc` SET `name`=?,`grade`=?,`subject`=?,`price`=?,`description`=? WHERE `id`=?";
        $values = [$frm_data['name'], $frm_data['grade'], $frm_data['subject'], $frm_data['price'], $frm_data['desc'], $frm_data['khoahoc_id']];
        
        if (update($ql, $values, 'sssisi')) {
            $flag = 1;
        }

        if ($flag) {
            echo 1;
        }
        else {
            echo 0;
        }
    }

    if (isset($_POST['toggle_status'])) {
        $frm_data = filteration($_POST);

        $q = "UPDATE `khoahoc` SET `status`=? WHERE `id`=?";
        $v = [$frm_data['value'], $frm_data['toggle_status']];

        if (update($q, $v, 'ii')) {
            echo 1;
        }
        else {
            echo 0;
        }
    }

    if (isset($_POST['add_image'])) {
        $frm_data = filteration($_POST);

        $img_r = uploadImage($_FILES['image'], KHOAHOC_FOLDER); 
        
        if ($img_r == 'inv_img') {
            echo $img_r; 
        }
        else if ($img_r == 'inv_size') {
            echo $img_r; 
        }
        else if ($img_r == 'upd_failed') {
            echo $img_r; 
        }
        else {
            $q = "INSERT INTO `khoahoc_images`(`khoahoc_id`, `image`) VALUES (?, ?)"; 
            $values = [$frm_data["khoahoc_id"], $img_r]; 
            $res = insert($q, $values, 'is'); 
            echo $res; 
        }
    }

    if (isset($_POST['get_khoahoc_images'])) {
        $frm_data = filteration($_POST);
        $res = select("SELECT * FROM `khoahoc_images` WHERE `khoahoc_id`=?", [$frm_data['get_khoahoc_images']], "i");

        $path = KHOAHOC_IMG_PATH;
        
        while ($row = mysqli_fetch_assoc($res)) {
            if ($row['thumb'] == 1) {
                $thumb_btn = "<i class='bi bi-check-lg text-light bg-success px-2 py-1 rounded fs-5'></i>";
            }
            else {
                $thumb_btn = "
                    <button onclick='thumb_image($row[sr_no], $row[khoahoc_id])' class='btn btn-secondary'>
                        <i class='bi bi-check-lg'></i>
                    </button>
                ";
            }
            echo<<<data
                <tr class='align-middle'>
                    <td><img src='$path$row[image]' class='img-fluid'></td>
                    <td>$thumb_btn</td>
                    <td>
                        <button onclick='rem_image($row[sr_no], $row[khoahoc_id])' class='btn btn-warning btn-sm'>
                            <i class='bi bi-trash'></i>
                        </button>
                    </td>
                </tr>
            data;
        }
    }

    if (isset($_POST['rem_image'])) {
        $frm_data = filteration($_POST); 
        $values = [$frm_data['img_id'], $frm_data['khoahoc_id']];

        $pre_q = "SELECT * FROM `khoahoc_images` WHERE `sr_no`=? AND `khoahoc_id`=?";
        $res = select($pre_q, $values, 'ii'); 
        $img = mysqli_fetch_assoc($res); 

        if (deleteImage($img['image'], KHOAHOC_FOLDER)) {
            $q = "DELETE FROM `khoahoc_images` WHERE `sr_no`=? AND `khoahoc_id`=?";
            $res = delete($q, $values, 'ii');
            echo $res; 
        }
        else {
            echo 0; 
        }
    }
    
    if (isset($_POST['thumb_image'])) {
        $frm_data = filteration($_POST); 
        
        $pre_q = "UPDATE `khoahoc_images` SET `thumb`=? WHERE `khoahoc_id`=?";
        $pre_v = [0, $frm_data['khoahoc_id']];
        $pre_res = update($pre_q, $pre_v, 'ii');

        $q = "UPDATE `khoahoc_images` SET `thumb`=? WHERE `sr_no`=? AND `khoahoc_id`=?";
        $v = [1, $frm_data['img_id'], $frm_data['khoahoc_id']];
        $update_res = update($q, $v, 'iii');
        
        echo $update_res;

    }
    
?>