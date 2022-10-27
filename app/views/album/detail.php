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
                         <a href="album.html" class="user"> Hello, <?php echo $_SESSION['username'] ?> </a>
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
                        <ul class="songlist">
                            <?php 
                                $album_id = $data['id'];
                                $db = new Database;
                                $query = "SELECT * FROM songs WHERE album_id = '$album_id'";
                                $db->query($query);
                                $songs = $db->resultSet();
                                foreach ($songs as $song) {
                                    $song_id = $song['song_id'];
                                echo "
                                    <li class='songlist-row'>
                                        <div class='song-count'>
                                            <img class='play' src='../../../public/img/play-white.png'>
                                            <span class='song-number'> 1.</span>
                                        </div>
                                        <div class='song-info'>
                                            <a href='/?song/$song_id'><span class='song-title'>$song[judul]</span></a>
                                            <span class='singer'>$song[penyanyi]</span>
                                        </div>

                                        <div class='song-releasedate'>
                                            <span class='release-date'>$song[tanggal_terbit]</span>
                                        </div>

                                        <div class='song-genre'>
                                            <span class='genre'>$song[genre]</span>
                                        </div>

                                        <div class='trackOptions'>
                                            <img class='optionButton' src='../../../public/img/more.png'>
                                        </div>
                                    </li>
                                    ";
                                }
                                ?>     
                        </ul>
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