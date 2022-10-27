<?php
    include_once 'app/core/Database.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title> Binotify </title>
        <link rel="stylesheet" href="../../../public/css/detailalbum.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
            integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script src="../../../public/js/navbar.js"></script>
    </head>

    <body>
        <div class="main-container">
            <div class="homepage">
                <div class="side-navbar-container">
                   <img src="../../../public/img/logo.png" alt="" class="logo">
                   <nav class="navbar" id="navbar">
                        <script>
                            addnavbar(<?php echo (isset($_SESSION['is_admin']) ? $_SESSION['is_admin'] : -1);?>)
                        </script>
                    </nav>
                </div>

                <div class="detailalbum-container">
                    <nav class="profile-navbar">
                         <a href="album.html" class="user"> Hello, <?php echo (isset($_SESSION['is_admin']) ? $_SESSION['username'] : "Guest");?> </a>
                    </nav>
                    <a href="/?album" class="previous-button">&#8249;</a>
                    <div class="albuminfo-container">
                        <div class="album-photo">
                            <img class="album-img" src="../../../public/img/binomify-logo.png">
                        </div>
                        <div class="album-info">
                            <ul>
                                <li class='album'>ALBUM</li>
                                <li class='album-title'>Loading...</li>
                                <li class='album-artist'>Loading...</li>
                                <ul>
                                    <li class='album-year'>2022</li>
                                    <li class='album-genre'>Pop</li>
                                    <li class='album-duration'>28 minutes</li>
                                </ul>
                            </ul>
                        </div>
                    </div>
                    <div class="song-container">
                        <form action="/action_page.php">
                            <input type="checkbox" id="song1" name="song1" value="Bike">
                            <label for="vehicle1"> Judul 1</label><br>
                            <input type="checkbox" id="song2" name="song2" value="Bike">
                            <label for="vehicle1"> Judul 2</label><br>
                            <input type="checkbox" id="song3" name="song3" value="Bike">
                            <label for="vehicle1"> Judul 3</label><br>
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="../../../public/js/albumdetail.js"></script>
        <script>
            getAlbumDetail(<?php echo $data['id'] ?>);
        </script>
    </body>
</html>