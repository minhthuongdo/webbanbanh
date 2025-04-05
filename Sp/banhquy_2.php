<!DOCTYPE php>
<php lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script
        src="https://kit.fontawesome.com/435cea2233.js" 
        crossorigin="anonymous"
    ></script>
    <link rel="shortcut icon" type="Imageslogo" href="../Images/logo.jpg">
    <title>Thông tin bánh</title>
    <link rel="stylesheet" href="../css/form1.css">
</head>
<body>
    <header class="header">
        <div class="logo">
          <img src="../Images/panner.jpg" alt="Logo" class="ImagesLogo">
        </div>
        <nav class="navbar">
          <a href="../User/User.php">TRANG CHỦ</a>
          <div class="dropdown">
            <button class="dropbtn" onclick="toggleDropdown(event)">SẢN PHẨM</button>
            <div class="dropdown-content">
              <a href="../Sp/Cookies.php">Cookie</a>
              <a href="../Sp/Donut.php">Donut</a>
              <a href="../Sp/Cupcake.php">Cupcake</a>
              <a href="../Sp/Bento.php">Bánh kem</a>
              <a href="../Sp/SuKem.php">Su kem</a>
            </div>
          </div>
          <a href="../Sp/bestseller.php">BÁN CHẠY</a>
          <a href="#contact">LIÊN HỆ</a>
          <a href="#About">GIỚI THIỆU</a>
        </nav>
        <div class="icons">
            <div class="search-icon" ><i class="fa-solid fa-magnifying-glass"></i></div>
            <div class="cart-icon">
                <i class="fas fa-shopping-cart"></i>
                <span id="cart-count">0</span> <!-- Số lượng sản phẩm trong giỏ -->
            </div>
            <a href="../User/profile.php" class="user-icon"><i class="fa-solid fa-user"></i></a>
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
    <section class="form" id="about-us">
        <div class="container">
            <div class="img" id="banhxukem">
                <img src="../Images/banhquy__2.jpg" alt=""/>
                </div>
                <div class="content">
                   <h1 class="title"><span>Cookies </span>Chocolate Chip</h1>
                   <p>Thành phần:</p>
                   <p>Bột mì, bơ, đường, trứng, sữa, vani, chocolate chips,...</p>
                   <p>Cách bảo quản: </p>
                   <p>Nên bảo quản bánh ở nhiệt độ phòng, khoảng 20-25°C.
                   <!DOCTYPE php>
<php lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script 
          src="https://kit.fontawesome.com/435cea2233.js" 
          crossorigin="anonymous"
        ></script>
        <link rel="stylesheet" href="../B09/css/index.css"/>
        <title>Cake & Cake</title>
        <link rel="shortcut icon" type="Imageslogo" href="../B09/Images/logo.jpg">
        <link rel="stylesheet" href="../B09/css/index.css">
        <!-- BOOSTRAP -->
        <link rel="stylesheet" href="./css/bootstrap.min.css">
    </head>
    <body>

        <header class="header">
            <div class="logo">
              <img src="../B09/Images/panner.jpg" alt="Logo" class="ImagesLogo">
            </div>
            <nav class="navbar">
              <a href="../B09/index.php">TRANG CHỦ</a>
              <div class="dropdown">
                <button class="dropbtn" onclick="toggleDropdown(event)">SẢN PHẨM</button>
                <div class="dropdown-content">
                  <a href="../B09/Sp/Cookies_index.php">Cookie</a>
                  <a href="../B09/Sp/Donut_index.php">Donut</a>
                  <a href="../B09/Sp/Cupcake_index.php">Cupcake</a>
                  <a href="../B09/Sp/Bento_index.php">Bánh kem</a>
                  <a href="../B09/Sp/SuKem_index.php">Su kem</a>
                </div>
              </div>
              <a href="../B09/Sp/bestseller_index.php">BÁN CHẠY</a>
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
                <a class="chs" href="../B09/User/login.php">Đăng nhập</a><a class="chs" href="../B09/User/signup.php">Đăng ký</a>
            </div>
        </header>
        <section class="home" id="home">
            <h3 class="title">Our<span> cakes</span></h3>
            <div class="hero">
                <h3>gửi trọn yêu thương</h3>
                <a class="btn1" href="">Đặt hàng ngay</a>
            </div>
        </section>

                <!--best seller-->
                <section class="Bestseller-cakes" id="BestSeller">
                    <h3 class="title">Sản Phẩm <span>BÁN CHẠY</span></h3>
                    <div class="wrapper">
                        <div class="bestseller-card">
                           
                                <div class="img">
                            <img src="Images/bento_1.jfif" alt="" />
                            </div>
                            <div class="content">
                            <h3>Bánh Kem Chocolate Dâu Tây</h3>
                            <div class="price">250.000</div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                </div>
                                <a class="btn " href="#" onclick="handleCartClick(event)">Thêm vào giỏ hàng</a>
                                <a class="btn" href="../B09/Sp/bento_1.php">
                                    Xem thông tin
                               </a>
                        </div>
                        </div>
        
        <!--bestseller 2-->
        <div class="bestseller-card">
            
                <div class="img">
            <img src="Images/banhxukem4.jpg" alt="" />
            </div>
            <div class="content">
            <h3>Bánh Su Kem Chocolate Vỏ Giòn</h3>
            <div class="price">30.000</div>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                </div>
                <a class="btn " href="#" onclick="handleCartClick(event)">Thêm vào giỏ hàng</a>
                <a class="btn" href="../B09/Sp/xukem_4.php">
                    Xem thông tin
               </a>
        </div>
        </div>

                        <!--best seller 3-->
                        <div class="bestseller-card">
                           
                                <div class="img">
                            <img src="Images/cupcake_2.jpg" alt="" />
                            </div>
                            <div class="content">
                            <h3>Cupcake Red Velvet</h3>
                            <div class="price">30.000</div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                </div>
                                <a class="btn " href="#" onclick="handleCartClick(event)">Thêm vào giỏ hàng</a>
                                <a class="btn" href="../B09/Sp/cupcake_2.php">
                                    Xem thông tin
                               </a>
                                
                        </div>
                        </div>
                        <!--bestseller 4-->
                        <div class="bestseller-card" id="product-image">
                            
                                <div class="img">
                                  
                            <img id="product-image"  src="Images/donut_3.jpg" alt="" />
                          
                        </div>
                            <div class="content">
                            <h3>Bánh Donut Halloween</h3>
                        
                            <div class="price">25.000</div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                </div>
                                <a class="btn " href="#" onclick="handleCartClick(event)">Thêm vào giỏ hàng</a>
                                <a class="btn" href="../B09/Sp/donut_3.php">
                                     Xem thông tin
                                </a>
                        </div>
                        
                        </div>
                </section>
                <!--Cake-->
        <section class="cakes" id="cakes">
            <h3 class="title"> Tất cả <span> SẢN PHẨM </span></h3>
            <div class="wrapper" id="cake-list">
                <div class="cake-card">
                    <img src="Images/bento_1.jfif" alt="" />
                    <h3>Bánh Kem Chocolate Dâu Tây</h3>
                    <div class="price">250.000</div>
                    <a class="btn " href="#" onclick="handleCartClick(event)">Thêm vào giỏ hàng</a>
                    <a class="btn" href="../B09/Sp/bento_1.php">
                        Xem thông tin
                   </a>
                </div>

                <div class="cake-card">
                    <img src="Images/bento_2.jpg" alt="" />
                    <h3>Bánh Kem Xoài</h3>
                    <div class="price">250.000</div>
                    <a class="btn " href="#" onclick="handleCartClick(event)">Thêm vào giỏ hàng</a>
                    <a class="btn" href="../B09/Sp/bento_2.php">
                        Xem thông tin
                   </a>
                </div>

                <div class="cake-card">
                    <img src="Images/bento_3.jpg" alt="" />
                    <h3>Bánh Kem Nho Xanh</h3>
                    <div class="price">280.000</div>
                    <a class="btn " href="#" onclick="handleCartClick(event)">Thêm vào giỏ hàng</a>
                    <a class="btn" href="../B09/Sp/bento_3.php">
                        Xem thông tin
                   </a>
                </div>

                <div class="cake-card">
                    <img src="Images/bento_4.jpg" alt="" />
                    <h3>Bánh Kem Bắp</h3>
                    <div class="price">270.000</div>
                    <a class="btn " href="#" onclick="handleCartClick(event)">Thêm vào giỏ hàng</a>
                    <a class="btn" href="../B09/Sp/bento_4.php">
                        Xem thông tin
                   </a>
                </div>
            </div>
            <div class="pagination">
                <a href="../B09/index.php"><</a>
                <a href="../B09/index.php" class="active">1</a>
                <a href="../B09/Sp/page_2_index.php">2</a>
                <a href="../B09/Sp/page_3_index.php">3</a>
                <a href="../B09/Sp/page_4_index.php">4</a>
                <a href="../B09/Sp/page_2_index.php">></a>
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
                     <h3>Thông tin liên hệ</h3>
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

                                       <a class="btn " href="" >Liên hệ ngay</a>
                                    </span>
                                  
                                    </div>
                                
                               
                </form>
        </section>
        <!-- Thông báo -->
        <div class="notification">
          <div class="content">
            <div class="close-btn" onclick="hideNotification()">✖</div>
            <p><strong>Bạn vui lòng đăng nhập hay đăng ký để tiếp tục</strong></p>
            <button onclick="location.href='../B09/User/signup.php'">Đăng ký</button>
            <button onclick="location.href='../B09/User/login.php'">Đăng nhập</button>
          </div>
        </div>

                <!--About-->
                <div class="section about" id="About">
                    <h1 class="title"><span>Giới thiệu</span> cửa hàng</h1>
                    <div class="container">
                        <div class="img">
                            <img src="../B09/Images/about.png" alt=""/>
                            </div>
                            <div class="content">
                                <p>Ở tiệm bánh Cake&Cake, mỗi chiếc bánh là một câu chuyện riêng với hơi thở và tinh thần chẳng thể lẫn vào đâu được.</p>
                                <p>Chúng mình – những người thợ làm bánh thủ công luôn cố gắng tôn trọng tính nguyên bản, tự nhiên và chân thật nhất của từng nguyên liệu. 
                                    Để dù có những bất toàn trong mỗi thứ riêng rẽ nhưng sau cùng vẫn tạo nên một ổ bánh hài hòa và ngon nhất.</p>
                                <p>Vậy nên, bất cứ khi nào bạn cần những hương vị mộc mạc, tinh tế nhưng chẳng kém phần hấp dẫn, hãy đến với chúng mình. 
                                    Luôn có rất nhiều những điều đặc biệt đợi bạn khám phá đó nhé!</p>
                           <a href="" class="btn">Xem thêm</a>
                           
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
        <script src="../B09/js/script.js"></script>
        <script src="../B09/js/Timkiem_index.js"></script>
    </body>
</php>                Nhiệt độ quá cao có thể làm bánh bị mềm, trở nên dính dính.
                   Không nên để bánh ở tủ lạnh vì độ ẩm có thể làm bánh bị mất độ giòn.
                   Cookies thường có thể được bảo quản trong 3-5 ngày ở nhiệt độ phòng.</p>
                    <div class="price">30.000</div>
                <!--thanh tang giam so luong banh-->
                    <div class="quantity-selector">
                        <button onclick="decrement()">-</button>
                        <input type="number" id="quantity" value="1" min="1" />
                        <button onclick="increment()">+</button>
                    </div>

                <a class="btn" href="javascript:void(0);" onclick="handleAddToCart(14)">Thêm vào giỏ hàng</a>
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
    <script src="../js/form1.js"></script>
    <script src="../js/user.js"></script>
    <script src="../js/cart.js"></script>
</body>
</php>
