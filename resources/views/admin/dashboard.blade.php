<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="https://xgear.net/wp-content/uploads/2023/07/cropped-icon-xgear-32x32.png" sizes="32x32" />
    <title>Admin Dashboard</title>
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/admin/dashboard.css') }}">
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <img src="https://xgear.net/wp-content/uploads/2023/06/Logo-Xgear-300.png" alt="" />
        </div>
        <ul class="nav-links">
            <li>
                <a href="{{ route('dashboard') }}" class="active">
                    <i class="bx bxs-dashboard"></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('product.laptop') }}">
                    <i class="bx bx-laptop"></i>
                    <span class="links_name">Product</span>
                </a>
            </li>
            <li>
                <a href="{{ route('category.index') }}">
                    <i class="bx bx-category"></i>
                    <span class="links_name">Category</span>
                </a>
            </li>
            <li>
                <a href="{{ route('subcategory.index') }}">
                    <i class="bx bx-category-alt"></i>
                    <span class="links_name">Subcategory</span>
                </a>
            </li>
            <li>
                <a href="{{ route('customer.index') }}">
                    <i class="bx bx-user"></i>
                    <span class="links_name">Account</span>
                </a>
            </li>
            <li>
                <a href="{{ route('order.index') }}">
                    <i class="bx bx-list-ul"></i>
                    <span class="links_name">Order list</span>
                </a>
            </li>
            <li>
                <a href="{{ route('chart.index') }}">
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
                <a href={{ route('logout') }}>
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
                <img src="" alt="" />
                <span class="admin_name">Long Văn</span>
                <i class="bx bx-chevron-down"></i>
            </div>
        </nav>
        <div class="home-content">
            <div class="overview-boxes">
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">
                            <i class="bx bx-list-check"></i>Total Subcategory
                        </div>
                        <div class="number">{{ $subcategoryCount }}</div>
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
                        <div class="number">{{ $productCount }}</div>
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
                        <div class="number">{{ $categoryCount }}</div>
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
                        <div class="number">{{ $userCount }}</div>
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
                            @foreach($orders as $order)
                            <li><a href="">{{ $order->order_date }}</a></li>
                            @endforeach
                        </ul>
                        <ul class="details">
                            <li class="topic">New customers buy</li>
                            @foreach($orders as $order)
                                <li><a href="">{{ $order->cus_name }}</a></li>
                            @endforeach
                        </ul>
                        <ul class="details">
                            <li class="topic">Total price</li>
                            @foreach($orders as $order)
                                <li><a href="">{{ number_format($order->total_price, 0, ',', '.' ) }} VNĐ</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
