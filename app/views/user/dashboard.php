<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #2d3436;
            margin-top: 50px;
            font-size: 36px;
            letter-spacing: 1px;
        }

        .search-container {
            text-align: center;
            margin: 30px auto;
        }

        .search-container input[type="text"] {
            width: 320px;
            padding: 10px;
            font-size: 18px;
            border: 2px solid #2980b9;
            border-radius: 6px;
            transition: all 0.3s ease;
        }

        .search-container input[type="text"]:focus {
            border-color: #3498db;
            outline: none;
            box-shadow: 0 0 8px rgba(52, 152, 219, 0.5);
        }

        .search-container button {
            padding: 10px 25px;
            background-color: #2980b9;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 18px;
            margin-left: 10px;
            transition: background-color 0.3s ease;
        }

        .search-container button:hover {
            background-color: #1c5d85;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .product-card {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            margin: 15px;
            text-align: center;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            width: 280px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .product-card:hover {
            transform: scale(1.05);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
        }

        .product-image {
            max-width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .product-name {
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #2c3e50;
        }

        .product-price {
            color: #e74c3c;
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .product-form {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .product-form input[type="number"] {
            width: 60px;
            padding: 10px;
            font-size: 16px;
            border: 2px solid #3498db;
            border-radius: 6px 0 0 6px;
            outline: none;
            text-align: center;
        }

        .product-form input[type="number"]:focus {
            border-color: #2980b9;
        }

        .product-form button {
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 0 6px 6px 0;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .product-form button:hover {
            background-color: #2980b9;
        }

        .alert-success {
            background-color: #27ae60;
            color: white;
            text-align: center;
            padding: 15px;
            margin: 20px auto;
            max-width: 80%;
            border-radius: 8px;
            font-size: 18px;
        }

        footer {
            text-align: center;
            padding: 25px;
            background-color: #2c3e50;
            color: white;
            position: relative;
            width: 100%;
            margin-top: 50px;
        }

        footer p {
            margin: 0;
            font-size: 16px;
        }
    </style>
</head>
<body>

    <h1>Our Products</h1>



    <?php if(isset($data['success'])) : ?>
        <div class="alert-success">
            <?= $data['success'] ?>
        </div>
    <?php endif; ?>

    <div class="container">
        <?php foreach ($data['produk'] as $produk) : ?>
        <div class="product-card">
            <img src="<?=BASEURL?>/img/<?=$produk['gambar']?>" alt="<?= $produk['nama'] ?>" class="product-image">
            <div class="product-name"><?= $produk['nama']?></div>
            <div class="product-price">Rp. <?= number_format($produk['harga'], 0, ',', '.') ?></div>

            <form action="<?= BASEURL?>/sale/store" method="POST" class="product-form">
                <input name="produk_id" type="hidden" value="<?= $produk['id'] ?>">
                <input type="number" name="quantity" value="1" min="1" step="1">
                <button type="submit">Buy Now</button>
            </form>
        </div>
        <?php endforeach; ?>
    </div>

        <!-- Search Form -->
    <div class="search-container">
        <form action="<?= BASEURL ?>/produk/search" method="POST">
            <input type="text" name="query" placeholder="Search products...">
            <button type="submit">Search</button>
        </form>
    </div>

    <footer>
        <p>&copy; 2024 Our Products. All rights reserved.</p>
    </footer>

</body>
</html>
