<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="https://xgear.net/wp-content/uploads/2023/07/cropped-icon-xgear-32x32.png" sizes="32x32" />
    <title>Admin Dashboard</title>
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../public/css/admin/dashboard.css">
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <img src="https://xgear.net/wp-content/uploads/2023/06/Logo-Xgear-300.png" alt="" />
        </div>
        <ul class="nav-links">
            <li>
                <a href="#" class="active">
                    <i class="bx bxs-dashboard"></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-laptop"></i>
                    <span class="links_name">Product</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-category"></i>
                    <span class="links_name">Category</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-category-alt"></i>
                    <span class="links_name">Subcategory</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-user"></i>
                    <span class="links_name">Account</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-list-ul"></i>
                    <span class="links_name">Order list</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-line-chart"></i>
                    <span class="links_name">Analytics</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-cog"></i>
                    <span class="links_name">Setting</span>
                </a>
            </li>
            <li class="log_out">
                <a href="#">
                    <i class="bx bx-log-out"></i>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class="bx bxs-home"></i>
                <span class="dashboard">Dashboard</span>
            </div>
            <div class="profile-details">
                <img src="images/profile.jpg" alt="" />
                <span class="admin_name">Long Văn</span>
                <i class="bx bx-chevron-down"></i>
            </div>
        </nav>
        <div class="home-content">
            <div class="overview-boxes">
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">
                            <i class="bx bx-list-check"></i>Total Order
                        </div>
                        <div class="number">40,876</div>
                        <div class="indicator">
                            <i class="bx bx-up-arrow-alt"></i>
                            <span class="text">Up From Today</span>
                        </div>
                    </div>
                    <i class="bx bx-cart-alt cart"></i>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">
                            <i class="bx bx-shopping-bag"></i> Total Product
                        </div>
                        <div class="number">38,876</div>
                        <div class="indicator">
                            <i class="bx bx-up-arrow-alt"></i>
                            <span class="text">Up From Today</span>
                        </div>
                    </div>
                    <i class="bx bxs-cart-add cart two"></i>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">
                            <i class="bx bx-list-ul"></i> Total Category
                        </div>
                        <div class="number">$12,876</div>
                        <div class="indicator">
                            <i class="bx bx-up-arrow-alt"></i>
                            <span class="text">Up From Today</span>
                        </div>
                    </div>
                    <i class="bx bx-cart cart three"></i>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">
                            <i class="bx bx-user"></i> Total User
                        </div>
                        <div class="number">11,086</div>
                        <div class="indicator">
                            <i class="bx bx-up-arrow-alt"></i>
                            <span class="text">Up From Today</span>
                        </div>
                    </div>
                    <i class="bx bxs-cart-download cart four"></i>
                </div>
            </div>
            <div class="sales-boxes">
                <div class="recent-sales box">
                    <div class="title">Recent Sales</div>
                    <div class="sales-details">
                        <ul class="details">
                            <li class="topic">Date</li>
                            <li><a href="#">02 Tháng 1, 2021</a></li>
                            <li><a href="#">02 Tháng 1, 2021</a></li>
                            <li><a href="#">02 Tháng 1, 2021</a></li>
                            <li><a href="#">02 Tháng 1, 2021</a></li>
                            <li><a href="#">02 Tháng 1, 2021</a></li>
                            <li><a href="#">02 Tháng 1, 2021</a></li>
                            <li><a href="#">02 Tháng 1, 2021</a></li>
                            <li><a href="#">02 Tháng 1, 2021</a></li>
                            <li><a href="#">02 Tháng 1, 2021</a></li>
                        </ul>
                        <ul class="details">
                            <li class="topic">New customers buy</li>
                            <li><a href="#">Nguyễn Văn A</a></li>
                            <li><a href="#">Nguyễn Văn B</a></li>
                            <li><a href="#">Nguyễn Văn C</a></li>
                            <li><a href="#">Nguyễn Văn D</a></li>
                            <li><a href="#">Nguyễn Văn E</a></li>
                            <li><a href="#">Nguyễn Văn F</a></li>
                            <li><a href="#">Nguyễn Văn G</a></li>
                            <li><a href="#">Nguyễn Văn H</a></li>
                            <li><a href="#">Nguyễn Văn J</a></li>
                        </ul>
                        <ul class="details">
                            <li class="topic">Hot selling category</li>
                            <li><a href="#">ACER</a></li>
                            <li><a href="#">MSI</a></li>
                            <li><a href="#">LENOVO</a></li>
                            <li><a href="#">ACER</a></li>
                            <li><a href="#">MSI</a></li>
                            <li><a href="#">LENOVO</a></li>
                            <li><a href="#">ACER</a></li>
                            <li><a href="#">MSI</a></li>
                            <li><a href="#">ACER</a></li>
                        </ul>
                        <ul class="details">
                            <li class="topic">High value orders</li>
                            <li><a href="#">20.000.000 VNĐ</a></li>
                            <li><a href="#">20.000.000 VNĐ</a></li>
                            <li><a href="#">20.000.000 VNĐ</a></li>
                            <li><a href="#">20.000.000 VNĐ</a></li>
                            <li><a href="#">20.000.000 VNĐ</a></li>
                            <li><a href="#">20.000.000 VNĐ</a></li>
                            <li><a href="#">20.000.000 VNĐ</a></li>
                            <li><a href="#">20.000.000 VNĐ</a></li>
                            <li><a href="#">20.000.000 VNĐ</a></li>
                        </ul>
                    </div>
                    <div class="button">
                        <a href="#">See All</a>
                    </div>
                </div>
                <div class="top-sales box">
                    <div class="title">Top Selling Product</div>
                    <ul class="top-sales-details">
                        <li>
                            <a href="#">
                                <img src="https://fptshop.com.vn/Uploads/Originals/2023/4/19/638175171985162982_asus-vivobook-e1404fa-nk186w-r5-7520u-den-dd-moi.jpg" alt="" />
                                <span class="product">Laptop ACER</span>
                            </a>
                            <span class="price">20.000.000 VNĐ</span>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://fptshop.com.vn/Uploads/Originals/2023/4/19/638175171985162982_asus-vivobook-e1404fa-nk186w-r5-7520u-den-dd-moi.jpg" alt="" />
                                <span class="product">Laptop MSI</span>
                            </a>
                            <span class="price">20.000.000 VNĐ</span>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://fptshop.com.vn/Uploads/Originals/2023/4/19/638175171985162982_asus-vivobook-e1404fa-nk186w-r5-7520u-den-dd-moi.jpg" alt="" />
                                <span class="product">Laptop ACER</span>
                            </a>
                            <span class="price">20.000.000 VNĐ</span>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://fptshop.com.vn/Uploads/Originals/2023/4/19/638175171985162982_asus-vivobook-e1404fa-nk186w-r5-7520u-den-dd-moi.jpg" alt="" />
                                <span class="product">Laptop MSI</span>
                            </a>
                            <span class="price">20.000.000 VNĐ</span>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://fptshop.com.vn/Uploads/Originals/2023/4/19/638175171985162982_asus-vivobook-e1404fa-nk186w-r5-7520u-den-dd-moi.jpg" alt="" />
                                <span class="product">Laptop MSI</span>
                            </a>
                            <span class="price">20.000.000 VNĐ</span>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://fptshop.com.vn/Uploads/Originals/2023/4/19/638175171985162982_asus-vivobook-e1404fa-nk186w-r5-7520u-den-dd-moi.jpg" alt="" />
                                <span class="product">Laptop HP</span>
                            </a>
                            <span class="price">20.000.000 VNĐ</span>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://fptshop.com.vn/Uploads/Originals/2023/4/19/638175171985162982_asus-vivobook-e1404fa-nk186w-r5-7520u-den-dd-moi.jpg" alt="" />
                                <span class="product">Laptop MSI</span>
                            </a>
                            <span class="price">20.000.000 VNĐ</span>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://fptshop.com.vn/Uploads/Originals/2023/4/19/638175171985162982_asus-vivobook-e1404fa-nk186w-r5-7520u-den-dd-moi.jpg" alt="" />
                                <span class="product">Laptop LENOVO</span>
                            </a>
                            <span class="price">20.000.000 VNĐ</span>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </section>

</body>

</html>