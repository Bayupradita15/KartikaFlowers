
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Aplikasi Penjualan Barang</title>

</head>
<body>
    
<!-- header start -->
 <header>

    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>
    
    <a href="#" class="logo">ESQA<span>.</span></a>

    <nav class="navbar">
        <a href="index.html">Profil</a>
        <a href="index.html">products</a>
        <a href="index.html">review</a>
        <a href="index.html">contact</a>
        <a href="formtrans.html">Transaksi</a>

    </nav>

    <div class="icons">
        <a href="login.php" class="fas fa-user"></a>
    </div>

 </header>

 <!-- header end -->

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: #fff;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(255, 255, 255, 0.2);
            width: 100%;
            max-width: 400px;
        }

        .login-container h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
        }

        .login-container form {
            display: flex;
            flex-direction: column;
        }

        .login-container input {
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .login-container button {
            background-color: #ffffff;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .login-container button:hover {
            background-color: #ffffff;
        }

        .login-container .register-link {
            text-align: center;
            margin-top: 10px;
            font-size: 14px;
        }

        .login-container .register-link a {
            color: #52b3e0;
            text-decoration: none;
        }

        .login-container .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    
    <div class="login-container">
        <h1>Login</h1>
        <form action="index.html" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <div class="submit-button"></div>
            <button>            
                <a class="btn btn-primary " href="index.html" role="button">Login</a>
            </button>
                   <div class="register-link">
            Belum punya akun? <a href="signin.html">Daftar di sini</a>
        </div>
    </div>
    
       
    </div>
</body>
</html>


