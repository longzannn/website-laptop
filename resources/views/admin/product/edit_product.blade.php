<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="https://xgear.net/wp-content/uploads/2023/07/cropped-icon-xgear-32x32.png" sizes="32x32" />
    <title>Update Product Page</title>
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/admin/add_product.css') }}">
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
                <a href="{{ route('product.laptop') }}" class="active">
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
        <nav class="header">
            <div class="sidebar-button">
                <i class="bx bx-laptop"></i>
                <span class="dashboard">Product</span>
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
                    <div class="title">New Product Information</div>
                    <form class="product-information" enctype="multipart/form-data" method="POST" action="{{ route('product.update', $id) }}">
                        @csrf
                        @method('PUT')
                        @foreach($products as $product)
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="prd_name" value="{{ $product -> prd_name }}" id="prd_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                            <label for="prd_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Product
                                Name</label>
                        </div>
                        <div class="mb-6">
                            <label class="text-gray-500" for="imageUpload">Chọn một hoặc nhiều hình ảnh:</label>
                            <input class="text-gray-500" name="prd_images[]" type="file" id="imageUpload" accept="image/*" multiple />
                            <div id="imagePreview" class="mt-3 flex gap-3">
                                @php
                                    $arrImage = explode(',', $product -> prd_images);
                                @endphp
                                @foreach($arrImage as $image)
                                    @if($image != '')
                                        <div class="image-container mr-3"><img class="preview-image mb-3 w-20 h-20" src="{{ Storage::url('admin/') . $image }}"></div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <select id="underline_select" name="sub_id" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                                <option selected>Choose a subcategory</option>
                                @foreach($subcategories as $subcategory)
                                    <option value="{{ $subcategory -> sub_id }}" @if($subcategory -> sub_id ==
                                    $product -> sub_id)
                                        {{ 'selected' }}
                                        @endif >{{ $subcategory -> sub_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="version_name" value="{{ $product -> version_name }}" id="version_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                            <label for="version_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Version name</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="number" name="old_price" value="{{ $product -> old_price }}" id="old_price" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                            <label for="old_price" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Old
                                Price</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="number" name="current_price" value="{{ $product -> current_price }}" id="current_price" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                            <label for="current_price" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Current
                                Price</label>
                        </div>
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="number" name="quantity" value="{{ $product -> quantity }}" id="current_price" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                                <label for="quantity" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Quantity
                                </label>
                            </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <label for="message" class="block mb-2 text-xs font-medium text-gray-500 dark:text-white">Version details</label>
                            <textarea id="message" name="version_details" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ $product -> version_details }}</textarea>
                        </div>
                        @endforeach
                        <div class="text-center">
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/admin/uploadImage.js') }}"></script>
</body>

</html>
