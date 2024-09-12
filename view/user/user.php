<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="stylesheet" href="src/output.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <title>DentalPro</title>

  <style>
    #menu-toggle:checked+#menu {
      display: block;
    }

    #dropdown-toggle:checked+#dropdown {
      display: block;
    }

    a,
    span {
      position: relative;
      text-decoration: none;
      transition: all 0.3s ease;
    }

    a.arrow,
    span.arrow {
      display: flex;
      align-items: center;
      font-weight: 600;
      line-height: 1.5;
    }

    a.arrow .arrow_icon,
    span.arrow .arrow_icon {
      position: relative;
      margin-left: 0.5em;
    }

    a.arrow .arrow_icon svg,
    span.arrow .arrow_icon svg {
      transition: transform 0.3s 0.02s ease;
      margin-right: 1em;
    }

    a.arrow .arrow_icon::before,
    span.arrow .arrow_icon::before {
      content: "";
      display: block;
      position: absolute;
      top: 50%;
      left: 0;
      width: 0;
      height: 2px;
      background: #38b2ac;
      transform: translateY(-50%);
      transition: width 0.3s ease;
    }

    a.arrow:hover .arrow_icon::before,
    span.arrow:hover .arrow_icon::before {
      width: 1em;
    }

    a.arrow:hover .arrow_icon svg,
    span.arrow:hover .arrow_icon svg {
      transform: translateX(0.75em);
    }

    /* .cover {
      border-bottom-right-radius: 128px;
    } */

    .bg-blue-teal-gradient {
      background: rgb(49, 130, 206);
      background: linear-gradient(90deg, rgba(49, 130, 206, 1) 0%, rgba(56, 178, 172, 1) 100%);
    }

    /* @media (min-width: 1024px) {
      .cover {
        border-bottom-right-radius: 256px;
      }
    } */
  </style>
</head>

<body class="antialiased bg-white font-sans text-gray-900">

  <main class="w-full">

    <!-- start header -->
    <header class="absolute top-0 left-0 w-full z-50 px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64">
      <div class="hidden md:flex justify-between items-center py-2 border-b text-sm py-3"
        style="border-color: rgba(255,255,255,.25)">
        <div class="">
          <ul class="flex text-white">
            <li>
              <div class="flex items-center">
              <img src="src/images/logo.png" alt="Logo" class="w-30 h-20">

                <!-- <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current text-white" viewBox="0 0 24 24">
                  <path
                    d="M12,2C7.589,2,4,5.589,4,9.995C3.971,16.44,11.696,21.784,12,22c0,0,8.029-5.56,8-12C20,5.589,16.411,2,12,2z M12,14 c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S14.21,14,12,14z" />
                </svg> -->

                <span class="ml-2 text-white font-bold italic font-serif text-2xl ">Teknik Informatika</span>
              </div>
            </li>
            <li class="ml-6">
              <div class="flex items-center">
                <!-- <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current text-white" viewBox="0 0 24 24">
                  <path
                    d="M14.594,13.994l-1.66,1.66c-0.577-0.109-1.734-0.471-2.926-1.66c-1.193-1.193-1.553-2.354-1.661-2.926l1.661-1.66 l0.701-0.701L5.295,3.293L4.594,3.994l-1,1C3.42,5.168,3.316,5.398,3.303,5.643c-0.015,0.25-0.302,6.172,4.291,10.766 C11.6,20.414,16.618,20.707,18,20.707c0.202,0,0.326-0.006,0.358-0.008c0.245-0.014,0.476-0.117,0.649-0.291l1-1l0.697-0.697 l-5.414-5.414L14.594,13.994z" />
                </svg> -->

                <!-- <span class="ml-2">+1 562-789-1935</span> -->
              </div>
            </li>
          </ul>
        </div>

        <div class="">
          <ul class="flex justify-end text-white">
            <li>
              <a href="#" target="_blank" title="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                  <path
                    d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325,1.42-3.592,3.5-3.592	c0.699-0.002,1.399,0.034,2.095,0.107v2.42h-1.435c-1.128,0-1.348,0.538-1.348,1.325v1.735h2.697l-0.35,2.725h-2.348V21H20	c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z">
                  </path>
                </svg>
              </a>
            </li>

            <li class="ml-6">
              <a href="#" target="_blank" title="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                  <path
                    d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809	c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793	c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05	c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032	c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028	c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22	c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z">
                  </path>
                </svg>
              </a>
            </li>

            <li class="ml-6">
              <a href="#" target="_blank" title="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                  <path
                    d="M20.947,8.305c-0.011-0.757-0.151-1.508-0.419-2.216c-0.469-1.209-1.424-2.165-2.633-2.633 c-0.699-0.263-1.438-0.404-2.186-0.42C14.747,2.993,14.442,2.981,12,2.981s-2.755,0-3.71,0.055 c-0.747,0.016-1.486,0.157-2.185,0.42C4.896,3.924,3.94,4.88,3.472,6.089C3.209,6.788,3.067,7.527,3.053,8.274 c-0.043,0.963-0.056,1.268-0.056,3.71s0,2.754,0.056,3.71c0.015,0.748,0.156,1.486,0.419,2.187 c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45c0.963,0.043,1.268,0.056,3.71,0.056s2.755,0,3.71-0.056 c0.747-0.015,1.486-0.156,2.186-0.419c1.209-0.469,2.164-1.425,2.633-2.633c0.263-0.7,0.404-1.438,0.419-2.187 c0.043-0.962,0.056-1.267,0.056-3.71C21.003,9.572,21.003,9.262,20.947,8.305z M11.994,16.602c-2.554,0-4.623-2.069-4.623-4.623 s2.069-4.623,4.623-4.623c2.552,0,4.623,2.069,4.623,4.623S14.546,16.602,11.994,16.602z M16.801,8.263 c-0.597,0-1.078-0.482-1.078-1.078s0.481-1.078,1.078-1.078c0.595,0,1.077,0.482,1.077,1.078S17.396,8.263,16.801,8.263z">
                  </path>
                  <circle cx="11.994" cy="11.979" r="3.003"></circle>
                </svg>
              </a>
            </li>

            <li class="ml-6">
              <a href="#" target="_blank" title="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                  <path
                    d="M21.593,7.203c-0.23-0.858-0.905-1.535-1.762-1.766C18.265,5.007,12,5,12,5S5.736,4.993,4.169,5.404	c-0.84,0.229-1.534,0.921-1.766,1.778c-0.413,1.566-0.417,4.814-0.417,4.814s-0.004,3.264,0.406,4.814	c0.23,0.857,0.905,1.534,1.763,1.765c1.582,0.43,7.83,0.437,7.83,0.437s6.265,0.007,7.831-0.403c0.856-0.23,1.534-0.906,1.767-1.763	C21.997,15.281,22,12.034,22,12.034S22.02,8.769,21.593,7.203z M9.996,15.005l0.005-6l5.207,3.005L9.996,15.005z">
                  </path>
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="flex flex-wrap items-center justify-between py-6">
        <div class="w-1/2 md:w-auto">
          <a href="index.html" class="text-white font-bold text-2xl">
           Team OP
          </a>
        </div>

        <label for="menu-toggle" class="pointer-cursor md:hidden block"><svg class="fill-current text-white"
            xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
            <title>menu</title>
            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
          </svg></label>

        <input class="hidden" type="checkbox" id="menu-toggle">

        <div class="hidden md:block w-full md:w-auto" id="menu">
          <nav
            class="w-full bg-white md:bg-transparent rounded shadow-lg px-6 py-4 mt-4 text-center md:p-0 md:mt-0 md:shadow-none">
            <ul class="md:flex items-center">
              <li><a class="py-2 inline-block md:text-white md:hidden lg:block font-semibold" href="#">About Us</a></li>
              <!-- <li class="md:ml-4"><a class="py-2 inline-block md:text-white md:px-2 font-semibold"
                  href="#">Treatments</a></li>
              <li class="md:ml-4"><a class="py-2 inline-block md:text-white md:px-2 font-semibold"
                  href="#">Testimonials</a></li>
              <li class="md:ml-4 md:hidden lg:block"><a class="py-2 inline-block md:text-white md:px-2 font-semibold"
                  href="#">Blog</a></li> -->
              <li class="md:ml-4"><a class="py-2 inline-block md:text-white md:px-2 font-semibold" href="#">Contact
                  Us</a></li>
              <li class="md:ml-6 mt-3 md:mt-0">
                <a class="inline-block font-semibold px-4 py-2 text-white bg-blue-600 md:bg-transparent md:text-white border border-white rounded"
                  href="book-appointment.html">Pinjam Lab
                  </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header -->

    <!-- start hero -->
    <div class="bg-gray-100">
      <section class="cover bg-blue-teal-gradient relative bg-blue-600 px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 overflow-hidden py-48 flex
      items-center min-h-screen">
      <div class="h-full w-full absolute top-0 left-0 z-0">
            <img src="src/images/Gedung Ti.jpg" alt="Deskripsi gambar" class="w-full h-full object-cover opacity-20">
        </div>


        <div class="lg:w-3/4 xl:w-2/4 relative z-10 h-100 lg:mt-16">
          <div>
            <h1 class="text-white text-4xl md:text-5xl xl:text-6xl font-bold italic font-serif leading-tight">Sistem Peminjaman Laboraturium TI
              </h1>
            <!-- <p class="text-blue-100 text-xl md:text-2xl leading-snug mt-4">Welcome to the Dentist Office of Dr. Thomas
              Dooley,
              where
              trust
              and comfort are priorities.</p> -->
            <a href="#" class="px-8 py-4 bg-teal-500 text-white rounded inline-block mt-8 font-semibold">Pinjam
              Lab</a>
          </div>
        </div>
      </section>
    </div>
    <!-- end hero -->

    <!-- start about -->
    <section class="relative px-4 py-16 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 lg:py-32">
      <div class="flex flex-col lg:flex-row lg:-mx-8">
        <div class="w-full lg:w-1/2 lg:px-8">
          <h2 class="text-3xl leading-tight font-bold mt-4">Welcome to Sistem Peminjaman Laboraturium TI</h2>
          <p class="text-lg mt-4 font-semibold">Laboraturium Jurusan Teknik Informatika</p>
          <p class="mt-2 leading-relaxed">Laboratorium Jurusan Teknik Informatika merupakan pusat pengembangan dan
             inovasi dalam bidang teknologi informasi. Kami menyediakan fasilitas lengkap dan
              modern untuk mendukung kegiatan praktikum, penelitian, dan pengembangan keahlian mahasiswa di berbagai bidang informatika.</p>
        </div>

        <div class="w-full lg:w-1/2 lg:px-8 mt-12 lg:mt-0">
          <div class="md:flex">
            <div>
              <!-- <div class="w-16 h-16 bg-blue-600 rounded-full"></div> -->
            </div>
            <div class="md:ml-8 mt-4 md:mt-0">
              <h4 class="text-xl font-bold leading-tight">Fsilitas Unggulan</h4>
              <p class="mt-2 leading-relaxed">1. Perangkat komputer dengan spesifikasi tinggi</p>
<p>2. Jaringan internet dengan kecepatan tinggi</p>
<p>3. Ruang riset yang nyaman dan mendukung kreativitas</p>
<p>4. Server untuk pengembangan aplikasi berbasis cloud</p>
<p>5. Software terbaru untuk mendukung pengembangan proyek mahasiswa.</p>
            </div>
          </div>

          <div class="md:flex mt-8">
            <div>
              <!-- <div class="w-16 h-16 bg-blue-600 rounded-full"></div> -->
            </div>
            <!-- <div class="md:ml-8 mt-4 md:mt-0">
              <h4 class="text-xl font-bold leading-tight">Misi</h4>
              <p class="mt-2 leading-relaxed">Menyelenggarakan pendidikan vokasi berorientasi pada penelitian untuk menghasilkan produk inovatif dan kreatif serta menghasilkan lulusan berkompeten dan berkarakter.
Meningkatkan kualitas sumber daya manusia di bidang keilmuan, informatika dan Komputer dengan memperhatikan standart mutu serta bidang kompetensi.
</p> -->
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>
      <!-- </section> -->
<!-- star tes -->
<br>
<br>


<div class="max-w-6xl mx-auto font-[sans-serif]">
  <h2 class="text-gray-800 sm:text-4xl text-2xl font-extrabold text-center mb-16">Tools popular</h2>
  
  <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-12">
    
    <!-- Customization Feature -->
    <div class="text-center">
      <img src="src/images/vscode.png" alt="VSCode Logo" class="w-8 mb-5 inline-block">
      <h3 class="text-gray-800 text-xl font-semibold mb-3">VSCode</h3>
      <p class="text-gray-600 text-sm">Tailor our product to suit your needs.</p>
    </div>

    <!-- Security Feature -->
    <div class="text-center">
      <img src="src/images/xampp.png" alt="XAMPP Logo" class="w-8 mb-6 inline-block">
      <h3 class="text-gray-800 text-xl font-semibold mb-3">Xampp</h3>
      <p class="text-gray-600 text-sm">Your data is protected by the latest security measures.</p>
    </div>

    <!-- Support Feature -->
    <div class="text-center">
      <img src="src/images/laragon.png" alt="Laragon Logo" class="w-8 mb-6 inline-block">
      <h3 class="text-gray-800 text-xl font-semibold mb-3">Laragon</h3>
      <p class="text-gray-600 text-sm">24/7 customer support for all your inquiries.</p>
    </div>

    <!-- Performance Feature -->
    <div class="text-center">
      <img src="src/images/figma.png" alt="Figma Logo" class="w-8 mb-6 inline-block">
      <h3 class="text-gray-800 text-xl font-semibold mb-3">Figma</h3>
      <p class="text-gray-600 text-sm">Experience blazing-fast performance with our product.</p>
    </div>

    <!-- Speed Feature -->
    <div class="text-center">
      <img src="src/images/fl.png" alt="FL Studio Logo" class="w-8 mb-6 inline-block">
      <h3 class="text-gray-800 text-xl font-semibold mb-3">Flutter</h3>
      <p class="text-gray-600 text-sm">Optimized for fast and efficient workflows.</p>
    </div>
    
    <div class="text-center">
      <img src="src/images/as.png" alt="a Studio Logo" class="w-8 mb-6 inline-block">
      <h3 class="text-gray-800 text-xl font-semibold mb-3">Android Studio</h3>
      <p class="text-gray-600 text-sm">Optimized for fast and efficient workflows.</p>
    </div>
    
  </div>
</div>

<!-- end tes -->
 

   
    <!-- end about -->
<br>
<br>
<!-- startes -->
<div class="grid md:grid-cols-2 items-center md:gap-4 gap-8 font-[sans-serif] max-w-5xl max-md:max-w-md mx-auto">
      <div class="max-md:order-1 max-md:text-center">
        <h3 class="text-gray-800 md:text-3xl text-2xl md:leading-10">Lab Sistem Informasi.</h3>
        <p class="mt-4 text-sm text-gray-600">Lab. Sistem Informasi dan Basis Data, digunakan untuk Praktikum : 
          Basis Data, Perancangan Basis Data, Administrasi Basis Data, Teori dan Praktikum Konsep Pemogram 1,2, 
          Pekerjaan tugas mata kuliah, tugas akhir (TA), dan pengabdian masyarakat..</p>
        <ul class="mt-4 space-y-4">
        <li class="flex items-center">
          <div class="bg-green-500 text-white w-4 h-4 flex items-center justify-center rounded-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z" clip-rule="evenodd" />
            </svg>
          </div>
          <span class="ml-2 text-lg">pc gaming</span>
        </li>
        <li class="flex items-center">
          <div class="bg-green-500 text-white w-4 h-4 flex items-center justify-center rounded-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z" clip-rule="evenodd" />
            </svg>
          </div>
          <span class="ml-2 text-lg">Ruangan AC</span>
        </li>
        <li class="flex items-center">
          <div class="bg-green-500 text-white w-4 h-4 flex items-center justify-center rounded-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z" clip-rule="evenodd" />
            </svg>
          </div>
          <span class="ml-2 text-lg">Tv</span>
        </li>
      </ul>
        <button type="button" class="px-5 py-2.5 mt-8 rounded text-sm outline-none tracking-wide bg-blue-600 text-white hover:bg-blue-700">Explore</button>
      </div>
      <div class="md:h-[470px]">
        <img src="src/images/labiot.jpeg" class="w-72 min-h-full	 md:object-contain" />
      </div>
      
    </div>
 <!-- endtes -->
 <div class="grid md:grid-cols-2 items-center md:gap-4 gap-8 font-[sans-serif] max-w-5xl max-md:max-w-md mx-auto">
  <div class="md:h-[470px] max-md:order-1">
    <img src="src/images/labjarkom.jpeg" class="w-72 min-h-full md:object-contain" />
  </div>
  <div class="max-md:text-center">
    <h3 class="text-gray-800 md:text-3xl text-2xl md:leading-10">Lab Jaringan Komputer    </h3>
    <p class="mt-4 text-sm text-gray-600">Lab. Jaringan Komputer dan Informasi, digunakan untuk praktikum : 
      Sistem Operasi, Konsep Jaringan, Administrasi Sistem, Administrasi Jaringan, Sistem informasi manajemen, 
      Pelatihan Cisco Local Academy, Pekerjaan tugas mata kuliah, tugas akhir (TA), 
      komputasi berbasis jaringan, dan Pengabdian Pada Masyarakat.</p>
    <ul class="mt-4 space-y-4">
      <li class="flex items-center">
        <div class="bg-green-500 text-white w-4 h-4 flex items-center justify-center rounded-md">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z" clip-rule="evenodd" />
          </svg>
        </div>
        <span class="ml-2 text-lg">Lorem Ipsum</span>
      </li>
      <li class="flex items-center">
        <div class="bg-green-500 text-white w-4 h-4 flex items-center justify-center rounded-md">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z" clip-rule="evenodd" />
          </svg>
        </div>
        <span class="ml-2 text-lg">Lorem Ipsum</span>
      </li>
      <li class="flex items-center">
        <div class="bg-green-500 text-white w-4 h-4 flex items-center justify-center rounded-md">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z" clip-rule="evenodd" />
          </svg>
        </div>
        <span class="ml-2 text-lg">Lorem Ipsum</span>
      </li>
    </ul>
    <button type="button" class="px-5 py-2.5 mt-8 rounded text-sm outline-none tracking-wide bg-blue-600 text-white hover:bg-blue-700">Explore</button>
  </div>
</div>
<!-- tes3 -->
<div class="grid md:grid-cols-2 items-center md:gap-4 gap-8 font-[sans-serif] max-w-5xl max-md:max-w-md mx-auto">
      <div class="max-md:order-1 max-md:text-center">
        <h3 class="text-gray-800 md:text-3xl text-2xl md:leading-10">Lab Multimedia        </h3>
        <p class="mt-4 text-sm text-gray-600">Lab. Pembelajaran Multimedia, dapat digunakan untuk Praktikum :
           Animasi Multimedia, Desain Grafis,Video Editing, MYOB, Pekerjaan tugas mata kuliah, 
          tugas akhir (TA), dan pengabdian masyarakat.</p>
        <ul class="mt-4 space-y-4">
        <li class="flex items-center">
          <div class="bg-green-500 text-white w-4 h-4 flex items-center justify-center rounded-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z" clip-rule="evenodd" />
            </svg>
          </div>
          <span class="ml-2 text-lg">Lorem Ipsum</span>
        </li>
        <li class="flex items-center">
          <div class="bg-green-500 text-white w-4 h-4 flex items-center justify-center rounded-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z" clip-rule="evenodd" />
            </svg>
          </div>
          <span class="ml-2 text-lg">Lorem Ipsum</span>
        </li>
        <li class="flex items-center">
          <div class="bg-green-500 text-white w-4 h-4 flex items-center justify-center rounded-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z" clip-rule="evenodd" />
            </svg>
          </div>
          <span class="ml-2 text-lg">Lorem Ipsum</span>
        </li>
      </ul>
        <button type="button" class="px-5 py-2.5 mt-8 rounded text-sm outline-none tracking-wide bg-blue-600 text-white hover:bg-blue-700">Explore</button>
      </div>
      <div class="md:h-[470px]">
        <img src="src/images/labmulti.jpeg" class="w-72 min-h-full	 md:object-contain" />
      </div>
      
    </div>
    <!-- endtes3 -->
     <!-- tes4 -->
     <div class="grid md:grid-cols-2 items-center md:gap-4 gap-8 font-[sans-serif] max-w-5xl max-md:max-w-md mx-auto">
  <div class="md:h-[470px] max-md:order-1">
    <img src="src/images/labpemrograman.jpeg" class="w-72 min-h-full md:object-contain" />
  </div>
  <div class="max-md:text-center">
    <h3 class="text-gray-800 md:text-3xl text-2xl md:leading-10">Lab Pemrograman</h3>
    <p class="mt-4 text-sm text-gray-600">Lab. Pemrograman Tingkat Lanjut, digunakan untuk praktikum : 
      Pemograman Berorientasi Objek (PBO), Struktur Data, Pekerjaan tugas mata kuliah, 
      Pelatihan Java Fundamental (Oracle Academy) tugas akhir (TA),
       dan pengabdian masyarakat.</p>
    <ul class="mt-4 space-y-4">
      <li class="flex items-center">
        <div class="bg-green-500 text-white w-4 h-4 flex items-center justify-center rounded-md">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z" clip-rule="evenodd" />
          </svg>
        </div>
        <span class="ml-2 text-lg">Lorem Ipsum</span>
      </li>
      <li class="flex items-center">
        <div class="bg-green-500 text-white w-4 h-4 flex items-center justify-center rounded-md">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z" clip-rule="evenodd" />
          </svg>
        </div>
        <span class="ml-2 text-lg">Lorem Ipsum</span>
      </li>
      <li class="flex items-center">
        <div class="bg-green-500 text-white w-4 h-4 flex items-center justify-center rounded-md">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z" clip-rule="evenodd" />
          </svg>
        </div>
        <span class="ml-2 text-lg">Lorem Ipsum</span>
      </li>
    </ul>
    <button type="button" class="px-5 py-2.5 mt-8 rounded text-sm outline-none tracking-wide bg-blue-600 text-white hover:bg-blue-700">Explore</button>
  </div>
</div>
<br>
<div class="text-center">
    <a class="inline-block font-semibold px-4 py-2 text-white bg-blue-600 md:text-white border border-green rounded hover:text-white-700 transition-all duration-300 hover:bg-blue-700"
       href="book-appointment.html">
       Lihat Semua Lab <i class="fas fa-arrow-right ml-2"></i>
    </a>
</div>


      <!-- endtes4 -->
  <!-- star Testimonials 1 -->
<!-- <section class="relative px-2 sm:px-4 lg:px-8 xl:px-20 2xl:px-32 py-8 lg:py-16">
  <div class="flex flex-col lg:flex-row lg:-mx-4">
    
    <div class="w-full md:max-w-sm md:mx-auto lg:w-5/1 lg:px-4 mt-8 mt:md-0">
      <img src="src/images/lab.jpg" alt="Deskripsi gambar" class="w-72 min-h-44 rounded-lg object-cover" />
      <p class="italic text-xs mt-2 text-center">Aenean ante nisi, gravida non mattis semper.</p>
    </div>

    <div class="w-full lg:w-2/3 lg:px-4">
      <h2 class="text-2xl leading-tight font-bold mt-2">Lab Sistem Informasi</h2>
      <p class="mt-1 text-sm leading-relaxed">Lab. Sistem Informasi dan Basis Data, digunakan untuk Praktikum : Basis Data, Perancangan Basis Data, 
        Administrasi Basis Data, Teori dan Praktikum Konsep Pemogram 1,2, Pekerjaan 
        tugas mata kuliah, tugas akhir (TA), dan pengabdian masyarakat.</p>
      
      <ul class="mt-4 space-y-4">
        <li class="flex items-center">
          <div class="bg-green-500 text-white w-4 h-4 flex items-center justify-center rounded-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z" clip-rule="evenodd" />
            </svg>
          </div>
          <span class="ml-2 text-lg">Lorem Ipsum</span>
        </li>
        <li class="flex items-center">
          <div class="bg-green-500 text-white w-4 h-4 flex items-center justify-center rounded-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z" clip-rule="evenodd" />
            </svg>
          </div>
          <span class="ml-2 text-lg">Lorem Ipsum</span>
        </li>
        <li class="flex items-center">
          <div class="bg-green-500 text-white w-4 h-4 flex items-center justify-center rounded-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z" clip-rule="evenodd" />
            </svg>
          </div>
          <span class="ml-2 text-lg">Lorem Ipsum</span>
        </li>
      </ul>

      <a href="#" class="px-4 py-2 bg-teal-500 text-white rounded inline-block mt-8 font-semibold">Detile Lab
        </a>
    </div>
    
  </div>
</section> -->





<br>
    <!-- end testimonials 1-->
     <!-- start testimonials 2-->
<!-- <section class="relative px-2 sm:px-4 lg:px-8 xl:px-20 2xl:px-32 py-8 lg:py-16">
  <div class="flex flex-col lg:flex-row lg:-mx-4">
    
    <div class="w-full lg:w-2/3 lg:px-4">
      <h2 class="text-2xl leading-tight font-bold mt-2">Lab Jaringan Komputer</h2>
      <p class="mt-1 text-sm leading-relaxed">Lab. Jaringan Komputer dan Informasi, digunakan untuk praktikum : 
        Sistem Operasi, Konsep Jaringan, Administrasi Sistem, Administrasi Jaringan, Sistem 
        informasi manajemen, Pelatihan Cisco Local Academy, Pekerjaan tugas mata kuliah,
         tugas akhir (TA), komputasi berbasis jaringan, dan Pengabdian Pada Masyarakat.</p>
         <ul class="mt-4 space-y-4">
        <li class="flex items-center">
          <div class="bg-green-500 text-white w-4 h-4 flex items-center justify-center rounded-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z" clip-rule="evenodd" />
            </svg>
          </div>
          <span class="ml-2 text-lg">Lorem Ipsum</span>
        </li>
        <li class="flex items-center">
          <div class="bg-green-500 text-white w-4 h-4 flex items-center justify-center rounded-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z" clip-rule="evenodd" />
            </svg>
          </div>
          <span class="ml-2 text-lg">Lorem Ipsum</span>
        </li>
        <li class="flex items-center">
          <div class="bg-green-500 text-white w-4 h-4 flex items-center justify-center rounded-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z" clip-rule="evenodd" />
            </svg>
          </div>
          <span class="ml-2 text-lg">Lorem Ipsum</span>
        </li>
      </ul>
        <a href="#" class="px-4 py-2 bg-teal-500 text-white rounded inline-block mt-8 font-semibold">Detile Lab
        </a>
    </div>

    <div class="w-full md:max-w-sm md:mx-auto lg:w-1/3 lg:px-4 mt-8 mt:md-0">
      <img src="src/images/lab.jpg" alt="Deskripsi gambar" class="w-40 h-40 rounded-lg object-cover mx-auto" />
      <p class="italic text-xs mt-2 text-center">Aenean ante nisi, gravida non mattis semper.</p>
     
    </div>

  </div>
</section> -->
<br>

<!-- end testimonials 2 -->
   <!-- start testimonials3 -->
   <!-- <section class="relative  px-2 sm:px-4 lg:px-8 xl:px-20 2xl:px-32 py-8 lg:py-16">
  <div class="flex flex-col lg:flex-row lg:-mx-4">
    
    <div class="w-full md:max-w-sm md:mx-auto lg:w-5/1 lg:px-4 mt-8 mt:md-0">
      <img src="src/images/lab.jpg" alt="Deskripsi gambar" class="w-70 h-49 rounded-lg object-cover" />
      <p class="italic text-xs mt-2 text-center">Aenean ante nisi, gravida non mattis semper.</p>
    </div>

    <div class="w-full lg:w-2/3 lg:px-4">
      <h2 class="text-2xl leading-tight font-bold mt-2">Lab Multimedia</h2>
      <p class="mt-1 text-sm leading-relaxed">Lab. Pembelajaran Multimedia, dapat digunakan untuk Praktikum :
         Animasi Multimedia, Desain Grafis,Video Editing,
         MYOB, Pekerjaan tugas mata kuliah, tugas akhir (TA), dan pengabdian masyarakat.</p>
         <ul class="mt-4 space-y-4">
        <li class="flex items-center">
          <div class="bg-green-500 text-white w-4 h-4flex items-center justify-center rounded-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z" clip-rule="evenodd" />
            </svg>
          </div>
          <span class="ml-2 text-lg">Lorem Ipsum</span>
        </li>
        <li class="flex items-center">
          <div class="bg-green-500 text-white w-4 h-4 flex items-center justify-center rounded-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z" clip-rule="evenodd" />
            </svg>
          </div>
          <span class="ml-2 text-lg">Lorem Ipsum</span>
        </li>
        <li class="flex items-center">
          <div class="bg-green-500 text-white w-4 h-4 flex items-center justify-center rounded-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z" clip-rule="evenodd" />
            </svg>
          </div>
          <span class="ml-2 text-lg">Lorem Ipsum</span>
        </li>
      </ul>
        <a href="#" class="px-4 py-2 bg-teal-500 text-white rounded inline-block mt-8 font-semibold">Detile Lab
        </a>
    </div>
    
  </div>
</section> -->

    <!-- end testimonials 3-->
         <!-- start testimonials 4 -->
<!-- <section class="relative  px-2 sm:px-4 lg:px-8 xl:px-20 2xl:px-32 py-8 lg:py-16">
  <div class="flex flex-col lg:flex-row lg:-mx-4">
    
    <div class="w-full lg:w-2/3 lg:px-4">
      <h2 class="text-2xl leading-tight font-bold mt-2">Lab Pemrograman</h2>
      <p class="mt-1 text-sm leading-relaxed">Lab. Pemrograman Tingkat Lanjut, digunakan untuk praktikum : 
        Pemograman Berorientasi Objek (PBO), Struktur Data, Pekerjaan tugas mata kuliah, Pelatihan Java Fundamental 
        (Oracle Academy) tugas akhir (TA), dan pengabdian masyarakat).</p>
        <ul class="mt-4 space-y-4">
        <li class="flex items-center">
          <div class="bg-green-500 text-white w-4 h-4 flex items-center justify-center rounded-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z" clip-rule="evenodd" />
            </svg>
          </div>
          <span class="ml-2 text-lg">Lorem Ipsum</span>
        </li>
        <li class="flex items-center">
          <div class="bg-green-500 text-white w-4 h-4 flex items-center justify-center rounded-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z" clip-rule="evenodd" />
            </svg>
          </div>
          <span class="ml-2 text-lg">Lorem Ipsum</span>
        </li>
        <li class="flex items-center">
          <div class="bg-green-500 text-white w-4 h-4 flex items-center justify-center rounded-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z" clip-rule="evenodd" />
            </svg>
          </div>
          <span class="ml-2 text-lg">Lorem Ipsum</span>
        </li>
      </ul>
        <a href="#" class="px-4 py-2 bg-teal-500 text-white rounded inline-block mt-8 font-semibold">Detile Lab
        </a>
    </div>

    <div class="w-full md:max-w-sm md:mx-auto lg:w-1/3 lg:px-4 mt-8 mt:md-0">
      <img src="src/images/lab.jpg" alt="Deskripsi gambar" class="w-40 h-40 rounded-lg object-cover mx-auto" />
      <p class="italic text-xs mt-2 text-center">Aenean ante nisi, gravida non mattis semper.</p>
    </div>

  </div>
</section> -->
<!-- end testimonials 4 -->
 

   <br>

  


    <!-- start cta -->
    <section
      class="relative bg-blue-teal-gradient px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 py-12 text-center md:text-left">
      <div class="md:flex md:items-center md:justify-center">
        <h2 class="text-xl font-bold text-white">Sistem Peminjaman Laboraturium TI <br class="block md:hidden">Call us on: +1
          562-789-1935</h2>
        <a href="#"
          class="px-8 py-4 bg-white text-blue-600 rounded inline-block font-semibold md:ml-8 mt-4 md:mt-0">Book
          Appointment</a>
          
      </div>

      
    </section>
    <!-- end cta -->
     <br>
     <br>
     <br>
     <!-- star tes2 -->
     <div class="font-[sans-serif]">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-gray-800 text-4xl font-extrabold">Laboran Ti</h2>
                <p class="text-gray-800 text-sm mt-4 leading-relaxed">Meet our team of professionals to serve you.</p>
            </div>

            <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-8 text-center mt-16 max-w-5xl max-lg:max-w-3xl max-md:max-w-xl mx-auto">
                <div>
                    <img src="https://readymadeui.com/team-1.webp" class="w-32 h-32 rounded-full inline-block" />

                    <div class="py-4">
                        <h4 class="text-gray-800 text-base font-bold">John Doe</h4>
                        <p class="text-gray-800 text-xs mt-1">Software Engineer</p>

                        <div class="space-x-4 mt-4">
                            <button type="button"
                                class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none bg-gray-100 hover:bg-gray-200">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12px" fill="#333" viewBox="0 0 155.139 155.139">
                                    <path
                                        d="M89.584 155.139V84.378h23.742l3.562-27.585H89.584V39.184c0-7.984 2.208-13.425 13.67-13.425l14.595-.006V1.08C115.325.752 106.661 0 96.577 0 75.52 0 61.104 12.853 61.104 36.452v20.341H37.29v27.585h23.814v70.761h28.48z"
                                        data-original="#010002" />
                                </svg>
                            </button>
                            <button type="button"
                                class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none  bg-gray-100 hover:bg-gray-200">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12px" fill="#333" viewBox="0 0 512 512">
                                    <path
                                        d="M512 97.248c-19.04 8.352-39.328 13.888-60.48 16.576 21.76-12.992 38.368-33.408 46.176-58.016-20.288 12.096-42.688 20.64-66.56 25.408C411.872 60.704 384.416 48 354.464 48c-58.112 0-104.896 47.168-104.896 104.992 0 8.32.704 16.32 2.432 23.936-87.264-4.256-164.48-46.08-216.352-109.792-9.056 15.712-14.368 33.696-14.368 53.056 0 36.352 18.72 68.576 46.624 87.232-16.864-.32-33.408-5.216-47.424-12.928v1.152c0 51.008 36.384 93.376 84.096 103.136-8.544 2.336-17.856 3.456-27.52 3.456-6.72 0-13.504-.384-19.872-1.792 13.6 41.568 52.192 72.128 98.08 73.12-35.712 27.936-81.056 44.768-130.144 44.768-8.608 0-16.864-.384-25.12-1.44C46.496 446.88 101.6 464 161.024 464c193.152 0 298.752-160 298.752-298.688 0-4.64-.16-9.12-.384-13.568 20.832-14.784 38.336-33.248 52.608-54.496z"
                                        data-original="#03a9f4" />
                                </svg>
                            </button>
                            <button type="button"
                                class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none  bg-gray-100 hover:bg-gray-200">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14px" fill="#333" viewBox="0 0 24 24">
                                    <path
                                        d="M23.994 24v-.001H24v-8.802c0-4.306-.927-7.623-5.961-7.623-2.42 0-4.044 1.328-4.707 2.587h-.07V7.976H8.489v16.023h4.97v-7.934c0-2.089.396-4.109 2.983-4.109 2.549 0 2.587 2.384 2.587 4.243V24zM.396 7.977h4.976V24H.396zM2.882 0C1.291 0 0 1.291 0 2.882s1.291 2.909 2.882 2.909 2.882-1.318 2.882-2.909A2.884 2.884 0 0 0 2.882 0z"
                                        data-original="#0077b5" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <div>
                    <img src="https://readymadeui.com/team-2.webp" class="w-32 h-32 rounded-full inline-block" />

                    <div class="py-4">
                        <h4 class="text-gray-800 text-base font-bold">Mark Adair</h4>
                        <p class="text-gray-800 text-xs mt-1">Software Engineer</p>

                        <div class="space-x-4 mt-4">
                            <button type="button"
                                class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none bg-gray-100 hover:bg-gray-200">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12px" fill="#333" viewBox="0 0 155.139 155.139">
                                    <path
                                        d="M89.584 155.139V84.378h23.742l3.562-27.585H89.584V39.184c0-7.984 2.208-13.425 13.67-13.425l14.595-.006V1.08C115.325.752 106.661 0 96.577 0 75.52 0 61.104 12.853 61.104 36.452v20.341H37.29v27.585h23.814v70.761h28.48z"
                                        data-original="#010002" />
                                </svg>
                            </button>
                            <button type="button"
                                class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none  bg-gray-100 hover:bg-gray-200">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12px" fill="#333" viewBox="0 0 512 512">
                                    <path
                                        d="M512 97.248c-19.04 8.352-39.328 13.888-60.48 16.576 21.76-12.992 38.368-33.408 46.176-58.016-20.288 12.096-42.688 20.64-66.56 25.408C411.872 60.704 384.416 48 354.464 48c-58.112 0-104.896 47.168-104.896 104.992 0 8.32.704 16.32 2.432 23.936-87.264-4.256-164.48-46.08-216.352-109.792-9.056 15.712-14.368 33.696-14.368 53.056 0 36.352 18.72 68.576 46.624 87.232-16.864-.32-33.408-5.216-47.424-12.928v1.152c0 51.008 36.384 93.376 84.096 103.136-8.544 2.336-17.856 3.456-27.52 3.456-6.72 0-13.504-.384-19.872-1.792 13.6 41.568 52.192 72.128 98.08 73.12-35.712 27.936-81.056 44.768-130.144 44.768-8.608 0-16.864-.384-25.12-1.44C46.496 446.88 101.6 464 161.024 464c193.152 0 298.752-160 298.752-298.688 0-4.64-.16-9.12-.384-13.568 20.832-14.784 38.336-33.248 52.608-54.496z"
                                        data-original="#03a9f4" />
                                </svg>
                            </button>
                            <button type="button"
                                class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none  bg-gray-100 hover:bg-gray-200">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14px" fill="#333" viewBox="0 0 24 24">
                                    <path
                                        d="M23.994 24v-.001H24v-8.802c0-4.306-.927-7.623-5.961-7.623-2.42 0-4.044 1.328-4.707 2.587h-.07V7.976H8.489v16.023h4.97v-7.934c0-2.089.396-4.109 2.983-4.109 2.549 0 2.587 2.384 2.587 4.243V24zM.396 7.977h4.976V24H.396zM2.882 0C1.291 0 0 1.291 0 2.882s1.291 2.909 2.882 2.909 2.882-1.318 2.882-2.909A2.884 2.884 0 0 0 2.882 0z"
                                        data-original="#0077b5" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <div>
                    <img src="https://readymadeui.com/team-3.webp" class="w-32 h-32 rounded-full inline-block" />

                    <div class="py-4">
                        <h4 class="text-gray-800 text-base font-bold">Simon Konecki</h4>
                        <p class="text-gray-800 text-xs mt-1">Web Designer</p>

                        <div class="space-x-4 mt-4">
                            <button type="button"
                                class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none bg-gray-100 hover:bg-gray-200">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12px" fill="#333" viewBox="0 0 155.139 155.139">
                                    <path
                                        d="M89.584 155.139V84.378h23.742l3.562-27.585H89.584V39.184c0-7.984 2.208-13.425 13.67-13.425l14.595-.006V1.08C115.325.752 106.661 0 96.577 0 75.52 0 61.104 12.853 61.104 36.452v20.341H37.29v27.585h23.814v70.761h28.48z"
                                        data-original="#010002" />
                                </svg>
                            </button>
                            <button type="button"
                                class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none  bg-gray-100 hover:bg-gray-200">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12px" fill="#333" viewBox="0 0 512 512">
                                    <path
                                        d="M512 97.248c-19.04 8.352-39.328 13.888-60.48 16.576 21.76-12.992 38.368-33.408 46.176-58.016-20.288 12.096-42.688 20.64-66.56 25.408C411.872 60.704 384.416 48 354.464 48c-58.112 0-104.896 47.168-104.896 104.992 0 8.32.704 16.32 2.432 23.936-87.264-4.256-164.48-46.08-216.352-109.792-9.056 15.712-14.368 33.696-14.368 53.056 0 36.352 18.72 68.576 46.624 87.232-16.864-.32-33.408-5.216-47.424-12.928v1.152c0 51.008 36.384 93.376 84.096 103.136-8.544 2.336-17.856 3.456-27.52 3.456-6.72 0-13.504-.384-19.872-1.792 13.6 41.568 52.192 72.128 98.08 73.12-35.712 27.936-81.056 44.768-130.144 44.768-8.608 0-16.864-.384-25.12-1.44C46.496 446.88 101.6 464 161.024 464c193.152 0 298.752-160 298.752-298.688 0-4.64-.16-9.12-.384-13.568 20.832-14.784 38.336-33.248 52.608-54.496z"
                                        data-original="#03a9f4" />
                                </svg>
                            </button>
                            <button type="button"
                                class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none  bg-gray-100 hover:bg-gray-200">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14px" fill="#333" viewBox="0 0 24 24">
                                    <path
                                        d="M23.994 24v-.001H24v-8.802c0-4.306-.927-7.623-5.961-7.623-2.42 0-4.044 1.328-4.707 2.587h-.07V7.976H8.489v16.023h4.97v-7.934c0-2.089.396-4.109 2.983-4.109 2.549 0 2.587 2.384 2.587 4.243V24zM.396 7.977h4.976V24H.396zM2.882 0C1.291 0 0 1.291 0 2.882s1.291 2.909 2.882 2.909 2.882-1.318 2.882-2.909A2.884 2.884 0 0 0 2.882 0z"
                                        data-original="#0077b5" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <div>
                    <img src="https://readymadeui.com/team-4.webp" class="w-32 h-32 rounded-full inline-block" />

                    <div class="py-4">
                        <h4 class="text-gray-800 text-base font-bold">Sophia</h4>
                        <p class="text-gray-800 text-xs mt-1">Software Developer</p>

                        <div class="space-x-4 mt-4">
                            <button type="button"
                                class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none bg-gray-100 hover:bg-gray-200">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12px" fill="#333" viewBox="0 0 155.139 155.139">
                                    <path
                                        d="M89.584 155.139V84.378h23.742l3.562-27.585H89.584V39.184c0-7.984 2.208-13.425 13.67-13.425l14.595-.006V1.08C115.325.752 106.661 0 96.577 0 75.52 0 61.104 12.853 61.104 36.452v20.341H37.29v27.585h23.814v70.761h28.48z"
                                        data-original="#010002" />
                                </svg>
                            </button>
                            <button type="button"
                                class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none  bg-gray-100 hover:bg-gray-200">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12px" fill="#333" viewBox="0 0 512 512">
                                    <path
                                        d="M512 97.248c-19.04 8.352-39.328 13.888-60.48 16.576 21.76-12.992 38.368-33.408 46.176-58.016-20.288 12.096-42.688 20.64-66.56 25.408C411.872 60.704 384.416 48 354.464 48c-58.112 0-104.896 47.168-104.896 104.992 0 8.32.704 16.32 2.432 23.936-87.264-4.256-164.48-46.08-216.352-109.792-9.056 15.712-14.368 33.696-14.368 53.056 0 36.352 18.72 68.576 46.624 87.232-16.864-.32-33.408-5.216-47.424-12.928v1.152c0 51.008 36.384 93.376 84.096 103.136-8.544 2.336-17.856 3.456-27.52 3.456-6.72 0-13.504-.384-19.872-1.792 13.6 41.568 52.192 72.128 98.08 73.12-35.712 27.936-81.056 44.768-130.144 44.768-8.608 0-16.864-.384-25.12-1.44C46.496 446.88 101.6 464 161.024 464c193.152 0 298.752-160 298.752-298.688 0-4.64-.16-9.12-.384-13.568 20.832-14.784 38.336-33.248 52.608-54.496z"
                                        data-original="#03a9f4" />
                                </svg>
                            </button>
                            <button type="button"
                                class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none  bg-gray-100 hover:bg-gray-200">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14px" fill="#333" viewBox="0 0 24 24">
                                    <path
                                        d="M23.994 24v-.001H24v-8.802c0-4.306-.927-7.623-5.961-7.623-2.42 0-4.044 1.328-4.707 2.587h-.07V7.976H8.489v16.023h4.97v-7.934c0-2.089.396-4.109 2.983-4.109 2.549 0 2.587 2.384 2.587 4.243V24zM.396 7.977h4.976V24H.396zM2.882 0C1.291 0 0 1.291 0 2.882s1.291 2.909 2.882 2.909 2.882-1.318 2.882-2.909A2.884 2.884 0 0 0 2.882 0z"
                                        data-original="#0077b5" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                
        </div>
      <!-- end tes2 -->

   



  <!-- start footer -->
  <!-- <footer class="relative bg-gray-900 text-white px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 py-12 lg:py-24">
            <div class="flex flex-col md:flex-row">
                <div class="w-full lg:w-2/6 lg:mx-4 lg:pr-8">
                    <h3 class="font-bold text-2xl">DentalPro</h3>
                    <p class="text-gray-400">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy.
                    </p>

                    <form class="flex items-center mt-6">
                        <div class="w-full">
                            <label class="block uppercase tracking-wide text-gray-600 text-xs font-bold mb-2"
                                for="grid-last-name">
                                Subscribe for our Newsletter
                            </label>
                            <div class="relative">
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-4 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    type="email" placeholder="Enter Your Email Address">

                                <button type="submit"
                                    class="bg-teal-500 hover:bg-teal-400 text-white px-4 py-2 text-sm font-bold rounded absolute top-0 right-0 my-2 mr-2">Subscribe</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="w-full lg:w-1/6 mt-8 lg:mt-0 lg:mx-4">
                    <h5 class="uppercase tracking-wider font-semibold text-gray-500">Treatments</h5>
                    <ul class="mt-4">
                        <li class="mt-2"><a href="#" title="" class="opacity-75 hover:opacity-100">General Dentistry</a>
                        </li>
                        <li class="mt-2"><a href="#" title="" class="opacity-75 hover:opacity-100">Cosmetic
                                Dentistry</a></li>
                        <li class="mt-2"><a href="#" title="" class="opacity-75 hover:opacity-100">Oral Health</a></li>
                    </ul>
                </div>

                <div class="w-full lg:w-2/6 mt-8 lg:mt-0 lg:mx-4 lg:pr-8">
                    <h5 class="uppercase tracking-wider font-semibold text-gray-500">Contact Details</h5>
                    <ul class="mt-4">
                        <li>
                            <a href="#" title="" class="block flex items-center opacity-75 hover:opacity-100">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        class="fill-current">
                                        <path
                                            d="M12,2C7.589,2,4,5.589,4,9.995C3.971,16.44,11.696,21.784,12,22c0,0,8.029-5.56,8-12C20,5.589,16.411,2,12,2z M12,14 c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S14.21,14,12,14z" />
                                    </svg>
                                </span>
                                <span class="ml-3">
                                    1985 Kerry Way, Whittier, CA, USA
                                </span>
                            </a>
                        </li>
                        <li class="mt-4">
                            <a href="#" title="" class="block flex items-center opacity-75 hover:opacity-100">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        class="fill-current">
                                        <path
                                            d="M12,2C6.486,2,2,6.486,2,12s4.486,10,10,10c5.514,0,10-4.486,10-10S17.514,2,12,2z M12,20c-4.411,0-8-3.589-8-8 s3.589-8,8-8s8,3.589,8,8S16.411,20,12,20z" />
                                        <path d="M13 7L11 7 11 13 17 13 17 11 13 11z" />
                                    </svg>
                                </span>
                                <span class="ml-3">
                                    Mon - Fri: 9:00 - 19:00<br>
                                    Closed on Weekends
                                </span>
                            </a>
                        </li>
                        <li class="mt-4">
                            <a href="#" title="" class="block flex items-center opacity-75 hover:opacity-100">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        class="fill-current">
                                        <path
                                            d="M14.594,13.994l-1.66,1.66c-0.577-0.109-1.734-0.471-2.926-1.66c-1.193-1.193-1.553-2.354-1.661-2.926l1.661-1.66 l0.701-0.701L5.295,3.293L4.594,3.994l-1,1C3.42,5.168,3.316,5.398,3.303,5.643c-0.015,0.25-0.302,6.172,4.291,10.766 C11.6,20.414,16.618,20.707,18,20.707c0.202,0,0.326-0.006,0.358-0.008c0.245-0.014,0.476-0.117,0.649-0.291l1-1l0.697-0.697 l-5.414-5.414L14.594,13.994z" />
                                    </svg>
                                </span>
                                <span class="ml-3">
                                    +1 562-789-1935
                                </span>
                            </a>
                        </li>
                        <li class="mt-4">
                            <a href="#" title="" class="block flex items-center opacity-75 hover:opacity-100">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        class="fill-current">
                                        <path
                                            d="M20,4H4C2.896,4,2,4.896,2,6v12c0,1.104,0.896,2,2,2h16c1.104,0,2-0.896,2-2V6C22,4.896,21.104,4,20,4z M20,8.7l-8,5.334 L4,8.7V6.297l8,5.333l8-5.333V8.7z" />
                                    </svg>
                                </span>
                                <span class="ml-3">
                                    dentalpro@example.com
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="w-full lg:w-1/6 mt-8 lg:mt-0 lg:mx-4">
                    <h5 class="uppercase tracking-wider font-semibold text-gray-500">We're Social</h5>
                    <ul class="mt-4 flex">
                        <li>
                            <a href="#" target="_blank" title="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    class="fill-current">
                                    <path
                                        d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325,1.42-3.592,3.5-3.592	c0.699-0.002,1.399,0.034,2.095,0.107v2.42h-1.435c-1.128,0-1.348,0.538-1.348,1.325v1.735h2.697l-0.35,2.725h-2.348V21H20	c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z" />
                                </svg>
                            </a>
                        </li>

                        <li class="ml-6">
                            <a href="#" target="_blank" title="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    class="fill-current">
                                    <path
                                        d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809	c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793	c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05	c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032	c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028	c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22	c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z" />
                                </svg>
                            </a>
                        </li>

                        <li class="ml-6">
                            <a href="#" target="_blank" title="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    class="fill-current">
                                    <path
                                        d="M20.947,8.305c-0.011-0.757-0.151-1.508-0.419-2.216c-0.469-1.209-1.424-2.165-2.633-2.633 c-0.699-0.263-1.438-0.404-2.186-0.42C14.747,2.993,14.442,2.981,12,2.981s-2.755,0-3.71,0.055 c-0.747,0.016-1.486,0.157-2.185,0.42C4.896,3.924,3.94,4.88,3.472,6.089C3.209,6.788,3.067,7.527,3.053,8.274 c-0.043,0.963-0.056,1.268-0.056,3.71s0,2.754,0.056,3.71c0.015,0.748,0.156,1.486,0.419,2.187 c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45c0.963,0.043,1.268,0.056,3.71,0.056s2.755,0,3.71-0.056 c0.747-0.015,1.486-0.156,2.186-0.419c1.209-0.469,2.164-1.425,2.633-2.633c0.263-0.7,0.404-1.438,0.419-2.187 c0.043-0.962,0.056-1.267,0.056-3.71C21.003,9.572,21.003,9.262,20.947,8.305z M11.994,16.602c-2.554,0-4.623-2.069-4.623-4.623 s2.069-4.623,4.623-4.623c2.552,0,4.623,2.069,4.623,4.623S14.546,16.602,11.994,16.602z M16.801,8.263 c-0.597,0-1.078-0.482-1.078-1.078s0.481-1.078,1.078-1.078c0.595,0,1.077,0.482,1.077,1.078S17.396,8.263,16.801,8.263z" />
                                    <circle cx="11.994" cy="11.979" r="3.003" />
                                </svg>
                            </a>
                        </li>

                        <li class="ml-6">
                            <a href="#" target="_blank" title="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    class="fill-current">
                                    <path
                                        d="M21.593,7.203c-0.23-0.858-0.905-1.535-1.762-1.766C18.265,5.007,12,5,12,5S5.736,4.993,4.169,5.404	c-0.84,0.229-1.534,0.921-1.766,1.778c-0.413,1.566-0.417,4.814-0.417,4.814s-0.004,3.264,0.406,4.814	c0.23,0.857,0.905,1.534,1.763,1.765c1.582,0.43,7.83,0.437,7.83,0.437s6.265,0.007,7.831-0.403c0.856-0.23,1.534-0.906,1.767-1.763	C21.997,15.281,22,12.034,22,12.034S22.02,8.769,21.593,7.203z M9.996,15.005l0.005-6l5.207,3.005L9.996,15.005z" />
                                </svg>
                            </a>
                        </li>
                    </ul>

                    <p class="text-sm text-gray-400 mt-12">© 2018 ProDentists. <br class="hidden lg:block">All Rights
                        Reserved.
                    </p>
                </div>
            </div>
        </footer> -->
        <!-- end footer -->
     
      
  </main>

  <?php 

    include 'view/layout/footer.php';
?>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-131505823-4"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-131505823-4');
  </script>

</body>

</html>