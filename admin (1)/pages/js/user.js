const sideMenu = document.querySelector("aside");
const menuBtn = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#close-btn");

menuBtn.addEventListener('click', () => {
    sideMenu.style.display = 'block';
})

closeBtn.addEventListener('click', () => {
    sideMenu.style.display = 'none';
})


// Sửa khách hàng
// Lấy các nút sửa khách hàng
const editButtons = document.querySelectorAll('.edit');
// Popup sửa khách hàng
const editPopup = document.getElementById('editPopup');
const popupCloseButtons = document.querySelectorAll('.popup-close');

// Form sửa khách hàng và các trường trong form
const editForm = document.getElementById('editUserForm');
const editUserId = document.getElementById('editUserId');
const editNickname = document.getElementById('editNickname');
const editUserPass = document.getElementById('editUserPass');
const editUserName = document.getElementById('editUserName');
const editAddress = document.getElementById('editAddress');
const editEmail = document.getElementById('editEmail');
const editTel = document.getElementById('editTel');

// Xử lý sự kiện nhấn nút sửa
editButtons.forEach((button) => {
  button.addEventListener('click', (e) => {
    // Lấy hàng (row) khách hàng tương ứng
    const row = button.closest('tr');

    // Thu thập thông tin từ các cột
    const userId = row.cells[0].textContent.trim();
    const userNickname = row.cells[1].textContent.trim();
    const userPass = row.cells[2].textContent.trim();
    const userName = row.cells[3].textContent.trim();
    const userAddress = row.cells[4].textContent.trim();
    const userEmail = row.cells[5].textContent.trim();
    const userTel = row.cells[6].textContent.trim();

    // Điền thông tin vào popup sửa
    editUserId.value = userId;
    editNickname.value = userNickname;
    editUserPass.value = userPass;
    editUserName.value = userName;
    editAddress.value = userAddress;
    editEmail.value = userEmail;
    editTel.value = userTel;

    // Hiển thị popup
    editPopup.classList.remove('hidden');
  });
});

// Function to open the popup
function openPopup() {
    document.getElementById('editPopup').classList.remove('hidden');
  }
  
  // Function to close the popup
  function closePopup() {
    document.getElementById('editPopup').classList.add('hidden');
  }

// Đóng popup khi nhấn nút đóng
popupCloseButtons.forEach((button) => {
  button.addEventListener('click', () => {
    editPopup.classList.add('hidden');
  });
});

// Lấy tất cả các nút khóa
const lockButtons = document.querySelectorAll('.lock');
const lockPopup = document.getElementById('lock-popup');
const confirmLock = document.getElementById('confirm-lock');
const cancelLock = document.getElementById('cancel-lock');

// Lưu trữ hàng người dùng đang được xử lý
let targetRow = null;

// Xử lý khi nhấn nút khóa/mở khóa
lockButtons.forEach((button) => {
  button.addEventListener('click', (event) => {
    targetRow = event.target.closest('tr'); // Lấy dòng người dùng
    const currentAction = button.getAttribute('title'); // Lấy hành động hiện tại (Khóa/Mở khóa)

    if (currentAction === 'Khóa') {
      lockPopup.querySelector('h3').textContent = 'Bạn có chắc chắn muốn khóa người dùng này?';
      confirmLock.textContent = 'Khóa';
    } else if (currentAction === 'Mở khóa') {
      lockPopup.querySelector('h3').textContent = 'Bạn có chắc chắn muốn mở khóa người dùng này?';
      confirmLock.textContent = 'Mở khóa';
    }

    lockPopup.classList.remove('hidden'); // Hiển thị popup xác nhận
  });
});

// Xử lý xác nhận khóa/mở khóa
confirmLock.addEventListener('click', () => {
  if (targetRow) {
    const lockButton = targetRow.querySelector('.lock');
    const lockIcon = lockButton.querySelector('i');

    if (lockButton.getAttribute('title') === 'Khóa') {
      // Đổi thành trạng thái "Mở khóa"
      lockButton.setAttribute('title', 'Mở khóa');
      lockButton.innerHTML = '<i class="fa-solid fa-lock"></i>'; // Thay đổi biểu tượng
      lockButton.classList.add('locked'); // Thêm lớp 'locked'
    } else {
      // Đổi thành trạng thái "Khóa"
      lockButton.setAttribute('title', 'Khóa');
      lockButton.innerHTML = '<i class="fa-solid fa-lock-open"></i>'; // Thay đổi biểu tượng
      lockButton.classList.remove('locked'); // Xóa lớp 'locked'
    }
  }

  lockPopup.classList.add('hidden'); // Ẩn popup
  targetRow = null; // Reset hàng đang xử lý
});

// Xử lý hủy popup
cancelLock.addEventListener('click', () => {
  lockPopup.classList.add('hidden'); // Ẩn popup
  targetRow = null; // Reset hàng đang xử lý
});
