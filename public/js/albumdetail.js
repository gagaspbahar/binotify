const getAlbumDetail = (id) => {
  const xhr = new XMLHttpRequest();
  xhr.open("GET", `../../api/album/detail.php?id=${id}`, true);
  xhr.onload = function () {
    if (this.status == 200) {
      let response = JSON.parse(this.responseText);
      let album = response;
      document.querySelector(".album-title").innerHTML = album.judul;
      document.querySelector(".album-artist").innerHTML = album.penyanyi;
      document.querySelector(".album-genre").innerHTML = album.genre;
      document.querySelector(".album-duration").innerHTML =
        album.total_duration;
      document.querySelector(".album-img").src = album.image_path;
      document.querySelector(".album-year").innerHTML = getReleaseYear(
        album.tanggal_terbit
      );
    } else {
      window.location = "../?404";
    }
  };
  xhr.send();
};

const deleteAlbum = (id) => {
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "../../api/album/delete.php", true);
  xhr.onload = () => {
    if (xhr.status === 200) {
      window.location.href = "/?album";
      alert("Delete album success :D");
    } else {
      alert("Delete album failed :(");
    }
  }
  const data = new FormData();
  data.append("id", id);
  xhr.send(data);
}