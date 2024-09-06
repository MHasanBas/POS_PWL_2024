<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty & Health</title>
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
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
        }
        h1 {
            color: #4CAF50;
            margin-bottom: 30px;
            text-align: center;
        }
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            text-align: center;
        }
        .product-item {
            background-color: white;
            border-radius: 15px;
            padding: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .product-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }
        .product-item img {
            max-width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 10px;
        }
        .product-item p {
            font-size: 18px;
            margin-top: 10px;
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
        <h1>Product: Beauty & Health</h1>
        <div class="product-grid">
            <div class="product-item">
                <img src="https://th.bing.com/th/id/OIP.ai6JQAaSwBIjT2CeXd22_AHaFj?rs=1&pid=ImgDetMain" alt="Serum">
                <p>Serum</p>
            </div>
            <div class="product-item">
                <img src="https://i5.walmartimages.com/asr/6a2b5b20-cc7a-4890-bf0b-e79023926167.d75c47eed3e27c4691a5c12f346fd529.jpeg" alt="Moisturizer">
                <p>Moisturizer</p>
            </div>
            <div class="product-item">
                <img src="https://th.bing.com/th/id/OIP.Wbx3zpG2qNbKKNzoeDiHGAAAAA?rs=1&pid=ImgDetMain" alt="Sunscreen">
                <p>Sunscreen</p>
            </div>
            <div class="product-item">
                <img src="https://i5.walmartimages.com/asr/e16fade9-be08-44eb-9eac-aa5d0b0b89e3_1.628b46ddae438fefede176dee4e66bb5.jpeg" alt="Conditioner">
                <p>Conditioner</p>
            </div>
            <div class="product-item">
                <img src="https://th.bing.com/th/id/OIP.Gzv0fNf_EA-d0mxAIDsNxgHaHa?rs=1&pid=ImgDetMain" alt="Toner">
                <p>Toner</p>
            </div>
        </div>
    </div>

</body>
</html>
