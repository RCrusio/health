<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/background.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <section class="vh-100 background">
        <div class="container py-5 h-100">
          <div class="row d-flex align-items-center justify-content-center h-100 text-center">
            <div class="col-md-8 col-lg-7 col-xl-6">
              <img src="assets/img/deped.png"
                class="img-fluid">
            </div>
            
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
            <H1>School Health Reports</H1>
              <form action="user_home.php">
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="form1Example13" class="form-control form-control-lg" />
                  <label class="form-label" for="form1Example13">Username</label>
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="form1Example23" class="form-control form-control-lg" />
                  <label class="form-label" for="form1Example23">Password</label>
                </div>
    
                <!-- Submit button -->
                <div class="col">
                <button type="submit" class="btn btn-primary btn-lg btn-block">user</button>
                <a href="admin_dashboard.php"><button type="button" class="btn btn-primary btn-lg btn-block">admin</button></a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
</body>
</html>