<?php
session_start();
include "db.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>SADMAN E-COMMERCE</title>
    <link rel="stylesheet" href="Sadman.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="n.png" alt="Logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#mobile">Mobile</a></li>
                        <li class="nav-item"><a class="nav-link" href="#laptop">Laptop</a></li>
                        <li class="nav-item"><a class="nav-link" href="#cart">Cart</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>

                        <?php if (isset($_SESSION['user_id'])) : ?>
                            <li class="nav-item">
                                <a class="nav-link text-danger" href="logout.php">Logout</a>
                            </li>
                        <?php else : ?>
                            <li class="nav-item">
                                <a class="nav-link text-success" href="login.php">Login</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- CAROUSEL SLIDER -->
        <div id="carouselExample" class="carousel slide orange-bg" data-ride="carousel">
            <div class="carousel-inner">
                <!-- Carousel Item 1 -->
                <div class="carousel-item active">
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <h1>Apple MacBook Pro 16-inch (2024)</h1>
                            <p><strong>Experience the ultimate in performance and design with the new Apple MacBook Pro.</strong></p>
                            <h1 class="price">$2,499</h1>
                            <button class="button-buy-now" onclick="addToCart('MacBook Pro 16',2499)">Buy Now >></button>
                        </div>
                        <div class="col-md-7">
                            <img src="lp-1.png" class="d-block w-100" alt="TV">
                        </div>
                    </div>
                </div>

                <!-- Carousel Item 2 -->
                <div class="carousel-item">
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <h1>Amazon Echo (4th)</h1>
                            <p><em><b>The Amazon Echo is a smart speaker that combines Alexa's voice assistant capabilities.</b></em></p>
                            <h1 class="price align-items-center">$99.99</h1>
                            <button class="button-buy-now" onclick="addToCart('Amazon Echo 4th',99)">Buy Now >></button>
                        </div>
                        <div class="col-md-7">
                            <img src="slider-1.png" class="d-block w-100" alt="Headphone">
                        </div>
                    </div>
                </div>

                <!-- Carousel Item 3 -->
                <div class="carousel-item">
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <h1>Jbl Charge-5</h1>
                            <p><strong>The JBL Charge 5 delivers powerful sound with deep bass.</strong></p>
                            <h1 class="price">$179.95</h1>
                            <button class="button-buy-now" onclick="addToCart('JBL Charge 5',179)">Buy Now >></button>
                        </div>
                        <div class="col-md-7">
                            <img src="slider-3.png" class="d-block w-100" alt="Xbox">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>

        <h1 class="text-center mt-4">SADMAN E-COMMERCE</h1>

        <!-- LAPTOP SECTION (ID: laptop যোগ করা হয়েছে) -->
        <div class="container mt-4" id="laptop">
            <h3><strong>Laptop</strong></h3>

            <div class="card-group">
                <div class="card">
                    <img src="product-1.png" class="card-img-top">
                    <div class="card-body">
                        <h5>Asus Vivobook</h5>
                        <h5>$499</h5>
                        <button class="button-buy-now" onclick="addToCart('Asus Vivobook',499)">Buy Now →</button>
                    </div>
                </div>

                <div class="card">
                    <img src="product-2.png" class="card-img-top">
                    <div class="card-body">
                        <h5>MSI Gaming Laptop</h5>
                        <h5>$999</h5>
                        <button class="button-buy-now" onclick="addToCart('MSI Gaming Laptop',999)">Buy Now →</button>
                    </div>
                </div>

                <div class="card">
                    <img src="product-3.png" class="card-img-top">
                    <div class="card-body">
                        <h5>MI Laptop</h5>
                        <h5>$220</h5>
                        <button class="button-buy-now" onclick="addToCart('MI Laptop',220)">Buy Now →</button>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <!-- SMARTPHONE SECTION -->
        <div class="container smartphone" id="mobile">
            <h3>Smartphone</h3>

            <div class="card-group">
                <div class="card">
                    <img src="phone-1.png" class="card-img-top">
                    <div class="card-body">
                        <h5>Poco X2</h5>
                        <h5>$219</h5>
                        <button class="button-buy-now" onclick="addToCart('Poco X2',219)">Buy Now →</button>
                    </div>
                </div>

                <div class="card">
                    <img src="phone-2.png" class="card-img-top">
                    <div class="card-body">
                        <h5>Iphone 11 Pro Max</h5>
                        <h5>$1050</h5>
                        <button class="button-buy-now" onclick="addToCart('Iphone 11 Pro Max',1050)">Buy Now →</button>
                    </div>
                </div>

                <div class="card">
                    <img src="phone-3.png" class="card-img-top">
                    <div class="card-body">
                        <h5>Samsung Note 10+</h5>
                        <h5>$899</h5>
                        <button class="button-buy-now" onclick="addToCart('Samsung Note 10+',899)">Buy Now →</button>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <!-- SHOPPING CART SECTION (ID: cart যোগ করা হয়েছে) -->
        <div class="container mt-5" id="cart">
            <h2 class="text-center">Shopping Cart</h2>

            <table class="table table-bordered" id="cartTable">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php include "read.php"; ?>
                </tbody>
            </table>

            <h3>Total Bill: $<span id="totalBill">0</span></h3>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>
    <script src="script.js"></script>

    <!-- Total Bill Auto Calculate JS -->
    <script>
        function calculateTotal() {
            let grandTotal = 0;
            // কার্ট টেবিলের ৪ নম্বর কলাম (Total Column) সিলেক্ট করা
            let rows = document.querySelectorAll("#cartTable tbody tr");
            
            rows.forEach(row => {
                let totalCell = row.cells[3]; // ৪ নম্বর কলাম (0-indexed 3)
                if (totalCell) {
                    let amount = parseFloat(totalCell.innerText.replace('$', '')) || 0;
                    grandTotal += amount;
                }
            });

            document.getElementById("totalBill").innerText = grandTotal;
        }

        // পেজ লোড হলেই টোটাল বিল হিসেব করবে
        window.onload = calculateTotal;
    </script>
</body>

</html>
