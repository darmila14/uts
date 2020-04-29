<?php 

require_once("app/config/db.php");
if(isset($_POST['register'])){

// filter data yang diinputkan
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
// enkripsi password
$password = password_hash($_POST["password"], PASSWORD_DEFAULT);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


// menyiapkan query
$sql = "INSERT INTO users (name, username, email, password) 
        VALUES (:name, :username, :email, :password)";
$stmt = $db->prepare($sql);

// bind parameter ke query
$params = array(
    ":name" => $name,
    ":username" => $username,
    ":password" => $password,
    ":email" => $email
);

// eksekusi query untuk menyimpan ke database
$saved = $stmt->execute($params);

// jika query simpan berhasil, maka user sudah terdaftar
// maka alihkan ke halaman login
if($saved) header("Location: index.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Startmin - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="assets/css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="assets/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="assets/css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    <script type="text/javascript">
        window.onload = function () {
            document.getElementById("pw1").onchange = validatePassword;
            document.getElementById("pw2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("pw2").value;
            var pass1 = document.getElementById("pw1").value;
            if (pass1 != pass2)
                document.getElementById("pw2").setCustomValidity("Passwords Tidak Sama, Coba Lagi");
            else
                document.getElementById("pw2").setCustomValidity('');
        }
    </script>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Silahkan Login</h3>
                    </div>
                    <div class="panel-body">
                        <form action="" method="POST" role="form">
                            <div class="form-group has-success">
                                <label class="control-label" for="inputSuccess">Nama</label>
                                <input type="text" name="name" class="form-control" id="inputSuccess"required="">
                            </div>
                            <div class="form-group has-warning">
                                <label class="control-label" for="inputWarning">Username</label>
                                <input type="text" name="username" class="form-control" id="inputWarning"required="">
                            </div>
                            <div class="form-group has-error">
                                <label class="control-label" for="inputError">Password</label>
                                <input type="password" name="password" class="form-control" id="pw1"required="">
                            </div>
                            <div class="form-group has-error">
                                <label class="control-label" for="inputError">Konfirmasi Password</label>
                                <input type="password" name="password" class="form-control" id="pw2"required="">
                            </div>
                            <div class="form-group has-error">
                                <label class="control-label" for="inputError">Email</label>
                                <input type="email" name="email" class="form-control" id="inputError"required="">
                            </div>
                            <input type="submit" class="btn btn-success btn-sm" name="register" value="Daftar">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="assets/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="assets/js/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="assets/js/startmin.js"></script>



</body>

</html>