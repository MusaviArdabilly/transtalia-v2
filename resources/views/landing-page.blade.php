<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trans Talia</title>
    {{-- custom font --}}
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:300,400,500,600,700,800,900|poppins:300,400,500,600,700,800,900" rel="stylesheet" />
  
    {{-- style development only --}}
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- custom style  --}}
    <link rel="stylesheet" href="{{ asset('assets/css/transtalia.css') }}">
    {{-- fontawesome v6  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <header id="navbar" class="fixed w-full z-10">
      <div class="max-w-6xl flex h-14 justify-between items-center mx-auto">
        <div class="flex items-center space-x-2 drop-shadow brightness-150">
          <svg id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 236.08 204.09" class="h-6">
            <defs><style>.cls-1{fill:#fff;stroke:#231f20;stroke-miterlimit:10;opacity:0.6;}.cls-2{fill:#ed1c24;}.cls-3{fill:#007cc6;}</style></defs>
            <path class="cls-1" d="M90.61,340.13" transform="translate(-7.66 -340.13)"/><polygon class="cls-2" points="215.96 0 215.96 27.27 167.1 27.27 167.1 119.32 135.28 119.32 135.28 26.14 81.87 26.14 81.87 0 215.96 0"/><path class="cls-3" d="M198.52,428.73l45.22-.41-18.41,36.14L182,464Z" transform="translate(-7.66 -340.13)"/><path class="cls-3" d="M178.2,471.15l43.85.28-18.28,34.7-42.06.27Z" transform="translate(-7.66 -340.13)"/><polygon class="cls-3" points="111.21 173.88 191.92 173.88 174.3 204.09 126.84 204.09 111.21 173.88"/><path class="cls-3" d="M118.6,428.73l-45.22-.41,18.41,36.14,43.37-.42Z" transform="translate(-7.66 -340.13)"/><path class="cls-3" d="M138.92,471.15l-43.85.28,18.28,34.7,42.06.27Z" transform="translate(-7.66 -340.13)"/><rect class="cls-3" y="120.49" width="65.07" height="3.73"/><rect class="cls-3" x="21.16" y="162.09" width="65.07" height="3.73"/><rect class="cls-3" x="42.25" y="199.85" width="65.07" height="3.73"/>
          </svg>
          <svg id="Layer_3" data-name="Layer 3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 777.96 146.64" class="h-5">
            <defs><style>.cls-1{fill:#e47816;}.cls-2{fill:#007cc6;}.cls-3{fill:#ed1c24;}</style></defs>
            <path class="cls-1" d="M323.33,410.51H284.05V399.16h95.61v11.35H340.19v92H323.33Z" transform="translate(-284.05 -395.32)"/><path class="cls-1" d="M375.67,451.45c0-8.74-.19-16.26-.77-23.16h14.75l.58,14.57H391c4.22-10,14.37-16.25,25.68-16.25a22.44,22.44,0,0,1,4.79.46v12.72a32.1,32.1,0,0,0-5.75-.46c-11.88,0-20.31,7.21-22.61,17.33a31,31,0,0,0-.76,6.29v39.56H375.67Z" transform="translate(-284.05 -395.32)"/><path class="cls-1" d="M485.41,502.51l-1.34-9.36h-.58c-5.17,5.83-15.13,11-28.35,11-18.78,0-28.36-10.58-28.36-21.31,0-17.94,19.93-27.75,55.75-27.6v-1.53c0-6.14-2.1-17.18-21.07-17.18a55,55,0,0,0-24.14,5.52l-3.83-8.89c7.66-4,18.77-6.59,30.46-6.59,28.35,0,35.25,15.48,35.25,30.36v27.75a84.07,84.07,0,0,0,1.53,17.79Zm-2.49-37.88c-18.4-.3-39.28,2.3-39.28,16.72,0,8.74,7.28,12.88,15.9,12.88,12.07,0,19.74-6.14,22.42-12.42a11.73,11.73,0,0,0,1-4.3Z" transform="translate(-284.05 -395.32)"/><path class="cls-1" d="M521,448.38c0-7.67-.19-13.95-.76-20.09h14.94l1,12.27h.38c4.6-7.05,15.33-13.95,30.65-13.95,12.84,0,32.77,6.13,32.77,31.58v44.32H583.06V459.73c0-12-5.56-21.93-21.46-21.93-11.11,0-19.74,6.29-22.61,13.8a16,16,0,0,0-1.15,6.29v44.62H521Z" transform="translate(-284.05 -395.32)"/><path class="cls-1" d="M618.78,488.71A52.46,52.46,0,0,0,641,494.07c12.26,0,18-4.9,18-11,0-6.44-4.79-10-17.25-13.64-16.66-4.76-24.52-12.12-24.52-21,0-12,12.07-21.77,32-21.77,9.38,0,17.62,2.14,22.79,4.6L667.83,441a42.87,42.87,0,0,0-19-4.29c-10,0-15.52,4.6-15.52,10.12,0,6.13,5.56,8.89,17.63,12.57,16.09,4.91,24.33,11.35,24.33,22.39,0,13-12.64,22.23-34.68,22.23-10.15,0-19.54-2-26-5.06Z" transform="translate(-284.05 -395.32)"/><path class="cls-1" d="M774.35,412.19H735.08V400.84h95.6v11.35H791.21v92H774.35Z" transform="translate(-284.05 -395.32)"/><path class="cls-1" d="M876.6,504.19l-1.34-9.35h-.57c-5.18,5.83-15.14,11-28.36,11-18.78,0-28.35-10.58-28.35-21.32,0-17.94,19.92-27.75,55.75-27.6v-1.53c0-6.13-2.11-17.17-21.08-17.17a54.94,54.94,0,0,0-24.14,5.52l-3.83-8.9c7.66-4,18.78-6.59,30.46-6.59,28.36,0,35.26,15.49,35.26,30.36V486.4a84,84,0,0,0,1.53,17.79Zm-2.49-37.87c-18.39-.31-39.28,2.3-39.28,16.71,0,8.74,7.29,12.88,15.91,12.88,12.07,0,19.73-6.13,22.41-12.42a11.48,11.48,0,0,0,1-4.29Z" transform="translate(-284.05 -395.32)"/><path class="cls-1" d="M912.31,395.32h16.86V504.19H912.31Z" transform="translate(-284.05 -395.32)"/><path class="cls-1" d="M970.38,409.12c.19,4.6-4,8.28-10.73,8.28-5.94,0-10.16-3.68-10.16-8.28s4.41-8.43,10.54-8.43C966.35,400.69,970.38,404.37,970.38,409.12ZM951.6,504.19V430h16.86v74.21Z" transform="translate(-284.05 -395.32)"/><path class="cls-1" d="M1042.14,504.19l-1.34-9.35h-.57c-5.17,5.83-15.14,11-28.36,11-18.77,0-28.35-10.58-28.35-21.32,0-17.94,19.92-27.75,55.75-27.6v-1.53c0-6.13-2.11-17.17-21.07-17.17a54.88,54.88,0,0,0-24.14,5.52l-3.84-8.9c7.67-4,18.78-6.59,30.47-6.59,28.35,0,35.25,15.49,35.25,30.36V486.4a84,84,0,0,0,1.53,17.79Zm-2.49-37.87c-18.39-.31-39.27,2.3-39.27,16.71,0,8.74,7.28,12.88,15.9,12.88,12.07,0,19.73-6.13,22.42-12.42a11.66,11.66,0,0,0,1-4.29Z" transform="translate(-284.05 -395.32)"/><rect class="cls-2" y="126.58" width="777.96" height="5.6"/><rect class="cls-3" y="141.03" width="777.96" height="5.6"/>
          </svg>
        </div>
        <div class="flex items-center space-x-10">
          <div class="font-semibold text-white">Jadwal</div>
          <div class="font-semibold text-white">Login</div>
        </div>
      </div>
    </header>
    <section class="relative w-full h-screen">
      <img src="{{ asset('assets/images/hero/hero1.jpg') }}" alt="Hero Images" class="absolute w-full h-screen brightness-50 z-0">
      <div class="absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] text-center space-y-5 w-max">
        <h1 class="font-bold text-5xl text-white">Trans Talia</h1>
        <h5 class="font-semibold text-xl text-white">Temukan pengalaman transportasi darat yang menarik bersama Trans Talia</h5>
        <button class="font-semibold border rounded-md text-white px-5 py-2 mt-5 hover:-translate-y-1 hover:scale-110 hover:bg-white hover:text-black transition duration-200 ease-in-out">
          <a href="/jadwal" class="">Cek Jadwal Sekarang!</a>
        </button>
      </div>
    </section>
    <section class="max-w-6xl mx-auto pt-32 pb-16">
      <div class="grid grid-cols-2 gap-5">
        <div class="grid grid-rows-2">
          <div class="grid grid-cols-3 place-items-center gap-5">
            <div class="text-center">
              <i class="text-4xl fa-regular fa-calendar-days mb-5"></i>
              <div>
                <h1 class="font-medium">Pengalaman (Tahun)</h1>
                <h1 class="font-bold">8</h1>
              </div>
            </div>
            <div class="text-center">
              <i class="text-4xl fa-regular fa-face-smile mb-5"></i>
              <div>
                <h1 class="font-medium">Pelanggan Terupaskan</h1>
                <h1 class="font-bold">1534+</h1>
              </div>
            </div>
            <div class="text-center">
              <i class="text-4xl fa-solid fa-globe mb-5"></i>
              <div>
                <h1 class="font-medium">Jangkauan Destinasi</h1>
                <h1 class="font-bold">Jawa - Bali</h1>
              </div>
            </div>
          </div>
          <h2>
            Sejak didirikan pada tahun 2008, kami telah menjadi simbol keunggulan dalam industri ini. 
            Apa yang dimulai dengan satu bus berukuran medium kini berkembang menjadi armada 12 kendaraan yang dipelihara dengan cermat. 
            Armada kami terdiri dari bus besar yang luas dan bus medium yang lincah, menjamin kenyamanan dan kemudahan dalam setiap perjalanan. <br>
            Dengan bangga bermarkas di Mojoagung, Jombang, Jawa Timur, Trans Talia adalah mitra terpercaya Anda dalam pengalaman perjalanan yang aman 
            dan dapat diandalkan.
          </h2>
        </div>
        <div class="grid grid-cols-3 mt-2">
          <div class="relative h-64 rounded-lg border-4 border-black skew-y-[-5deg] overflow-hidden my-auto hover:skew-y-0 hover:h-96 hover:w-80 hover:left-1/2 hover:translate-x-[-50%] hover:z-10 transition duration-200 ease-in-out">
            <img src="{{ asset('assets/images/banner/jb5-1.jpg') }}" alt="" class="absolute object-cover w-full h-[calc(100%+50px)] rounded skew-y-[5deg] mt-[-25px] hover:skew-y-0">
          </div>
          <div class="relative h-80 rounded-lg border-4 border-black skew-y-[-5deg] overflow-hidden my-auto hover:skew-y-0 hover:h-96 hover:w-80 hover:left-1/2 hover:translate-x-[-50%] hover:z-10 transition duration-200 ease-in-out">
            <img src="{{ asset('assets/images/banner/jb5-2.jpg') }}" alt="" class="absolute object-cover w-full h-[calc(100%+50px)] rounded skew-y-[5deg] mt-[-25px] hover:skew-y-0">
          </div>
          <div class="relative h-96 rounded-lg border-4 border-black skew-y-[-5deg] overflow-hidden my-auto hover:skew-y-0 hover:h-96 hover:w-80 hover:left-1/2 hover:translate-x-[-50%] hover:z-10 transition duration-200 ease-in-out">
            <img src="{{ asset('assets/images/banner/jb5-3.webp') }}" alt="" class="absolute object-cover w-full h-[calc(100%+50px)] rounded skew-y-[5deg] mt-[-25px] hover:skew-y-0">
          </div>
        </div>
      </div>
    </section>
    <section class="max-w-6xl mx-auto py-16 space-y-10">
      <h1 class="text-center font-bold text-3xl">Kunjungi kami</h1>
      <div class="w-full h-[40rem] rounded-lg overflow-hidden">
        <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=100%&amp;hl=en&amp;q=transtalia%20bus%20garage+(My%20Business%20Name)&amp;t=&amp;z=10&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
      </div>
    </section>
    <section class="max-w-6xl mx-auto pt-16 pb-32">
      <a href="https://wa.me/082233994239" target="_blank">
        <div class="flex items-center rounded-lg shadow-lg overflow-hidden cursor-pointer hover:bg-green-500">
          <img src="{{ asset('assets/images/banner/mercyjb5.jpeg') }}" alt="Mercy" class="h-64">
          <div class="w-full space-y-5">
            <h1 class="text-center font-bold text-3xl">Hubungi kami</h1>
            <div class="flex justify-center items-center space-x-3">
              <i class="fa-brands fa-whatsapp text-xl"></i>
              <h3>+62 82233994239</h3>
            </div>
          </div>
        </div>
      </a>
    </section>
  
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        const fixedPixelValue = '56px';
        const pixelValue = parseInt(fixedPixelValue, 10);
        const oneVh = window.innerHeight - pixelValue;

        // Select the element you want to add the class to
        const navbar = document.getElementById('navbar');

        // Add event listener for scroll
        window.addEventListener('scroll', function () {
          // Check the scroll position
          if (window.scrollY > oneVh) {
            // Add the class if scrolled past the screen width
            navbar.classList.add('bg-gray-900/75');
          } else {
            // Remove the class if scrolled back above the screen width
            navbar.classList.remove('bg-gray-900/75');
          }
        });
      });
    </script>
  </body>
</html>