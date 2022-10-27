const navbar = (status = -1) => {
  if(status == 1){
    return `<li><i class="fas fa-home"></i><a href='/?home'> Home </a></li>
    <li><i class="fas fa-search"></i><a href='/?search'> Search </a></li>
    <li><i class="fas fa-list"></i><a href='/?album'> Album </a></li>
    <li><a href='/?album/add'> Add Album </a></li>
    <li><a href='/?song/add'> Add Lagu </a></li>
    <li><a href='/?admin'> User List </a></li>  
    <li><a href='/api/auth/logout.php'> Log Out </a></li>  `
  } else if (status == 0){
    return `<li><i class="fas fa-home"></i><a href='/?home'> Home </a></li>
    <li><i class="fas fa-search"></i><a href='/?search'> Search </a></li>
    <li><i class="fas fa-list"></i><a href='/?album'> Album </a></li>
    <li><a href='/api/auth/logout.php'> Log Out </a></li>`
  } else {
    return `<li><i class="fas fa-home"></i><a href='/?home'> Home </a></li>
    <li><i class="fas fa-search"></i><a href='/?search'> Search </a></li>
    <li><i class="fas fa-list"></i><a href='/?album'> Album </a></li>
    <li><a href='/?login'> Log In </a></li>        
    <li><a href='/?register'> Register </a></li>`
  }
}

const addnavbar = (status = -1) => {
  document.getElementById("navbar").innerHTML = navbar(status);
}