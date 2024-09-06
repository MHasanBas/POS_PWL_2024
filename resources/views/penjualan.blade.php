<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales Page</title>
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
            max-width: 800px;
            margin: 50px auto;
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            color: #4CAF50;
            margin-bottom: 30px;
        }
        label {
            font-size: 18px;
            margin-right: 10px;
        }
        input[type="text"] {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 300px;
            margin-bottom: 20px;
            transition: border-color 0.3s ease;
        }
        input[type="text"]:focus {
            border-color: #4CAF50;
            outline: none;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #45a049;
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
        <h1>Transaksi POS</h1>
        <form>
            <label for="jumlah">Jumlah Produk:</label>
            <input type="text" id="jumlah" name="jumlah" placeholder="Masukkan jumlah produk">
            <br><br>
            <button type="submit">Submit</button>
        </form>
    </div>

</body>
</html>
