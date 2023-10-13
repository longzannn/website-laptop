<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut icon" href="https://laptopkhanhtran.vn/pic/system/logo-kt-01636837754534945606.png" type="image/x-icon">
    <title>Sản phẩm | Laptop Khánh Trần</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <!-- Header -->
    <nav class="sticky z-20 top-0 left-0 right-0 bg-[#242525] border-gray-200 dark:bg-gray-900">
        <div class="max-w-[1400px] mx-auto p-6 flex flex-wrap items-center justify-between">
            <a href={{ route('client.home') }} class="basis-1/5 items-center">
            <img src="https://laptopkhanhtran.vn/pic/banner/logo_6368_638173418442942155.png" class="h-10 mr-3" alt="Flowbite Logo" />
            </a>
            <div class="basis-2/5 flex">
                <form class="w-4/5 relative hidden md:block" method="POST" action={{ route('client.search') }}>
                    @csrf
                    @method('PUT')
                    <button type="submit" class="absolute inset-y-0 left-0 z-10 flex items-center pl-3">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </button>
                    <input type="text" name="keyword" id="search-navbar" class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-full bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Bạn muốn tìm sản phẩm gì..." />
                </form>
            </div>
            <div class="justify-between hidden w-full md:flex md:w-auto" id="navbar-search">
                <ul class="flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-6 md:mt-0 md:border-0 bg-[#242525]">
                    <li>
                        <a href="#" class="block opacity-60 hover:opacity-100 rounded bg-[#242525] text-white font-semibold md:p-0" aria-current="page">Trang chủ</a>
                    </li>
                    <li>
                        <a href="#" class="block opacity-60 hover:opacity-100 rounded bg-[#242525] text-white font-semibold md:p-0">Sản
                            phẩm</a>
                    </li>
                    <li>
                        <a href="#" class="block opacity-60 hover:opacity-100 rounded bg-[#242525] text-white font-semibold md:p-0">Tin
                            tức</a>
                    </li>
                    <li>
                        <a href="#" class="block opacity-60 hover:opacity-100 rounded bg-[#242525] text-white font-semibold md:p-0">Giới
                            thiệu</a>
                    </li>
                    <li>
                        <a href="#" class="block opacity-60 hover:opacity-100 rounded bg-[#242525] text-white font-semibold md:p-0">Liên
                            hệ</a>
                    </li>
                </ul>
            </div>
            <div class="relative text-white ms-12">
                <a href={{ route('client.cart') }}>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                    </svg>
                    <div class="absolute p-1 w-5 h-5 bg-red-500 rounded-full top-[-10px] right-[-10px] text-xs flex items-center justify-center">
                        {{ Session::has('cart') ? count(Session::get('cart')) : '0' }}
                    </div>
                </a>
            </div>
        </div>
    </nav>

    <!-- Menu -->
    <div class="sticky z-20 top-[88px] left-0 right-0 flex bg-[#2e3030] h-14">
        <ul class="flex w-full items-center justify-between px-32">
            @foreach($categories as $category)
                <li class="relative flex items-center text-white opacity-60 hover:opacity-100 h-full">
                    <a class="text-xs uppercase font-semibold" href={{ route('client.category', $category -> cat_id) }}>{{ $category -> cat_name }}</a><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3 ml-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                    <div class="hidden absolute top-[100%] left-0 drop-shadow-xl bg-white w-max rounded-lg">
                        <ul class="">
                            @foreach($subcategories as $subcategory)
                                @if( $subcategory -> cat_id == $category -> cat_id)
                                    <li class="py-3 px-6 text-sm text-gray-900 hover:text-green-700">
                                        <a href={{ route('client.subcategory', $subcategory -> sub_id) }}>{{ $subcategory -> sub_name }}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="max-w-[1400px] mx-auto mt-5 mb-20 p-6">
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center opacity-60">
                    <a href={{ route('client.home') }} class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        Trang chủ
                    </a>
                </li>
                <li class="opacity-60">
                    <div class="flex items-center">
                        <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Giỏ hàng</a>
                    </div>
                </li>
            </ol>
        </nav>
        @if(Session::has('cart'))
            <h2 class="font-bold text-2xl my-5">Giỏ hàng</h2>@endif
        <div class="grid grid-cols-12 gap-8">
            <form method="POST"action={{ route('client.updateCart') }} @if(Session::has('cart')) class="col-span-9" @else class="col-span-12" @endif>
                @csrf
                @method('PUT')
                <div class="relative shadow-lg sm:rounded-lg">
                    @if(Session::has('cart'))
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead font-bold class="text-xs text-gray-700 uppercase bg-[#f4f4f4] dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="p-4"></th>
                                <th scope="col" class="px-6 py-3 text-center font-bold">
                                    Sản phẩm
                                </th>
                                <th scope="col" class="px-6 py-3 text-center font-bold">
                                    Đơn giá
                                </th>
                                <th scope="col" class="px-6 py-3 text-center font-bold">
                                    Số lượng
                                </th>
                                <th scope="col" class="px-6 py-3 text-center font-bold">
                                    Tổng
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach(Session::get('cart') as $version_id => $product)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="w-4 p-4 font-bold cursor-pointer text-center">
                                    <a href={{ route('client.deleteProductInCart', $version_id) }}>x</a>
                                </td>
                                <td class="flex items-center px-6 py-4 font-medium text-gray-900 dark:text-white text-center">
                                    <img class="w-14 h-14 border border-gray-300 rounded-lg" src={{ Storage::url('admin/') . $product['image'] }} alt="" />
                                    <div class="font-semibold">
                                        [Mới 100%] {{ $product['prd_name'] }} ({{ $product['version_name'] }})
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-center font-bold">{{ number_format($product['current_price'], 0, ',', '.') }} đ</td>
                                <td class="px-6 py-4 text-center">
                                    <input type="number" name="quantity[{{ $version_id }}]" value={{ $product['quantity'] }} class="w-24 h-8 text-center outline-none border border-gray-300 rounded-lg" />
                                </td>
                                <td class="px-6 py-4 text-center font-bold">{{ number_format($product['current_price'] * $product['quantity'], 0, ',', '.') }} đ</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @else
                        <div class="flex justify-center items-center h-96">
                            <div class="text-center">
                                <h3 class="font-semibold text-xl my-5">Giỏ hàng trống</h3>
                                <a href={{ route('client.home') }} class="underline text-sm font-semibold">Tiếp tục mua hàng</a>
                            </div>
                        </div>
                    @endif
                </div>
                @if(Session::has('cart'))
                <div class="mt-5 text-right">
                    <a href={{ route('client.deleteCart') }} class="underline text-sm font-semibold mr-4">Xóa toàn bộ sản phẩm</a>
                    <a href={{ route('client.home') }} class="underline text-sm font-semibold">Tiếp tục mua hàng</a>
                </div>
                    <button type="submit" class="bg-yellow-400 px-3 py-2 text-white rounded-lg">Cập nhật giỏ hàng</button>
                @endif
            </form>
            @if(Session::has('cart'))
                @php
                    $totalPrice = 0;
                @endphp
                @foreach(Session::get('cart') as $version_id => $product)
                    @php
                        $totalPrice += $product['current_price'] * $product['quantity'];
                    @endphp
                @endforeach
                <div class="col-span-3">
                <div class="bg-[#f4f4f4] rounded-lg p-6">
                    <h3 class="font-semibold text-xl mb-10">Thông tin đơn hàng</h3>
                    <div class="flex justify-between items-center mb-6">
                        <span class="text-sm font-semibold">Tổng thanh toán:</span>
                        <span class="text-xl font-semibold text-[#d62454]">
                            {{ number_format($totalPrice, 0, ',', '.') }} đ
                        </span>
                    </div>
                    <div class="grid grid-cols-1 gap-3 mt-5">
                        <button class="bg-[#e00] p-1 rounded-lg">
                            <a href={{ Session::has('cart') ? route('client.checkout') : '' }}>
                                <div class="text-sm font-semibold text-white uppercase">
                                    Mua ngay
                                </div>
                                <span class="text-xs text-white capitalize">Giao hàng tận nơi hoặc nhận tại cửa
                                    hàng</span>
                            </a>
                        </button>
                        <button class="bg-[#288ad6] p-1 rounded-lg">
                            <a>
                                <div class="text-sm font-semibold text-white uppercase">
                                    Trả góp qua thẻ
                                </div>
                                <span class="text-xs text-white capitalize">Visa, Master, JCB</span>
                            </a>
                        </button>
                        <button class="bg-[#f1eb1f] p-1 rounded-lg">
                            <a>
                                <div class="text-sm font-semibold text-[#235d97] uppercase">
                                    mua ngay - trả sau
                                </div>
                                <div class="flex justify-center">
                                    <img class="w-14" src="https://pc.baokim.vn/platform/img/icon-kredivo.svg" alt="" />
                                    <img class="w-14" src="https://pc.baokim.vn/platform/img/home-paylater-ngang-small.svg" alt="" />
                                </div>
                            </a>
                        </button>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-[#f5f6f6] py-10">
        <div class="max-w-[1400px] mx-auto grid grid-cols-4 gap-8 px-6">
            <div class="">
                <h3 class="font-bold text-lg mb-6">Laptop Khánh Trần</h3>
                <p class="text-sm mb-6 text-justify">
                    Laptop Khánh Trần rất hân hạnh được phục vụ quý khách. Chúng tôi sẽ
                    cố gắng hơn nữa để cảm ơn sự tin tưởng quý khách đã dành cho Laptop
                    Khánh Trần.
                </p>
                <img src="https://laptopkhanhtran.vn/images/BCT.jpg" alt="" />
            </div>
            <div class="">
                <h3 class="font-bold text-lg mb-6">Thông tin liên hệ</h3>
                <ol class="my-2 max-w-md space-y-1 text-gray-500 list-decimal list-inside dark:text-gray-400">
                    <li class="text-sm">
                        <span class="font-semibold text-gray-900 dark:text-white">Địa chỉ:</span>
                        26 Ngõ 165 Thái Hà, Láng Hạ, Đống Đa, Hà Nội
                    </li>
                    <li class="text-sm">
                        <span class="font-semibold text-gray-900 dark:text-white">Điện thoại:</span>
                        0936 23 1234
                    </li>
                    <li class="text-sm">
                        <span class="font-semibold text-gray-900 dark:text-white">VGA</span>
                        NVIDIA GeForce RTX 4050 6GB
                    </li>
                    <li class="text-sm">
                        <span class="font-semibold text-gray-900 dark:text-white">Email:</span>
                        khanh.prolap126@gmail.com
                    </li>
                    <li class="text-sm">
                        <span class="font-semibold text-gray-900 dark:text-white">Website:</span>
                        https://laptopkhanhtran.vn/
                    </li>

                </ol>
            </div>
            <div class="">
                <h3 class="font-bold text-lg mb-6">Chính sách và Quy định</h3>
                <div class="text-sm text-gray-500 mb-2">
                    Chính sách giao hàng và kiểm hàng
                </div>
                <div class="text-sm text-gray-500 mb-2">Chính sách đổi trả</div>
                <div class="text-sm text-gray-500 mb-2">Chính sách thanh toán</div>
                <div class="text-sm text-gray-500 mb-2">Chính sách bảo hành</div>
                <div class="text-sm text-gray-500 mb-2">
                    Chính sách bảo mật thông tin
                </div>
            </div>
            <div class="">
                <h3 class="font-bold text-lg mb-6">Đăng ký nhận thông báo</h3>
                <div class="text-sm text-gray-500 mb-2">
                    Đăng ký nhận thông báo để không bỏ lỡ bất kỳ khuyến mại nào
                </div>
                <form>
                    <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" required />
                        <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Search
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>

</html>
