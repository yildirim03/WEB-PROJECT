<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kullanıcı adı ve şifreyi al
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Kullanıcı adının bir e-posta adresi olup olmadığını kontrol et
    if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
        echo "Kullanıcı adı geçerli bir e-posta adresi değil!";
        exit;
    }

    // Kullanıcı adından "@" işaretini kaldırarak sadece numarayı al
    $user_number = substr($username, 0, strpos($username, '@'));
    $userId=explode('@', $username);

    // Şifre kontrolü
    if ($password === $user_number) {
        $signal = true;
    } else {
        $signal = false;
        header("refresh:5;url=login.html");
    }
} else {
    echo "Bu sayfa doğrudan erişilemez!";
}
?>
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
    <link rel="stylesheet" href="login.php">
    <link rel="stylesheet" href="CSS/login.css">





</head>

<body style="background-image: url(Pictures/arkaPlanTema/loginWallpaper.jpg);">
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

    <!--login kısımı gelicek-->


    <section class="login-block">
        <div class="login-form" style="background-color: bisque;">

            <?php
            if ($signal == true) {
                echo $userId[0] . "  Hoşgeldin";
            } else {
                echo "Kullanıcı epostası yada şifre hatalı ";
                echo "5 saniye içinde geri yönlendiriliyorsunuz";
            }
            ?>

        </div>
    </section>






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