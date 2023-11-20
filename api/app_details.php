<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funbit - App Details - Funbit</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        h1 {
            color: #4285f4;
        }

        h2 {
            color: #333;
        }

        p {
            margin-bottom: 20px;
        }

        .download-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4285f4;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }

        .back-btn {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #4285f4;
        }

        .back-btn:hover {
            text-decoration: underline;
        }
        img{
            max-width: 100px; /* Adjust the size as needed */
    margin-right: 20px;
    border-radius: 5px;
        }
        
        .dislike-button {
            margin-right: 10px;
            background-color: transparent;
            border: none;
            color: black;
            cursor: pointer;
            font-size: 1.3em;
            font-weight: 600;
        }

        .dislike-button i {
            margin-right: 5px;
            color: #FFC107;
        }

        .dislike-button:focus {
            outline: none;
        }
    </style>
</head>
<body>

    <div class="container">

        <?php
        // Dummy data for app details
        $appDetails = [
            1 => ['id' => 1, 'name' => 'Spotify: Music and Podcasts', 'description' => "<button class='dislike-button' type='button'><i class='fas fa-star'></i>5</button>", 'developer' => 'https://d.apkpure.com/b/APK/com.spotify.music?version=latest', 'version' => '8.8.88.397 By <a href="#" style="text-decoration:none;color:blue;font-weight:600;">Spotify AB</a>'],
        ];

        // Check if the 'id' parameter is set in the URL
        if (isset($_GET['id']) && isset($appDetails[$_GET['id']])) {
            $appId = $_GET['id'];
            $app = $appDetails[$appId];
            $iconPath = "../icons/{$app['id']}.webp";
            echo '<img src="' . $iconPath . '" alt="' . $app['name'] . ' Icon">';
            echo '<h2>' . $app['name'] . '</h2>';
            echo '<p><strong>Rate:</strong> ' . $app['description'] . '</p>';
            echo '<p><strong>Version:</strong> ' . $app['version'] . '</p>';

            // Download button

        } else {
            echo '<p>Invalid app ID or app not found.</p>';
        }
        ?>
        <a href="<?php echo $app['developer']; ?>" class="download-btn">Download Now</a>
        <a href="main.php" class="back-btn">Back to App List</a>

    </div>

</body>
</html>
