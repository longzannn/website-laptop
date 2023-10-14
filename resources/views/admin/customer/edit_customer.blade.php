<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="https://xgear.net/wp-content/uploads/2023/07/cropped-icon-xgear-32x32.png" sizes="32x32" />
    <title>Edit Customer Page</title>
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/admin/add_user.css') }}">
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
                <a href="{{ route('customer.index') }}"  class="active">
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
                <i class="bx bxs-user"></i>
                <span class="dashboard">User</span>
            </div>
            <div class="profile-details">
                <img src="images/profile.jpg" alt="" />
                <span class="admin_name">Long Văn</span>
                <i class="bx bx-chevron-down"></i>
            </div>
        </nav>
        <div class="home-content">
            <div class="sales-boxes">
                <div class="recent-sales box">
                    <div class="title">Update Customer Information</div>
                    <div>
                        <div class="mb-4">
                            <ul class="flex flex-wrap justify-center -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                                <li class="mr-2 cursor-pointer" role="presentation">
                                    <a class="inline-block p-4 border-b-2 rounded-t-lg">
                                        Customer
                                    </a>
                                </li>
                                <li class="mr-2 cursor-pointer" role="presentation">
                                    <a class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">
                                        Staff
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <form class="account-information" method="POST" action="{{ route('customer.update', $id) }}">
                        @csrf
                        @method('PUT')
                        @foreach($customers as $customer)
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="cus_name" id="cus_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="{{ $customer -> cus_name }}" required />
                            <label for="cus_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Customer
                                Name</label>
                            @if($errors->has('cus_name'))
                                <span class="text-red-600 text-xs">{{ $errors->first('cus_name') }}</span>
                            @endif
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="cus_email" id="cus_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="{{ $customer -> cus_email }}" required />
                            <label for="cus_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Customer
                                Email</label>
                            @if($errors->has('cus_email'))
                            <span class="text-red-600 text-xs">{{ $errors->first('cus_email') }}</span>
                            @endif
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="cus_phone" id="cus_phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="{{ $customer -> cus_phone }}" required />
                            <label for="cus_phone" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Customer
                                Phone</label>
                            @if($errors->has('cus_phone'))
                                <span class="text-red-600 text-xs">{{ $errors->first('cus_phone') }}</span>
                            @endif
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="cus_address" id="cus_address" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="{{ $customer -> cus_address }}" required />
                            <label for="cus_address" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Customer
                                Address</label>
                            @if($errors->has('cus_address'))
                                <span class="text-red-600 text-xs">{{ $errors->first('cus_address') }}</span>
                            @endif
                        </div>
                        @endforeach
                        <div class="text-center">
                            <button type="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script src="../../../public/js/admin/show_hide.js"></script>
</body>

</html>
