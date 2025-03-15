const sideMenu = document.querySelector("aside");
const menuBtn = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#close-btn");

menuBtn.addEventListener('click', () => {
    sideMenu.style.display = 'block';
})

closeBtn.addEventListener('click', () => {
    sideMenu.style.display = 'none';
})

// Lọc theo thời điểm
function navigateFilterTime() {
    const timeSelect = document.getElementById("filter-time");
    const selectedValue = timeSelect.value;
    if (selectedValue) {
      window.location.href = selectedValue; // Chuyển đến trang HTML tương ứng
    }
  }
  
  // Lọc theo tình trạng
  function navigateFilterState() {
    const stateSelect = document.getElementById("filter-state");
    const selectedValue = stateSelect.value;
    if (selectedValue) {
      window.location.href = selectedValue;
    }
  }
  
  // Sắp xếp theo quận
  function navigateSortDistrict() {
    const districtSelect = document.getElementById("sort-district");
    const selectedValue = districtSelect.value;
    if (selectedValue) {
      window.location.href = selectedValue;
    }
  }
  
