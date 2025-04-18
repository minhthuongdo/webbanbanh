<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script 
      src="https://kit.fontawesome.com/435cea2233.js" 
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="../css/ThongTin.css"/>
    <title>Cake & Cake</title>
    <link rel="shortcut icon" type="Imageslogo" href="../Images/logo.jpg">
    <link rel="stylesheet" href="../css/ThongTin.css">
    <!-- BOOSTRAP -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
    <header class="header">
        <div class="logo">
          <img src="../Images/panner.jpg" alt="Logo" class="ImagesLogo">
        </div>
        <nav class="navbar">
          <a href="../User/User.php">TRANG CHỦ</a>
          <a href="../User/User.php">SẢN PHẨM</a>
          <a href="../Sp/bestseller.php">BÁN CHẠY</a>
          <a href="../User/User.php#contact">LIÊN HỆ</a>
          <a href="../User/User.php#About">GIỚI THIỆU</a>
        </nav>
        <div class="icons">
            <div class="search-icon" ><i class="fa-solid fa-magnifying-glass"></i></div>
            <div class="cart-icon"><i class="fa-solid fa-cart-plus"></i></div>
            <a href="../User/profile.php" class="user-icon"><i class="fa-solid fa-user"></i></a>
            <div class="menu-icon"><i class="fas fa-bars"></i></div>
        </div>
    </header>
    <!-- PAYMENT  -->
    <section class="payment container">
        <div class="payment__content row">
            <div class="payment__content__left col-6">
                <h3>Thông tin giao hàng</h3>
                <form class="payment--form" method="post" action="" onsubmit="return thanks()">
                    <!-- Họ tên  -->
                    <label for="payment--receiver"><i class="fas fa-user"></i> Họ tên</label>
                    <input type="text" id="payment--receiver" required placeholder="Tên người nhận hàng">
                    <!-- Điện thoại  -->
                    <label for="payment--phone"><i class="fas fa-phone-volume"></i> Điện thoại</label>
                    <input type="tel" id="payment--phone" required pattern="(84|0[3|5|7|8|9])+([0-9]{8})\b"
                        placeholder="Số điện thoại người nhận hàng">
                    <!-- Địa chỉ  -->
                    <label for="payment--adr"><i class="far fa-address-card"></i></i> Địa chỉ</label>
                    <input type="text" id="payment--adr" required placeholder="Địa chỉ nhận hàng">
                    <input type="checkbox" id="payment--defaul">
                    <label for="payment--defaul"> Sử dụng thông tin mặc
                        định <i class="far fa-question-circle">
                            <div class="more-info">Thông tin về họ tên, số điện thoại, địa chỉ mà bạn lưu trong tài
                                khoản (nếu có) </div>
                        </i> </label>
                    <!-- Ghi chú  -->
                    <label for="payment--note"><i class="far fa-comment"></i></i> Ghi chú</label>
                    <textarea type="text" name="user-note" id="payment--note" rows="3"
                        placeholder="Ghi yêu cầu của bạn tại đây."></textarea>
                    <!-- Button trigger modal -->
                    <button type="submit" class="payment--button" name="payment--button"  onclick="redirectToFile()" >
                       <a href="../User/DonHang.php"> Đặt hàng </a>
                    </button>
                </form>
            </div>
            <div class="payment__content__right col-6">
                <h3>Phương thức thanh toán</h3>
                <label>Chọn phương thức:</label>
                <div class="btn-group" id="payment__method" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" name="btnradio" id="btnradio1" autocomplete="off" checked>
                    <label class="btn active" for="btnradio1"><img
                            src="https://bizweb.dktcdn.net/100/421/124/themes/811860/assets/cart_payment_1.svg?1617678628801"
                            alt="Hình thức thanh toán"></label>
                    
                    <input type="radio" class="" name="btnradio" id="btnradio2" autocomplete="off">
                    <label class="btn " for="btnradio2"><img
                            src="https://bizweb.dktcdn.net/100/421/124/themes/811860/assets/cart_payment_2.svg?1617678628801"
                            alt="Hình thức thanh toán"></label>
                    <div class="payment__method--master payment__method">
                        <p>Phương thức hiện tại không khả dụng.</p>
                    </div>
                    <input type="radio" class="" name="btnradio" id="btnradio3" autocomplete="off">
                    <label class="btn " for="btnradio3"><img
                            src="https://bizweb.dktcdn.net/100/421/124/themes/811860/assets/cart_payment_3.svg?1617678628801"
                            alt="Hình thức thanh toán"></label>
                    <div class="payment__method--bank payment__method">
                        <p>1. Ngân hàng Quân Đội MB
                            <br>
                            STK: 0901234567
                            <br>
                            Chủ Tài Khoản: Nguyen Van A
                            <br>
                            Nội dung: SĐT + họ tên
                            <br>
                           
                        </p>
                    </div>

                    <input type="radio" class="" name="btnradio" id="btnradio4" autocomplete="off">
                    <label class="btn " for="btnradio4"><img
                            src="https://bizweb.dktcdn.net/100/421/124/themes/811860/assets/cart_payment_4.svg?1617678628801"
                            alt="Hình thức thanh toán"></label>
                    <div class="payment__method--money payment__method">
                        <p>Quý khách chỉ phải thanh toán khi nhận được hàng - Chi phí vận chuyển và thời gian vận chuyển
                            sẽ được nhân viên gọi điện xác nhận!
                            <br> <br>
                            Để đảm bảo giải quyết các vấn đề phát sinh về đơn hàng một cách minh bạch, quý khách vui
                            lòng quay lại video khi mở hàng.
                            <br> <br>

                            Trong trường hợp shop gửi thiếu hàng, hỏng hàng, sai hàng quý khách vui lòng phản hồi và
                            gửi lại video cho shop để kiểm chứng, cửa hàng sẽ tiến hành bù hoàn sau khi đã xác nhận.
                            <br> <br>

                            Trường hợp không có video bóc hàng shop xin TỪ CHỐI giải quyết.
                        </p>
                    </div>



                </div>
            </div>
        </div>
    </section>

   
     <!--footer begins-->
     <footer class="footer">
        <div class="social-media">
            <a href="" class="fab fa-facebook-f"></a>
            <a href="" class="fab fa-twitter"></a>
            <a href="" class="fab fa-instagram"></a>
            <a href="" class="fab fa-linkedin"></a>
            <a href="" class="fab fa-pinterest-p"></a>
          <p>Khung giờ hoạt động: 9:00 - 22:30</p>
          <p>Các ngày trong tuần</p>
          <p>2024 by The Cake&Cake Group</p>
            </div>
        </footer>
    <!-- Back to top  -->
    <a href="#" class="BackToTop cd-top text-replace js-cd-top">
        <i class="fa fa-angle-up"></i>
    </a>

    <Script>
        // kiếm thẻ có id là mainNav 
        //kiếm thẻ ul
        var paymentMethod = document.getElementById("payment__method");
        // kiếm thẻ con li 
        var listMethod = paymentMethod.getElementsByTagName("label");
        for (var i = 0; i < listMethod.length; i++) {
            // khi thẻ li đc click thì gọi hàm nó ra
            listMethod[i].addEventListener("click", function () {
                //tìm thẻ nào đang đc gắn acitve
                var current = document.querySelector("#payment__method .active");
                // xóa class active của thẻ đang được gắn
                current.className = current.className.replace("active", "");
                // thêm class active vào thẻ li được click 
                this.className += "active";

            });


        }
    </Script>
    <!-- CHECK DATA  -->
    <script>
       document.addEventListener("DOMContentLoaded", function () {
    var paymentMethod = document.getElementById("payment__method");
    var listMethod = paymentMethod.getElementsByTagName("label");
    var receiver = document.getElementById("payment--receiver");
    var phone = document.getElementById("payment--phone");
    var address = document.getElementById("payment--adr");
    var submitButton = document.querySelector(".payment--button");

    // Kiểm tra thông tin trước khi chọn phương thức thanh toán
    for (var i = 0; i < listMethod.length; i++) {
        listMethod[i].addEventListener("click", function (e) {
            if (
                receiver.value.trim() === "" ||
                phone.value.trim() === "" ||
                address.value.trim() === ""
            ) {
                alert("Vui lòng nhập đầy đủ thông tin giao hàng trước khi chọn phương thức thanh toán.");
                e.preventDefault(); // Ngăn hành động mặc định
                return;
            }

            // Xóa class active trước đó
            var current = document.querySelector("#payment__method .active");
            if (current) {
                current.classList.remove("active");
            }

            // Thêm class active cho phương thức được chọn
            this.classList.add("active");
        });
    }

    // Kiểm tra thông tin trước khi nhấn nút Đặt hàng
    submitButton.addEventListener("click", function (e) {
        if (
            receiver.value.trim() === "" ||
            phone.value.trim() === "" ||
            address.value.trim() === ""
        ) {
            alert("Vui lòng nhập đầy đủ thông tin giao hàng trước khi đặt hàng.");
            e.preventDefault(); // Ngăn hành động mặc định
            return;
        }
    });
});

    </script>
    
     <script src="../js/script.js"></script>
</body>

</php>