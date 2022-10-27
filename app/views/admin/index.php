<?php
    include_once 'app/core/Database.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title> Binotify </title>
        <link rel="stylesheet" href="../../../public/css/admin.css" />
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

                        <h2 class="users-table">Binotify Users</h2>
                        <div class="table-container">
                            <div class="user-list">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <?php 
                                        $db = new Database;
                                        $query = "SELECT * FROM users";
                                        $db->query($query);
                                        $users = $db->resultSet();
                                        $count = 1;
                                        foreach ($users as $user) {
                                            echo "  <tbody>
                                                        <tr>
                                                            <td> $count. </td>
                                                            <td> $user[username] </td>
                                                            <td>$user[email] </td>
                                                        </tr>
                                                    </tbody>
                                                ";
                                            $count++;
                                        }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>