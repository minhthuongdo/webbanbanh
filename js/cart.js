document.querySelector('.cart-icon').addEventListener('click', toggleCartVisibility);
document.querySelector('.search-icon').addEventListener('click', toggleSearchVisibility);


let cart = JSON.parse(localStorage.getItem('cart')) || [];

function toggleCartVisibility() {
    const cartModal = document.getElementById('cart');
    cartModal.classList.toggle('open'); // Chuyển đổi trạng thái hiển thị/ẩn

    // Đóng tất cả các thành phần khác nếu cần
    document.querySelectorAll('.open').forEach((element) => {
        if (element !== cartModal) {
            element.classList.remove('open');
        }
    });
}
function toggleSearchVisibility() {
    const searchForm = document.querySelector('.search-form');
    searchForm.classList.toggle('open'); // Chuyển đổi trạng thái hiển thị/ẩn

    // Đóng tất cả các thành phần khác nếu cần
    document.querySelectorAll('.open').forEach((element) => {
        if (element !== searchForm) {
            element.classList.remove('open');
        }
    });
}

window.addEventListener('scroll', function () {
    const cartModal = document.getElementById('cart');
    const searchForm = document.querySelector('.search-form');

    if (cartModal.classList.contains('open')) {
        cartModal.classList.remove('open'); // Đóng giỏ hàng
    }

    if (searchForm.classList.contains('open')) {
        searchForm.classList.remove('open'); // Đóng ô tìm kiếm
    }
});


document.addEventListener('click', function (event) {
    const cartModal = document.getElementById('cart');
    const cartIcon = document.querySelector('.cart-icon');
    
});
// Thêm sản phẩm khi nhấp vào "Thêm vào giỏ hàng"
function handleAddToCart(productId) {
    const products = [
        { id: 1, name: "Bánh Kem Chocolate Dâu Tây", price: 250000, image: "../Images/bento_1.jfif" },
        { id: 2, name: "Bánh Kem Xoài", price: 250000, image:"../Images/bento_2.jpg"},
        { id: 3, name: "Bánh Kem Nho Xanh", price: 280000, image:"../Images/bento_3.jpg"},
        { id: 4, name: "Bánh Kem Bắp", price: 270000, image: "../Images/bento_4.jpg" },
        { id: 5, name: "Bánh Kem Tiramisu", price: 270000, image:"../Images/bento_5.jfif" },
        { id: 6, name: "Donut Hạnh Nhân", price: 25000, image:"../Images/donut_1.jfif"},
        { id: 7, name: "Donut Caramel", price: 30000, image:"../Images/donut_2.jpg"},
        { id: 8, name: "Donut Haloween", price: 25000, image:"../Images/donut_3.jpg"},
        { id: 9, name: "Donut Chocolate Sprinkle", price: 30000, image:"../Images/donut_4.jpg"},
        { id: 10, name: "Donut Matcha Chocolate", price: 30000, image:"../Images/donut_5.jpg"},
        { id: 11, name: "Cupcake Vani Chocolate", price: 25000, image:"../Images/cupcake_1.jpg"},
        { id: 12, name: "Cupcake Red Velvet", price: 30000, image:"../Images/cupcake_2.jpg"},
        { id: 13, name: "Cupcake Anh Đào", price: 30000, image:"../Images/cupcake_3.jpg"},
        { id: 14, name: "Cookies Chocolate Chip", price: 30000, image:"../Images/banhquy__2.jpg"},
        { id: 15, name: "Cookies Giáng Sinh", price: 30000, image:"../Images/banhquy_1.jpg"},
        { id: 16, name: "Cookies Chocolate", price: 30000, image:"../Images/banhquy_3.jpg"},
        { id: 17, name: "Cookies Dâu Sprinkles", price: 30000, image:"../Images/banhquy_4.jpg"},
        { id: 18, name: "Bánh Su Kem Chiên Giòn", price: 30000, image:"../Images/banhxukem_1.jpg"},
        { id: 19, name: "Bánh Su Kem Sốt Chocolate", price: 25000, image:"../Images/banhxukem_3.jpg"},
        { id: 20, name: "Bánh Su Kem Chocolate vỏ giòn", price: 30000, image:"../Images/banhxukem4.jpg"},
        { id: 21, name: "Cupcake Caramel", price: 30000, image:"../Images/cupcake_5.jfif"},
        { id: 22, name: "Cupcake Mâm Xôi", price: 25000, image:"../Images/cupcake_4.jfif"},
        { id: 23, name: "Cookies Redvelvet", price: 30000, image:"../Images/banhquy_5.jfif"},
        { id: 24, name: "Bánh Su Kem Dẻo", price: 30000, image:"../Images/banhxukem_5.jpg"},
    ];
    // Tìm sản phẩm dựa trên productId
    const product = products.find(p => p.id === productId);

    // Nếu tìm thấy sản phẩm, thêm vào giỏ hàng
    if (product) {
        addToCart(product);
    } else {
        console.error(`Sản phẩm với ID ${productId} không tồn tại!`);
    }
}

// Hàm thêm sản phẩm vào giỏ hàng
function addToCart(product) {
    const existingProduct = cart.find(item => item.id === product.id);

    if (existingProduct) {
        existingProduct.quantity += 1; // Tăng số lượng sản phẩm nếu đã có trong giỏ
    } else {
        cart.push({ ...product, quantity: 1 }); // Thêm sản phẩm mới vào giỏ
    }
    localStorage.setItem('cart', JSON.stringify(cart)); // Lưu giỏ hàng vào localStorage
    renderCart(); // Cập nhật lại giỏ hàng
    updateCartCount(); // Cập nhật lại số lượng sản phẩm trong giỏ
}

// Hàm xóa sản phẩm khỏi giỏ hàng
function removeFromCart(productId) {
    const index = cart.findIndex(item => item.id === productId);
    if (index !== -1) {
        cart.splice(index, 1); // Xóa sản phẩm khỏi giỏ
    }
    localStorage.setItem('cart', JSON.stringify(cart)); // Lưu giỏ hàng vào localStorage
    renderCart();
    updateCartCount();
}

// Hàm cập nhật số lượng sản phẩm trong giỏ hàng
function updateQuantity(productId, change) {
    const product = cart.find(item => item.id === productId);
    if (product) {
        product.quantity += change; // Thay đổi số lượng sản phẩm
        if (product.quantity <= 0) {
            removeFromCart(productId); // Nếu số lượng <= 0, xóa sản phẩm khỏi giỏ
        } else {
            localStorage.setItem('cart', JSON.stringify(cart)); // Lưu giỏ hàng vào localStorage
            renderCart();
        }
    }
    updateCartCount(); // Cập nhật lại số lượng giỏ hàng
}

// Hàm cập nhật số lượng sản phẩm trong giỏ
function updateCartCount() {
    const cartCount = document.getElementById("cart-count");
    const totalItems = cart.reduce((total, item) => total + item.quantity, 0); // Tổng số sản phẩm
    cartCount.textContent = totalItems; // Hiển thị số lượng sản phẩm
}

// Hàm tính tổng tiền giỏ hàng
function calculateTotal() {
    const subtotal = cart.reduce((total, item) => total + item.price * item.quantity, 0); // Tổng tiền trước thuế
    const shippingFee = 30000; // Phí vận chuyển
    const total = subtotal + shippingFee; // Tổng tiền (bao gồm phí vận chuyển)

    document.getElementById("cart-total").textContent = total.toLocaleString(); // Hiển thị tổng tiền
}

// Hàm hiển thị giỏ hàng
function renderCart() {
    const container = document.getElementById("cart-items");
    container.innerHTML = ""; // Xóa giỏ hàng cũ

    cart.forEach(item => {
        const cartItem = document.createElement("li");
        cartItem.classList.add("cart-item"); // Thêm lớp cho item

        cartItem.innerHTML = `
            <img src="${item.image}" alt="${item.name}" />
            <div>
                <h3>${item.name}</h3>
                <p>${item.price.toLocaleString()} VND</p>
                <p>
                    Số lượng: 
                    <button onclick="updateQuantity(${item.id}, -1)">-</button>
                    ${item.quantity}
                    <button onclick="updateQuantity(${item.id}, 1)">+</button>
                </p>
                <button class="delete-button" onclick="removeFromCart(${item.id})">Xóa</button>
            </div>
        `;
        container.appendChild(cartItem);
    });

    calculateTotal(); // Cập nhật tổng tiền giỏ hàng
}

// Gắn sự kiện đóng giỏ hàng
document.getElementById("cart-icon").addEventListener("click", toggleCartVisibility);

function handleAddToCartWithPreventDefault(event, productId) {
    event.preventDefault(); // Ngăn chặn tải lại trang
    handleAddToCart(productId);
}
// Khi trang được tải lại, khôi phục giỏ hàng
window.addEventListener("load", loadCart);

function loadCart() {
    cart = JSON.parse(localStorage.getItem('cart')) || [];
    renderCart();
    updateCartCount();
}

function updateQuantity(productId, change) {
    const product = cart.find(item => item.id === productId);
    if (product) {
        product.quantity += change; // Thay đổi số lượng sản phẩm
        if (product.quantity <= 0) {
            removeFromCart(productId); // Nếu số lượng <= 0, xóa sản phẩm khỏi giỏ
        } else {
            localStorage.setItem('cart', JSON.stringify(cart)); // Lưu giỏ hàng vào localStorage
            renderCart();
        }
    }
    updateCartCount(); // Cập nhật lại số lượng giỏ hàng
}