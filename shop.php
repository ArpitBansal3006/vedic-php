<?php include 'layout/header.php'; ?>

<!-- Add a top margin to the container to avoid overlap with header -->
<div class="container my-5 pt-5" style="margin-top: 100px;">
    <h1 class="text-center mb-4">Shop Our Products</h1>

    <div class="row">
        <!-- Sidebar - Categories -->
        <aside class="col-lg-3 mb-4">
            <h4>Categories</h4>
            <ul class="category-list">
                <li><a href="#">All</a></li>
                <li><a href="#">Puja Essentials</a></li>
                <li><a href="#">Decorative Items</a></li>
                <li><a href="#">Incense and Oils</a></li>
                <li><a href="#">Spiritual Books</a></li>
                <li><a href="#">Idols and Statues</a></li>
            </ul>
        </aside>

        <!-- Product Grid -->
        <div class="col-lg-9">
            <div class="row">
                <!-- Sample Product Card -->
                <?php 
                // Define an array of fake product names and their images
                $products = [
                    ['name' => 'Shree Ganesha Idol', 'price' => '1299', 'images' => [
                        'https://imgs.search.brave.com/gOREnFEy_KCaEMAL3IvQ8Ghlow8cl1quOtX8l7nTuSE/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pLmV0/c3lzdGF0aWMuY29t/LzM4OTk0NDE4L3Iv/aWwvYzVhZDkyLzQ0/MzA5MTY0ODMvaWxf/NjAweDYwMC40NDMw/OTE2NDgzX2tsdjku/anBn'],
                    ],
                    ['name' => 'Maa Durga Photo Frame', 'price' => '699', 'images' => [
                        'https://imgs.search.brave.com/Oz-TbbwVX8BtLQxHlMkU94LQluzuBL5iI3nqFyMbK0I/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly90My5m/dGNkbi5uZXQvanBn/LzA2LzE2LzQ2LzQ2/LzM2MF9GXzYxNjQ2/NDY3OF9tSFhLcVRw/U24wUVRUNEpvVTNI/NHZrRXJneHRQNjBt/Ri5qcGc'],
                    ],
                    ['name' => 'Puja Lamp', 'price' => '399', 'images' => [
                        'https://imgs.search.brave.com/W5seGN9TNDa_eydbkAEw2Xohg12gwtR-RJp9m3qsyII/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pLmV0/c3lzdGF0aWMuY29t/LzI4ODkzMjU4L3Iv/aWwvZWUzMjQ1LzM3/ODExMjc5NjIvaWxf/NjAweDYwMC4zNzgx/MTI3OTYyXzdzYTYu/anBn'],
                    ],
                    ['name' => 'Camphor', 'price' => '199', 'images' => [
                        'https://imgs.search.brave.com/GbH1jtI52nilw0S05_qb-GEmorh7nhy6kf7C_hnFf4w/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tLm1l/ZGlhLWFtYXpvbi5j/b20vaW1hZ2VzL0kv/NDFIRndnLXkrTEwu/anBn'],
                    ],
                ];

                // Loop through the products and display them
                foreach ($products as $product) {
                    foreach ($product['images'] as $image) { 
                ?>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card product-card h-100">
                        <img src="<?php echo $image; ?>" class="card-img-top" alt="Product Image">
                        <div class="card-body d-flex flex-column">
                            <h5 class="product-title"><?php echo $product['name']; ?></h5>
                            <p class="text-muted mb-2">Short description of the product.</p>
                            <span class="product-price">₹<?php echo $product['price']; ?></span>
                            <div class="mt-auto">
                                <button class="btn btn-primary add-to-cart-btn w-100">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php include 'layout/footer.php'; ?>

<style>
    /* Adjusting the body padding-top for full-screen display and to avoid header overlap */
    body {
        padding-top: 70px; /* Adjust according to header height */
    }

    .category-list {
        list-style: none;
        padding: 0;
        font-size: 1.1rem;
    }

    .category-list li {
        margin-bottom: 10px;
    }

    .category-list li a {
        text-decoration: none;
        color: #333;
    }

    .category-list li a:hover {
        color: #007bff;
    }

    .product-card {
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .product-title {
        font-size: 1.2rem;
        font-weight: 600;
    }

    .product-price {
        color: #007bff;
        font-weight: 600;
    }

    .add-to-cart-btn {
        transition: background-color 0.3s;
    }

    .add-to-cart-btn:hover {
        background-color: #0056b3;
    }
</style>