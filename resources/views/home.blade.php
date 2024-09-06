<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
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
            padding: 30px;
            text-align: center;
        }
        h1 {
            color: #333;
            margin-bottom: 30px;
        }
        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        .menu-item {
            background-color: white;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .menu-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }
        .menu-item img {
            max-width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 15px;
        }
        .menu-item a {
            display: block;
            font-size: 18px;
            text-decoration: none;
            color: #4CAF50;
            font-weight: bold;
            transition: color 0.3s ease;
        }
        .menu-item a:hover {
            color: #333;
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
        <h1>Welcome Home</h1>
        <div class="menu-grid">
            <div class="menu-item">
                <img src="https://www.cushmanwakefield.com/-/media/cw/global/industries/food-beverage-main-mobile.jpg?rev=2f27edc8d84c4cc88a7236c0e8ece235" alt="Food & Beverages">
                <a href="/category/food-beverage">Food & Beverages</a>
            </div>
            <div class="menu-item">
                <img src="https://static.independent.co.uk/2022/04/21/21/health%20and%20beauty.jpg" alt="Beauty & Health">
                <a href="/category/beauty-health">Beauty & Health</a>
            </div>
            <div class="menu-item">
                <img src="https://arisefacilitysolutions.com/blog/wp-content/uploads/2020/07/set-cleaning-supplies-tools_74855-223.jpg" alt="Home Care">
                <a href="/category/home-care">Home Care</a>
            </div>
            <div class="menu-item">
                <img src="https://cdn.babyology.com.au/wp-content/uploads/2019/05/baby-and-toddler-activities-wide.jpg" alt="Baby & Kid">
                <a href="/category/baby-kid">Baby & Kid</a>
            </div>
        </div>
    </div>

</body>
</html>
