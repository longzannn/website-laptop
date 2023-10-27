<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="https://xgear.net/wp-content/uploads/2023/07/cropped-icon-xgear-32x32.png" sizes="32x32" />
    <title>Total Price Chart</title>
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
                <div style="margin-bottom: 20px;" class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
                    <ul class="flex flex-wrap justify-center -mb-px">
                        <li class="mr-2">
                            <a href="{{ route('chart.index') }}" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" aria-current="page">By Order</a>
                        </li>
                        <li class="mr-2">
                            <a href="{{ route('chart.index2') }}" class="inline-block p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500">By TotalPrice</a>
                        </li>
                    </ul>
                </div>
                <div class="title">The column chart shows the total price in each month</div>
                <div>
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: {!! json_encode($labels) !!},
            datasets: {!! json_encode($datasets) !!},
            borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)'
            ],
            borderWidth: 1
        },
        options: {
            scales: {
                y: { // defining min and max so hiding the dataset does not change scale range
                    min: 0,
                    max: 1000000000
                }
            }
        }
    });
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>

</html>
