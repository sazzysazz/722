<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Webleb</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400");

        body,
        html {
            font-family: "Source Sans Pro", sans-serif;
            background: pink;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }

        .container {
            text-align: center;
            background: white;
            border-radius: 9px;
            border-top: 10px solid white;
            border-bottom: 10px solid white;
            width: 350px;
            height: 450px;
        }

        .box h4 {
            font-family: "Source Sans Pro", sans-serif;
            color: pink;
            font-size: 20px;
            margin-top: 94px;
        }

        .box h4 span {
            color: #dfdeee;
            font-weight: lighter;
        }

        .box h5 {
            font-family: "Source Sans Pro", sans-serif;
            font-size: 13px;
            color: pink;
            letter-spacing: 1.5px;
            margin-top: -10px;
            margin-bottom: 70px;
        }

        .box input[type="text"],
        .box input[type="password"] {
            display: block;
            margin: 20px auto;
            background-color: darkgrey;
            border: 0;
            border-radius: 5px;
            padding: 14px 10px;
            width: 300px;
            outline: 0;
            color: lightpink;
            transition: all 0.2s ease-out;
        }

        ::-webkit-input-placeholder {
            color: #565f79;
        }

        .box input[type="text"]:focus,
        .box input[type="password"]:focus {
            border: 1px solid #79a6fe;
        }

        a {
            color: pink;
            text-decoration: none;
        }

        .btn1 {
            border: 0;
            background: pink;
            color: white;
            border-radius: 7px;
            width: 300px;
            height: 49px;
            font-size: 16px;
            transition: 0.3s;
            cursor: pointer;
            margin-top: 20px;
        }

        .btn1:hover {
            background: #129aa1;
        }

        .forgetpass {
            position: relative;
            float: right;
            right: 28px;
        }
    </style>
</head>
<body>
    <div class="container">
        <form name="form1" class="box" method="post">
            <h4>Login<span></span></h4>
            <h5>Sign in to your account.</h5>
            <input type="text" name="email" placeholder="Email" autocomplete="off" />
            <input type="password" name="password" placeholder="Password" id="pwd" autocomplete="off" />
            <a href="#" class="forgetpass">Forget Password?</a>
            <button type="submit" value="Sign in" class="btn1 login">login</button>
        </form>
    </div>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Replace with your actual email and password values
    $correctEmail = "chaovisal567@gmail.com";
    $correctPassword = "12345";

    if ($email === $correctEmail && $password === $correctPassword) {
        echo '
        <script>
            swal({
                title: "Login Success!",
                text: "Welcome Back",
                icon: "success",
                button: "Confirm",
            }).then((result) => {
                if(result){
                    location.href="main.php";
                }
            }).catch((err) => {

            });
        </script>
        ';
    } else {
        echo '
        <script>
            swal({
                title: "Error !",
                text: "Please try again",
                icon: "error",
                button: "Cancel",
            });
        </script>
        ';
    }
}
?>
