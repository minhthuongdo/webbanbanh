<!DOCTYPE php>
<php lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script 
          src="https://kit.fontawesome.com/435cea2233.js" 
          crossorigin="anonymous"
        ></script>
        <link rel="stylesheet" href="../css/index.css"/>
        <title>Cake & Cake</title>
        <link rel="shortcut icon" type="Imageslogo" href="../Images/logo.jpg">
        <link rel="stylesheet" href="../css/index.css">
        <!-- BOOSTRAP -->
        <link rel="stylesheet" href="./css/bootstrap.min.css">
    </head>
    <body>
        <header class="header">
            <div class="logo">
              <img src="../Images/panner.jpg" alt="Logo" class="ImagesLogo">
            </div>
            <nav class="navbar">
              <a href="../index.php">TRANG CHỦ</a>
              <div class="dropdown">
                <button class="dropbtn" onclick="toggleDropdown(event)">SẢN PHẨM</button>
                <div class="dropdown-content">
                  <a href="../Sp/Cookies_index.php">Cookie</a>
                  <a href="../Sp/Donut_index.php">Donut</a>
                  <a href="../Sp/Cupcake_index.php">Cupcake</a>
                  <a href="../Sp/Bento_index.php">Bánh kem</a>
                  <a href="../Sp/SuKem_index.php">Su kem</a>
                </div>
              </div>
              <a href="../Sp/bestseller_index.php">BÁN CHẠY</a>
              <a href="#contact">LIÊN HỆ</a>
              <a href="#About">  GIỚI THIỆU </a>
            </nav>
            <div class="icons">
                <div class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></div>
                <div class="cart-icon" onclick="handleCartClick(event)"><i class="fa-solid fa-cart-plus"></i></div>
                <div class="user-icon"><i class="fa-solid fa-user"></i></div>
                <div class="menu-icon"><i class="fas fa-bars"></i></div>
            </div> 
         
            
            <div class="search-form">
                <form onsubmit="return handleSearch(event)">
                    <input 
                        type="search" 
                        name="search" 
                        id="search-box" 
                        placeholder="Search here..." 
                        required
                    />
                    <button class="search-button" type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </div>

            
            <div class="user-form">
                <a class="chs" href="../User/login.php">Đăng nhập</a><a class="chs" href="../User/signup.php">Đăng ký</a>
            </div>
        </header>
        <section class="home" id="home">
            <h3 class="title">our<span> cakes</span></h3>
            <div class="hero">
                <h3>Gửi trọn yêu thương</h3>
                <a class="btn1" href="">Đặt hàng ngay</a>
            </div>
        </section>

                <!--Cake-->
         <!--Cake-->
         <section class="cakes" id="cakes">
            <h3 class="title"> Bánh<span> cookies</span></h3>
            <div class="wrapper" id="cake-list">
                <div class="cake-card">
                    <img src="../Images/banhquy__2.jpg" alt="" />
                    <h3>Cookies Chocolate Chip</h3>
                    <div class="price">30.000</div>
                    <a class="btn " href="#" onclick="handleCartClick(event)">Thêm vào giỏ hàng</a>
                    <a class="btn " href="#" onclick="handleCartClick(event)">Xem thông tin </a>
                </div>
                <div class="cake-card">
                    <img src="../Images/banhquy_1.jpg" alt="" />
                    <h3>Cookies Giáng Sinh</h3>
                    <div class="price">30.000</div>
                    <a class="btn " href="#" onclick="handleCartClick(event)">Thêm vào giỏ hàng</a>
                    <a class="btn " href="#" onclick="handleCartClick(event)">Xem thông tin </a>
                </div>
                <div class="cake-card">
                    <img src="../Images/banhquy_3.jpg" alt="" />
                    <h3>Cookies Chocolate</h3>
                    <div class="price">30.000</div>
                    <a class="btn " href="#" onclick="handleCartClick(event)">Thêm vào giỏ hàng</a>
                    <a class="btn " href="#" onclick="handleCartClick(event)">Xem thông tin </a>
                </div>
                <div class="cake-card">
                    <img src="../Images/banhquy_4.jpg" alt="" />
                    <h3>Cookies Dâu Sprinkles</h3>
                    <div class="price">30.000</div>
                    <a class="btn " href="#" onclick="handleCartClick(event)">Thêm vào giỏ hàng</a>
                    <a class="btn " href="#" onclick="handleCartClick(event)">Xem thông tin </a>
                </div>
                <div class="cake-card">
                    <img src="../Images/banhquy_5.jfif" alt="" />
                    <h3>Cookies Redvelvet</h3>
                    <div class="price">30.000</div>
                    <a class="btn " href="#" onclick="handleCartClick(event)">Thêm vào giỏ hàng</a>
                    <a class="btn " href="#" onclick="handleCartClick(event)">Xem thông tin </a>
                </div>
            </div>
        </section>
       
                    <!--thanh tang giam so luong banh-->
                        <div class="quantity-selector">
                            <button onclick="decrement()">-</button>
                            <input type="number" id="quantity" value="1" min="1" />
                            <button onclick="increment()">+</button>
                        </div>
           
        <!--Contact us-->
        <section class="contact" id="contact">
            <h1 class="title"><span>Liên hệ</span> cửa hàng</h1>
            <div class="contents">
                <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.6697268382204!2d106.68225830000002!3d10.7599171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f1b7c3ed289%3A0xa06651894598e488!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBTw6BpIEfDsm4!5e0!3m2!1svi!2s!4v1729568511652!5m2!1svi!2s" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
    
                </iframe>
                <form action="">
                     <h3>Liên hệ ngay</h3>
                     <div class="input-box">
                        <span class="fas fa-user">
                           
                            <a href=""> Cake&Cake</a>
                      
                        </span>
                        
                        </div>
                        <div class="input-box">
                            <span class="fas fa-envelope">

                                <a href=""> Cakeandcake@gmail.com</a>
                            </span>
                            
                            </div>
                            <div class="input-box">
                                <span class="fas fa-phone">
                                    <a href="">  0901234567 </a>
                                </span>
                              
                                </div>
                                <div class="input-box">
                                    
                                     <span class="fas fa-map-marker-alt">
                                      <a href=""> <br>Cơ sở chính: 273 An Dương Vương, Quận 5, Thành phố Hồ Chí Minh</br></a>
                                       
                                       <a href=""><br>Cơ sở 1: 105 Bà Huyện Thanh Quan, Quận 3, Thành phố Hồ Chí Minh</br> </a>
                                       <a href=""> <br>Cơ sở 2: 04 Tôn Đức Thắng, Quận 1, Thành phố Hồ Chí Minh</br> </a>

                                       <a class="btn " href="" >Contact now</a>
                                    </span>
                                  
                                    </div>
                                
                               
                </form>
        </section>
        <!-- Thông báo -->
        <div class="notification">
          <div class="content">
            <div class="close-btn" onclick="hideNotification()">✖</div>
            <p><strong>Bạn vui lòng đăng nhập hay đăng ký để tiếp tục</strong></p>
            <button onclick="location.href='../User/signup.php'">Đăng ký</button>
            <button onclick="location.href='../User/login.php'">Đăng nhập</button>
          </div>
        </div>

                <!--About-->
                <div class="section about" id="About">
                    <h1 class="title"><span>About</span> us</h1>
                    <div class="container">
                        <div class="img">
                            <img src="../Images/about.png" alt=""/>
                            </div>
                            <div class="content">
                                <p>Ở tiệm bánh Cake&Cake, mỗi chiếc bánh là một câu chuyện riêng với hơi thở và tinh thần chẳng thể lẫn vào đâu được.</p>
                                <p>Chúng mình – những người thợ làm bánh thủ công luôn cố gắng tôn trọng tính nguyên bản, tự nhiên và chân thật nhất của từng nguyên liệu. 
                                    Để dù có những bất toàn trong mỗi thứ riêng rẽ nhưng sau cùng vẫn tạo nên một ổ bánh hài hòa và ngon nhất.</p>
                                <p>Vậy nên, bất cứ khi nào bạn cần những hương vị mộc mạc, tinh tế nhưng chẳng kém phần hấp dẫn, hãy đến với chúng mình. 
                                    Luôn có rất nhiều những điều đặc biệt đợi bạn khám phá đó nhé!</p>
                           <a href="" class="btn">learn more</a>
                           
                            </div>
                        </div>
                    </div>
                    
                    <hr class="small-line">
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
        <script src="../js/script.js"></script>
        <script src="../B09/js/Timkiem_index.js"></script>
    </body>
</php>