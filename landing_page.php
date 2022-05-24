<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website Manajemen THR</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> <!--AOS buat animasinya-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  </head>

  <body class="bg-dark text-light">
    <header> 
      <div class="text-center pt-5" data-aos="zoom-in-down" data-aos-duration="5000">
        <img src="logo.jpg" alt="logo" width="165" class="rounded-circle img-thumbnail text-center \" />
      </div>
    </header>

    <section class="container text-light">
      <h1 class="text-center p-5" data-aos="zoom-in" data-aos-duration="500">Website Manajemen THR</h1>

      <!--Hiasan-->
      <div class="login form-control" data-aos="zoom-in" data-aos-duration="2500"></div>
      <!--Hiasan-->

      <div class="p-5 text-center" data-aos="zoom-in-up" data-aos-duration="2000">
        <h3 class="p-4">LOGIN</h3>

        <form action="login.php" method="post" id="form">
          <input type="text" name="email" class="form-control rounded-3 rounded-pill" placeholder="Masukkan email" required />

          <input type="text" name="password" class="form-control rounded-3 mt-5 rounded-pill" placeholder="Isi Password" required />

          <button class="btn btn-light mt-5 rounded-pill btn-outline-dark btn-lg" name="submit" type="submit" value="Submit">Submit</button>
        </form>
      </div>
    </section>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
