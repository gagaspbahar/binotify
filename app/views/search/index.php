<?php
    include_once 'app/core/Database.php';
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title> Binotify </title>
        <link rel="stylesheet" href="../../../public/css/search.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="../../../public/js/utility.js"></script>
        <script src="../../../public/js/search.js"></script>
    </head>

    <body>
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
                            <li><a href="/?login"> Login </a></li>
                            <li><a href="/?register"> Sign Up </a></li>
                        </ul>
                    </nav>
                </div>

                <div class="homepage-container">
                  <nav class="profile-navbar">
                    <div class="searchbar-container">
                        <input type="text" class="searchTerm "id="search-input" placeholder="What do you want to listen to?"> </input>
                        <button type="submit" class="search-button" onclick=searchSong()><i class="fa fa-search"></i></button>
                    </div>
                    <a href="album.html" class="user"> Hello, User </a>
                  </nav>

                    <div class="song-container">
                        <h1> Good Afternoon </h1>

                        <select name="sort" id="sort">
                          <option value="">none</option>
                          <option value="_judul">judul asc</option>
                          <option value="-judul">judul desc</option>
                          <option value="_tanggal_terbit">tanggal terbit asc</option>
                          <option value="-tanggal_terbit">tanggal terbit desc</option>
                        </select>
                        <select name="filter" id="filter">
                          <option value="">none</option>
                          <option value="R&B">R&B</option>
                          <option value="Rock">Rock</option>
                          <option value="Pop">Pop</option>
                        </select>

                        <input type="text" id="page"></input>

                        <button type="button" onclick=searchSong()>Search</button>
                        <br>
                        <button class="previous-button" type="button" onclick=prevPage()><i class="fa fa-angle-left"></i></button>
                        <button type="button" class="next-button" onclick=nextPage()><i class="fa fa-angle-right"></i></button>
                        
                        <li class='songlist-header'>
                          <div class='song-count'>
                              <span class='song-number'> # </span>
                          </div>

                          <div class='song-info'>
                              <span class='song-title'> Title </span>
                          </div>

                          <div class='song-releasedate'>
                              <span class='release-date'>Date</span>
                          </div>

                          <div class='song-genre'>
                              <span class='genre'>Genre</span>
                          </div>

                          <div class='trackOptions'>
                              <!-- <img class='optionButton' src='../../../public/img/more.png'> -->
                          </div>
                        </li>

          
                        <div id="song-list"></div>

                        <!-- <h2 class="top-10-newest">Top 10</h2> -->




                        <div class="songlist-container">

                            <ul class="songlist">
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>