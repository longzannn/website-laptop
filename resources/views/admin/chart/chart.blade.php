<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="https://xgear.net/wp-content/uploads/2023/07/cropped-icon-xgear-32x32.png" sizes="32x32" />
    <title>Category Page</title>
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.umd.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/admin/category.css') }}">
</head>

<body>
<div class="sidebar">
    <div class="logo-details">
        <img src="https://xgear.net/wp-content/uploads/2023/06/Logo-Xgear-300.png" alt="" />
    </div>
    <ul class="nav-links">
        <li>
            <a href="{{ route('dashboard') }}">
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
            <a href="{{ route('chart.index') }}"  class="active">
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
    <nav class="header">
        <div class="sidebar-button">
            <i class="bx bx-category"></i>
            <span class="dashboard">Analytics</span>
        </div>
        <div class="profile-details">
            <img src="" alt="" />
            <span class="admin_name">Long Văn</span>
            <i class="bx bx-chevron-down"></i>
        </div>
    </nav>
    <div class="home-content">
        <div class="sales-boxes">
            <div class="recent-sales box">
                <div class="title">The column chart shows the number of orders in each month</div>
                <div>
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    const ctx = document.getElementById('myChart').getContext('2d');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: {!! json_encode($labels) !!},
            datasets: {!! json_encode($datasets) !!}
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>

</html>
