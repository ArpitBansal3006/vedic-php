<?php
include "layout/header.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vedic Collections</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #000;
            color: white;
        }

        .container {
            width: 100%;
            margin: 0 auto;
            padding: 20px;
        }

        /* Intro Section with Background Image */
        .intro {
            width: 100%;
            height: 100vh;
            background-image: url('https://imgs.search.brave.com/SMbw7VFjxjvCOv7UMXKH9LdxsRWv0zFW03jZ4uTLhBg/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pbWcu/ZnJlZXBpay5jb20v/cHJlbWl1bS1waG90/by9zaWx2ZXItcHVq/YS10aGFsaS1kaXdh/bGktYmFja2dyb3Vu/ZF8xMjc5NTIxLTEx/ODk0LmpwZz9zaXpl/PTYyNiZleHQ9anBn'); /* Replace with your image URL */
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            color: white;
            padding: 20px;
        }

        .intro h1 {
            color: darkred;
            font: bold;
        }

        .section-title {
            color: darkred;
            margin: 40px 0;
            font-size: 2em;
        }

        /* Categories Section */
        .categories {
            display: flex;
            justify-content: space-evenly;
            gap: 20px;
            padding: 20px;
            flex-wrap: wrap;
        }

        .category {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            text-align: center;
            flex: 0 1 30%;
            max-width: 250px;
            margin-bottom: 20px;
        }

        .category img {
            max-width: 100%;
            border-radius: 8px;
            height: 200px;
            object-fit: cover;
        }

        /* Featured Products Section */
        .featured-products {
            display: flex;
            justify-content: space-evenly;
            gap: 20px;
            padding: 20px;
            flex-wrap: wrap;
        }

        .product {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            text-align: center;
            flex: 0 1 30%;
            max-width: 250px;
            margin-bottom: 20px;
        }

        .product img {
            max-width: 100%;
            border-radius: 8px;
            height: 200px;
            object-fit: cover;
        }

        /* About Us Section */
        .about-us {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 40px;
            background-color: #333;
            color: #ddd;
            border-radius: 8px;
            margin-top: 40px;
        }

        /* Customer Reviews Section */
        .customer-reviews {
            display: flex;
            justify-content: space-evenly;
            gap: 20px;
            padding: 20px;
            flex-wrap: wrap;
        }

        .review {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            text-align: center;
            flex: 0 1 30%;
            max-width: 250px;
            margin-bottom: 20px;
        }

        /* Contact Section */
        .contact {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 40px;
            background-color: #333;
            color: #ddd;
            border-radius: 8px;
            margin-top: 40px;
        }

        @media (max-width: 768px) {
            .categories,
            .featured-products,
            .customer-reviews {
                flex-direction: column;
                align-items: center;
            }

            .category,
            .product,
            .review {
                flex: 1 0 80%; /* Stacks items vertically on smaller screens */
                max-width: 80%;
                margin-bottom: 20px;
            }
        }

    </style>
</head>

<body>

    <div class="container">
        <!-- Intro Section with Background Image -->
        <div class="intro">
            <h1>Welcome to Vedic Collections</h1>
            <p>Discover a wide range of puja items to enhance your spiritual journey</p>
        </div>

        <!-- About Us Section -->
        <div class="about-us">
            <h2>About Us</h2>
            <p>At Vedic Collections, we aim to bring you closer to your spiritual roots by providing a wide range of puja items. Our products are crafted with care to enhance your religious experiences and help you find peace and tranquility.</p>
        </div>


        <!-- Contact Us Section -->
        <div class="contact">
            <h2>Contact Us</h2>
            <p>Have questions? Reach out to us at support@vediccollections.com or call us at +91-7417024773</p>
        </div>

    </div>
</body>

</html>

<?php
include "layout/footer.php";
?>