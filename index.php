<!DOCTYPE html>
<html>
<head>
  <title>Encrypt Decrypt Assignment</title>

<head>
    <title>Encrypt</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f5f5f5;
            font-family: 'Arial', sans-serif;
        }

        .container {
            margin-top: 100px;
            max-width: 400px;
            background-color: #002ab5;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .btn-default {
            background-color: #4364d1;
            color: #ecf0f1;
            border: none;
        }

        .btn-default:hover,
        .btn-default:focus {
            background-color: #34495e;
            color: #ecf0f1;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class='row'>
            <div class='col-sm-12'>
                <!-- Bootstrap form-->
                <form action="login.php" method="POST" role='form'>
                    <div class="form-group">
                        <label style="color: white;" for="username">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Enter your username">
                    </div>
                    <div class="form-group">
                        <label style="color: white;"for="password">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>

                    <!--Button-->
                    <input style="color: black;"type="submit" class="btn btn-default" value="Sign In">
                </form>
                <br>
                <p style="color: white;"class="text-muted">Not registered? Sign up easily!</p>
                <br>
                <!--Button pseudoclass according to bootstrap-->
                <a style="color: black;"href="new_user.php" class="btn btn-default" role="button">Sign Up</a>
            </div>
        </div>
    </div>
</body>

</html>