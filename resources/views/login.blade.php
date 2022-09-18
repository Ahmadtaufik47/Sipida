<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sipida - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</head>

<body class="d-flex flex-column min-vh-100 bg-light">
    <div class="col d-flex justify-content-center align-items-center">
        <div class="card border border-0 rounded shadow-sm w-25 h-100">
            <div class="card-body">
                <div class="container">
                    <h3 class="text-center mt-3 mb-3">Login Admin</h3>
                    <form action="/admin/login" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="emailForm" class="form-label">
                                Email Address
                            </label>
                            <input type="email" name="email"
                                class="form-control @error('email') is-invalid @enderror" id="email"
                                placeholder="Masukan Email Anda" autofocus required value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="passwordForm" class="form-label">
                                Password
                            </label>
                            <input type="password" name="password" class="form-control" id="password"
                                placeholder="Masukan Password Anda" required>
                        </div>
                        <div class="col d-flex justify-content-center mt-4 mb-4">
                            <button type="submit" class="btn btn-success w-100">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
