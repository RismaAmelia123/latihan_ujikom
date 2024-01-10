<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container p-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-5">
                <h3 class="text-center fw-bold">Login</h3>
                <div class="mb-2">
                    <label for="email" class="form-label fw-bold">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Masukan Email">
                </div>
                <div class="mb-2">
                    <label for="password" class="form-label fw-bold">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Masukan Password">
                </div>
                <div class="mb-2">
                    <input type="submit" value="Login" class="form-control text-white" style="background-color: darkslateblue">
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>