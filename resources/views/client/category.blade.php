<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut icon" href="https://laptopkhanhtran.vn/pic/system/logo-kt-01636837754534945606.png" type="image/x-icon">
    <title>Laptop cũ Hà Nội giá rẻ | Địa chỉ mua bán laptop cũ uy tín tại Hà Nội và trên Toàn Quốc</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <!-- Header -->
    <nav class="sticky z-20 top-0 left-0 right-0 bg-[#242525] border-gray-200 dark:bg-gray-900">
        <div class="max-w-[1400px] mx-auto p-6 flex flex-wrap items-center justify-between">
            <a href={{ route('client.home') }} class="basis-1/5 flex items-center">
                <img src="https://laptopkhanhtran.vn/pic/banner/logo_6368_638173418442942155.png" class="h-10 mr-3" alt="Flowbite Logo" />
            </a>
            <div class="basis-2/5 flex">
                <div class="w-4/5 relative hidden md:block">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" id="search-navbar" class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-full bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Bạn muốn tìm sản phẩm gì..." />
                </div>
            </div>
            <div class="justify-between hidden w-full md:flex md:w-auto" id="navbar-search">
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-[#242525] md:flex-row md:space-x-6 md:mt-0 md:border-0">
                    <li>
                        <a href="#" class="block opacity-60 hover:opacity-100 rounded bg-[#242525] text-white font-normal md:p-0" aria-current="page">Trang chủ</a>
                    </li>
                    <li>
                        <a href="#" class="block opacity-60 hover:opacity-100 rounded bg-[#242525] text-white font-normal md:p-0">Sản
                            phẩm</a>
                    </li>
                    <li>
                        <a href="#" class="block opacity-60 hover:opacity-100 rounded bg-[#242525] text-white font-normal md:p-0">Tin
                            tức</a>
                    </li>
                    <li>
                        <a href="#" class="block opacity-60 hover:opacity-100 rounded bg-[#242525] text-white font-normal md:p-0">Giới
                            thiệu</a>
                    </li>
                    <li>
                        <a href="#" class="block opacity-60 hover:opacity-100 rounded bg-[#242525] text-white font-normal md:p-0">Liên
                            hệ</a>
                    </li>
                </ul>
            </div>
            <div class="relative text-white ms-12">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>
                <div class="absolute p-1 w-5 h-5 bg-red-500 rounded-full top-[-10px] right-[-10px] text-xs flex items-center justify-center">
                    0
                </div>
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

    <!-- Products -->
    <div class="max-w-[1400px] mx-auto mt-5 mb-20 p-6">
        <div class="flex justify-between">
            <h2 class="text-3xl font-bold uppercase">{{ $cat_name }}</h2>
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center opacity-60">
                        <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
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
                            <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Sản
                                phẩm</a>
                        </div>
                    </li>
                    <li aria-current="page opacity-60">
                        <div class="flex items-center">
                            <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="ml-1 text-sm text-gray-500 md:ml-2 dark:text-gray-400">Laptop Gaming</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
        <div class="grid grid-cols-12 gap-8 mt-10">
            <div class="col-span-2">
                <div class="border border-gray-300 px-3 py-5 rounded-lg">
                    <h3 class="text-xl font-semibold mb-4">Lọc sản phẩm</h3>
                    <div class="mb-4 cursor-pointer">
                        <div class="flex justify-between items-center mb-4">
                            <div class="font-semibold hover:underline text-sm">
                                Khoảng giá
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </div>
                        <form class="filter hidden price" method="POST" action="">
                            @csrf
                            <div class="flex items-center mb-3">
                                <input id="default-checkbox" name="under_10" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-white border-gray-300 rounded" />
                                <label for="default-checkbox" class="ml-2 text-sm text-gray-900 dark:text-gray-300 hover:underline">Dưới 10
                                    triệu</label>
                            </div>
                            <div class="flex items-center mb-3">
                                <input id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-white border-gray-300 rounded" />
                                <label for="checked-checkbox" class="ml-2 text-sm text-gray-900 dark:text-gray-300 hover:underline">10 triệu - 15
                                    triệu</label>
                            </div>
                            <div class="flex items-center mb-3">
                                <input id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-white border-gray-300 rounded" />
                                <label for="checked-checkbox" class="ml-2 text-sm text-gray-900 dark:text-gray-300 hover:underline">15 triệu - 20
                                    triệu</label>
                            </div>
                            <div class="flex items-center mb-3">
                                <input id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-white border-gray-300 rounded" />
                                <label for="checked-checkbox" class="ml-2 text-sm text-gray-900 dark:text-gray-300 hover:underline">20 triệu - 30
                                    triệu</label>
                            </div>
                            <div class="flex items-center mb-3">
                                <input id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-white border-gray-300 rounded" />
                                <label for="checked-checkbox" class="ml-2 text-sm text-gray-900 dark:text-gray-300 hover:underline">30 triệu - 45
                                    triệu</label>
                            </div>
                            <div class="flex items-center mb-3">
                                <input id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-white border-gray-300 rounded" />
                                <label for="checked-checkbox" class="ml-2 text-sm text-gray-900 dark:text-gray-300 hover:underline">45 triệu - 55
                                    triệu</label>
                            </div>
                            <div class="flex items-center mb-3">
                                <input id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-white border-gray-300 rounded" />
                                <label for="checked-checkbox" class="ml-2 text-sm text-gray-900 dark:text-gray-300 hover:underline">55 triệu - 80
                                    triệu</label>
                            </div>
                        </form>
                    </div>
                    <div class="mb-4 cursor-pointer">
                        <div class="flex justify-between items-center mb-4">
                            <div class="font-semibold hover:underline text-sm">
                                Kích thước màn hình
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </div>
                        <form class="filter hidden">
                            <div class="flex items-center mb-3">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-white border-gray-300 rounded" />
                                <label for="default-checkbox" class="ml-2 text-sm text-gray-900 dark:text-gray-300 hover:underline">12,5
                                    inch</label>
                            </div>
                            <div class="flex items-center mb-3">
                                <input id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-white border-gray-300 rounded" />
                                <label for="checked-checkbox" class="ml-2 text-sm text-gray-900 dark:text-gray-300 hover:underline">13
                                    inch</label>
                            </div>
                            <div class="flex items-center mb-3">
                                <input id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-white border-gray-300 rounded" />
                                <label for="checked-checkbox" class="ml-2 text-sm text-gray-900 dark:text-gray-300 hover:underline">14
                                    inch</label>
                            </div>
                            <div class="flex items-center mb-3">
                                <input id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-white border-gray-300 rounded" />
                                <label for="checked-checkbox" class="ml-2 text-sm text-gray-900 dark:text-gray-300 hover:underline">15.6
                                    inch</label>
                            </div>
                            <div class="flex items-center mb-3">
                                <input id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-white border-gray-300 rounded" />
                                <label for="checked-checkbox" class="ml-2 text-sm text-gray-900 dark:text-gray-300 hover:underline">16
                                    inch</label>
                            </div>
                            <div class="flex items-center mb-3">
                                <input id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-white border-gray-300 rounded" />
                                <label for="checked-checkbox" class="ml-2 text-sm text-gray-900 dark:text-gray-300 hover:underline">17.3
                                    inch</label>
                            </div>
                        </form>
                    </div>
                    <div class="mb-4 cursor-pointer">
                        <div class="flex justify-between items-center mb-4">
                            <div class="font-semibold hover:underline text-sm">
                                Tấm nền màn hình
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </div>
                        <form class="filter hidden">
                            <div class="flex items-center mb-3">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-white border-gray-300 rounded" />
                                <label for="default-checkbox" class="ml-2 text-sm text-gray-900 dark:text-gray-300 hover:underline">IPS</label>
                            </div>
                            <div class="flex items-center mb-3">
                                <input id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-white border-gray-300 rounded" />
                                <label for="checked-checkbox" class="ml-2 text-sm text-gray-900 dark:text-gray-300 hover:underline">OLED</label>
                            </div>
                            <div class="flex items-center mb-3">
                                <input id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-white border-gray-300 rounded" />
                                <label for="checked-checkbox" class="ml-2 text-sm text-gray-900 dark:text-gray-300 hover:underline">TN</label>
                            </div>
                            <div class="flex items-center mb-3">
                                <input id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-white border-gray-300 rounded" />
                                <label for="checked-checkbox" class="ml-2 text-sm text-gray-900 dark:text-gray-300 hover:underline">WVA</label>
                            </div>
                        </form>
                    </div>
                    <div class="mb-4 cursor-pointer">
                        <div class="flex justify-between items-center mb-4">
                            <div class="font-semibold hover:underline text-sm">
                                Độ phân giải
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </div>
                        <form class="filter hidden">
                            <div class="flex items-center mb-3">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-white border-gray-300 rounded" />
                                <label for="default-checkbox" class="ml-2 text-sm text-gray-900 dark:text-gray-300 hover:underline">HD</label>
                            </div>
                            <div class="flex items-center mb-3">
                                <input id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-white border-gray-300 rounded" />
                                <label for="checked-checkbox" class="ml-2 text-sm text-gray-900 dark:text-gray-300 hover:underline">Full
                                    HD</label>
                            </div>
                            <div class="flex items-center mb-3">
                                <input id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-white border-gray-300 rounded" />
                                <label for="checked-checkbox" class="ml-2 text-sm text-gray-900 dark:text-gray-300 hover:underline">Retina</label>
                            </div>
                            <div class="flex items-center mb-3">
                                <input id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-white border-gray-300 rounded" />
                                <label for="checked-checkbox" class="ml-2 text-sm text-gray-900 dark:text-gray-300 hover:underline">2K</label>
                            </div>
                            <div class="flex items-center mb-3">
                                <input id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-white border-gray-300 rounded" />
                                <label for="checked-checkbox" class="ml-2 text-sm text-gray-900 dark:text-gray-300 hover:underline">3K</label>
                            </div>
                            <div class="flex items-center mb-3">
                                <input id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-white border-gray-300 rounded" />
                                <label for="checked-checkbox" class="ml-2 text-sm text-gray-900 dark:text-gray-300 hover:underline">4K</label>
                            </div>
                        </form>
                    </div>
                    <div class="mb-4 cursor-pointer">
                        <div class="flex justify-between items-center mb-4">
                            <div class="font-semibold hover:underline text-sm">CPU</div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </div>
                        <form class="filter hidden">
                            <div class="flex items-center mb-3">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-white border-gray-300 rounded" />
                                <label for="default-checkbox" class="ml-2 text-sm text-gray-900 dark:text-gray-300 hover:underline">Ryzen
                                    3</label>
                            </div>
                            <div class="flex items-center mb-3">
                                <input id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-white border-gray-300 rounded" />
                                <label for="checked-checkbox" class="ml-2 text-sm text-gray-900 dark:text-gray-300 hover:underline">Ryzen
                                    5</label>
                            </div>
                            <div class="flex items-center mb-3">
                                <input id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-white border-gray-300 rounded" />
                                <label for="checked-checkbox" class="ml-2 text-sm text-gray-900 dark:text-gray-300 hover:underline">Ryzen
                                    7</label>
                            </div>
                            <div class="flex items-center mb-3">
                                <input id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-white border-gray-300 rounded" />
                                <label for="checked-checkbox" class="ml-2 text-sm text-gray-900 dark:text-gray-300 hover:underline">Ryzen
                                    9</label>
                            </div>
                            <div class="flex items-center mb-3">
                                <input id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-white border-gray-300 rounded" />
                                <label for="checked-checkbox" class="ml-2 text-sm text-gray-900 dark:text-gray-300 hover:underline">Core
                                    i3</label>
                            </div>
                            <div class="flex items-center mb-3">
                                <input id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-white border-gray-300 rounded" />
                                <label for="checked-checkbox" class="ml-2 text-sm text-gray-900 dark:text-gray-300 hover:underline">Core
                                    i5</label>
                            </div>
                            <div class="flex items-center mb-3">
                                <input id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-white border-gray-300 rounded" />
                                <label for="checked-checkbox" class="ml-2 text-sm text-gray-900 dark:text-gray-300 hover:underline">Core
                                    i7</label>
                            </div>
                            <div class="flex items-center mb-3">
                                <input id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-white border-gray-300 rounded" />
                                <label for="checked-checkbox" class="ml-2 text-sm text-gray-900 dark:text-gray-300 hover:underline">Core
                                    i9</label>
                            </div>
                        </form>
                    </div>
                    <div class="mb-4 cursor-pointer">
                        <div class="flex justify-between items-center mb-4">
                            <div class="font-semibold hover:underline text-sm">RAM</div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </div>
                        <form class="filter hidden">
                            <div class="flex items-center mb-3">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-white border-gray-300 rounded" />
                                <label for="default-checkbox" class="ml-2 text-sm text-gray-900 dark:text-gray-300 hover:underline">4GB</label>
                            </div>
                            <div class="flex items-center mb-3">
                                <input id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-white border-gray-300 rounded" />
                                <label for="checked-checkbox" class="ml-2 text-sm text-gray-900 dark:text-gray-300 hover:underline">8GB</label>
                            </div>
                            <div class="flex items-center mb-3">
                                <input id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-white border-gray-300 rounded" />
                                <label for="checked-checkbox" class="ml-2 text-sm text-gray-900 dark:text-gray-300 hover:underline">16GB</label>
                            </div>
                            <div class="flex items-center mb-3">
                                <input id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-white border-gray-300 rounded" />
                                <label for="checked-checkbox" class="ml-2 text-sm text-gray-900 dark:text-gray-300 hover:underline">32GB</label>
                            </div>
                            <div class="flex items-center mb-3">
                                <input id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-white border-gray-300 rounded" />
                                <label for="checked-checkbox" class="ml-2 text-sm text-gray-900 dark:text-gray-300 hover:underline">64GB</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-span-10">
                <div class="flex items-center border border-gray-300 rounded-lg p-6">
                    <div class="text-sm">Sắp xếp theo:</div>
                    <div class="flex ml-3">
                        <a class="text-sm p-2 border border-gray-300 rounded-lg mr-3 cursor-pointer" data-sort="">Nổi
                            bật</a>
                        <a class="text-sm p-2 border border-gray-300 rounded-lg mr-3 cursor-pointer" data-sort="new">Hàng mới nhất</a>
                        <a class="text-sm p-2 border border-gray-300 rounded-lg mr-3 cursor-pointer" data-sort="a">Giá
                            thấp đến cao</a>
                        <a class="text-sm p-2 border border-gray-300 rounded-lg mr-3 cursor-pointer" data-sort="z">Giá
                            cao đến thấp</a>
                    </div>
                </div>
                <div class="grid grid-cols-4 gap-3 p-6 mb-10">
                    @foreach( $products as $product)
                        <div
                            class="bg-white rounded-lg p-4 hover:border hover:border-[#007745]"
                        >
                            <a href={{ route('client.detail',$product -> version_id) }} class="">
                                <img
                                    src={{ $product -> cat_name === 'Linh kiện máy tính' ? Storage::url('admin/') . $product -> img_1 : Storage::url('admin/') . $product -> img_5 }}
                                    alt=""
                                    class="rounded-lg"
                                />
                                <div class="font-bold text-sm line-clamp-2 my-2">
                                    [Mới 100%] {{ $product -> prd_name }} ({{ $product -> version_name }})
                                </div>
                                <div class="flex my-2">
                                    <div
                                        class="text-center text-xs py-1 bg-[#f4f4f4] rounded-lg w-20 border--[#dcdcdc] border mr-3"
                                    >
                                        16GB
                                    </div>
                                    <div
                                        class="text-center text-xs py-1 bg-[#f4f4f4] rounded-lg w-20 border--[#dcdcdc] border"
                                    >
                                        1TB SSD
                                    </div>
                                </div>
                                @php
                                    $arr = explode(';', $product->version_details);
                                @endphp
                                <ol
                                    class="my-2 list-none max-w-md space-y-1 text-gray-500 list-decimal list-inside dark:text-gray-400"
                                >
                                    @foreach($arr as $item)
                                        @php
                                            $item = explode(':', $item);
                                            $value = isset($item[1]) ? $item[1] : null;
                                        @endphp
                                        <li class="text-xs truncate">
                                            <span class="font-semibold text-gray-900 dark:text-white">{{ $item[0] }} </span>
                                            {{ $value }}
                                        </li>
                                    @endforeach

                                </ol>
                                <div class="flex justify-between my-2 text-sm text-sm">
                                    <div class="text-red-700 font-bold">{{ number_format($product -> current_price, 0, ',', '.') }} đ</div>
                                    <div class="font-bold text-gray-500 line-through">
                                        {{ number_format($product -> old_price, 0, ',', '.') }} đ
                                    </div>
                                    <div class="text-red-700 font-bold">-{{ floor((($product -> old_price - $product -> current_price) / ($product -> old_price)) * 100) }}%</div>
                                </div>
                                <div class="flex">
                                    <img
                                        src="https://laptopkhanhtran.vn/css/icon/arrange-square.svg"
                                        alt=""
                                        class="mr-2"
                                    />
                                    <span class="text-sm">So sánh</span>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="flex items-center justify-center gap-3 -space-x-px h-10 text-base">
                        <li>
                            <a href="#" class="flex items-center justify-center px-4 h-10 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <span class="sr-only">Previous</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                        </li>
                        <li>
                            <a href="#" aria-current="page" class="z-20 flex items-center justify-center px-4 h-10 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <span class="sr-only">Next</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
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
    <script src="{{ asset('js/client/filter.js') }}"></script>
    <script src="{{ asset('js/client/handleSubmit.js') }}"></script>
</body>

</html>
