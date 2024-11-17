<?php include 'layout/header.php'; ?>

<!-- Main container with shop and cart -->
<div class="container-fluid my-5 pt-5" style="margin-top: 100px;">
    <div class="row">
        <!-- Main content area -->
        <div class="col-xl-9 col-lg-8">
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
                        // Define an array of product names and their images
                        $products = [
                            ['id' => 1, 'name' => 'Shree Ganesha Idol', 'price' => '1299', 'images' => [
                                'https://imgs.search.brave.com/gOREnFEy_KCaEMAL3IvQ8Ghlow8cl1quOtX8l7nTuSE/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pLmV0/c3lzdGF0aWMuY29t/LzM4OTk0NDE4L3Iv/aWwvYzVhZDkyLzQ0/MzA5MTY0ODMvaWxf/NjAweDYwMC40NDMw/OTE2NDgzX2tsdjku/anBn'],
                            ],
                            ['id' => 2, 'name' => 'Maa Durga Photo Frame', 'price' => '699', 'images' => [
                                'https://imgs.search.brave.com/Oz-TbbwVX8BtLQxHlMkU94LQluzuBL5iI3nqFyMbK0I/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly90My5m/dGNkbi5uZXQvanBn/LzA2LzE2LzQ2LzQ2/LzM2MF9GXzYxNjQ2/NDY3OF9tSFhLcVRw/U24wUVRUNEpvVTNI/NHZrRXJneHRQNjBt/Ri5qcGc'],
                            ],
                            ['id' => 3, 'name' => 'Puja Lamp', 'price' => '399', 'images' => [
                                'https://imgs.search.brave.com/W5seGN9TNDa_eydbkAEw2Xohg12gwtR-RJp9m3qsyII/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pLmV0/c3lzdGF0aWMuY29t/LzI4ODkzMjU4L3Iv/aWwvZWUzMjQ1LzM3/ODExMjc5NjIvaWxf/NjAweDYwMC4zNzgx/MTI3OTYyXzdzYTYu/anBn'],
                            ],
                            ['id' => 4, 'name' => 'Camphor', 'price' => '199', 'images' => [
                                'https://imgs.search.brave.com/GbH1jtI52nilw0S05_qb-GEmorh7nhy6kf7C_hnFf4w/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tLm1l/ZGlhLWFtYXpvbi5j/b20vaW1hZ2VzL0kv/NDFIRndnLXkrTEwu/anBn'],
                            ],
                        ];

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
                                        <button class="btn btn-primary add-to-cart-btn w-100" 
                                                data-product-id="<?php echo $product['id']; ?>"
                                                data-product-name="<?php echo $product['name']; ?>"
                                                data-product-price="<?php echo $product['price']; ?>"
                                                data-product-image="<?php echo $image; ?>">
                                            Add to Cart
                                        </button>
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

        <!-- Cart Sidebar -->
        <div class="col-xl-3 col-lg-4">
            <div class="cart-sidebar">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Shopping Cart</h5>
                    </div>
                    <div class="card-body">
                        <div id="cart-items" class="mb-3">
                            <!-- Cart items will be dynamically added here -->
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between mb-3">
                            <strong>Total:</strong>
                            <strong id="cart-total">₹0</strong>
                        </div>
                        <button class="btn btn-success w-100" id="checkout-btn" disabled>
                            Proceed to Checkout
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'layout/footer.php'; ?>

<style>
    /* Existing styles */
    body {
        padding-top: 70px;
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

    /* New styles for cart */
    .cart-sidebar {
        position: sticky;
        top: 100px;
    }

    .cart-item {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
        padding-bottom: 15px;
        border-bottom: 1px solid #eee;
    }

    .cart-item img {
        width: 50px;
        height: 50px;
        object-fit: cover;
        margin-right: 10px;
    }

    .cart-item-details {
        flex-grow: 1;
    }

    .cart-item-title {
        font-size: 0.9rem;
        margin-bottom: 5px;
    }

    .cart-item-price {
        font-size: 0.9rem;
        color: #007bff;
    }

    .cart-item-remove {
        color: #dc3545;
        cursor: pointer;
    }

    .quantity-control {
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .quantity-control button {
        padding: 2px 8px;
    }

    .quantity-control input {
        width: 40px;
        text-align: center;
    }
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    let cart = [];
    
    // Update the cart display
    function updateCart() {
        const cartItems = $('#cart-items');
        cartItems.empty();
        
        let total = 0;
        
        cart.forEach(item => {
            total += item.price * item.quantity;
            
            cartItems.append(`
                <div class="cart-item" data-product-id="${item.id}">
                    <img src="${item.image}" alt="${item.name}">
                    <div class="cart-item-details">
                        <div class="cart-item-title">${item.name}</div>
                        <div class="cart-item-price">₹${item.price}</div>
                        <div class="quantity-control">
                            <button class="btn btn-sm btn-outline-secondary decrease-qty">-</button>
                            <input type="number" class="form-control form-control-sm" value="${item.quantity}" min="1" readonly>
                            <button class="btn btn-sm btn-outline-secondary increase-qty">+</button>
                        </div>
                    </div>
                    <div class="cart-item-remove">
                        <i class="fas fa-trash"></i>
                    </div>
                </div>
            `);
        });

        // Update total price
        $('#cart-total').text(`₹${total.toFixed(2)}`);
        $('#checkout-btn').prop('disabled', cart.length === 0);
        
        // If cart is empty, show a message
        if (cart.length === 0) {
            cartItems.append(`
                <div class="text-center text-muted py-4">
                    Your cart is empty
                </div>
            `);
        }
    }

    // Add product to cart when button is clicked
    $('.add-to-cart-btn').on('click', function() {
        const button = $(this);
        const productId = button.data('product-id');
        const productName = button.data('product-name');
        const productPrice = parseFloat(button.data('product-price'));
        const productImage = button.data('product-image');

        const existingItem = cart.find(item => item.id === productId);
        
        if (existingItem) {
            existingItem.quantity += 1;
        } else {
            cart.push({
                id: productId,
                name: productName,
                price: productPrice,
                image: productImage,
                quantity: 1
            });
        }
        
        updateCart();
        
        // Show a quick animation feedback
        button.removeClass('btn-primary').addClass('btn-success');
        setTimeout(() => {
            button.removeClass('btn-success').addClass('btn-primary');
        }, 500);
    });

    // Increase quantity
    $(document).on('click', '.increase-qty', function() {
        const cartItem = $(this).closest('.cart-item');
        const productId = cartItem.data('product-id');
        const item = cart.find(item => item.id === productId);
        if (item) {
            item.quantity += 1;
            updateCart();
        }
    });

    // Decrease quantity
    $(document).on('click', '.decrease-qty', function() {
        const cartItem = $(this).closest('.cart-item');
        const productId = cartItem.data('product-id');
        const item = cart.find(item => item.id === productId);
        
        if (item) {
            if (item.quantity > 1) {
                item.quantity -= 1;
            } else {
                // Remove item from cart when quantity would go below 1
                cart = cart.filter(cartItem => cartItem.id !== productId);
                
                // Add a fade out animation before removing
                cartItem.fadeOut(300, function() {
                    updateCart();
                });
                return;
            }
            updateCart();
        }
    });

    // Remove item from cart
    $(document).on('click', '.cart-item-remove', function() {
        const cartItem = $(this).closest('.cart-item');
        const productId = cartItem.data('product-id');
        
        // Add a fade-out animation before removing
        cartItem.fadeOut(300, function() {
            cart = cart.filter(item => item.id !== productId);
            updateCart();
        });
    });

    // Checkout button
    $('#checkout-btn').on('click', function() {
        if (cart.length > 0) {
            // Add checkout functionality here
            alert('Proceeding to checkout...');
        }
    });
});
</script>