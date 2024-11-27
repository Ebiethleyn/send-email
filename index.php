<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Send Mail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar bg-body-tertiary shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/b.jpg" alt="Logo" width="30" height="24"
                    class="d-inline-block align-text-top rounded-circle">
                Ebieth
            </a>
        </div>
    </nav>
    <div class="container ">
        <div class="row align-items-start">
            <div class="col">
                <div class="text-center mt-5">
                    <h1>Kirim Email</h1>
                </div>
                <hr>
                <form action="kirim.php" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="text" name="nama" class="form-control" id="exampleFormControlInput1"
                            placeholder="Full name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="input your email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">No Hp</label>
                        <input type="number" name="number" class="form-control" id="exampleFormControlInput1"
                            placeholder="input your Number">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="pesan"
                            rows="3"></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" name="submit" class="btn btn-primary ">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>