function getQueryVariable(variable) {
  var query = window.location.search.substring(1);
  var vars = query.split('&');
  for (var i = 0; i < vars.length; i++) {
      var pair = vars[i].split('=');
      if (decodeURIComponent(pair[0]) == variable) {
          return decodeURIComponent(pair[1]);
      }
  }
  console.log('Query variable %s not found', variable);
}

function updateQueryStringParameter(uri, key, value) {
  var re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");
  var separator = uri.indexOf('?') !== -1 ? "&" : "?";
  if (uri.match(re)) {
    return uri.replace(re, '$1' + key + "=" + value + '$2');
  }
  else {
    return uri + separator + key + "=" + value;
  }
}

const searchSong = (data = "") => {
  console.log("terpanggil");
  let base_url = "../../api/music/search.php?";
  let add_url = "";
  
  try{
    const title = document.getElementById("search-input").value;
    const sort = document.getElementById("sort").value;
    const filter = document.getElementById("filter").value;
    const page = document.getElementById("page").value;
  
    if (title.length > 0) {
      add_url += "judul=" + title;
    }
    if (sort.length > 0) {
      add_url += "&sort=" + sort;
    }
    if (filter.length > 0) {
      add_url += "&genre=" + filter;
    }
    if (page.length > 0) {
      add_url += "&page=" + page;
    }
  } catch (e) {
    console.log(e);
  }
  

  const xhr = new XMLHttpRequest();

  if(data != ""){
    final_url = base_url + data;
    add_url = data;
  } else {
    final_url = base_url + add_url;
  }
  console.log(final_url)

  xhr.open("GET", final_url, true);
  xhr.onload = function () {
    if (this.status == 200) {
      console.log(this.responseText);
      let response = JSON.parse(this.responseText);
      let songList = document.getElementById("song-list");
      songList.innerHTML = "";
      window.history.pushState("","","/?search/" + add_url);
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

const prevPage = () => {
  let newPage = parseInt(getQueryVariable("page")) - 1
  if (newPage == 0){
    newPage = 1
  }

  const link = updateQueryStringParameter(window.location.href, "page", newPage);
  
  searchSong((link.split("?")[1]).split("/")[1]);
}

const nextPage = () => {
  let newPage = parseInt(getQueryVariable("page")) + 1

  const link = updateQueryStringParameter(window.location.href, "page", newPage);
  
  searchSong((link.split("?")[1]).split("/")[1]);
}