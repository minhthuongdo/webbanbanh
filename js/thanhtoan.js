const searchIcon = document.querySelector(".search-icon")
const searchForm = document.querySelector(".search-form")

searchIcon.addEventListener("click", () => {
  searchForm.classList.toggle("active");
  cartItemsContainer.classList.remove("active");
  userForm.classList.remove("active");
  navbar.classList.remove("active");
});

const cartIcon = document.querySelector(".cart-icon")
const cartItemsContainer= document.querySelector(".cart-items-container")

cartIcon.addEventListener("click", () => {
  cartItemsContainer.classList.toggle("active");
  searchForm.classList.remove("active");
  userForm.classList.remove("active");
  navbar.classList.remove("active");
});
const userIcon = document.querySelector(".user-icon")
const userForm = document.querySelector(".user-form")

userIcon.addEventListener("click", () => {
  userForm.classList.toggle("active");
  searchForm.classList.remove("active");
  cartItemsContainer.classList.remove("active");
  navbar.classList.remove("active");
});
const menuIcon = document.querySelector(".menu-icon")
const navbar = document.querySelector(".navbar")
  menuIcon.addEventListener("click", () => {
  navbar.classList.toggle("active");
  searchForm.classList.remove("active");
  cartItemsContainer.classList.remove("active");
  userForm.classList.remove("active");
});
window.onscroll = ()=>{
  cartItemsContainer.classList.remove("active");
  searchForm.classList.remove("active");
  navbar.classList.remove("active");
  userForm.classList.remove("active");
}