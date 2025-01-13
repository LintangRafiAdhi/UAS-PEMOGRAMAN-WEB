<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Keindahan Alam Indonesia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
            background-size: cover;
            background-position: center;
            transition: background-image 1s ease-in-out;
        }

        header {
            background-color: rgba(16, 255, 116, 0.8);
            color: #fff;
            padding: 50px 0;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-size: 3rem;
            font-weight: 700;
        }

        nav {
            background-color: #000;
            color: #fff;
            padding: 15px 0;
            text-align: center;
            font-size: 1.1rem;
        }

        nav a {
            color: #fff;
            margin: 0 15px;
            text-decoration: none;
        }

        nav a:hover {
            text-decoration: underline;
        }

        main {
            max-width: 900px;
            margin: 50px auto;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .mission-title {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .mission-description {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #333;
        }

        .footer {
            background-color: #000;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

    </style>
</head>
<body>

    <!-- Header Section -->
    <header>
        <h1>Keindahan Alam Indonesia</h1>
    </header>

    <!-- Navigation Bar -->
    <nav>
        <a href="home.php">Home</a> | 
        <a href="about.php">About</a> | 
        <a href="datatables.php">Destinasi</a> | 
        <a href="contact.php">Contact</a>
    </nav>

    <!-- Main Content Section -->
    <main>
        <div class="mission">
            <h2 class="mission-title">Misi Kami</h2>
            <p class="mission-description">
                Kami hadir untuk memperkenalkan keindahan alam Indonesia yang luar biasa. Melalui platform ini, kami ingin menginspirasi wisatawan lokal maupun mancanegara untuk mengeksplorasi berbagai destinasi wisata alam yang tak terlupakan. 
                Dengan menampilkan keindahan alam yang kaya, kami berharap dapat memberikan gambaran yang lebih mendalam tentang keberagaman alam Indonesia, mulai dari pantai eksotis, gunung megah, hutan tropis yang mempesona, hingga danau yang menawan.
            </p>
            <p class="mission-description">
                Selain itu, kami juga bertujuan untuk meningkatkan kesadaran tentang pentingnya menjaga kelestarian alam Indonesia, melalui wisata yang bertanggung jawab dan ramah lingkungan. Kami percaya bahwa dengan memberikan informasi yang tepat, lebih banyak orang akan menghargai dan berusaha menjaga warisan alam yang ada.
            </p>
        </div>
    </main>

    <!-- Footer Section -->
    <footer class="footer">
        <p>&copy; 2025 Keindahan Alam Indonesia. All Rights Reserved.</p>
    </footer>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Array of background images
        const images = [
            'https://content.r9cdn.net/rimg/dimg/21/db/cc5387f2-city-9522-16645034865.jpg?width=1750&height=1000&xhint=2650&yhint=2278&crop=true',
            'https://t-2.tstatic.net/tribunnewswiki/foto/bank/images/danau-toba-2.jpg',
            'https://thumbs.dreamstime.com/b/keindahan-gunung-bromo-yang-terletak-di-wilayah-kabupaten-promolinggo-dan-pasuruan-foto-diambil-dari-pananjakan-agustus-dd-141371433.jpg',
            'https://th.bing.com/th/id/R.8551a611911209bc312ffee25450d3c5?rik=SmXa38Rfb19WCA&riu=http%3a%2f%2fs1.picswalls.com%2fwallpapers%2f2014%2f08%2f08%2findonesia-high-definition_020529563_164.jpg&ehk=D%2b8%2ffZOABxvhpHoTbStGuX8vbUxO8pKfZrKVlbF5g84%3d&risl=&pid=ImgRaw&r=0'
        ];

        let currentIndex = 0;

        function changeBackgroundImage() {
            // Set the background image to the next one in the array
            document.body.style.backgroundImage = `url(${images[currentIndex]})`;

            // Increment the index, and reset it if it reaches the end of the array
            currentIndex = (currentIndex + 1) % images.length;
        }

        // Change the background image every 5 seconds
        setInterval(changeBackgroundImage, 5000);
        
        // Initial background change on page load
        changeBackgroundImage();
    </script>
</body>
</html>
