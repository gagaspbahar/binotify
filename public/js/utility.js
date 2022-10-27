const getDuration = (length) => {
  let minutes = Math.floor(length / 60);
  let seconds = Math.floor(length - minutes * 60);
  return `${minutes}:${seconds}`;
};

const getReleaseDate = (date) => {
  let year = date.slice(0, 4);
  let month = date.slice(5, 7);
  let day = date.slice(8, 10);
  return `${day}-${month}-${year}`;
};

const getReleaseYear = (date) => {
  let year = date.slice(0, 4);
  return `${year}`;
};

function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function setCookie(cname, cvalue, ex) {
  let expires = "expires="+ toString(ex);
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

const incrementGuestSongCount = () => {
  let guestSongCount = getCookie("GUEST");
  let expireCookie = getCookie("GUEST_EXPIRE")
  guestSongCount++
  setCookie("GUEST", guestSongCount, expireCookie);
}

const checkGuestSongCount = () => {
  let guestSongCount = getCookie("GUEST");
  if (guestSongCount >= 3){
    alert("You have reached your maximum song play limit. Please register to continue listening to songs.");
    return false
  }
  return true
}

const decrementGuestSongCount = () => {
  let guestSongCount = getCookie("GUEST");
  let expireCookie = getCookie("GUEST_EXPIRE")
  guestSongCount--
  setCookie("GUEST", guestSongCount, expireCookie);
}