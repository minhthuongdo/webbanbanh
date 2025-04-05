<!DOCTYPE php>
<php lang="vi">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script 
          src="https://kit.fontawesome.com/435cea2233.js" 
          crossorigin="anonymous"
        ></script>
        <link rel="stylesheet" href="css/adminlogin.css"/>
        <title>Bread House admin</title>
    </head>
    <body>
        <div class="wrapper">
            <h1>Quản trị viên Bread House</h1>
            <form action="" onsubmit="return check(this)">
                <div class="input-box">
                    <span class="details">Tên đăng nhập: </span>
                    <input type="text" id="admin" name="admin" required>
                    <i class="fa-solid fa-user"></i>
                </div>

                <div class="input-box">
                    <span class="details">Mật khẩu: </span>
                    <input type="password" id="password" name="password" required>
                    <i class="fa-solid fa-eye-slash" id="show-password"></i>
                </div>

                <button type="submit" class="btn">Đăng nhập</button>

            </form>
        </div>
        <script src="js/adminlogin.js"></script>
    </body>
</php>