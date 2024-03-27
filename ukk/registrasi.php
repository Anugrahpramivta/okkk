<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 500px;
            margin: auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            height: 90px;
            background: #663366;
            border-radius: 5px 5px 0 0;
            color: #fff;
            font-size: 30px;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        label {
            font-weight: bold;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 20px;
            background-color: #663366;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            font-size: 20px;
        }
        input[type="submit"]:hover {
            background-color: #663366;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>REGISTRATION FORM</h2>
        <form action="proses_registrasi.php" method="post">
            <div>
                <label for="nama_lengkap">Nama Lengkap:</label>
                <input type="text" id="nama_lengkap" name="nama_lengkap" required>
            </div>
            <div>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div>
                <label for="Email">Email:</label>
                <input type="text" id="email" name="email" required>
            </div>
            <div>
                <label for="Alamat">Alamat:</label>
                <input type="text" id="alamat" name="alamat" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div>
                <label for="Konfirmasi Password">Konfirmasi Password:</label>
                <input type="text" id="Konfirmasi Password" name="Konfirmasi Password" required>
            </div>
            <h1>
                <input type="submit" value="Register" > 
            </h1>
            <h1>
                <input type="submit" value="Back" onclick="location.href='login.php';"> 
            </h1>
        
        </form>
    </div>
</body>
</html>
