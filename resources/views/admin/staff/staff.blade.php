<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="https://xgear.net/wp-content/uploads/2023/07/cropped-icon-xgear-32x32.png" sizes="32x32" />
    <title>Staff Page</title>
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/admin/user.css') }}">
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <img src="https://laptopkhanhtran.vn/pic/banner/logo_6368_638173418442942155.png" alt="" />
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
                <a href="{{ route('customer.index') }}" class="active">
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
        <nav class="header">
            <div class="sidebar-button">
                <i class="bx bx-user"></i>
                <span class="dashboard">User</span>
            </div>
            <div class="profile-details">
                <img src="https://i.pinimg.com/736x/9a/63/e1/9a63e148aaff53532b045f6d1f09d762.jpg" alt="" />
                <span class="admin_name">{{ session()->get('staff')->staff_name }}</span>
                <i class="bx bx-chevron-down"></i>
            </div>
        </nav>
        <div class="home-content">
            <div class="sales-boxes">
                <div class="recent-sales box">
                    <div class="title">User Information</div>
                    <div class="mt-5 mb-10">
                        <div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
                            <ul class="flex flex-wrap justify-center -mb-px">
                                <li class="mr-2">
                                    <a href="{{ route('customer.index') }}" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" aria-current="page">Customer</a>
                                </li>
                                <li class="mr-2">
                                    <a href="{{ route('staff.index') }}" class="inline-block p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500">Staff</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sales-details">
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">Customer Name</th>
                                        <th scope="col" class="px-6 py-3">Email</th>
                                        <th scope="col" class="px-6 py-3">Phone</th>
                                        <th scope="col" class="px-6 py-3">Address</th>
                                        <th scope="col" class="px-6 py-3">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($staffs as $staff)
                                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $staff -> staff_name }}
                                        </th>
                                        <td class="px-6 py-4"> {{ $staff -> email }}</td>
                                        <td class="px-6 py-4"> {{ $staff -> staff_phone }}</td>
                                        <td class="px-6 py-4"> {{ $staff -> staff_address }}</td>
                                        <td class="px-6 py-4 flex">
                                            <a href="{{ route('staff.edit', $staff -> staff_id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                            <form method="POST" action="{{ route('staff.destroy', $staff -> staff_id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <button type="button" class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mt-8 mb-2"><a href="{{ route('staff.create') }}">Add a new staff</a></button>
                    </div>
                    @if ($staffs->lastPage() > 1)
                        <div class="pagination">
                            <nav aria-label="Page navigation example">
                                <ul class="flex items-center -space-x-px h-8 text-sm">
                                    {{-- Previous Page Link --}}
                                    @if ($staffs->onFirstPage())
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
                                            <a href="{{ $staffs->previousPageUrl() }}" rel="prev" class="flex items-center justify-center px-3 h-8 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700">
                                                <span class="sr-only">Previous</span>
                                                <svg class="w-2.5 h-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                                                </svg>
                                            </a>
                                        </li>
                                    @endif
                                    {{-- Pagination Elements --}}
                                    @foreach ($staffs->getUrlRange(1, $staffs->lastPage()) as $page => $url)
                                        <li>
                                            <a href="{{ $url }}" class="flex items-center justify-center px-3 h-8 leading-tight
                                                    @if ($staffs->currentPage() == $page) text-white bg-blue-500 @else text-gray-500 bg-white hover:bg-gray-100 hover:text-gray-700 @endif
                                                    border border-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white">
                                                {{ $page }}
                                            </a>
                                        </li>
                                    @endforeach
                                    {{-- Next Page Link --}}
                                    @if ($staffs->hasMorePages())
                                        <li>
                                            <a href="{{ $staffs->nextPageUrl() }}" rel="next" class="flex items-center justify-center px-3 h-8 leading-tight rounded-r-lg text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
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
