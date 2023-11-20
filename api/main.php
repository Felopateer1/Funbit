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
            width: 97.5%;
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
    display: flex;
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
            font-size: 1.3em;
            font-weight: 600;
        }

        button i {
            margin-right: 5px;
            color: #FFC107;
        }

        button:focus {
            outline: none;
        }
        .container {
    transition: background-color 0.5s;
    border-radius: 20px;
}
        body {
    transition: background-color 0.5s;

}
.darkmod{
    background-color: #1a1a1a; /* Dark background color */
}
.dark-mode {
    background-color: black; /* Dark background color */
    color: #ffffff; /* Light text color */
}

.dark-mode .app button{
    color: white;
}
.dark-mode button{
    color: white;
}
.dark-mode svg{
    stroke: white;
}

        header{
            padding: 10px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
.logo{
    color: #4285f4;
    text-decoration: none;
    font-size: 1.8em;
    font-weight: 700;
}
@media screen and (max-width: 1023px) {
    header{
        padding: 10px 10px;
    }
}
    </style>
</head>
<body>

<div class="container" id="mainContainer">
    <header>
        <a href="main.php" class="logo">Funbit</a>
        <nav>
        <button id="dark-mode-toggle"><svg width="40" height="40" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <path d="M14 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"></path>
  <path d="M4 6h8"></path>
  <path d="M16 6h4"></path>
  <path d="M8 14a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"></path>
  <path d="M4 12h2"></path>
  <path d="M10 12h10"></path>
  <path d="M17 20a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"></path>
  <path d="M4 18h11"></path>
  <path d="M19 18h1"></path>
</svg></button>

        </nav>
    </header>

    <!-- Search bar -->
    <form id="searchForm">
        <input type="text" id="searchQuery" placeholder="Search for apps and games">
    </form>
<br>
    <?php
    // Dummy data for app listing with icons
    $apps = [
        ['id' => 1, 'name' => 'Spotify: Music and Podcasts', 'description' => "<button class='dislike-button' type='button'><i class='fas fa-star'></i>5</button>"],
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

    document.addEventListener('DOMContentLoaded', function () {
    const darkModeToggle = document.getElementById('dark-mode-toggle');
    const mainContainer = document.getElementById('mainContainer');

    darkModeToggle.addEventListener('click', function () {
        document.body.classList.toggle('darkmod');
        mainContainer.classList.toggle('dark-mode');
    });
});

</script>

</body>
</html>