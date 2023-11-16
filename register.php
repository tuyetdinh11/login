<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fuse.js/dist/fuse.min.js"></script>
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Đăng Ký</title>
</head>

<body>
    <div id="wrapper">
        <div id="header">
            <a href="#" target="_self" class="logo">
                <img src="images/logo.png" alt="The Boys Fashion Logo">
            </a>
            <div id="menu">
                <div class="item">
                    <a href="shop.html" target="_self">Cửa Hàng <span class="dropbtn"></span></a>
                    <div class="dropdown-content">
                        <a href="#" target="_self">Gucci</a>
                        <a href="#" target="_self">Louis Vuitton</a>
                        <a href="#" target="_self">Channel</a>
                        <a href="#" target="_self">Evisu</a>
                    </div>
                </div>
                <div class="item">
                    <a href="Sale off.html" target="_self">Sale</a>
                </div>
                <div class="item">
                    <a href="aboutus.html" target="_self">About Us</a>
                </div>
                <div class="item">
                    <a href="taichinh.html" target="_self">Dịch Vụ <span class="dropbtn"></span></a>

                    <div class="dropdown-content-dichvu">
                        <a href="taichinh.html" target="_self">Tài Chính</a>
                        <a href="thanhtoan.html" target="_self">Thanh Toán</a>
                        <a href="baodam.html" target="_self">Bảo Đảm</a>
                    </div>
                </div>
                <div class="item">
                    <a href="lienhe.html" target="_self">Liên Hệ</a>
                </div>
                <div class="item">
                    <div class="search-container">
                        <input type="text" id="searchInput" class="search-input" placeholder="Tìm kiếm...">
                        <i class="fas fa-search" id="searchButton" style="color: black;"></i>
                    </div>
                    <div id="searchResults"></div>
                </div>
                <div class="item">
                    <i class="fas fa-heart" style="color: black;"></i>
                </div>
                <div class="item">
                    <i class="fas fa-shopping-cart" style="color: black;"></i>
                </div>
                <div class="item">
                    <i class="fas fa-user" style="color: black;" id="userIcon"></i>
                    <div class="user-options" id="userOptions">
                        <a href="register.html" id="signup">Sign Up</a>
                        <a href="login.html" id="login">Log In</a>
                        <a href="#" id="logout">Log Out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <h2>Đăng Ký</h2>

    <form action="reg.php" method="post">
        <div>
            <label for="username">Tên đăng nhập:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div>
            <label for="password">Mật khẩu:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <label for="confirm_password">Xác nhận mật khẩu:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="gender">Giới tính:</label>
            <select id="gender" name="gender">
                <option value="male">Nam</option>
                <option value="female">Nữ</option>
                <option value="other">Khác</option>
            </select>
        </div>
        <div>
            <input type="submit" name="btn-reg" value="Đăng Ký">
        </div>
        <p>Bạn đã có tài khoản?<a href="login.php">Đăng nhập</a></p>
    </form>

    <footer id="footer" class="footer" itemscope itemtype="http://schema.org/ContactPoint">
        <div class="container-footer">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="aside">
                                <div>
                                    <h4 class="footer-heading">Cửa Hàng</h4>
                                    <div class="heading-block"></div>
                                    <ul class="list-unstyled">
                                        <li><a href="#" target="_self">Gucci</a></li>
                                        <li><a href="#" target="_self">Louis
                                                Vuitton</a></li>
                                        <li><a href="#" target="_self">Channel</a></li>
                                        <li><a href="#" target="_self">Evisu</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="aside">
                                <div>
                                    <h4 class="footer-heading">Liên Hệ</h4>
                                    <div class="heading-block"></div>
                                    <ul class="list-unstyled">
                                        <li><a href="lienhe.html" target="_self">How To
                                                Find Us</a></li>
                                        <li style="margin-left: 10px;"><strong>T</strong>
                                            <a href="tel:(+84)385572967" style="margin-left: -6px;">(+84)385572967</a>
                                        </li>
                                        <li style="margin-left: 10px;"><strong>E</strong>
                                            <a href="mailto:sales@theboysfashion.com" style="margin-left: -6px;">sales@The_boys_fashion.com</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="aside">
                                <div>
                                    <h4 class="footer-heading">Dịch Vụ</h4>
                                    <div class="heading-block"></div>
                                    <ul class="list-unstyled">
                                        <li><a href="taichinh.html" target="_self">Tài Chính</a></li>
                                        <li><a href="thanhtoan.html" target="_self">Thanh
                                                Toán</a></li>
                                        <li><a href="baodam.html" target="_self">Bảo Đảm</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="logo">
                        <a href="index.html"><img src="images/logo.png" alt="The_boys_Luxury_cars" data-was-processed="true" width="200"></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="icon-footer">
                        <i><a href="https://www.facebook.com/fpt.poly/" class="fab fa-facebook" target="_blank" style="font-size:30px; margin-left: 10px;"></a></i>
                        <i><a href="https://www.youtube.com/c/FPTPoly" class="fab fa-youtube" target="_blank" style="font-size:30px;margin-left: 20px;"></a></i>
                        <i><a href="https://www.instagram.com/fpt_university/" class="fab fa-instagram" target="_blank" style="font-size:30px;margin-left: 20px;"></a></i>
                        <i><a href="https://twitter.com/Phothongcaodang/status/1380344981831872513" class="fab fa-twitter" target="_blank" style="font-size:30px;margin-left: 20px;"></a></i>
                        <i><a href="https://www.amazon.com/" class="fab fa-amazon" target="_blank" style="font-size:30px; margin-left: 20px;"></a></i>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-1">
                    <div class="aside">
                        <div>
                            <p>© 2023 The_boys_fashion™ Lifestyle Ltd.
                                T/A The_boys_Luxury_fashion™ Clothes.</p>
                            <p>Số Điện Thoại: <strong style=" color: black;">(+84)385572967</strong></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="aside">
                        <div>
                            <div><a href="dieukhoandieukien.html" target="_self">Điều Khoản Và Điều
                                    Kiện</a> | <a href="csbm.html" target="_self">Chính Sách Bảo Mật</a>
                                | <a href="aboutus.html" target="_self">About
                                    Us</a> | <a href="index.html" target="_self">Site
                                    by <span style="  font-style: italic; font-weight: bold;">The_boys_fashion™</span>
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="chu">
                <p>
                    Tuyên bố từ chối trách nhiệm: Chúng tôi hết sức cẩn
                    thận để đảm bảo rằng các thông số kỹ thuật được
                    hiển thị cho mỗi chiếc xe là chính xác; Tuy nhiên,
                    do cách dữ liệu được chuyển từ các nguồn của
                    bên thứ ba theo thời gian, lỗi có thể xảy ra.
                    <strong style="color: black;">The_boys_fashion™
                        Lifestyle Ltd</strong> sẽ không chịu trách nhiệm
                    hoặc nghĩa vụ pháp lý đối với những lỗi như
                    vậy trong danh sách và chúng tôi đặc biệt khuyên bạn
                    nên xác minh độc lập tất cả các chi tiết
                    xe trước khi mua.
                </p>
            </div>
        </div>
    </footer>

    <script src="script/search.js"></script>
    <script src="script/quaylai.js"></script>
</body>

</html>