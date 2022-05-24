<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Akun</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  </head>
  <body class="bg-dark text-light text-center">
    <section>
      <h1 class="m-5">HASIL LOGIN</h1>

      <h1 class="container ">
      <?php
        class userService
        {
            //objek, properti dan variabel
            public $email;    
            public $password; 
            public $dataUser; 
        
            public function __construct($email, $password) //Construct 
            {
                $this->_dataUser = [
                    (object) [
                        'email'     => "yourin@kelompok23.com",
                        'password'  => "12345"
                    ]
                ];
               $this->email = $email;
               $this->password = $password;
            }
        
            public function login() //method
            {
                $user = $this->checkCredentials();
                if($user) {
                    return $get_data = $user->email;
                } else {
                    return false;
                }
            }
        
            protected function checkCredentials() //method
            {
                foreach($this->_dataUser as $key => $value) { //pengulangan
                    if($value->email == $this->email && $value->password == $this->password) {
                        return $value;
                    }
                }
                return false;
              }
          
        }
     
        $user = new userService($_POST['email'], $_POST['password']);

        if($get_user = $user->login()) {
          //echo 'Selamat Datang '. $get_user;
          //echo "<br>";
          //Kelewat

          $url = 'data.php';
          header( "Location: $url" );
        } else {
          echo 'Akun atau Password Login Salah';
        }                
    ?>
      </h1>
           

    </section>
  </body>
</html>
