$(".autoplay").slick({
    slidesToShow: 8,
    slidesToScroll: 1,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 2000,
    pauseOnHover: true,
    nextArrow: `<button type="button" class="bg-white z-10 slick-next absolute right-[-5px] top-1/2 translate-y-[-50%] border border-gray-300 rounded-full p-2">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
      </svg>
    </button>`,
    prevArrow: `<button type="button" class="bg-white z-10 slick-prev absolute left-[-5px] top-1/2 translate-y-[-50%] border border-gray-300 rounded-full p-2">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
      </svg>
    </button>`,
});
