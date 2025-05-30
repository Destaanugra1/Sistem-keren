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
    <nav
      class="dark:bg-gray-800 px-4 lg:px-6 py-2.5 fixed top-0 left-0 w-full z-50">
      <div
        class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
        <a href="index.html" class="flex items-center">
          <img
            src="img/xiomi.png"
            class="mr-3 h-6 sm:h-9"
            alt="Konter Logo" />
          <span
            class="self-center text-xl font-semibold whitespace-nowrap text-[#FFD700]">
            Konter
            <span
              class="bg-[#FFD700] text-black text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
              Kelompok 2
            </span>
          </span>
        </a>
        <div class="flex items-center lg:order-2">
          <a
            href="login.html"
            class="bg-[#FFD700] hover:bg-[#FFC300] text-black font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2">
            Admin
          </a>
          <button
            data-collapse-toggle="mobile-menu-2"
            type="button"
            class="inline-flex items-center p-2 ml-1 text-sm text-[#FFD700] rounded-lg lg:hidden hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-yellow-500"
            aria-controls="mobile-menu-2"
            aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
              <path
                fill-rule="evenodd"
                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
        <div
          class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1"
          id="mobile-menu-2">
          <ul
            class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
            <li>
              <a
                href="/kumaphone-main/"
                class="block py-2 pr-4 pl-3 text-[#FFD700] rounded lg:bg-transparent lg:p-0">
                Halaman Utama
              </a>
            </li>
            <li>
              <a
                href="kerusakan.php"
                class="block py-2 pr-4 pl-3 text-[#FFD700] hover:text-white lg:p-0">
                Ciri-ciri Kerusakan
              </a>
            </li>
            <li>
              <a
                href="diagnosa.php"
                class="block py-2 pr-4 pl-3 text-[#FFD700] hover:text-white lg:p-0">
                Diagnosa Kerusakan
              </a>
            </li>
            <li>
              <a
                href="about.php"
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
          <a href="kerusakan.php" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Hasil Diagnosa</a>
        </div>
      </li>
      <li aria-current="page">

      </li>
    </ol>
  </nav>
  <!--   Akhir bagian Menu pada Header -->



  <section class="bg-white dark:bg-gray-900 ">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 ">

      <div class="w-full p-4 bg-white border rounded-lg shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
        <h5 class="mb-2 text-3xl font-bold text-gray-900 dark:text-white">Detail Kerusakan</h5>

        <form method="POST">
          <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Berikut adalah hasil diagnosa dari kerusakan smartphone kamu</p>
          <form method="POST">
            <br><label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID :</label>
            <div class="col-sm-10">
              <?php
              $tampil = "SELECT * FROM kerusakan where idkerusakan='" . $_GET['id'] . "'";
              $sql = mysqli_query($konek_db, $tampil);
              while ($data = mysqli_fetch_array($sql)) {
                echo "<input type='text'  class='bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500' id='idkerusakan' readonly value='" . $data['idkerusakan'] . "'><br>";
              }
              ?>
            </div>
          </form>


          <div class="form-group" method="POST">
            <br><label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Kerusakan:</label>
            <div class="col-sm-10">
              <?php
              $tampil = "SELECT * FROM kerusakan where idkerusakan='" . $_GET['id'] . "'";
              $sql = mysqli_query($konek_db, $tampil);
              while ($data = mysqli_fetch_array($sql)) {
                echo "<input type='text'  class='bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500' id='namakerusakan' readonly value='" . $data['namakerusakan'] . "'><br>";
              }
              ?>
            </div>
          </div>



          <div class="form-group" method="POST">
            <br><label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis smartphone:</label>
            <div class="col-sm-10">
              <?php
              $tampil = "SELECT * FROM kerusakan where idkerusakan='" . $_GET['id'] . "'";
              $sql = mysqli_query($konek_db, $tampil);
              while ($data = mysqli_fetch_array($sql)) {
                echo "<input type='text'  class='bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500' id='jensihp' readonly value='" . $data['jenishp'] . "'><br>";
              }
              ?>
            </div>
          </div>
          <div class="form-group" method="POST">
            <br><label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ciri Kerusakan:</label>
            <div class="col-sm-10">
              <?php
              $tampil = "SELECT * FROM kerusakan p, basispengetahuan b where p.idkerusakan='" . $_GET['id'] . "' and p.namakerusakan=b.namakerusakan";
              $sql = mysqli_query($konek_db, $tampil);
              while ($data = mysqli_fetch_array($sql)) {
                echo "<input type='text'  class='bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500' id='jenishp' readonly value='" . $data['gejala'] . "'><br>";
              }
              ?>
            </div>
          </div>
          <div class="form-group" method="POST">
            <br><label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cara Mengatasi :</label><br>
            <div class="col-sm-10">
              <?php
              $tampil = "SELECT * FROM kerusakan where idkerusakan='" . $_GET['id'] . "'";
              $sql = mysqli_query($konek_db, $tampil);
              while ($data = mysqli_fetch_array($sql)) {
                echo "<textarea  rows='8' class='bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500' id='penanganan'  readonly>" . $data['caramengatasi'] . "</textarea><br>";

                if (!empty($data['linkvideo'])) {
                  // Ubah link YouTube biasa menjadi link embed
                  $embedUrl = str_replace("watch?v=", "embed/", $data['linkvideo']);
                  echo "<div class='ratio ratio-16x9'>
                <iframe src='" . $embedUrl . "' title='Video Perbaikan' allowfullscreen></iframe>
              </div><br>";
                }
              }
              ?>
            </div>
            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
              Read more
              <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </a>
          </div>
      </div>
    </div>
    </div>

</body>

</html>