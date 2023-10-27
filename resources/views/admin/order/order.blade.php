<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="https://xgear.net/wp-content/uploads/2023/07/cropped-icon-xgear-32x32.png" sizes="32x32" />
    <title>Order Page</title>
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/admin/order.css') }}">
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
                <a href="{{ route('order.index') }}" class="active">
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
        <nav class="header">
            <div class="sidebar-button">
                <i class="bx bx-list-ul"></i>
                <span class="dashboard">Order List</span>
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
                    <div class="title">Order Information</div>
                    <div class="sales-details">
                        <div class="relative shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">Mã Đơn Hàng</th>
                                        <th scope="col" class="px-6 py-3">Khách Hàng</th>
                                        <th scope="col" class="px-6 py-3">Trạng Thái</th>
                                        <th scope="col" class="px-6 py-3">Thanh Toán</th>
                                        <th scope="col" class="px-6 py-3">Ngày Tạo</th>
                                        <th scope="col" class="px-6 py-3">Tổng Tiền</th>
                                        <th scope="col" class="px-6 py-3">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $order)
                                    <tr class="border-b dark:bg-gray-900 dark:border-gray-700
                                    @if($order->status == 'Hủy đơn hàng')
                                        {{ 'bg-red-200' }}
                                    @else
                                        {{ 'bg-white' }}
                                    @endif">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                                            {{ $order->code }}
                                        </th>
                                        <td class="px-6 py-4">{{ $order->cus_name }}</td>
                                        <td class="px-6 py-4 font-semibold
                                        @if($order->status == 'Hoàn thành')
                                            {{ 'text-green-500' }}
                                        @elseif($order->status == 'Hủy đơn hàng')
                                            {{ 'text-red-600' }}
                                        @endif">
                                            {{ $order->status }}
                                        </td>
                                        <td class="px-6 py-4 font-semibold
                                        @if($order->payment == 'Chưa thanh toán')
                                            {{ 'text-blue-500' }}
                                        @elseif($order->payment == 'Đã thanh toán')
                                            {{ 'text-green-600' }}
                                        @endif">
                                            {{ $order->payment }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $order->order_date }}
                                        </td>
                                        <td class="px-6 py-4 @if($order->status == 'Hủy đơn hàng')
                                            {{ 'line-through' }}
                                        @endif">
                                            {{ number_format($order->total_price, 0, ',', '.') }} đ
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="{{ route('order.edit', $order->order_id) }}" class="font-medium text-blue-600 hover:underline">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @if ($orders->lastPage() > 1)
                        <div class="pagination">
                            <nav aria-label="Page navigation example">
                                <ul class="flex items-center -space-x-px h-8 text-sm">
                                    {{-- Previous Page Link --}}
                                    @if ($orders->onFirstPage())
                                        <li class="cursor-not-allowed">
                                                <span class="flex items-center justify-center px-3 h-8 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                                    <span class="sr-only">Previous</span>
                                                    <svg class="w-2.5 h-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                                                    </svg>
                                                </span>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{ $orders->previousPageUrl() }}" rel="prev" class="flex items-center justify-center px-3 h-8 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700">
                                                <span class="sr-only">Previous</span>
                                                <svg class="w-2.5 h-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                                                </svg>
                                            </a>
                                        </li>
                                    @endif
                                    {{-- Pagination Elements --}}
                                    @foreach ($orders->getUrlRange(1, $orders->lastPage()) as $page => $url)
                                        <li>
                                            <a href="{{ $url }}" class="flex items-center justify-center px-3 h-8 leading-tight
                                                    @if ($orders->currentPage() == $page) text-white bg-blue-500 @else text-gray-500 bg-white hover:bg-gray-100 hover:text-gray-700 @endif
                                                    border border-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white">
                                                {{ $page }}
                                            </a>
                                        </li>
                                    @endforeach
                                    {{-- Next Page Link --}}
                                    @if ($orders->hasMorePages())
                                        <li>
                                            <a href="{{ $orders->nextPageUrl() }}" rel="next" class="flex items-center justify-center px-3 h-8 leading-tight rounded-r-lg text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                                <span class="sr-only">Next</span>
                                                <svg class="w-2.5 h-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                                </svg>
                                            </a>
                                        </li>
                                    @else
                                        <li class="cursor-not-allowed">
                                                <span class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                                    <span class="sr-only">Next</span>
                                                    <svg class="w-2.5 h-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                                    </svg>
                                                </span>
                                        </li>
                                    @endif
                                </ul>
                            </nav>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>

</html>
