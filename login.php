<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login aplikasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container container-login">
        <div class="col align-self-center">
          <h1 class="judul text-center fw-bold">LOGIN</h1>
          <form method="POST" action="login2.php">
            <div class="mb-3">
              <label class="form-label lebar">Username</label>
              <input type="text" class="form-control lebar" id="exampleInputText1" placeholder="Masukkan username Anda" name="username" />
            </div>
            <div class="mb-3">
              <label class="form-label lebar">Password</label>
              <input type="password" class="form-control lebar" id="exampleInputPassword1" placeholder="Masukkan password" name="password" />
            </div>
            <center><button type="submit" class="btn btn-primary">Login</button> <br /></center>
          </form>
          <br />
        </div>
      </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>