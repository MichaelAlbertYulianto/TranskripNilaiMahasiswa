<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>

    <div class="container-fluid"
        style="background-color: #1e1e1e; display: flex; justify-content: center; align-items: center; height: 100vh;">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <form action="/login" method="POST">
                        @csrf
                        <div class="form-group mt-3">
                            <input type="email" name="email" placeholder="E-mail" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    @if (session('alert'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('alert') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

</body>

</html>
