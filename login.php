<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <div class="container">
    <div class="login-box">
    <div class="row">
    <div class="col-md-6 login-left">
        <h2 style="color:aliceblue">Login Here</h2>
        <form action="validation.php" methpod="post">
            <div class="form=group">
                <label style="color:aliceblue">Username</label>
                <input type="text" name="user" class="form-control" required>
            </div>
            <div class="form-group">
                <label style="color:aliceblue">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>  
            <button type="submit" class="btn btn-primary">Login</button>
        </form>

    </div>

    <div class="col-md-6 login-right">
        <h2 style="color:aliceblue">Register Here</h2>
        <form action="myregistration.php" methpod="post">
            <div class="form=group">
                <label style="color:aliceblue">Username</label>
                <input style="color:black" type="text" name="user" class="form-control" required>
            </div>
            <div class="form-group">
                <label style="color:aliceblue">Password</label>
                <input style="color:black" type="password" name="password" class="form-control" required>
            </div>  
            <button type="submit" class="btn btn-primary" style="color:aliceblue">Register</button>


        </form>

    </div>

    </div>

    </div>

</div>
    
  </body>


  

</html>