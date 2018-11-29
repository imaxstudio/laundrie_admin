<!-- AUTHOR ROMADHAN EDY P -->
<!-- RPL - SMKN 10 JAKARTA -->
<?php 
    session_start();
    if (!isset($_SESSION['logged'])) {
        header("location: Page/auth/login");
    }
 ?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laundrie</title>

    <!-- Scripts -->
    <script src="___/Assets/js/app.js"></script>
    <script src="___/Assets/js/jquery.js"></script>    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="___/Assets/css/app.css" rel="stylesheet">
    <link href="___/Assets/css/custom.css" rel="stylesheet">    

    <!-- ICON -->
    <link rel="stylesheet" href="___/Assets/fontawesome-free-5.4.2-web/css/all.css">
</head>
<body>
    <div id="app">
        <nav class="sidenav" id="sidenav-respons">
            <div class="header brand text-align-center">
                <i class="fab fa-creative-commons-remix h1"></i>
                <p class="h3">Laundrie</p>
            </div>
            <div class="menu">
                <a href="./" class="child-menu"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                <a href="#" class="child-menu" onclick="dropdown()"><i class="fas fa-file-invoice-dollar"></i> Orderan</a>
                <div id="child-dropdown" class="child-dropdown hide">
                    <a href="./?order=in" class="child-menu dropdown">Masuk</a>
                    <a href="./?order=out" class="child-menu dropdown">Selesai</a>
                </div>
                <a href="./?users" class="child-menu"><i class="fas fa-user-circle"></i> Pengguna</a>
                <a href="" class="child-menu"><i class="fas fa-info-circle"></i> Lainnya</a>
            </div>
        </nav>
        <nav class="topnav">
            <a href="" class="bars h4" style="margin-left: 15px;"><img src="___/Assets/img/logo.png" style="width: 90px;"></a>
            <div style="display: flex;">
                <button style="background-color: #3490dc;color: #fff;" class="bars" onclick="sidenav()"><i class="fas fa-list"></i> Menu</button>
                <button style="background-color: #00c853;color: #fff;"><?php echo $_SESSION['username']; ?></button>
                <button onclick="window.location='Page/auth/logout.php'"><i class="fas fa-power-off"></i> Keluar</button>
            </div>
        </nav>
        <main class="py-4">
            <div class="content">
            <?php 
                session_start();
                if (isset($_GET['order'])) {
                    switch ($_GET['order']) {
                        case 'in':
                            include 'Page/order/order-in.php';
                            break;
                        case 'out':
                            include 'Page/order/order-out.php';
                            break;
                        default:
                            break;
                    }
                }
                elseif(isset($_GET['users'])){
                    switch ($_GET['users']) {
                        case 'addUser':
                            # code...
                            break;
                        case 'editUser':
                            # code...
                            break;
                        default:
                            include 'Page/users/users.php';
                            break;
                    }
                }
                else{
                    include 'Page/home.php';
                }
             ?>
            </div>
        </main>
    </div>
    <script src="___/Assets/js/custom.js"></script>
</body>
</html>
