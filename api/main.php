<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funbit | Find Your Games And Apps</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/index.css">
    <style>
        /* Additional styling for the layout */
        .app {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .app img {
            max-width: 100px; /* Adjust the size as needed */
            margin-right: 20px;
            border-radius: 5px;
        }
           /* Style for the search bar */
           #searchQuery {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 300px;
            margin-right: 10px;
        }

        #searchQuery:focus {
            outline: none;
            border-color: #66afe9;
            box-shadow: 0 0 5px #66afe9;
        }

        #searchSubmit {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            background-color:#4285f4;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }
        body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

h1, h2, p {
    color: #333;
}

.container {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.app {
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 15px;
    margin-bottom: 20px;
}

.app h2 {
    color: #4285f4;
}

.app p {
    color: #555;
    display: flex
}

.app a {
    color: #4285f4;
    text-decoration: none;
    font-weight: bold;
    font-size: 1.2em;
}

.app a:hover {
    text-decoration: underline;
}


  /* Additional styling for the layout */
  .app {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}

.app img {
    max-width: 100px; /* Adjust the size as needed */
    margin-right: 20px;
    border-radius: 5px;
}



        button {
            margin-right: 10px;
            background-color: transparent;
            border: none;
            color: black;
            cursor: pointer;
        }

        button i {
            margin-right: 5px;
            color: yellow;
        }

        button:focus {
            outline: none;
        }

    </style>
</head>
<body>

<div class="container">
    <h1>Welcome to Funbit Store | Find Your Apps & Games</h1>

    <!-- Search bar -->
    <form id="searchForm">
        <input type="text" id="searchQuery" placeholder="Search for apps and games">
    </form>
<br>
    <?php
    // Dummy data for app listing with icons
    $apps = [
        ['id' => 1, 'name' => 'Spotify: Music and Podcasts', 'description' => "<button class='dislike-button' type='button'><i class='fas fa-star'></i>843</button>"],
    ];

    foreach ($apps as $app) {
        echo '<div class="app">';
        // Display app icon
        $iconPath = "../icons/{$app['id']}.webp";
        echo '<img src="' . $iconPath . '" alt="' . $app['name'] . '">';
        echo '<div>';
        echo '<a href="app_details.php?id=' . $app['id'] . '">' . $app['name'] . '</a>';
        echo '<p>' . $app['description'] . '</p>';
        echo '</div>';
        echo '</div>';
    }
    ?>

</div>

<script>
    document.getElementById("searchForm").addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent form submission

        var query = document.getElementById("searchQuery").value.toLowerCase();
        var apps = document.getElementsByClassName("app");

        for (var i = 0; i < apps.length; i++) {
            var appName = apps[i].getElementsByTagName("a")[0].innerText.toLowerCase();
            var appDescription = apps[i].getElementsByTagName("p")[0].innerText.toLowerCase();

            if (appName.includes(query) || appDescription.includes(query)) {
                apps[i].style.display = "flex"; // Show the app
            } else {
                apps[i].style.display = "none"; // Hide the app
            }
        }
    });
</script>

</body>
</html>