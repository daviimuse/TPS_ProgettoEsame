<!doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <div class="container-fluid form-container">
      <div class="container login-container">
          <div class="row">
              <div class="col-md-5 content-part">
                  <h4 class="logo">Login!</h4>
              </div>
              <div class="col-md-7 form-part">
                <div class="row">
                   <p class="signinlink">Don't have an account <a href="../index.php">Sign Up</a></p>
                   <form method="POST" action="../backEnd/login_register.php">    
                  <div class="col-lg-8 col-md-11 login formcol mx-auto">
                       <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" name="mail">
                        <label for="floatingInput">Email</label>
                      </div>
                      <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" name="password">
                        <label for="floatingPassword">Password</label>
                      </div>
                      <div class="form-floating">
                       <button type="submit" class="btn btn-primary">Login</button>
                      </div>
                  </div>
                </form>
                </div>
              </div>
          </div>
      </div>
    </div> 
  </body>
</html>