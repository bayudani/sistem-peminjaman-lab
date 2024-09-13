<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab IoT</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
      <!-- Tailwind CSS -->
      <script src="https://cdn.tailwindcss.com"></script>
   
   
</head>
<body class="bg-gray-100">

    <!-- Header Section -->
   
    <header class="flex border-b py-4 px-4 sm:px-10 bg-gradient-to-r from-blue-400 to-teal-400 font-sans min-h-[100px] tracking-wide relative z-50">
    <div class="flex flex-wrap items-center gap-5 w-full justify-between">
        <p class="text-xl font-bold italic font-serif text-white">Informasi Lab Teknik Informatika</p>

            <div class="flex items-center gap-5 font-sens-sarif">
                <ul class='flex gap-x-5'>
                    <li>
                        <a href='javascript:void(0)' class='text-white block font-semibold text-[15px] hover:underline '>Home</a>
                    </li>
                    <li>
                        <a href='javascript:void(0)' class='text-white block font-semibold text-[15px] hover:underline'>Tentang Lab</a>
                    </li>
                </ul>

                <div class='flex items-center ml-auto space-x-6'>
        <button
          class='px-5 py-2.5 rounded-lg text-sm tracking-wider font-medium border border-current outline-none bg-trasparent hover:bg-transparent text-white hover:text-red-500 transition-all duration-300'>
          Logout</button>
  
        <!-- <button id="toggleOpen" class='lg:hidden'>
          <svg class="w-7 h-7" fill="#333" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
              clip-rule="evenodd"></path>
          </svg>
        </button> -->
      </div>
            </div>
        </div>
    </header>

    <!-- Main Content Section -->
    <main class="container mx-auto mt-8">
        <!-- Lab Header Image and Title -->
        <div class="relative">
            <img src="../../src/images/lab.jpeg" alt="Lab Image" class="w-full h-64 object-cover rounded-lg">
            <h1 class="absolute bottom-4 left-4 text-gray text-4xl font-bold italic ">Lab IoT</h1>
        </div>

        <!-- Content Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
            <!-- Lab Information -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-2xl font-semibold mb-4">Tentang Lab</h2>
                <p class="text-gray-700 mb-4">
                Lab IoT digunakan untuk Praktikum: Dasar Jaringan, Pekerjaan tugas mata kuliah, Tugas Akhir (TA), dan pengabdian masyarakat.
                </p>

                <h3 class="text-xl font-semibold mb-2">Fasilitas</h3>
                <ul class="space-y-2 mb-4">
                    <li class="flex items-center">
                        <span class="w-4 h-4 bg-teal-400 rounded-full inline-block mr-2"></span>
                        PC GAMING 
                    </li>
                    <li class="flex items-center">
                        <span class="w-4 h-4 bg-teal-400 rounded-full inline-block mr-2"></span>
                        MONITOR 64 INC
                    </li>
                    <li class="flex items-center">
                        <span class="w-4 h-4 bg-teal-400 rounded-full inline-block mr-2"></span>
                        PROYEKTOR 4K
                    </li>
                </ul>

                <!-- Lab Assistant Information -->
                <div class="flex items-center">
                    <!-- <img src="path/to/avatar.jpg" alt="Lab Assistant" class="w-16 h-16 rounded-full mr-4"> -->
                    <div>
                        <p class="text-gray-700">Laboran</p><br>
                        <img src="https://readymadeui.com/profile_2.webp" class="w-14 h-14 rounded-full mx-auto"/>
                        <p class="font-semibold"> Khairus Suhada, A.Md</p>
                    </div>
                </div>
            </div>

            <!-- Lab Schedule -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-2xl font-semibold mb-4">Jadwal Lab</h2>
                <table class="w-full text-left">
                    <thead>
                        <tr>
                            <th class="py-2">Waktu</th>
                            <th class="py-2">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-2">08:00 - 08:50</td>
                            <td class="py-2 text-red-500">Tidak tersedia</td>
                        </tr>
                        <tr>
                            <td class="py-2">08:50 - 09:40</td>
                            <td class="py-2 text-green-500">Pinjam</td>
                        </tr>
                        <tr>
                            <td class="py-2">09:50 - 10:40</td>
                            <td class="py-2 text-red-500">Tidak tersedia</td>
                        </tr>
                        <tr>
                            <td class="py-2">10:40 - 11:30</td>
                            <td class="py-2 text-red-500">Tidak tersedia</td>
                        </tr>
                        <tr>
                            <td class="py-2">11:40 - 12:50</td>
                            <td class="py-2 text-green-500">Pinjam</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <!-- Footer Section -->
    <footer class="bg-gray-900 text-white text-center py-4 mt-8">
        <p>&copy; 2024 TI Politeknik Negeri Bengkalis. All rights reserved.</p>
    </footer>

</body>
</html>
