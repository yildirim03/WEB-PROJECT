<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Me&City</title>
    <script src="https://kit.fontawesome.com/8a3338bba7.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/yazıStyle.css">
    <link rel="stylesheet" href="CSS/iletisim.css">

</head>

<body>
    <!-- menü başlangıç kısımı-->

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top shadow-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">Web Teknoloji Proje</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Anasayfa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="hakkımda.html">Hakkımda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ozgecmis.html">Özgeçmiş/CV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="memleketim.html">Memleketim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="trabzonspor.html">Trabzonspor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ilgialanım.html">İlgi alanlarım</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="iletisim.html">İletişim Sayfası</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-weight: bold; color: rgb(95, 170, 8);" href="login.html">Giriş
                            yap</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- menü sonu kısımı-->

    <!-- ! iletisim form kısmı  -->

    <table class="table">
        <thead class="table">
            <tr>
                <th colspan="5" id="bilgiler">
                    <h3>Bilgileriniz</h3>
                </th>
            </tr>

        </thead>
        <tbody>
            <tr>
                <td id="bilgiler">Kullanıcı adınız</td>
                <td id="bilgiler">
                    <?php
                    echo $_POST['nick'];
                        ?>
                </td>
            </tr>
            <tr>
                <td id="bilgiler">E-mail</td>
                <td id="bilgiler">
                    <?php
                    echo $_POST['mail'];
                        ?>
                </td>
            </tr>
            <tr>
                <td id="bilgiler">Cinsiyetiniz</td>
                <td id="bilgiler">
                    <?php
                    if (isset($_POST['gonder'])) {
                    $chose=$_POST['radio'];
                    echo $chose;
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td id="bilgiler">Mesajınız</td>
                <td id="bilgiler">
                <?php
                    echo $_POST['Mesaj'];
                        ?>
                </td>
            </tr>
            
        </tbody>

    </table>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="bootstrap-5.3.3/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap-5.3.3/js/bootstrap.js"></script>
    <script src="bootstrap-5.3.3/js/bootstrap.min.js"></script>

    <script src="indexNavbar.js"></script>

</body>

</html>