<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="shortcut icon" href="img/SYMBOL KU.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <section class="vh-100 gradient-custom" >
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
                <form method="post" action="submit_register.php">
                  <div class="mb-md-5 mt-md-4 pb-5" action="submit_Login.php">
      
                    <h2 class="fw-bold mb-2 text-uppercase">Register</h2>
                    <p class="text-white-50 mb-5">Please create username and password!</p>
      
                    <div class="form-outline form-white mb-4">
                      <input type="text" class="form-control form-control-lg" name="username"/>
                      Username
                    </div>
      
                    <div class="form-outline form-white mb-4">
                      <input type="password" class="form-control form-control-lg" name="pas1" />
                      <label class="form-label" for="typePasswordX">Password</label>
                    </div>

                    <div class="form-outline form-white mb-4">
                      <input type="password" class="form-control form-control-lg" name="pas2"/>
                      <label class="form-label" for="typePasswordX">Replay Password</label>
                    </div>
                    <button class="btn btn-outline-light btn-lg px-5" ype="submit" name="Submit" value="Submit">Register</button>
      
                    <div class="d-flex justify-content-center text-center mt-4 pt-1">
                      <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                      <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                      <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                    </div>
                  </div>
                  <div>
                    <p class="mb-0">Bila sudah punya akun silahkan <a href="#!" class="text-white-50 fw-bold">Login</a>
                    </p>
                  </div>
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>