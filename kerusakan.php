<?php
include('koneksi.php');

if (isset($_SESSION['login_user'])) {
    header("location: about.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Kumaphone</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="icon" href="img/2.png">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="theme-color" content="#ffffff">
    </head>

    <style>
        body {
            font-family: 'Inter', sans-serif !important;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
    </style>
</head>

<body style="background-color:#101927;">
    <header>
        <nav class="dark:bg-gray-800 px-4 lg:px-6 py-2.5 fixed top-0 left-0 w-full z-50">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a href="index.html" class="flex items-center">
                    <img src="img/xiomi.png" class="mr-3 h-6 sm:h-9" alt="Konter Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap text-[#FFD700]">
                        Kelompok 2
                        <span class="bg-[#FFD700] text-black text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                            Beta
                        </span>
                    </span>
                </a>
                <div class="flex items-center lg:order-2">
                    <a href="login.html"
                        class="bg-[#FFD700] hover:bg-[#FFC300] text-black font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2">
                        Admin
                    </a>
                    <button data-collapse-toggle="mobile-menu-2"
                        type="button"
                        class="inline-flex items-center p-2 ml-1 text-sm text-[#FFD700] rounded-lg lg:hidden hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-yellow-500"
                        aria-controls="mobile-menu-2"
                        aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        <li>
                            <a href="/kumaphone-main/"
                                class="block py-2 pr-4 pl-3 text-[#FFD700] rounded lg:bg-transparent lg:p-0">
                                Halaman Utama
                            </a>
                        </li>
                        <li>
                            <a href="kerusakan.php"
                                class="block py-2 pr-4 pl-3 text-[#FFD700] hover:text-white lg:p-0">
                                Ciri-ciri Kerusakan
                            </a>
                        </li>
                        <li>
                            <a href="diagnosa.php"
                                class="block py-2 pr-4 pl-3 text-[#FFD700] hover:text-white lg:p-0">
                                Diagnosa Kerusakan
                            </a>
                        </li>
                        <li>
                            <a href="about.php"
                                class="block py-2 pr-4 pl-3 text-[#FFD700] hover:text-white lg:p-0">
                                Tentang Kami
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Breadcrumb -->
    <nav class="flex px-5 py-3 text-gray-700 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="index.html" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                    <svg aria-hidden="true" class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                    </svg>
                    Halaman Utama
                </a>
            </li>
            <li>
                <div class="flex items-center">
                    <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <a href="kerusakan.php" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Ciri-ciri Kerusakan</a>
                </div>
            </li>
            <li aria-current="page">

            </li>
        </ol>
    </nav>
    <!--   Akhir bagian Menu pada Header -->
    <section class="bg-black dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16 w-full">
                <div class="relative overflow-x-auto shadow-lg sm:rounded-lg border-2 border-[#FFD700]">
                    <table class="w-full text-sm text-left text-gray-200 dark:text-gray-300">
                        <caption class="p-5 text-xl font-bold text-left text-[#FFD700] bg-[#101927] border-b border-[#FFD700]">
                            Ciri-ciri Kerusakan
                            <p class="mt-1 text-sm font-normal text-gray-300">Berikut adalah ciri-ciri kerusakan yang ada di database Poco Xiaomi</p>
                        </caption>
                        <form id="form1" name="form1" method="post" action="kerusakan.php">
                            <br />
                        </form>

                        <thead class="text-xs uppercase bg-[#FFD700] text-black font-bold">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    <center>NO</center>
                                </th>
                                <th scope="col" class="px-6 py-3">Nama kerusakan</th>
                                <th scope="col" class="px-6 py-3">Sistem operasi</th>
                                <th scope="col" class="px-6 py-3">
                                    <center>Detail</center>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $hp = "Android";
                            $queri = "Select * From kerusakan where jenishp= \"" . $hp . "\"";
                            $hasil = mysqli_query($konek_db, $queri);
                            $id = 0;
                            while ($data = mysqli_fetch_array($hasil)) {
                                $id++;
                                echo "
              <tr class='bg-[#151f30] border-b border-[#FFD700]/30 hover:bg-[#1f2937] transition-all'>
                <td class='px-6 py-4'><center>" . $id . "</center></td>
                <td class='px-6 py-4 font-medium text-[#FFD700]'>" . $data[1] . "</td>
                <td class='px-6 py-4'>" . $data[2] . "</td>
                <td class='px-6 py-4'><a href=\"detailkerusakan1.php?id=" . $data[0] . "\"><center><i class='bi bi-search text-[#FFD700] hover:text-[#FFC300] text-lg'></i><center></a></td>
              </tr>
            ";
                            }
                            ?>
                        </tbody>
                    </table>
                    <div class="p-4 bg-[#101927] text-center">
                        <img src="img/xiomi.png" alt="Poco Xiaomi Logo" class="h-8 inline-block">
                        <span class="text-[#FFD700] ml-2 font-semibold">Sistem Pakar Kerusakan Poco X3</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

<footer class="fixed bottom-0 left-0 z-20 p-4 w-full bg-white border-t border-gray-200 shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800 dark:border-gray-600">
    <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 Kumaphone™. All Rights Reserved.
    </span>
    <ul class="flex flex-wrap items-center mt-3 text-sm text-gray-500 dark:text-gray-400 sm:mt-0">
        <li>
            <a href="about.php" class="mr-4 hover:underline md:mr-6 ">About</a>
        </li>
        <li>
            <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
        </li>
        <li>
            <a href="#" class="mr-4 hover:underline md:mr-6">Licensing</a>
        </li>
        <li>
            <a href="#" class="hover:underline">Contact</a>
        </li>
    </ul>
</footer>

<script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

</html>