<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hasil Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  </head>
  <body class="bg-dark">
    <header>
      <h1 class="text-center text-light p-4 font-monospace">Hasil Data</h1>

      <section class="isi container text-light text-center font-monospace">
        <h3 class="text-light ">Total pengeluaran terhadap kebutuhan anda:</h3>

        <div class="php text-light text-start py-5 p-5">
          <?php //function dan variabel
            echo "Halo, ", $nama = $_POST['nama'], ". Berikut data kebutuhan uang anda pada ", date("d-m-Y"), "."; //Function
            echo "<br>";
            echo "<br>";

            echo "Jumlah Uang: Rp", $jumlah= $_POST['jumlah-uang'];
            echo "<br>";
            echo "<br>";

            echo "Nama Kebutuhan 1: ", $nama1 = $_POST['namaKebutuhan1'];
            echo "<br>";
            echo "Kebutuhan 1: Rp", $kebutuhan1 = $_POST['kebutuhan1'];
            echo "<br>";
            echo "<br>";

            echo "Nama Kebutuhan 2: ", $nama2 = $_POST['namaKebutuhan2'];
            echo "<br>";
            echo "Kebutuhan 2: Rp", $kebutuhan2 = $_POST['kebutuhan2'];
            echo "<br>";
            echo "<br>";

            echo "Nama Kebutuhan 3: ", $nama3 = $_POST['namaKebutuhan3'];
            echo "<br>";
            echo "Kebutuhan 3: Rp", $kebutuhan3 = $_POST['kebutuhan3'];
            echo "<br>";
            echo "<br>";

            echo "Nama Kebutuhan 4: ", $nama4 = $_POST['namaKebutuhan4'];
            echo "<br>";
            echo "Kebutuhan 4: Rp", $kebutuhan4 = $_POST['kebutuhan4'];
            echo "<br>";
            echo "<br>";
            
            echo "Melakukan Perhitungan";

            for ($i = 0; $i<10; $i++) { //Pengulangan 
              echo ".";
            }

            echo "<br>";
            echo "<br>";

            echo "Sisa uang anda setelah kebutuhan terpenuhi adalah:";
            echo "<br>";

            $total = $jumlah - $kebutuhan1 - $kebutuhan2 -$kebutuhan3 - $kebutuhan4; //Variabel

            if ($total > 0) { //Pengkondisian
              echo "Rp", $total;
            } elseif ($total < 0) {
              echo "Uangmu gak cukup untuk membeli kebutuhan tersebut";
            }

            echo "<br>";
            echo "<br>";

            //OOP
            class Pembuat {
              public $nama, $nim, $jurusan;
            
              public function returnNilai() { //Method
                return "$this->nama, $this->nim, $this->jurusan"; 
              }

              public function __construct($nama, $nim, $jurusan) { //Construct
              $this->nama = $nama;
              $this->nim = $nim;
              $this->jurusan = $jurusan;
              }

            }


            $pembuat1 = new Pembuat("Ahmad Rizqy Yourin", "21120121140136", "Teknik Komputer 2021");
            
            echo "Website ini dibuat oleh: " . $pembuat1->returnNilai();
            echo "<br>";
            echo "Terima Kasih telah menggunakan website ini!";
            ?>
        </div>

      </section>
    </header>
  </body>
</html>

