const sideMenu = document.querySelector("aside");
const menuBtn = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#close-btn");

menuBtn.addEventListener('click', () => {
    sideMenu.style.display = 'block';
})

closeBtn.addEventListener('click', () => {
    sideMenu.style.display = 'none';
})


// Sửa sản phẩm
// Lấy các nút sửa sản phẩm
const editButtons = document.querySelectorAll('.edit');
// Popup sửa sản phẩm
const editPopup = document.getElementById('editPopup');
const popupCloseButtons = document.querySelectorAll('.popup-close');

// Form sửa sản phẩm và các trường trong form
const editForm = document.getElementById('editProductForm');
const editProductId = document.getElementById('editProductId');
const editProductName = document.getElementById('editProductName');
const editProductImage = document.getElementById('editProductImage');
const editProductStatus = document.getElementById('editProductStatus');
const editProductAmount = document.getElementById('editProductAmount');
const editProductPrice = document.getElementById('editProductPrice');
const editProductCategory = document.getElementById('editProductCategory');

// Xử lý sự kiện nhấn nút sửa
editButtons.forEach((button) => {
  button.addEventListener('click', (e) => {
    // Lấy hàng (row) sản phẩm tương ứng
    const row = button.closest('tr');

    // Thu thập thông tin từ các cột
    const productId = row.cells[0].textContent.trim();
    const productName = row.cells[1].textContent.trim();
    const productImageSrc = row.cells[2].querySelector('img').src;
    const productStatus = row.cells[3].textContent.trim() === "Còn hàng" ? "instock" : "outstock";
    const productAmount = row.cells[4].textContent.trim();
    const productPrice = row.cells[5].textContent.trim();
    const productCategory = row.cells[6].textContent.trim();

    // Điền thông tin vào popup sửa
    editProductId.value = productId;
    editProductName.value = productName;
    editProductImage.src = productImageSrc;
    editProductStatus.value = productStatus;
    editProductAmount.value = productAmount;
    editProductPrice.value = productPrice;
    editProductCategory.value = productCategory;

    // Hiển thị popup
    editPopup.classList.remove('hidden');
  });
});

// Bỏ hình ảnh trong popup
const removeImageButton = document.getElementById('removeImage');
removeImageButton.addEventListener('click', removeProductImage);

// Sự kiện chọn ảnh mới
const newImageInput = document.getElementById('newProductImage');
newImageInput.addEventListener('change', () => {
  const file = newImageInput.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = function (e) {
      document.getElementById('editProductImage').src = e.target.result; // Hiển thị ảnh mới
      document.getElementById('editProductImage').style.display = 'block'; // Hiện ảnh
      document.getElementById('removeImage').style.display = 'inline-block'; // Hiện nút "Bỏ hình"
    };
    reader.readAsDataURL(file); // Đọc file ảnh
  }
});

// Xử lý sự kiện "Bỏ hình"
function removeProductImage() {
  const imageElement = document.getElementById('editProductImage');
  const fileInput = document.getElementById('newProductImage');
  const chooseButton = document.getElementById('chooseImageButton');

  // Ẩn ảnh hiện tại và nút "Bỏ hình"
  imageElement.src = ''; // Xóa link ảnh
  imageElement.style.display = 'none';
  document.getElementById('removeImage').style.display = 'none';

  // Hiển thị input file và "Chọn hình khác"
  fileInput.style.display = 'block';
  chooseButton.style.display = 'block';
}

// Đóng popup khi nhấn nút Hủy
function closePopup() {
  document.getElementById('editPopup').classList.add('hidden');

  // Reset image section
  const imageElement = document.getElementById('editProductImage');
  const fileInput = document.getElementById('newProductImage');
  const chooseButton = document.getElementById('chooseImageButton');

  imageElement.src = ''; // Reset ảnh
  imageElement.style.display = 'block';
  document.getElementById('removeImage').style.display = 'inline-block';
  fileInput.style.display = 'none';
  chooseButton.style.display = 'none';
}

// Đóng popup bằng nút đóng
popupCloseButtons.forEach((button) => {
  button.addEventListener('click', closePopup);
});



// Xóa sản phẩm
// Lấy các phần tử
const deleteButtons = document.querySelectorAll('.delete');
const popup = document.getElementById('delete-popup');
const confirmDelete = document.getElementById('confirm-delete');
const cancelDelete = document.getElementById('cancel-delete');

// Lưu trữ sản phẩm cần xóa
let selectedRow = null;

// Xử lý khi nhấn nút xóa
deleteButtons.forEach((button) => {
    button.addEventListener('click', (event) => {
        selectedRow = event.target.closest('tr'); // Lấy dòng sản phẩm
        popup.classList.remove('hidden'); // Hiển thị popup
    });
});

// Xử lý xác nhận xóa
confirmDelete.addEventListener('click', () => {
    if (selectedRow) {
        selectedRow.remove(); // Xóa sản phẩm khỏi bảng
        selectedRow = null;
    }
    popup.classList.add('hidden'); // Ẩn popup
});

// Xử lý hủy
cancelDelete.addEventListener('click', () => {
    popup.classList.add('hidden'); // Ẩn popup
});
