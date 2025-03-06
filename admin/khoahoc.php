<?php
    require('inc/essentials.php'); 
    require('inc/db_config.php'); 
    adminLogin(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khóa học | Admin Sun's Elearning</title>
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
                <h3 class="mb-4">KHÓA HỌC</h3>

                <div class="card border-0 shadow-sm mb-4" style="position: static">
                    <div class="card-body">

                        <div class="text-end mb-4">
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#add-khoahoc">
                                <i class="bi bi-plus-square"></i> Thêm 
                            </button>
                        </div>

                        <div class="table-responsive-lg" style="height: 450px; overflow-y: scroll;">
                            <table class="table table-hover border text-center">
                                <thead>
                                    <tr class="bg-dark text-light">
                                        <th scope="col">#</th>
                                        <th scope="col">Tên khóa học</th>
                                        <th scope="col">Khối lớp</th>
                                        <th scope="col">Môn học</th>
                                        <th scope="col">Học phí</th>
                                        <th scope="col">Trạng thái</th>
                                        <th scope="col">Hoạt động</th>
                                    </tr>
                                </thead>
                                <tbody id="khoahoc-data">
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Add course modal -->
                <div class="modal fade" id="add-khoahoc" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1">
                    <div class="modal-dialog modal-lg">
                        <form id="add_khoahoc_form" autocomplete="off">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5">Thêm khóa học</h1>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label fw-bold">Tên khóa học</label>
                                            <input type="text" name="name" class="form-control shadow-none" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label fw-bold">Khối lớp</label>
                                            <select name="grade" class="form-control shadow-none" required>
                                                <option value="">Chọn khối lớp</option>
                                                <option value="1">Lớp 1</option>
                                                <option value="2">Lớp 2</option>
                                                <option value="3">Lớp 3</option>
                                                <option value="4">Lớp 4</option>
                                                <option value="5">Lớp 5</option>
                                                <option value="6">Lớp 6</option>
                                                <option value="7">Lớp 7</option>
                                                <option value="8">Lớp 8</option>
                                                <option value="9">Lớp 9</option>
                                                <option value="10">Lớp 10</option>
                                                <option value="11">Lớp 11</option>
                                                <option value="12">Lớp 12</option>
                                                <option value="daihoc">Đại học</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label fw-bold">Môn học</label>
                                            <input type="text" name="subject" class="form-control shadow-none" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label fw-bold">Giá tiền</label>
                                            <input type="number" min="0" name="price" class="form-control shadow-none" required>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label class="form-label fw-bold">Mô tả</label>
                                            <textarea name="desc" rows="4" class="form-control shadow-none" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Đóng</button>
                                    <button type="submit" class="btn btn-dark text-light shadow-none">Xác nhận</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Edit course modal -->
                <div class="modal fade" id="edit-khoahoc" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1">
                    <div class="modal-dialog modal-lg">
                        <form id="edit_khoahoc_form" autocomplete="off">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5">Chỉnh sửa thông tin khóa học</h1>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label fw-bold">Tên khóa học</label>
                                            <input type="text" name="name" class="form-control shadow-none" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label fw-bold">Khối lớp</label>
                                            <select name="grade" class="form-control shadow-none" required>
                                                <option value="">Chọn khối lớp</option>
                                                <option value="1">Lớp 1</option>
                                                <option value="2">Lớp 2</option>
                                                <option value="3">Lớp 3</option>
                                                <option value="4">Lớp 4</option>
                                                <option value="5">Lớp 5</option>
                                                <option value="6">Lớp 6</option>
                                                <option value="7">Lớp 7</option>
                                                <option value="8">Lớp 8</option>
                                                <option value="9">Lớp 9</option>
                                                <option value="10">Lớp 10</option>
                                                <option value="11">Lớp 11</option>
                                                <option value="12">Lớp 12</option>
                                                <option value="daihoc">Đại học</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label fw-bold">Môn học</label>
                                            <input type="text" name="subject" class="form-control shadow-none" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label fw-bold">Giá tiền</label>
                                            <input type="number" min="0" name="price" class="form-control shadow-none" required>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label class="form-label fw-bold">Mô tả</label>
                                            <textarea name="desc" rows="4" class="form-control shadow-none" required></textarea>
                                        </div>
                                        <input type="hidden" name="khoahoc_id">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Đóng</button>
                                    <button type="submit" class="btn btn-dark text-light shadow-none">Xác nhận</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Manage course images modal -->
                <div class="modal fade" id="khoahoc-images" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5">Tên khóa học</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div id="image-alert"></div>
                                <div class="border-bottom border-3 pb-3 mb-3">
                                    <form id="add_image_form">
                                        <label class="form-label fw-bold">Thêm ảnh</label>
                                        <input type="file" name="image" accept="[.jpg, .png, .webp, .jpeg]" class="form-control shadow-none mb-3" required>
                                        <button class="btn btn-dark text-light shadow-none">Thêm</button>
                                        <input type="hidden" name="khoahoc_id">
                                    </form>
                                </div>
                                <div class="table-responsive-lg" style="height: 350px; overflow-y: scroll;">
                                    <table class="table table-hover border text-center">
                                        <thead>
                                            <tr class="bg-dark text-light sticky-top">
                                                <th scope="col" width="60%">Hình ảnh</th>
                                                <th scope="col">Ảnh đại diện</th>
                                                <th scope="col">Xóa</th>
                                            </tr>
                                        </thead>
                                        <tbody id="khoahoc-image-data">
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php require('inc/scripts.php'); ?>
    <script>
        let add_khoahoc_form = document.getElementById('add_khoahoc_form'); 

        add_khoahoc_form.addEventListener('submit', function(e) {
            e.preventDefault(); 
            add_khoahoc(); 
        }); 

        function add_khoahoc() {
            let data = new FormData(); 
            data.append('add-khoahoc','');
            data.append('name', add_khoahoc_form.elements['name'].value); 
            data.append('grade', add_khoahoc_form.elements['grade'].value); 
            data.append('subject', add_khoahoc_form.elements['subject'].value); 
            data.append('price', add_khoahoc_form.elements['price'].value); 
            data.append('desc', add_khoahoc_form.elements['desc'].value); 

            let xhr = new XMLHttpRequest(); 
            xhr.open("POST", "ajax/khoahoc.php", true);

            xhr.onload = function() {
                var myModal = document.getElementById('add-khoahoc');
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide();

                if (this.responseText.trim() == "1") {
                    alert('success', 'Đã thêm khóa học mới!');
                    add_khoahoc_form.reset();
                    get_all_khoahoc();
                }
                else {
                    alert('error', 'Không thể thêm khóa học mới!');
                }
            }
            xhr.send(data);
        }

        function get_all_khoahoc() {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/khoahoc.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function() {
                document.getElementById('khoahoc-data').innerHTML = this.responseText;
            }
            xhr.send('get_all_khoahoc');
        }
        
        let edit_khoahoc_form = document.getElementById('edit_khoahoc_form'); 

        function edit_details(id) {
            let xhr = new XMLHttpRequest(); 
            xhr.open("POST", "ajax/khoahoc.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function() {
                let data = JSON.parse(this.responseText);
                edit_khoahoc_form.elements['name'].value = data.khoahocdata.name;
                edit_khoahoc_form.elements['grade'].value = data.khoahocdata.grade;
                edit_khoahoc_form.elements['subject'].value = data.khoahocdata.subject;
                edit_khoahoc_form.elements['price'].value = data.khoahocdata.price;
                edit_khoahoc_form.elements['desc'].value = data.khoahocdata.description;
                edit_khoahoc_form.elements['khoahoc_id'].value = data.khoahocdata.id;

            }
            xhr.send('get_khoahoc=' + encodeURIComponent(id));  
        }

        edit_khoahoc_form.addEventListener('submit', function(e) {
            e.preventDefault(); 
            submit_edit_khoahoc(); 
        }); 

        function submit_edit_khoahoc() {
            let data = new FormData(); 
            data.append('edit_khoahoc','');
            data.append('khoahoc_id', edit_khoahoc_form.elements['khoahoc_id'].value); 
            data.append('name', edit_khoahoc_form.elements['name'].value); 
            data.append('grade', edit_khoahoc_form.elements['grade'].value); 
            data.append('subject', edit_khoahoc_form.elements['subject'].value); 
            data.append('price', edit_khoahoc_form.elements['price'].value); 
            data.append('desc', edit_khoahoc_form.elements['desc'].value); 

            let xhr = new XMLHttpRequest(); 
            xhr.open("POST", "ajax/khoahoc.php", true);

            xhr.onload = function() {
                var myModal = document.getElementById('edit-khoahoc');
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide();

                if (this.responseText.trim() == "1") {
                    alert('success', 'Đã chỉnh sửa thông tin khóa học!');
                    edit_khoahoc_form.reset();
                    get_all_khoahoc();
                }
                else {
                    alert('error', 'Chỉnh sửa không thành công!');
                }
            }
            xhr.send(data);
        }

        function toggle_status(id, val) {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/khoahoc.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function() {
                if (this.responseText == 1) {
                    alert('success', 'Đã chuyển đổi trạng thái khóa học!');
                    get_all_khoahoc();
                }
                else {
                    alert('error', 'Chuyển đổi trạng thái thất bại!'); 
                }
            }
            xhr.send('toggle_status=' + id + '&value=' + val);
        }

        let add_image_form = document.getElementById('add_image_form');

        add_image_form.addEventListener('submit', function(e) {
            e.preventDefault();
            add_image();
        });

        function add_image() {
            let data = new FormData();
            data.append('image', add_image_form.elements['image'].files[0]);
            data.append('khoahoc_id', add_image_form.elements['khoahoc_id'].value);
            data.append('add_image', '');

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/khoahoc.php", true);

            xhr.onload = function () {
                console.log("Server response:", this.responseText);  // Debug

                if (this.responseText == 'inv_img') {
                    alert('error', 'Only JPG, WEBP or PNG images are allowed!', 'image-alert');
                } else if (this.responseText == 'inv_size') {
                    alert('error', 'Image should be less than 2MB!', 'image-alert');
                } else if (this.responseText == 'upd_failed') {
                    alert('error', 'Image upload failed. Server Down!', 'image-alert');
                } else {
                    alert('success', 'New image added', 'image-alert');
                    
                    let khoahoc_name = document.querySelector("#khoahoc-images .modal-title").innerText;
                    khoahoc_images(add_image_form.elements['khoahoc_id'].value, khoahoc_name);
                    
                    add_image_form.reset();
                }
            };

            xhr.send(data);
        }

        function khoahoc_images(id, rname) {
            document.querySelector("#khoahoc-images .modal-title").innerText = rname;
            add_image_form.elements['khoahoc_id'].value = id;
            add_image_form.elements['image'].value = '';

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/khoahoc.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function() {
                document.getElementById('khoahoc-image-data').innerHTML = this.responseText;
            }
            xhr.send('get_khoahoc_images=' + id);
        }

        function rem_image(img_id, khoahoc_id) {
            let data = new FormData();
            data.append('img_id', img_id);
            data.append('khoahoc_id', khoahoc_id);
            data.append('rem_image', '');

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/khoahoc.php", true);

            xhr.onload = function () {
                if (this.responseText == 1) {
                    alert('success', 'Image Removed', 'image-alert');
                    khoahoc_images(khoahoc_id, document.querySelector("#khoahoc-images .modal-title").innerText);
                }
                else {
                    alert('error', 'Image removal failed!', 'image-alert');
                }
            };

            xhr.send(data);
        }

        function thumb_image(img_id, khoahoc_id) {
            let data = new FormData();
            data.append('img_id', img_id);
            data.append('khoahoc_id', khoahoc_id);
            data.append('thumb_image', '');

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/khoahoc.php", true);

            xhr.onload = function () {
                if (this.responseText == 1) {
                    alert('success', 'Image Thumbnail Changed', 'image-alert');
                    khoahoc_images(khoahoc_id, document.querySelector("#khoahoc-images .modal-title").innerText);
                }
                else {
                    alert('error', 'Thumbnail update failed!', 'image-alert');
                }
            };

            xhr.send(data);
        }

        window.onload = function() {
            get_all_khoahoc();
        }

    </script>

</body>
</html>

