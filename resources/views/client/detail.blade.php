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
            <a href="#" class="basis-1/5 flex items-center">
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
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg md:flex-row md:space-x-6 md:mt-0 md:border-0 bg-[#242525]">
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
            <li class="relative flex items-center text-white opacity-60 hover:opacity-100 h-full">
                <a class="text-sm" href="">LAPTOP DELL</a><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3 ml-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
                <div class="hidden absolute top-[100%] left-0 drop-shadow-xl bg-white w-max rounded-lg">
                    <ul class="">
                        <li class="py-3 px-6 text-sm text-gray-900 hover:text-green-700">
                            <a href="">Dell XPS</a>
                        </li>
                        <li class="py-3 px-6 text-sm text-gray-900 hover:text-green-700">
                            <a href="">Dell Latitude</a>
                        </li>
                        <li class="py-3 px-6 text-sm text-gray-900 hover:text-green-700">
                            <a href="">Dell Vostro</a>
                        </li>
                        <li class="py-3 px-6 text-sm text-gray-900 hover:text-green-700">
                            <a href="">Dell Inspirion</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="relative flex items-center text-white opacity-60 hover:opacity-100 h-full">
                <a class="text-sm" href="">LENOVO THINKPAD</a><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3 ml-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
                <div class="hidden absolute top-[100%] left-0 drop-shadow-xl bg-white w-max rounded-lg">
                    <ul class="">
                        <li class="py-3 px-6 text-sm text-gray-900 hover:text-green-700">
                            <a href="">Thinkpad X1 series</a>
                        </li>
                        <li class="py-3 px-6 text-sm text-gray-900 hover:text-green-700">
                            <a href="">Thinkpad X series</a>
                        </li>
                        <li class="py-3 px-6 text-sm text-gray-900 hover:text-green-700">
                            <a href="">Thinkpad E series</a>
                        </li>
                        <li class="py-3 px-6 text-sm text-gray-900 hover:text-green-700">
                            <a href="">Thinkpad T series</a>
                        </li>
                        <li class="py-3 px-6 text-sm text-gray-900 hover:text-green-700">
                            <a href="">Thinkpad Workstation P series</a>
                        </li>
                        <li class="py-3 px-6 text-sm text-gray-900 hover:text-green-700">
                            <a href="">Thinkpad Thinkbook series</a>
                        </li>
                        <li class="py-3 px-6 text-sm text-gray-900 hover:text-green-700">
                            <a href="">Thinkpad Yoga</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="relative flex items-center text-white opacity-60 hover:opacity-100 h-full">
                <a class="text-sm" href="">LAPTOP HP</a><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3 ml-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
                <div class="hidden absolute top-[100%] left-0 drop-shadow-xl bg-white w-max rounded-lg">
                    <ul class="">
                        <li class="py-3 px-6 text-sm text-gray-900 hover:text-green-700">
                            <a href="">HP Elitebook</a>
                        </li>
                        <li class="py-3 px-6 text-sm text-gray-900 hover:text-green-700">
                            <a href="">HP Envy</a>
                        </li>
                        <li class="py-3 px-6 text-sm text-gray-900 hover:text-green-700">
                            <a href="">HP Probook</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="relative flex items-center text-white opacity-60 hover:opacity-100 h-full">
                <a class="text-sm" href="">LAPTOP ASUS</a><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3 ml-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
                <div class="hidden absolute top-[100%] left-0 drop-shadow-xl bg-white w-max rounded-lg">
                    <ul class="">
                        <li class="py-3 px-6 text-sm text-gray-900 hover:text-green-700">
                            <a href="">Dell XPS</a>
                        </li>
                        <li class="py-3 px-6 text-sm text-gray-900 hover:text-green-700">
                            <a href="">Dell Latitude</a>
                        </li>
                        <li class="py-3 px-6 text-sm text-gray-900 hover:text-green-700">
                            <a href="">Dell Vostro</a>
                        </li>
                        <li class="py-3 px-6 text-sm text-gray-900 hover:text-green-700">
                            <a href="">Dell Inspirion</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="relative flex items-center text-white opacity-60 hover:opacity-100 h-full">
                <a class="text-sm" href="">LAPTOP SAMSUNG</a><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3 ml-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
                <div class="hidden absolute top-[100%] left-0 drop-shadow-xl bg-white w-max rounded-lg">
                    <ul class="">
                        <li class="py-3 px-6 text-sm text-gray-900 hover:text-green-700">
                            <a href="">Dell XPS</a>
                        </li>
                        <li class="py-3 px-6 text-sm text-gray-900 hover:text-green-700">
                            <a href="">Dell Latitude</a>
                        </li>
                        <li class="py-3 px-6 text-sm text-gray-900 hover:text-green-700">
                            <a href="">Dell Vostro</a>
                        </li>
                        <li class="py-3 px-6 text-sm text-gray-900 hover:text-green-700">
                            <a href="">Dell Inspirion</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="relative flex items-center text-white opacity-60 hover:opacity-100 h-full">
                <a class="text-sm" href="">Laptop LG</a><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3 ml-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
                <div class="hidden absolute top-[100%] left-0 drop-shadow-xl bg-white w-max rounded-lg">
                    <ul class="">
                        <li class="py-3 px-6 text-sm text-gray-900 hover:text-green-700">
                            <a href="">Dell XPS</a>
                        </li>
                        <li class="py-3 px-6 text-sm text-gray-900 hover:text-green-700">
                            <a href="">Dell Latitude</a>
                        </li>
                        <li class="py-3 px-6 text-sm text-gray-900 hover:text-green-700">
                            <a href="">Dell Vostro</a>
                        </li>
                        <li class="py-3 px-6 text-sm text-gray-900 hover:text-green-700">
                            <a href="">Dell Inspirion</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="relative flex items-center text-white opacity-60 hover:opacity-100 h-full">
                <a class="text-sm" href="">SURFACE</a><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3 ml-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
                <div class="hidden absolute top-[100%] left-0 drop-shadow-xl bg-white w-max rounded-lg">
                    <ul class="">
                        <li class="py-3 px-6 text-sm text-gray-900 hover:text-green-700">
                            <a href="">Surface Pro</a>
                        </li>
                        <li class="py-3 px-6 text-sm text-gray-900 hover:text-green-700">
                            <a href="">Surface Laptop</a>
                        </li>
                        <li class="py-3 px-6 text-sm text-gray-900 hover:text-green-700">
                            <a href="">Surface Book</a>
                        </li>
                        <li class="py-3 px-6 text-sm text-gray-900 hover:text-green-700">
                            <a href="">Surface Go</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="relative flex items-center text-white opacity-60 hover:opacity-100 h-full">
                <a class="text-sm" href="">LAPTOP ĐỒ HỌA</a><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3 ml-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
                <div class="hidden absolute top-[100%] left-0 drop-shadow-xl bg-white w-max rounded-lg">
                    <ul class="">
                        <li class="py-3 px-6 text-sm text-gray-900 hover:text-green-700">
                            <a href="">Laptop Dell Precision</a>
                        </li>
                        <li class="py-3 px-6 text-sm text-gray-900 hover:text-green-700">
                            <a href="">Laptop Lenovo Thinkpad</a>
                        </li>
                        <li class="py-3 px-6 text-sm text-gray-900 hover:text-green-700">
                            <a href="">Laptop HP</a>
                        </li>
                        <li class="py-3 px-6 text-sm text-gray-900 hover:text-green-700">
                            <a href="">Dell Inspirion</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="relative flex items-center text-white opacity-60 hover:opacity-100 h-full">
                <a class="text-sm" href="">LAPTOP GAMING</a><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3 ml-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
                <div class="hidden absolute top-[100%] left-0 drop-shadow-xl bg-white w-max rounded-lg">
                    <ul class="">
                        <li class="py-3 px-6 text-sm text-gray-900 hover:text-green-700">
                            <a href="">Laptop Dell Gaming</a>
                        </li>
                        <li class="py-3 px-6 text-sm text-gray-900 hover:text-green-700">
                            <a href="">Laptop Asus Gaming</a>
                        </li>
                        <li class="py-3 px-6 text-sm text-gray-900 hover:text-green-700">
                            <a href="">Laptop Acer Gaming</a>
                        </li>
                        <li class="py-3 px-6 text-sm text-gray-900 hover:text-green-700">
                            <a href="">Laptop MSI Gaming</a>
                        </li>
                        <li class="py-3 px-6 text-sm text-gray-900 hover:text-green-700">
                            <a href="">Laptop HP Gaming</a>
                        </li>
                        <li class="py-3 px-6 text-sm text-gray-900 hover:text-green-700">
                            <a href="">Laptop Lenovo Gaming</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="relative flex items-center text-white opacity-60 hover:opacity-100 h-full">
                <a class="text-sm" href="">LINH KIỆN MÁY TÍNH</a><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3 ml-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
                <div class="hidden absolute top-[100%] left-0 drop-shadow-xl bg-white w-max rounded-lg">
                    <ul class="">
                        <li class="py-3 px-6 text-sm text-gray-900 hover:text-green-700">
                            <a href="">Màn Hình Laptop</a>
                        </li>
                        <li class="py-3 px-6 text-sm text-gray-900 hover:text-green-700">
                            <a href="">RAM Laptop</a>
                        </li>
                        <li class="py-3 px-6 text-sm text-gray-900 hover:text-green-700">
                            <a href="">Ổ Cứng Laptop</a>
                        </li>
                        <li class="py-3 px-6 text-sm text-gray-900 hover:text-green-700">
                            <a href="">Bàn Phím Laptop</a>
                        </li>
                        <li class="py-3 px-6 text-sm text-gray-900 hover:text-green-700">
                            <a href="">Sạc Laptop</a>
                        </li>
                        <li class="py-3 px-6 text-sm text-gray-900 hover:text-green-700">
                            <a href="">Pin Laptop</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>

    <div class="max-w-[1400px] mx-auto mt-5 mb-20 p-6">
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
        <div class="grid grid-cols-12 gap-8 mt-10">
            <div class="col-span-6">
                <div id="controls-carousel" class="relative z-0 w-full" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="relative z-0 h-[30rem] overflow-hidden rounded-lg">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://laptopkhanhtran.vn/pic/product/thinkpad__637921228653607151_HasThumb.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                            <img src="https://laptopkhanhtran.vn/pic/product/thinkpad__637921228238421148_HasThumb.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://laptopkhanhtran.vn/pic/product/thinkpad__637921228293749751_HasThumb.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
                        </div>
                        <!-- Item 4 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://laptopkhanhtran.vn/pic/product/thinkpad__637921228335963765_HasThumb.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
                        </div>
                        <!-- Item 5 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://laptopkhanhtran.vn/pic/product/thinkpad__637921228495334352_HasThumb.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
                        </div>
                    </div>
                    <!-- Slider controls -->
                    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
                <div class="flex justify-center gap-4 mt-10">
                    <div class="border border-gray-300 py-2 px-4 flex flex-col items-center hover:border-green-600">
                        <img class="w-8 h-8" src="https://laptopkhanhtran.vn/css/icon/images.svg" alt="" />
                        <span class="text-xs">Xem ảnh thực tế</span>
                    </div>
                    <div class="border border-gray-300 py-2 px-4 flex flex-col items-center hover:border-green-600">
                        <img class="w-8 h-8" src="https://laptopkhanhtran.vn/css/icon/configuration.svg" alt="" />
                        <span class="text-xs">Thông số kỹ thuật</span>
                    </div>
                    <div class="border border-gray-300 py-2 px-4 flex flex-col items-center hover:border-green-600">
                        <img class="w-8 h-8" src="https://laptopkhanhtran.vn/css/icon/article2.svg" alt="" />
                        <span class="text-xs">Thông tin sản phẩm</span>
                    </div>
                </div>
                <div class="bg-[#f4f4f4] rounded-lg mt-10 py-6">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="flex items-center px-4">
                            <img class="w-14 h-14" src="https://laptopkhanhtran.vn/images/giaohang.svg" alt="" />
                            <div class="ml-5">
                                <div class="text-green-900 font-semibold text-sm">
                                    Giao hàng toàn quốc
                                </div>
                                <div class="text-xs">Miễn phí giao hàng tại Hà Nội</div>
                            </div>
                        </div>
                        <div class="flex items-center px-4">
                            <img class="w-14 h-14" src="https://laptopkhanhtran.vn/images/support.svg" alt="" />
                            <div class="ml-5">
                                <div class="text-green-900 font-semibold text-sm">
                                    Hỗ trợ trực tuyến
                                </div>
                                <div class="text-xs">Chúng tôi luôn hỗ trợ 24/7</div>
                            </div>
                        </div>
                        <div class="flex items-center px-4">
                            <img class="w-14 h-14" src="https://laptopkhanhtran.vn/images/promotion.svg" alt="" />
                            <div class="ml-5">
                                <div class="text-green-900 font-semibold text-sm">
                                    Giá cả phải chăng
                                </div>
                                <div class="text-xs">
                                    Chúng tôi luôn có giá tốt nhất cho khách hàng
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center px-4">
                            <img class="w-14 h-14" src="https://laptopkhanhtran.vn/images/cashback.svg" alt="" />
                            <div class="ml-5">
                                <div class="text-green-900 font-semibold text-sm">
                                    Chính sách hoàn tiền
                                </div>
                                <div class="text-xs">
                                    Hoàn tiền 100% nếu sản phẩm không tốt
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-6">
                <h2 class="font-bold text-3xl mb-5">
                    [ Mới 100% ] ThinkPad X1 Carbon Gen 10 ( Core i5-1240P, RAM 16GB,
                    SSD 512GB, Intel Iris Xe Graphics, Màn 14'' 2.2K, LTE 4G )
                </h2>
                <div class="flex items-end my-2 gap-3">
                    <div class="text-red-500 font-bold text-3xl">33.500.000 đ</div>
                    <div class="font-bold text-gray-500 line-through text-lg">
                        52.000.000 đ
                    </div>
                </div>
                <ol class="my-5 max-w-md space-y-1 text-gray-500 list-decimal list-inside dark:text-gray-400">
                    <li class="text-base">
                        <span class="font-semibold text-gray-900 dark:text-white">RAM</span>
                        16GB LPDDR5 5200MHz onboard
                    </li>
                    <li class="text-base">
                        <span class="font-semibold text-gray-900 dark:text-white">Ổ cứng</span>
                        SSD 512GB M.2 PCIe NVMe
                    </li>
                    <li class="text-base">
                        <span class="font-semibold text-gray-900 dark:text-white">Màn hình</span>
                        14.0" 2.2K IPS, Anti-glare, low power, Contrast Ratio
                    </li>
                    <li class="text-base">
                        <span class="font-semibold text-gray-900 dark:text-white">CPU</span>
                        Core i5-1240P (1.70GHz up to 4.40GHz, 12MB Cache)
                    </li>
                    <li class="text-base">
                        <span class="font-semibold text-gray-900 dark:text-white">Card</span>
                        Intel Iris Xe Graphics
                    </li>
                    <li class="text-base">
                        <span class="font-semibold text-gray-900 dark:text-white">Pin</span>
                        6 Cell 86WHrs
                    </li>
                    <li class="text-base">
                        <span class="font-semibold text-gray-900 dark:text-white">Tình trạng</span>
                        Mới 100%, Nhập khẩu
                    </li>
                </ol>
                <div class="flex">
                    <div class="text-sm text-green-700 underline">
                        Xem chi tiết cấu hình
                    </div>
                    <div class="border-r mx-3"></div>
                    <div class="text-sm text-green-700 underline">So sánh</div>
                </div>
                <h3 class="my-5 font-semibold text-xl">Tùy chọn cấu hình</h3>
                <div class="grid grid-cols-2 gap-3">
                    <div class="border border-green-600 p-3 bg-[#ebfff7] rounded-lg">
                        <div class="text-sm mb-2">
                            Core i5 1240P - RAM 16GB - SSD 512GB - Intel Iris Xe Graphics -
                            Màn 14'' 2.2K - LTE 4G
                        </div>
                        <div class="flex">
                            <div class="text-base font-semibold mr-3">34.300.000 đ</div>
                            <div class="text-base font-semibold opacity-60 line-through">
                                52.000.000 đ
                            </div>
                        </div>
                    </div>
                    <div class="border border-gray-300 hover:border-green-600 hover:bg-[#ebfff7] p-3 bg-white rounded-lg">
                        <div class="text-sm mb-2">
                            Core i5 1240P - RAM 16GB - SSD 512GB - Intel Iris Xe Graphics -
                            Màn 14'' 2.2K - LTE 4G
                        </div>
                        <div class="flex">
                            <div class="text-base font-semibold mr-3">34.300.000 đ</div>
                            <div class="text-base font-semibold opacity-60 line-through">
                                52.000.000 đ
                            </div>
                        </div>
                    </div>
                    <div class="border border-gray-300 hover:border-green-600 hover:bg-[#ebfff7] p-3 bg-white rounded-lg">
                        <div class="text-sm mb-2">
                            Core i5 1240P - RAM 16GB - SSD 512GB - Intel Iris Xe Graphics -
                            Màn 14'' 2.2K - LTE 4G
                        </div>
                        <div class="flex">
                            <div class="text-base font-semibold mr-3">34.300.000 đ</div>
                            <div class="text-base font-semibold opacity-60 line-through">
                                52.000.000 đ
                            </div>
                        </div>
                    </div>
                    <div class="border border-gray-300 hover:border-green-600 hover:bg-[#ebfff7] p-3 bg-white rounded-lg">
                        <div class="text-sm mb-2">
                            Core i5 1240P - RAM 16GB - SSD 512GB - Intel Iris Xe Graphics -
                            Màn 14'' 2.2K - LTE 4G
                        </div>
                        <div class="flex">
                            <div class="text-base font-semibold mr-3">34.300.000 đ</div>
                            <div class="text-base font-semibold opacity-60 line-through">
                                52.000.000 đ
                            </div>
                        </div>
                    </div>
                    <div class="border border-gray-300 hover:border-green-600 hover:bg-[#ebfff7] p-3 bg-white rounded-lg">
                        <div class="text-sm mb-2">
                            Core i5 1240P - RAM 16GB - SSD 512GB - Intel Iris Xe Graphics -
                            Màn 14'' 2.2K - LTE 4G
                        </div>
                        <div class="flex">
                            <div class="text-base font-semibold mr-3">34.300.000 đ</div>
                            <div class="text-base font-semibold opacity-60 line-through">
                                52.000.000 đ
                            </div>
                        </div>
                    </div>
                    <div class="border border-gray-300 hover:border-green-600 hover:bg-[#ebfff7] p-3 bg-white rounded-lg">
                        <div class="text-sm mb-2">
                            Core i5 1240P - RAM 16GB - SSD 512GB - Intel Iris Xe Graphics -
                            Màn 14'' 2.2K - LTE 4G
                        </div>
                        <div class="flex">
                            <div class="text-base font-semibold mr-3">34.300.000 đ</div>
                            <div class="text-base font-semibold opacity-60 line-through">
                                52.000.000 đ
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="list-none mt-5 px-5 py-6 bg-[#f4f4f4] text-sm rounded-lg">
                    <li class="py-2">
                        🎁Giảm tới 1.000.000VNĐ khi quý khách mua máy lần 2.
                    </li>
                    <li class="py-2">🎁Tặng Windows bản quyền theo máy</li>
                    <li class="py-2">🎁Chế độ bảo hành 12 tháng lỗi 1 đổi 1</li>
                    <li class="py-2">🎁Tặng balo hoặc túi xách thời trang</li>
                    <li class="py-2">🎁Chuột quang không dây + bàn di chuột</li>
                    <li class="py-2">
                        🎁Tặng gói cài đặt + vệ sinh, bảo dưỡng, trọn đời
                    </li>
                </ul>
                <div class="flex mt-5">
                    <div class="flex items-center w-[65%]">
                        <div class="text-base font-semibold mr-2">Số lượng</div>
                        <input type="number" name="" id="" class="rounded-lg text-center h-full" />
                    </div>
                    <button class="ml-2 text-sm text-white bg-[#d62454] uppercase w-full rounded-lg">
                        <a>Thêm vào giỏ hàng</a>
                    </button>
                </div>
                <div class="grid grid-cols-3 gap-3 mt-5">
                    <button class="bg-[#e00] p-1 rounded-lg">
                        <a>
                            <div class="text-sm font-semibold text-white uppercase">
                                Mua ngay
                            </div>
                            <span class="text-xs text-white capitalize">Giao hàng tận nơi hoặc nhận tại cửa hàng</span>
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