<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Binotify </title>
    <link rel="stylesheet" href="../../../public/css/home.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- ini buat test logout dan cookie -->
    <?php if (isset($_COOKIE['user'])) {
        echo "Hello, " . json_decode($_COOKIE['user'])->username;
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
                        <li><i class="fas fa-search"></i><a href="search.html"> Search </a></li>
                        <li><i class="fas fa-list"></i><a href="album.html"> Album </a></li>
                        <hr class="rounded">
                        <li><a href="/?login"> Login </a></li>
                        <li><a href="/?register"> Sign Up </a></li>
                    </ul>
                </nav>
            </div>

            <div class="homepage-container">
                <nav class="profile-navbar">
                    <a href="album.html" class="user"> Hello, User </a>
                </nav>

                <div class="song-container">
                    <h1> Good Afternoon </h1>

                    <h2 class="top-10-newest">Top 10</h2>

                    <div class="songlist-container">
                        <ul class="songlist">
                            <li class='songlist-row'>
                                <div class='song-count'>
                                    <img class='play' src='../../../public/img/play-white.png'>
                                    <span class='song-number'>1.</span>
                                </div>

                                <div class="song-image">
                                    <img class='songimage' src='../../../public/img/new jeans.jpeg'>
                                </div>

                                <div class='song-info'>
                                    <span class='song-title'>Attention</span>
                                    <span class='singer'>New Jeans</span>
                                </div>

                                <div class='song-releasedate'>
                                    <span class='release-date'>July 22, 2022</span>
                                </div>

                                <div class='song-genre'>
                                    <span class='genre'>K-pop</span>
                                </div>

                                <div class='trackOptions'>
                                    <img class='optionButton' src='../../../public/img/more.png'>
                                </div>
                            </li>


                            <li class='songlist-row'>
                                <div class='song-count'>
                                    <img class='play' src='../../../public/img/play-white.png'>
                                    <span class='song-number'>2.</span>
                                </div>

                                <div class="song-image">
                                    <img class='songimage' src='../../../public/img/L.jpeg'>
                                </div>

                                <div class='song-info'>
                                    <span class='song-title'>L</span>
                                    <span class='singer'>Hal</span>
                                </div>

                                <div class='song-releasedate'>
                                    <span class='release-date'>July 22, 2022</span>
                                </div>

                                <div class='song-genre'>
                                    <span class='genre'>Indie</span>
                                </div>

                                <div class='trackOptions'>
                                    <img class='optionButton' src='../../../public/img/more.png' onclick='showOptionsMenu(this)'>
                                </div>
                            </li>


                            <li class='songlist-row'>
                                <div class='song-count'>
                                    <img class='play' src='../../../public/img/play-white.png'>
                                    <span class='song-number'>3.</span>
                                </div>

                                <div class="song-image">
                                    <img class='songimage' src='../../../public/img/sang dewi.jpeg'>
                                </div>

                                <div class='song-info'>
                                    <span class='song-title'>Sang Dewi</span>
                                    <span class='singer'>Lyodra</span>
                                </div>

                                <div class='song-releasedate'>
                                    <span class='release-date'>July 22, 2022</span>
                                </div>

                                <div class='song-genre'>
                                    <span class='genre'>Indo</span>
                                </div>

                                <div class='trackOptions'>
                                    <img class='optionButton' src='../../../public/img/more.png'>
                                </div>
                            </li>


                            <li class='songlist-row'>
                                <div class='song-count'>
                                    <img class='play' src='../../../public/img/play-white.png'>
                                    <span class='song-number'>4.</span>
                                </div>

                                <div class="song-image">
                                    <img class='songimage' src='../../../public/img/child.jpeg'>
                                </div>

                                <div class='song-info'>
                                    <span class='song-title'>Child</span>
                                    <span class='singer'>Mark</span>
                                </div>

                                <div class='song-releasedate'>
                                    <span class='release-date'>July 22, 2022</span>
                                </div>

                                <div class='song-genre'>
                                    <span class='genre'>K-pop</span>
                                </div>

                                <div class='trackOptions'>
                                    <!-- <input type='hidden' class='songId' value='" . $albumSong->getId() . "'> -->
                                    <img class='optionButton' src='../../../public/img/more.png'>
                                </div>
                            </li>


                            <li class='songlist-row'>
                                <div class='song-count'>
                                    <img class='play' src='../../../public/img/play-white.png'>
                                    <span class='song-number'>5.</span>
                                </div>

                                <div class="song-image">
                                    <img class='songimage' src='../../../public/img/2soon.jpeg'>
                                </div>

                                <div class='song-info'>
                                    <span class='song-title'>2soon</span>
                                    <span class='singer'>Keshi</span>
                                </div>

                                <div class='song-releasedate'>
                                    <span class='release-date'>July 22, 2022</span>
                                </div>

                                <div class='song-genre'>
                                    <span class='genre'>Indie</span>
                                </div>

                                <div class='trackOptions'>
                                    <input type='hidden' class='songId' value='" . $albumSong->getId() . "'>
                                    <img class='optionButton' src='../../../public/img/more.png'>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>

        </div>



        <!-- <div class="playlist-card">
                        <i class="fas fa-home"></i>
                        <h3 class="playlist-main-content">Home</h3>
    
                    </div>
                    <div class="playlist-card">
                       
                        <i class="fas fa-search"></i>
                        <h3 class="playlist-main-content">Search</h3>
    
                    </div>
                    <div class="playlist-card">
                        <i class="fas fa-list"></i>
                        <h3 class="playlist-main-content">Play List</h3>
                    </div> -->


        <!-- <div class="music-player"> 
            </div> -->
    </div>
</body>

</html>