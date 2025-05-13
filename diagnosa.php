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
          <a href="diagnosa.php" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Diagnosa Kerusakan</a>
        </div>
      </li>
      <li aria-current="page">

      </li>
    </ol>
  </nav>
  <section class="bg-black dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
      <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
        <div class="relative overflow-x-auto shadow-lg sm:rounded-lg">
          <form id="form2" name="form2" method="post" action="diagnosa.php">
            <div class="w-full p-4 sm:p-6 md:p-8 lg:p-10 bg-[#101927] border-2 border-[#FFD700] rounded-lg shadow-lg">
              <h5 class="mb-6 text-2xl font-bold tracking-tight text-[#FFD700]">Form Diagnosa Poco X3</h5>

              <div class="mb-6">
                <label for="text" class="block mb-2 text-sm text-left font-medium text-[#FFD700]">Nama customer</label>
                <input type="text" id="brand" name="brand" class="shadow-sm bg-gray-800 border border-[#FFD700] text-white text-sm rounded-lg focus:ring-[#FFC300] focus:border-[#FFC300] block w-full p-3" required>
              </div>

              <div class="mb-6">
                <label for="text" class="block mb-2 text-sm text-left font-medium text-[#FFD700]">Brand & model smartphone</label>
                <input type="text" id="model" name="model" value="Poco X3" class="shadow-sm bg-gray-800 border border-[#FFD700] text-white text-sm rounded-lg focus:ring-[#FFC300] focus:border-[#FFC300] block w-full p-3" required>
              </div>

              <div class="mb-6">
                <label for="text" class="block mb-2 text-sm text-left font-medium text-[#FFD700]">IMEI smartphone</label>
                <input type="text" id="imei" name="imei" class="shadow-sm bg-gray-800 border border-[#FFD700] text-white text-sm rounded-lg focus:ring-[#FFC300] focus:border-[#FFC300] block w-full p-3" required>
              </div>

              <label for="text" class="block mb-2 text-sm text-left font-medium text-[#FFD700]">Sistem Operasi</label>
              <select class="bg-gray-800 border border-[#FFD700] text-white text-sm rounded-lg focus:ring-[#FFC300] focus:border-[#FFC300] block w-full p-3" type="submit" name="jenishp" id="jenishp">
                <option>Pilih</option>
                <option selected>Android</option>
              </select>

              <hr class="w-48 h-1 mx-auto my-6 bg-[#FFD700]/30 border-0 rounded md:my-10">

              <?php
              global $hasil;
              if (isset($_POST['submit'])) {
                $brand = $_POST['brand'];
                $model = $_POST['model'];
                $imei = $_POST['imei'];
                $jenishp = $_POST['jenishp'];
                $gejala = $_POST['gejala'];

                // Initialize an empty array to store idkerusakan
                $idkerusakanList = [];

                // Loop through each selected symptom
                foreach ($gejala as $selectedGejala) {
                  // Query to find idkerusakan based on the selected symptoms
                  $query = "SELECT DISTINCT p.idkerusakan FROM basispengetahuan b, kerusakan p WHERE b.gejala='$selectedGejala' AND p.namakerusakan=b.namakerusakan";
                  $result = mysqli_query($konek_db, $query);

                  // Fetch the result and store idkerusakan
                  while ($row = mysqli_fetch_array($result)) {
                    $idkerusakanList[] = $row['idkerusakan'];
                  }
                }

                // Use the first idkerusakan found (or handle multiple if needed)
                $idkerusakan = !empty($idkerusakanList) ? $idkerusakanList[0] : null;

                // Check if idkerusakan is valid before inserting
                if ($idkerusakan) {
                  $sql = "INSERT INTO smartphones (brand, model, imei, jenishp, idkerusakan) VALUES ('$brand', '$model', '$imei', '$jenishp', '$idkerusakan')";
                  if (mysqli_query($konek_db, $sql)) {
                    echo '<div class="p-4 mb-4 text-sm text-[#FFD700] rounded-lg bg-[#2b2a00] border border-[#FFD700]/30" role="alert">
                    <span class="font-medium">Data berhasil dicatat!</span> Silahkan cek diagnosa pada tabel dibawah.
                  </div>';
                  } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($konek_db);
                  }
                } else {
                  echo '<div class="p-4 mb-4 text-sm text-red-400 rounded-lg bg-red-900/30 border border-red-500/30" role="alert">
                  <span class="font-medium">Kesalahan!</span> Tidak ditemukan kerusakan yang sesuai dengan gejala yang dipilih.
                </div>';
                }
              }
              ?>

              <div class="mt-6">
                <label class='mb-4 text-2xl text-left font-bold text-[#FFD700] block'>Ciri Kerusakan</label>
                <div class="bg-[#151f30] p-4 rounded-lg border border-[#FFD700]/30 max-h-80 overflow-y-auto">
                  <?php
                  $hp = "Android";
                  $tampil = "select * from gejala where jenishp= \"" . $hp . "\"";
                  $query = mysqli_query($konek_db, $tampil);
                  while ($hasil = mysqli_fetch_array($query)) {
                    echo "<div class='text-left rtl:text-right mb-3 flex items-start'>
                    <input type='checkbox' class='w-4 h-4 mt-1 text-[#FFD700] bg-gray-700 border-[#FFD700] rounded focus:ring-[#FFC300]'
                    value='" . $hasil['gejala'] . "' name='gejala[]' />   
                    <label class='ml-2 text-sm font-medium text-gray-300'>" . $hasil['gejala'] . "</label>
                  </div>";
                  }
                  ?>
                </div>
              </div>

              <div class="mt-8 flex justify-between items-center">
                <img src="img/xiomi.png" alt="Poco Logo" class="h-8">
                <button type="submit" name="submit" onclick="return checkDiagnosa()" class="text-black bg-[#FFD700] hover:bg-[#FFC300] focus:outline-none focus:ring-4 focus:ring-[#FFD700]/50 font-medium rounded-lg text-sm px-6 py-3 text-center transition-all">
                  <i class="bi bi-search mr-2"></i>Diagnosa Kerusakan
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <section class="bg-black dark:bg-gray-900">
      <div class="py-4 px-4 mx-auto max-w-screen-xl lg:py-8 lg:px-6">
        <div class="mx-auto max-w-screen-sm mb-8 lg:mb-16">
          <div class="relative overflow-x-auto shadow-lg sm:rounded-lg border-2 border-[#FFD700]">
            <table id="example1" class="w-full text-sm text-left rtl:text-right text-gray-300">
              <caption class="p-5 text-xl font-bold text-left text-[#FFD700] bg-[#101927] border-b border-[#FFD700]">
                Hasil Diagnosa Kerusakan
                <p class="mt-1 text-sm font-normal text-gray-300">Berikut adalah sparepart yang harus diganti atau tindakan perbaikan yang harus dilakukan untuk Poco X3</p>
              </caption>
              <thead class="text-xs uppercase bg-[#FFD700] text-black font-bold">
                <tr>
                  <th scope="col" class="px-6 py-3">No</th>
                  <th scope="col" class="px-6 py-3">ID Kerusakan</th>
                  <th scope="col" class="px-6 py-3">Nama Kerusakan</th>
                  <th scope="col" class="px-6 py-3">Sistem Operasi</th>
                  <th scope="col" class="px-6 py-3 text-center">Detail</th>
                </tr>
              </thead>
              <tbody>
                <?php
                if (isset($_POST['submit'])) {
                  $gejala = $_POST['gejala'];
                  $jumlah_dipilih = count($gejala);
                  for ($x = 0; $x < $jumlah_dipilih; $x++) {
                    $tampil = "
                SELECT DISTINCT p.idkerusakan, p.namakerusakan, p.jenishp
                FROM basispengetahuan b
                JOIN kerusakan p ON p.namakerusakan = b.namakerusakan
                WHERE b.gejala = '$gejala[$x]'
                GROUP BY p.idkerusakan, p.namakerusakan, p.jenishp
                ";
                    $result = mysqli_query($konek_db, $tampil);
                    $hasil = mysqli_fetch_array($result);

                    echo "<tr class='bg-[#151f30] border-b border-[#FFD700]/30 hover:bg-[#1f2937] transition-all'>
                    <th scope='row' class='px-6 py-4 font-medium text-white whitespace-nowrap'>" . ($x + 1) . "</th>
                    <td class='px-6 py-4'>" . $hasil['idkerusakan'] . "</td>
                    <td class='px-6 py-4 text-[#FFD700] font-medium'>" . $hasil['namakerusakan'] . "</td>
                    <td class='px-6 py-4'>" . $hasil['jenishp'] . "</td>
                    <td class='px-6 py-4 text-center'><a href='hasildiagnosa.php?id=" . $hasil['idkerusakan'] . "' class='text-[#FFD700] hover:text-[#FFC300] transition-all'><i class='bi bi-search'></i> Lihat Detail</a></td>
                  </tr>";
                  }
                }
                ?>
              </tbody>
            </table>
            <div class="p-4 bg-[#101927] text-center border-t border-[#FFD700]/30">
              <span class="text-[#FFD700] text-sm">Sistem Pakar Kerusakan Poco X3 | <?php echo date('Y'); ?></span>
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>


</body>

<footer class="p-4 bg-white rounded-lg shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800">
  <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://kumaphone.my.id" class="hover:underline">Kumaphone™</a>. All Rights Reserved.
  </span>
  <ul class="flex flex-wrap items-center mt-3 text-sm text-gray-500 dark:text-gray-400 sm:mt-0">
    <li>
      <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
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
<script>
  var select = document.querySelector("select");
  select.addEventListener("change", function() {
    if (this.value === "") {
      alert("Semua opsi dipilih!");
    }
  });
</script>
<script src="https://code.jquery.com/jquery-3.6.3.slim.min.js" integrity="sha256-ZwqZIVdD3iXNyGHbSYdsmWP//UBokj2FHAxKuSBKDSo=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

</html>