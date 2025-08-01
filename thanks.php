<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }
        body {
            background: linear-gradient(to right, #e3ffe7, #d9e7ff);
            color: #333;
            font-family: 'Roboto', sans-serif;
        }
        .header {
            background-color: #1f2937;
            color: #fff;
            padding: 40px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header .logo {
            font-size: 1.75em;
            font-weight: bold;
            color: #fff;
            margin-left: 130px; /* Adjusted margin-left */
            font-family: 'Dancing Script', cursive;
        }
        .header .logo span {
            color: #f97316;
            font-family: 'Dancing Script', cursive;
        }
        .navbar ul {
            list-style: none;
            display: flex;
            font-size: 20px;
            margin-right: 100px;
        }
        .navbar ul li {
            margin: 0 10px;
        }
        .navbar ul li a {
            color: #fff;
            padding: 5px 15px;
            border-radius: 3px;
            transition: background 0.3s ease;
            text-decoration: none; /* Remove underline */
        }
        .navbar ul li a:hover {
            background: #3b4b5a;
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 90%;
            margin: 50px auto;
        }
        .hero-content {
            text-align: center;
            max-width: 600px;
            margin: 20px;
        }
        .hero-content h2 {
            font-size: 38px;
            margin-bottom: 20px;
            color: #6a0572;
        }
        .hero-content p {
            font-size: 24px;
            line-height: 1.5;
            margin-bottom: 20px;
            color: #333;
        }
        .hero-content .p1 {
            font-weight: bold;
            color: #e63946;
        }
        .hero-content button {
            display: inline-block;
            background-color: #6a0572;
            color: #fff;
            padding: 12px 24px;
            border-radius: 5px;
            font-size: 20px;
            border: none;
            cursor: pointer;
            transition: transform 0.3s ease, background-color 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .hero-content button:hover {
            background-color: #a14eca;
            transform: scale(1.1);
        }
        .hero-content button a {
            color: #fff;
            text-decoration: none;
        }
        .hero-image img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        @media (min-width: 768px) {
            .container {
                flex-direction: row;
                justify-content: center;
            }
            .hero-content {
                margin: 0 25px;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <h2 class="logo">SILVER <span>SPOON</span></h2>
        <nav class="navbar">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="menu.html">Food Menu</a></li>
                <li><a href="family.html">Rooms</a></li>
                
            </ul>
        </nav>
    </header>
    <div class="container">
        <div class="hero-content">
            <h2>We look forward to welcoming you and wish you a pleasant stay.</h2>
            <p>You've brought a big smile to our small business.</p>
            <p class="p1">COME AGAIN SOON</p>
            <button class="cta-button"><a href="logout.php">Logout</a></button>
        </div>
        <div class="hero-image">
            <img src="images/thanks.jpg" alt="Thank You Image">
        </div>
    </div>
</body>
</html>

