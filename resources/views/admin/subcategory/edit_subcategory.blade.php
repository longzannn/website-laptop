<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="https://xgear.net/wp-content/uploads/2023/07/cropped-icon-xgear-32x32.png" sizes="32x32" />
    <title>Edit Subcategory Page</title>
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/admin/add_subcategory.css') }}">
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <img src="https://xgear.net/wp-content/uploads/2023/06/Logo-Xgear-300.png" alt />
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
                <a href="{{ route('subcategory.index') }}" class="active">
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
        <nav class="header">
            <div class="sidebar-button">
                <i class="bx bx-category-alt"></i>
                <span class="dashboard">Subcategory</span>
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
                    <div class="title">Update Subcategory Information</div>
                    <form class="category-information" method="POST" action="{{ route('subcategory.update', $id) }}">
                        @csrf
                        @method('PUT')
                        @foreach($subcategories as $subcategory)
                        <div class="relative z-0 w-full mb-6 group">
                            <select id="underline_select" name="cat_id" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                                <option selected>Choose a category</option>
                                @foreach($categories as $category)
                                <option value="{{ $category -> cat_id }}" @if($subcategory->cat_id ==
                                    $category->cat_id)
                                    {{ 'selected' }}
                                    @endif
                                    >{{ $category -> cat_name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="sub_name" id="sub_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="{{ $subcategory -> sub_name }}" required />
                            <label for="sub_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Subcategory
                                Name</label>
                            @if($errors->has('sub_name'))
                            <span class="text-red-600 text-xs">{{ $errors->first('sub_name') }}</span>
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
</body>

</html>
