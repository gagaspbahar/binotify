const searchSong = () => {
  console.log("terpanggil");
  const title = document.getElementById("search-input").value;
  const xhr = new XMLHttpRequest();
  let base_url = "../../api/music/search.php?";
  if (title.length > 0) {
    base_url += "judul=" + title;
  }
  xhr.open("GET", base_url, true);
  xhr.onload = function () {
    if (this.status == 200) {
      console.log(this.responseText);
      let response = JSON.parse(this.responseText);
      let songList = document.getElementById("song-list");
      songList.innerHTML = "";
      response.forEach((song) => {
        songList.innerHTML += `
            <div class="song-item">
              <div class="song-item__title">
                <p>${song.judul}</p>
              </div>
            </div>
          `;
      });
    }
  };
  xhr.send();
};
