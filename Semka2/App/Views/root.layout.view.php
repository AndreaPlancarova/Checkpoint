<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="public/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</head>
<body>
<nav class="navbar sticky-top navbar-dark bg-dark">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand">SKI & FUN</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Gallery
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="?c=home&a=Beatles">Beatles</a>
                        <a class="dropdown-item" href="?c=home&a=Bear">Bears</a>
                    </div>
                </li>

                <a class="nav-link" href="?c=home">Domov</a>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Modely
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="?c=Semka">Prehlad</a>
                        <a class="dropdown-item" href="?c=Semka&a=Add">Pridat model</a>
                    </div>
                </li>


                <a class="nav-link" href="?c=Zamestnanci">Nasi instruktori</a>
                <a class="nav-link" href="?c=Zamestnanci&a=Add">Pridat zamestnanca</a>

                <a class="nav-link" href="?c=home&a=contact">Kontakt</a>


            </ul>

        </div>
    </nav>
</nav>
</ul>
<li></li>
<ul>
    <div class="web-content">
        <?= $contentHTML ?>
    </div>

<div>
    <a href="?c=home&a=contact" id="kontakt"></a>
</div>
</body>
</html>
