<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
    function alert(type, msg, position = 'body') {
        let bs_class = (type === 'success') ? 'alert-success' : 'alert-danger'; 
        let element = document.createElement('div'); 
        element.innerHTML = `
            <div class="alert ${bs_class} alert-dismissible fade show" role="alert">
                <strong class="me-3">${msg}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        `; 

        let alertBox = element.firstElementChild;

        if (position === 'body') {
            document.body.appendChild(alertBox);
            alertBox.classList.add('custom-alert');
        } else {
            let alertContainer = document.getElementById(position);
            if (alertContainer) {
                alertContainer.appendChild(alertBox);
            } else {
                console.error(`Lỗi: Không tìm thấy phần tử có id="${position}".`);
                return;
            }
        }

        setTimeout(() => alertBox.remove(), 2000);  // Xóa alert sau 2 giây
    }

    function setActive() {
        let navbar = document.getElementById('dashboard-menu'); 
        let a_tags = navbar.getElementsByTagName('a'); 

        for (let i = 0; i < a_tags.length; i++) {
            let file = a_tags[i].href.split('/').pop(); 
            let file_name = file.split('.')[0]; 

            if (document.location.href.indexOf(file_name) >= 0) {
                a_tags[i].classList.add('active'); 

                // Chỉnh lại màu sắc để tránh bị ẩn chữ
                a_tags[i].style.backgroundColor = "#ffffff"; 
                a_tags[i].style.setProperty("color", "#aa4c06", "important"); 
                a_tags[i].style.setProperty("display", "flex", "important");
                a_tags[i].style.fontWeight = "bold"; 
                a_tags[i].style.alignItems = "center";  
                a_tags[i].style.justifyContent = "start";  
                a_tags[i].style.padding = "10px 15px";  
                a_tags[i].style.width = "100%";  
                a_tags[i].style.boxSizing = "border-box";  
            }
        }
    }

    setActive(); 

</script>