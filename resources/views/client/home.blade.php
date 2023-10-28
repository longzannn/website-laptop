<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut icon" href="https://laptopkhanhtran.vn/pic/system/logo-kt-01636837754534945606.png" type="image/x-icon">
    <title>Laptop cũ Hà Nội giá rẻ | Địa chỉ mua bán laptop cũ uy tín tại Hà Nội và trên Toàn Quốc</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
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
                    @if(!(session()->has('customer')))
                        <li>
                            <a href="{{ route('login1') }}" class="block opacity-60 hover:opacity-100 rounded bg-[#242525] text-white font-semibold md:p-0">
                                Đăng nhập
                            </a>
                        </li>
                    @endif
                    @if(session()->has('customer'))
                        <li>
                            <a href="{{ route('client.profile') }}" class="block opacity-60 hover:opacity-100 rounded bg-[#242525] text-white font-semibold md:p-0">
                                Tài khoản
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('logout1') }}" class="block opacity-60 hover:opacity-100 rounded bg-[#242525] text-white font-semibold md:p-0">
                                Đăng xuất
                            </a>
                        </li>
                    @endif
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
                <a class="text-xs font-semibold uppercase font-semibold" href={{ route('client.category', $category -> cat_id) }}>{{ $category -> cat_name }}</a><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3 ml-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
                <div class="hidden absolute top-[100%] left-0 drop-shadow-xl bg-white w-max rounded-lg">
                    <ul class="">
                        @foreach($subcategories as $subcategory)
                            @if( $subcategory -> cat_id == $category -> cat_id)
                            <li class="py-3 px-6 text-sm text-gray-900 hover:text-green-700">
                                <a class="font-semibold" href={{ route('client.subcategory', $subcategory -> sub_id) }}>{{ $subcategory -> sub_name }}</a>
                            </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </li>
            @endforeach
        </ul>
    </div>

    <!-- Banner -->
    <div class="max-w-[1400px] mx-auto mt-10 mb-20">
        <div class="grid grid-cols-12 px-6">
            <div class="col-span-8">
                <div id="indicators-carousel" class="relative z-0 w-full" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="relative z-0 h-[27.2rem] overflow-hidden rounded-lg">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                            <img src="https://laptopkhanhtran.vn/pic/banner/tes_63824_638265640595273492-w.900-q.60.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://laptopkhanhtran.vn/pic/banner/Free-shi__638265641166041347-w.900-q.60.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://laptopkhanhtran.vn/pic/banner/x1-gen-1__638265641421243615-w.900-q.60.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
                        </div>
                        <!-- Item 4 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://laptopkhanhtran.vn/pic/banner/tra-gop-l_638265641712946875-w.900-q.60.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
                        </div>
                        <!-- Item 5 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://laptopkhanhtran.vn/pic/banner/dell-ins-_638265639915152281-w.900-q.60.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
                        </div>
                    </div>
                    <!-- Slider indicators -->
                    <div class="absolute z-0 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
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
            </div>
            <div class="col-span-4 ml-5">
                <div class="h-96 flex flex-col gap-3.5">
                    <div class="">
                        <img class="w-full rounded-lg" src="https://laptopkhanhtran.vn/pic/banner/Banne_638_638265643831519781-w.455-q.80.jpg" alt="" />
                    </div>
                    <div class="">
                        <img class="w-full rounded-lg" src="https://laptopkhanhtran.vn/pic/banner/banner_63_638265643449698805-w.455-q.80.jpg" alt="" />
                    </div>
                    <div class="">
                        <img class="w-full rounded-lg" src="https://laptopkhanhtran.vn/pic/banner/banner_63_638265642576398741-w.455-q.80.jpg" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Slick category -->
    <div class="max-w-[1400px] px-4 mx-auto mt-10 mb-20">
        <h2 class="text-center font-bold text-2xl mb-10">Danh mục sản phẩm</h2>
        <div class="relative autoplay">
            <div>
                <a class="flex flex-wrap justify-center items-center">
                    <img src="https://laptopkhanhtran.vn/pic/product/h_638159618706283760-w.150-q.80.jpg" alt="" />
                    <div class="uppercase font-bold mt-2">Laptop Dell</div>
                </a>
            </div>
            <div>
                <a class="flex flex-wrap justify-center items-center">
                    <img src="https://laptopkhanhtran.vn/pic/product/thinkpa_638159618614796253-w.150-q.80.jpg" alt="" />
                    <div class="uppercase font-bold mt-2">Lenovo Thinkpad</div>
                </a>
            </div>
            <div>
                <a class="flex flex-wrap justify-center items-center">
                    <img src="https://laptopkhanhtran.vn/pic/product/h_638159618706283760-w.150-q.80.jpg" alt="" />
                    <div class="uppercase font-bold mt-2">Laptop HP</div>
                </a>
            </div>
            <div>
                <a class="flex flex-wrap justify-center items-center">
                    <img src="https://laptopkhanhtran.vn/pic/product/h_638159618706283760-w.150-q.80.jpg" alt="" />
                    <div class="uppercase font-bold mt-2">Laptop Dell</div>
                </a>
            </div>
            <div>
                <a class="flex flex-wrap justify-center items-center">
                    <img src="https://laptopkhanhtran.vn/pic/product/asu_638159618788111097-w.150-q.80.jpg" alt="" />
                    <div class="uppercase font-bold mt-2">Laptop Asus</div>
                </a>
            </div>
            <div>
                <a class="flex flex-wrap justify-center items-center">
                    <img src="https://laptopkhanhtran.vn/pic/product/samsun_638159618865042754-w.150-q.80.jpg" alt="" />
                    <div class="uppercase font-bold mt-2">Laptop Samsung</div>
                </a>
            </div>
            <div>
                <a class="flex flex-wrap justify-center items-center">
                    <img class="w-[150px] h-[150px] rounded-lg" src="https://laptopkhanhtran.vn/pic/icon/no_image.gif" alt="" />
                    <div class="uppercase font-bold mt-2">Laptop LG</div>
                </a>
            </div>
            <div>
                <a class="flex flex-wrap justify-center items-center">
                    <img src="https://laptopkhanhtran.vn/pic/product/surfac_638159618953001630-w.150-q.80.jpg" alt="" />
                    <div class="uppercase font-bold mt-2">Surface</div>
                </a>
            </div>
            <div>
                <a class="flex flex-wrap justify-center items-center">
                    <img src="https://laptopkhanhtran.vn/pic/product/desig_638159619107981928-w.150-q.80.jpg" alt="" />
                    <div class="uppercase font-bold mt-2">Laptop Đồ họa</div>
                </a>
            </div>
            <div>
                <a class="flex flex-wrap justify-center items-center">
                    <img src="https://laptopkhanhtran.vn/pic/product/gamin_638159619022147369-w.150-q.80.jpg" alt="" />
                    <div class="uppercase font-bold mt-2">Laptop gaming</div>
                </a>
            </div>
            <div>
                <a class="flex flex-wrap justify-center items-center">
                    <img src="https://laptopkhanhtran.vn/pic/product/p_638159619247537734-w.150-q.80.jpg" alt="" />
                    <div class="uppercase font-bold mt-2">Linh kiện máy tính</div>
                </a>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div class="max-w-[1400px] mx-auto p-6 border border-[#dcdcdc] rounded-lg mb-20">
        <div class="grid grid-cols-4">
            <div class="border-r border-[#dcdcdc] flex items-center px-8">
                <img src="https://laptopkhanhtran.vn/images/giaohang.svg" alt="" />
                <div class="ml-5">
                    <div class="text-green-900 font-semibold">Giao hàng toàn quốc</div>
                    <div class="text-sm">Miễn phí giao hàng tại Hà Nội</div>
                </div>
            </div>
            <div class="border-r border-[#dcdcdc] flex items-center px-8">
                <img src="https://laptopkhanhtran.vn/images/support.svg" alt="" />
                <div class="ml-5">
                    <div class="text-green-900 font-semibold">Hỗ trợ trực tuyến</div>
                    <div class="text-sm">Chúng tôi luôn hỗ trợ 24/7</div>
                </div>
            </div>
            <div class="border-r border-[#dcdcdc] flex items-center px-8">
                <img src="https://laptopkhanhtran.vn/images/promotion.svg" alt="" />
                <div class="ml-5">
                    <div class="text-green-900 font-semibold">Giá cả phải chăng</div>
                    <div class="text-sm">
                        Chúng tôi luôn có giá tốt nhất cho khách hàng
                    </div>
                </div>
            </div>
            <div class="flex items-center px-8">
                <img src="https://laptopkhanhtran.vn/images/cashback.svg" alt="" />
                <div class="ml-5">
                    <div class="text-green-900 font-semibold">Chính sách hoàn tiền</div>
                    <div class="text-sm">Hoàn tiền 100% nếu sản phẩm không tốt</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Products -->
    <div class="max-w-[1400px] mx-auto bg-red-500 rounded-lg mb-20">
        <div class="bg-[#dc3545] rounded-t-lg px-6 py-4 flex items-center">
            <img src="https://laptopkhanhtran.vn/css/icon/lightning.svg" alt="" />
            <h2 class="text-white font-bold ml-3">GIỜ VÀNG GIÁ SỐC</h2>
            <div class="font-semibold ml-5 mr-3 text-white">chỉ còn</div>
            <div
                class="flex flex-col items-center bg-[#000000b8] py-1 px-2 rounded-lg mr-3"
            >
                <span class="font-bold text-amber-400" id="days">11</span>
                <span class="text-white">ngày</span>
            </div>
            <div
                class="flex flex-col items-center bg-[#000000b8] py-1 px-2 rounded-lg mr-3"
            >
                <span class="font-bold text-amber-400" id="hours">20</span>
                <span class="text-white">giờ</span>
            </div>
            <div
                class="flex flex-col items-center bg-[#000000b8] py-1 px-2 rounded-lg mr-3"
            >
                <span class="font-bold text-amber-400" id="minutes">26</span>
                <span class="text-white">phút</span>
            </div>
            <div
                class="flex flex-col items-center bg-[#000000b8] py-1 px-2 rounded-lg"
            >
                <span class="font-bold text-amber-400" id="seconds">36</span>
                <span class="text-white">giây</span>
            </div>
        </div>
        <div class="relative grid grid-cols-5 gap-3 p-6 owl-carousel">
            @foreach( $products as $product)
            <div class="bg-white rounded-lg p-4">
                <a href={{ route('client.detail',$product -> version_id) }} class="">
                    @php
                        $arrImage = explode(',', $product->prd_images);
                    @endphp
                    <img
                        src={{ Storage::url('admin/') . $arrImage[count($arrImage) - 1] }}
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
    </div>

    <!-- Products -->
    <div class="max-w-[1400px] mx-auto mb-20">
        <h2 class="font-extrabold text-xl text-center mb-5">
            LAPTOP DOANH NHÂN CAO CẤP
        </h2>
        <div class="grid grid-cols-5 gap-3 p-6">
            @foreach( $products as $product)
            <div
                class="bg-white rounded-lg p-4 hover:border hover:border-[#007745]"
            >
                <a href={{ route('client.detail',$product -> version_id) }} class="">
                    @php
                        $arrImage = explode(',', $product->prd_images);
                    @endphp
                    <img
                        src={{ Storage::url('admin/') . $arrImage[count($arrImage) - 1] }}
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
                <ol class="my-2 list-none max-w-md space-y-1 text-gray-500 list-decimal list-inside dark:text-gray-400">
                    <li class="text-sm">
                        <span class="font-semibold text-gray-900 dark:text-white">Địa chỉ:</span>
                        26 Ngõ 165 Thái Hà, Láng Hạ, Đống Đa, Hà Nội
                    </li>
                    <li class="text-sm">
                        <span class="font-semibold text-gray-900 dark:text-white">Điện thoại:</span>
                        0936 23 1234
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
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{ asset('js/client/slick.js') }}"></script>
    <script src="{{ asset('js/client/countdown.js') }}"></script>
    <script src="{{ asset('js/client/owlcarousel.js') }}"></script>
</body>

</html>
