<!DOCTYPE php>
<php lang="vi">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script 
          src="https://kit.fontawesome.com/435cea2233.js" 
          crossorigin="anonymous"
        ></script>
        <link rel="stylesheet" href="css/products.css"/>
        <title>Quản lý sản phẩm</title>
    </head>
    <body>
        <div class="container">
          <aside>
            <div class="top">
              <div class="logo">
                <a href="/index.php"><img src="images/logo.jpg" alt="logo"></a>
                <h1>Bread House</h1>
              </div>
              <div class="close" id="close-btn">
                <i class="fa-solid fa-xmark"></i>
              </div>
            </div>

            <div class="sidebar">
              <a href="../admin.php" class="active">
                <i class="fa-solid fa-table-columns" title="Bảng tin"></i>
                <h3>Bảng tin</h3>
              </a>
              <a href="products.php" class="active">
                <i class="fa-solid fa-cubes-stacked" title="Sản phẩm"></i>
                <h3>Sản phẩm</h3>
              </a>
              <a href="user.php" class="active">
                <i class="fa-solid fa-user" title="Khách hàng"></i>
                <h3>Khách hàng</h3>
              </a>
              <a href="orders.php" class="active">
                <i class="fa-solid fa-truck-fast" title="Đơn hàng"></i>
                <h3>Đơn hàng</h3>
              </a>
              <a href="statistics.php" class="active">
                <i class="fa-solid fa-chart-simple" title="Thống kê"></i>
                <h3>Thống kê</h3>
              </a>
              <a href="messages.php" class="active">
                <i class="fa-regular fa-envelope" title="Tin nhắn"></i>
                <h3>Tin nhắn</h3>
                <span class="message-count">2</span>
              </a>
              <a href="../adminlogin.php" class="active">
                <i class="fa-solid fa-right-from-bracket" title="Đăng xuất"></i>
                <h3>Đăng xuất</h3>
              </a>
            </div>
          </aside>
        <!------NGOÀI ASIDE------>
        <!--MAIN-->
        <main>
          <div class="list">
            <h2>Danh sách sản phẩm</h2>
            <table>
              <thead>
                <tr>
                  <th>Mã sản phẩm</th>
                  <th>Tên sản phẩm</th>
                  <th>Ảnh</th>
                  <th>Tình trạng</th>
                  <th>Số lượng</th>
                  <th>Giá tiền</th>
                  <th>Danh mục</th>
                  <th>Chức năng</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>CC01</td>
                  <td>Cupcake Vani Chocolate</td>
                  <td><img src="images/cupcake_1.jpg"></td>
                  <td class="instock">Còn hàng</td>
                  <td>19</td>
                  <td>25.000đ</td>
                  <td>Cupcake</td>
                  <td>
                    <button class="delete" type="button" title="Xóa"><i class="fa-solid fa-trash-can"></i></button>
                    <button class="edit" type="button" title="Sửa"><i class="fa-solid fa-pen-to-square"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>CC02</td>
                  <td>Cupcake Red Velvet</td>
                  <td><img src="images/cupcake_2.jpg"></td>
                  <td class="instock">Còn hàng</td>
                  <td>12</td>
                  <td>30.000đ</td>
                  <td>Cupcake</td>
                  <td>
                    <button class="delete" type="button" title="Xóa"><i class="fa-solid fa-trash-can"></i></button>
                    <button class="edit" type="button" title="Sửa"><i class="fa-solid fa-pen-to-square"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>CC03</td>
                  <td>Cupcake Anh Đào</td>
                  <td><img src="images/cupcake_3.jpg"></td>
                  <td class="instock">Còn hàng</td>
                  <td>23</td>
                  <td>30.000đ</td>
                  <td>Cupcake</td>
                  <td>
                    <button class="delete" type="button" title="Xóa"><i class="fa-solid fa-trash-can"></i></button>
                    <button class="edit" type="button" title="Sửa"><i class="fa-solid fa-pen-to-square"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>CC04</td>
                  <td>Cupcake Mâm Xôi</td>
                  <td><img src="images/cupcake_4.jfif"></td>
                  <td class="instock">Còn hàng</td>
                  <td>15</td>
                  <td>25.000đ</td>
                  <td>Cupcake</td>
                  <td>
                    <button class="delete" type="button" title="Xóa"><i class="fa-solid fa-trash-can"></i></button>
                    <button class="edit" type="button" title="Sửa"><i class="fa-solid fa-pen-to-square"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>CC05</td>
                  <td>Cupcake Caramel</td>
                  <td><img src="images/cupcake_5.jfif"></td>
                  <td class="instock">Còn hàng</td>
                  <td>23</td>
                  <td>30.000đ</td>
                  <td>Cupcake</td>
                  <td>
                    <button class="delete" type="button" title="Xóa"><i class="fa-solid fa-trash-can"></i></button>
                    <button class="edit" type="button" title="Sửa"><i class="fa-solid fa-pen-to-square"></i></button>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="pagination">
              <a href="#">&laquo;</a>
              <a href="products.php">1</a>
              <a href="#" class="active">2</a>
              <a href="pdpage3.php">3</a>
              <a href="pdpage4.php">4</a>
              <a href="pdpage5.php">5</a>
              <a href="#">&raquo;</a>
            </div>
          </div>
        </main>

        <!--TOP-->
        <div class="right">
            <div class="top">
              <button id="menu-btn">
                <i class="fa-solid fa-bars"></i>
              </button>
              <div class="profile">
                <div class="info">
                  <p>Hé lô, <b>Kyle</b></p>
                  <p>Quản trị viên</p>
                </div>
                <div class="profile-photo">
                  <img src="images/adminpic.png" alt="adminpic"/>
                </div>
              </div>
            </div>
          
          <div class="tools">
            <h2>Tùy chọn</h2>
            <div class="item add">
              <div class="icon">
                <i class="fa-solid fa-plus"></i>
              </div>
              <div class="right">
                <div class="info">
                  <a href="addproducts.php"><h3>Thêm sản phẩm</h3></a>
                </div>
              </div>
            </div>
          </div>
            
        </div>
        
        <!-- Khung sửa sản phẩm Popup -->
        <div id="editPopup" class="popup hidden">
          <div class="popup-content">
              <h3>Sửa sản phẩm</h3>
              <form id="editProductForm">
                  <label for="editProductId">Mã sản phẩm</label>
                  <input type="text" id="editProductId" readonly />

                  <label for="editProductName">Tên sản phẩm</label>
                  <input type="text" id="editProductName" />

                  <label>Hình ảnh:</label>
                  <div class="product-image">
                    <img id="editProductImage" src="" alt="Product Image" />
                    <button type="button" id="removeImage">Bỏ hình</button>
                    <input type="file" id="newProductImage" accept="image/*" style="display: none;" />
                    <label for="newProductImage" id="chooseImageButton" style="display: none;">Chọn hình khác</label>
                  </div>

                  <label for="editProductStatus">Tình trạng</label>
                  <select id="editProductStatus" name="editProductStatus">
                    <option>--Chọn tình trạng--</option>
                    <option value="outstock">Hết hàng</option>
                    <option value="instock">Còn hàng</option>
                  </select>

                  <label for="editProductAmount">Số lượng</label>
                  <input type="text" id="editProductAmount" />

                  <label for="editProductPrice">Giá tiền</label>
                  <input type="text" id="editProductPrice" />

                  <label for="editProductCategory">Danh mục</label>
                  <input type="text" id="editProductCategory" />

                  <div class="popup-actions">
                      <button type="button" class="cancel" onclick="closePopup()">Hủy</button>
                      <button type="submit" class="confirm">Lưu thay đổi</button>
                  </div>
              </form>
          </div>
        </div>

      <!-- Popup xác nhận xóa -->
      <div id="delete-popup" class="popup hidden">
        <div class="popup-content">
            <h3>Bạn có chắc chắn muốn xóa sản phẩm này?</h3>
            <div class="popup-buttons">
              <button id="cancel-delete" class="cancel">Hủy</button>
              <button id="confirm-delete" class="confirm">Xóa</button>
            </div>
        </div>
      </div>

      <script src="js/products.js"></script>
    </body>
</php>