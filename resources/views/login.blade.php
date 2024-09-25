<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/login/login.css') }}">
    <title>Login</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f5f5;
        }

        .main-container {
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            width: 1000px;
            height: 350px;
        }

        .form {
            padding: 30px;
        }

        .image {
            background-size: cover;
            height: 100%;
        }

        h5 {
            font-weight: 600;
            color: #333;
        }

        .btn-submit {
            width: 100%;
            background-color: #007bff;
            border: none;
        }

        .btn-submit:hover {
            background-color: #0056b3;
        }

        .form-control {
            padding: 15px;
            font-size: 14px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .heading {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="main-container d-flex flex-column flex-lg-row">
        <div class="col-lg-6 d-lg-block">
            <div class="image"></div>
        </div>
        <div class="col-lg-6">
            <div class="form">
                <div class="heading mb-4 text-center">
                    <h5>Login to Your Account</h5>
                </div>
                <form method="POST" action="">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="form-group mb-4">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-submit">Sign In</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-NMO4aBA4tT50U3vpUo2BrG7RW+qB12F2GtzZIl6K/oK+ocN+bmFsbXBnvSmT5jf8" crossorigin="anonymous"></script>
</body>

</html>
