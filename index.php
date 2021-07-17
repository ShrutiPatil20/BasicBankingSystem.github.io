<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
        crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css"
        integrity="undefined" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="script" href="script.js">
    <title>Basic Bank System</title>
</style>
</head>

<body>
    <div class="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark responsive">
            <div class="container-fluid">
                <a href="#" class="logo">
                    <img src="images/icon.png">
                </a>
                <a class="navbar-brand" href="#">Spark bank</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="transaction history.php">Transaction history</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="main responsive">
            <div class="container py-5">
                <div class="row py-4">
                    <div class="col-lg-7 pt-5 text-centre">
                        <h1>Welcome to <strong>Spark Bank</strong></h1>
                        <p>Keep your money safe !</p>
                        <button type="button" class="btn btn-danger btn-lg"><a href="customer.php">
                            View customers</a></button>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <footer class="footer responsive bg-dark">
        <p>&copy; 2021 <strong>Shruti Patil</strong>
        <p>The Spark Foundation</p>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>