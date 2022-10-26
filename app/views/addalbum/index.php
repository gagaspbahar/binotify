<?php
    include_once 'app/core/Database.php';
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title> Binotify </title>
        <link rel="stylesheet" href="../../../public/css/addsong.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>
        <!-- ini buat test logout dan cookie -->
        <?php 
        if (isset($_SESSION['username'])) {
            echo "Hello, " . $_SESSION['username'];
        }
        ?>
        <a href="/api/auth/logout.php" > Logout </a>
        <div class="main-contaner">
            <div class="homepage">
                <div class="side-navbar-container">
                    <img src="../../../public/img/logo.png" alt="" class="logo">
                    <nav class="navbar">
                        <ul>
                            <li><i class="fas fa-home"></i><a href="/?home"> Home </a></li>
                            <li><i class="fas fa-search"></i><a href="/?search"> Search </a></li>
                            <li><i class="fas fa-list"></i><a href="/?album"> Album </a></li>
                            <hr class="rounded">
                            <li><i class="fas fa-plus"></i><a href="/?addsong"> Add Song </a></li>
                            <li><i class="fas fa-plus"></i><a href="/?addalbum"> Add Album </a></li>
                            <li><a class="logout" href="#"> Logout </a></li>
                        </ul>
                    </nav>
                </div>

                <div class="homepage-container">
                    <nav class="profile-navbar">
                        <a href="album.html" class="user"> Hello, User </a>
                    </nav>

                    <div class="song-container">

                        <h2 class="header">New Album</h2>

                        <div class="songlist-container">
                            <div class="content">
                                <form action="#">
                                    <div class="song-details">
                                        <div class="input-box">
                                            <span class="details">Title</span>
                                            <input type="text" placeholder="Enter song title" required>
                                        </div>
                                        <div class="input-box">
                                            <span class="details">Artist</span>
                                            <input type="text" placeholder="Enter artist name" required>
                                        </div>
                                        <div class="input-box">
                                            <span class="details">Release Date</span>
                                            <input type="text" placeholder="Enter song release date" required>
                                        </div>
                                        <div class="input-box">
                                            <span class="details">Genre</span>
                                            <input type="text" placeholder="Enter song genre" required>
                                        </div>
                                        <div class="input-box">
                                            <span class="details">Image</span>
                                            <input type="file" placeholder="Enter song cover" required>
                                        </div>
                                    </div>
                                    <div class="song-selection">
                                        Select Song </br>
                                    <input type="checkbox" id="song1" name="song1" value="Bike">
                                    <label for="vehicle1"> I have a bike</label><br>
                                    <input type="checkbox" id="song2" name="song2" value="Car">
                                    <label for="vehicle2"> I have a car</label><br>
                                    <input type="checkbox" id="song3" name="song3" value="Boat">
                                    <label for="vehicle3"> I have a boat</label><br><br>
                                    </div>
                                    <div class="button">
                                        <input type="submit" value="Add">
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>