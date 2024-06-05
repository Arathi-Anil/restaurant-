<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seashore Restaurant</title>
    <link rel="stylesheet" href="rstyles.css">
</head>
<body>
    <header>
        <img src="https://www.daydreamleisure.com.au/wp-content/uploads/2021/06/Restaurant-Ambiance-2048x1141.jpg" alt="Seashore Restaurant" width="100%" height="200">
        <h1>Seashore Restaurant</h1>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="home">
            <h2>Welcome to Seashore Restaurant</h2>
            <p>Located along the beautiful coastline, Seashore Restaurant offers a unique dining experience that combines the freshest seafood with stunning ocean views. Whether you're looking for a romantic dinner, a family outing, or a place to celebrate special occasions, Seashore Restaurant is the perfect destination. Our chefs are dedicated to creating exquisite dishes using locally sourced ingredients, ensuring every meal is a memorable one. Come and enjoy the serene ambiance and the taste of the sea at Seashore Restaurant.</p>
        </section>

        <section id="menu">
            <h2>Menu</h2>
            <div class="menu-item">
                <h3>Pasta Primavera</h3>
                <p>A delicious mix of pasta and fresh vegetables.</p>
            </div>
            <div class="menu-item">
                <h3>Grilled Salmon</h3>
                <p>Perfectly grilled salmon with a lemon butter sauce.</p>
            </div>
            <div class="menu-item">
                <h3>Steak Frites</h3>
                <p>Juicy steak served with crispy french fries.</p>
            </div>
            <div class="menu-item">
                <h3>Caesar Salad</h3>
                <p>Fresh romaine lettuce with Caesar dressing and croutons.</p>
            </div>
        </section>

        <section id="gallery">
            <h2>Gallery</h2>
            <p>Check out our restaurant's ambiance and food.</p>
            <img src="https://tse1.mm.bing.net/th?id=OIP.ItzA5FpNim7oglirWsTNMAHaEK&pid=Api&P=0&h=180" alt="Gallery Image 1" width="300" height="200">
            <img src="https://images.squarespace-cdn.com/content/v1/5fac753a19904608da14a085/1606268963813-NSC3YINQPJPJ24PCK286/Tacos+%26+Beer+Interior+Vibe" alt="Gallery Image 2" width="300" height="200">
            <img src="https://i.pinimg.com/originals/d8/c6/34/d8c634b79422492e08b069dfa5dc15f0.jpg" alt="Gallery Image 3" width="300" height="200">
        </section>

        <section id="contact">
            <h2>Contact Us</h2>
            <p>For reservations and inquiries, contact us at:</p>
            <p>Phone: 123-456-7890</p>
            <p>Email: info@seashorerestaurant.com</p>
            <p>Address: 123 Ocean Drive, Beach City, Coastal State</p>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Seashore Restaurant. All Rights Reserved</p>
    </footer>
</body>
</html>
