<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            color: #333;
        }
        .navbar {
            background-color: #4CAF50;
            padding: 15px 30px;
            text-align: center;
        }
        .navbar a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-size: 18px;
            transition: color 0.3s ease;
        }
        .navbar a:hover {
            color: #ddd;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            color: #4CAF50;
            margin-bottom: 20px;
        }
        .profile-info {
            font-size: 18px;
            margin-bottom: 20px;
            text-align: left;
            line-height: 1.6;
        }
        .profile-info p {
            margin: 10px 0;
        }
        .profile-info img {
            border-radius: 50%;
            margin-bottom: 20px;
            width: 150px;
            height: 150px;
            object-fit: cover;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        <a href="/">Home</a>
        <a href="/category/food-beverage">Products</a>
        <a href="/user/17/name/M. Hasan Basri">User</a>
        <a href="/POS">Penjualan</a>
    </div>

    <!-- Container -->
    <div class="container">
        <h1>User Profile</h1>
        <div class="profile-info">
            <img src="https://th.bing.com/th/id/OIP.tvaMwK3QuFxhTYg4PSNNVAHaHa?rs=1&pid=ImgDetMain" alt="User Photo">
            <p><strong>Id:</strong> {{ $id }}</p>
            <p><strong>Nama:</strong> {{ $name }}</p>
        </div>
    </div>

</body>
</html>
