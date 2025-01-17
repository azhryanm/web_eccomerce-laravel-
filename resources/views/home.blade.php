<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
<div class="bg-white min-h-screen flex flex-col">
  <header class="absolute inset-x-0 top-0 z-50">
    <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
      <div class="flex lg:flex-1">
        <a href="#" class="-m-1.5 p-1.5">
          <span class="sr-only">Your Company</span>
          <img class="h-8 w-auto" src="{{ asset('images/logozyra.png') }}" alt="Logo Zyra">
        </a>
      </div>
      <div class="flex lg:hidden">
        <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
          <span class="sr-only">Open main menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>
      <div class="hidden lg:flex lg:gap-x-12">
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Product</a>
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Features</a>
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Marketplace</a>
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900">costumer service</a>
      </div>
      <div class="hidden lg:flex lg:flex-1 lg:justify-end">
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Log in <span aria-hidden="true">&rarr;</span></a>
      </div>
    </nav>
  </header>

  <div class="relative isolate px-6 pt-14 lg:px-8 flex-grow">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
      <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
      <div class="hidden sm:mb-8 sm:flex sm:justify-center">
        <div class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
        Mengapa Anda harus memilih produk kami? <a href="#" class="font-semibold text-indigo-600"><span class="absolute inset-0" aria-hidden="true"></span>Read more <span aria-hidden="true">&rarr;</span></a>
        </div>
      </div>
      <div class="text-center">
        <h1 class="text-balance text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">zyra preloved </h1>
        <p class="mt-6 text-lg leading-8 text-gray-600">Temukan gaya terbaikmu dengan koleksi Zyra Preloved! Kami menghadirkan berbagai pilihan celana dan baju preloved dengan tema  yang trendy dan stylish. Semua produk dipilih dengan hati-hati dan masih dalam kondisi sangat baik, cocok untuk kamu yang suka tampil beda!</p>
        <div class="mt-10 flex items-center justify-center gap-x-6">
          <a href="#" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get started</a>
          <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Learn more <span aria-hidden="true">→</span></a>
        </div>
      </div>
    </div>


    

<!-- Wrapper grid untuk Pants dan Hoodie -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-10 mb-8">
    <!-- Bagian Pants -->
    <div 
        class="p-6 bg-cover bg-center rounded-lg shadow-md hover:shadow-2xl transition-shadow duration-300 cursor-pointer h-screen" 
        style="background-image: url('{{ asset('images/rucas1.jpg') }}');" 
        onclick="window.location.href='{{ route('product') }}'">
        <p class="text-6xl text-white">Pants</p>
        <p class="text-xl text-white">Rp 399.00</p>
    </div>
    
    <!-- Bagian Hoodie -->
    <div 
        class="p-6 bg-cover bg-center rounded-lg shadow-md hover:shadow-2xl transition-shadow duration-300 cursor-pointer h-screen" 
        style="background-image: url('{{ asset('images/chambermix.jpg') }}');" 
        onclick="window.location.href='{{ route('product2') }}'">
        <p class="text-6xl text-white">Hoodie</p>
        <p class="text-xl text-white">Rp 399.00</p>
    </div>
</div>



  <!-- Footer -->
  <footer class="bg-gray-800 text-white py-4 mt-auto">
    <div class="container mx-auto text-center">
      © 2024 Zyra Preloved. All Rights Reserved.
    </div>
  </footer>
</div>

</body>
</html>
