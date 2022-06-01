<!DOCTYPE html>
<html lang="nl">

<head>
<?php include 'components/head-tags.php'; ?>
    <title>Login</title>
    <link rel="shortcut icon" href="#">
</head>

<body class="bg-primary">
  <div class="jumbotron vertical-center">
  <div class="container">
    
      <div class="row">
          <div class="col-md-6">
              <img src="img/digitalabsences-logo_color_white.png" alt="" class="img-fluid">
          </div>
          <div class="col-md-6">
            <div class="card shadow-2-strong bg-light" style="border-radius: 1rem;">
              <div class="card-body p-5 text-center">
    
                <div class="form-outline mb-4 form-floating mb-3">
                  <input type="text" class="form-control" id="Gebruikersnaam" placeholder="name@example.com">
                  <label for="Gebruikersnaam">Test</label>
                </div> 
                <div class="form-outline mb-4 form-floating mb-3">
                  <input type="password" class="form-control form-control-lg" id="password" placeholder="name@example.com" value="">
                  <label for="password">wachtwoord</label>
                  
                </div>
    
                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-start mb-4">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="remember"
                  />
                  <label class="form-check-label ms-1" for="remember">Remember me </label>
                </div>
                <div class="d-grid gap-2">
                  <button class="btn btn-primary btn-lg" type="submit">Login</button>
                </div>
                <div>
                <a href="#" class="text-decoration-none">Forgot password?</a>
                </div>  
  
              </div>
            </div>
          </div>
      </div>
  </div>
  </div>  
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>