<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website Manajemen THR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  </head>

  <body class="bg-dark ">
    <header>
      <h1 class="text-center bg-dark text-light p-4 font-monospace">Masukkan Data</h1>
    </header>

    
    <div class="text-light text-center font-monospace">Silahkan masukkan data anda ke dalam form dibawah ini!</div>

    <section class="container vr p-3">
      <form class="text-light" action="hasil.php" method="post" id="form">
        <div class="formulir-nama pt-5">
          <label class="pb-2" for="nama">Nama</label>
          <input type="text" name="nama" class="form-control" placeholder="Masukkan nama anda disini" required />
        </div>

        <div class="formulir-jumlah-uang">
          <label class="pt-3 pb-2" for="nama">Jumlah Uang</label>
          <input type="number" name="jumlah-uang" class="form-control" placeholder="Masukkan nominal jumlah uang disini" required />
        </div>

        <div class="formulir-kebutuhan1">
          <label class="pt-3 pb-2" for="nama">Kebutuhan 1</label>
          <input type="text" name="namaKebutuhan1" class="form-control rounded-0" placeholder="Nama kebutuhan" required />
          <input type="number" name="kebutuhan1" class="form-control rounded-0" placeholder="Uang yang anda keluarkan" required />
        </div>

        <div class="formulir-jumlah-uang">
          <label class="pt-3 pb-2" for="nama">Kebutuhan 2</label>
          <input type="text" name="namaKebutuhan2" class="form-control rounded-0" placeholder="Nama kebutuhan" required />
          <input type="number" name="kebutuhan2" class="form-control rounded-0" placeholder="Uang yang anda keluarkan " required />
        </div>

        <div class="formulir-jumlah-uang">
          <label class="pt-3 pb-2" for="nama">Kebutuhan 3</label>
          <input type="text" name="namaKebutuhan3" class="form-control rounded-0" placeholder="Nama kebutuhan" required />
          <input type="number" name="kebutuhan3" class="form-control rounded-0" placeholder="Uang yang anda keluarkan " required />
        </div>

        <div class="formulir-jumlah-uang">
          <label class="pt-3 pb-2" for="nama">Kebutuhan 4</label>
          <input type="text" name="namaKebutuhan4" class="form-control rounded-0" placeholder="Nama kebutuhan" required />
          <input type="number" name="kebutuhan4" class="form-control rounded-0" placeholder="Uang yang anda keluarkan " required />
        </div>

        <div class="tombol pt-5 text-end">
          <input class="btn btn-light btn-lg pt" name="submit" type="submit" value="Submit" />
        </div>
      </form>
    </section>
  </body>
</html>
