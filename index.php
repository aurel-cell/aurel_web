<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Login Sistem</title>

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">

    <!-- Icon -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

</head>

<body>

<!-- Bubble -->
<div class="bubbles">

    <span style="--i:11"></span>
    <span style="--i:18"></span>
    <span style="--i:25"></span>
    <span style="--i:14"></span>
    <span style="--i:20"></span>
    <span style="--i:30"></span>
    <span style="--i:15"></span>
    <span style="--i:28"></span>
    <span style="--i:10"></span>
    <span style="--i:24"></span>
    <span style="--i:16"></span>
    <span style="--i:12"></span>

</div>

<!-- Cloud -->
<div class="cloud cloud1"></div>
<div class="cloud cloud2"></div>

<div class="container">

    <!-- Bagian Kiri -->

    <div class="left-content">

        <h1>
            Sistem Informasi
        </h1>

        <h2>
            Disdukcapil
        </h2>

        <p>

            Selamat datang di sistem informasi pelayanan administrasi kependudukan.
            Silakan login untuk melanjutkan.

        </p>

    </div>

    <!-- Login -->

    <div class="login-box">

        <h2>LOGIN</h2>

        <form action="login.php" method="POST">

            <div class="input-box">

                <i class="fa-solid fa-user"></i>

                <input
                    type="text"
                    name="username"
                    placeholder="Username"
                    required>

            </div>

            <div class="input-box">

                <i class="fa-solid fa-lock"></i>

                <input
                    type="password"
                    name="password"
                    placeholder="Password"
                    required>

            </div>

            <button>

                Login

            </button>

        </form>

    </div>

</div>

<!-- Wave -->

<div class="wave">

<svg viewBox="0 0 1440 320">

<path fill="#ffffff"
fill-opacity="1"

d="M0,192L60,170.7C120,149,240,107,360,122.7C480,139,600,213,720,229.3C840,245,960,203,1080,176C1200,149,1320,139,1380,133.3L1440,128L1440,320L0,320Z">

</path>

</svg>

</div>

</body>

</html>
