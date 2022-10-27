const submitForm = () => {
  console.log("kepanggil")
  const title = document.getElementById("input-title").value;
  const artist = document.getElementById("input-artist").value;
  const genre = document.getElementById("input-genre").value;
  const date = document.getElementById("input-date").value;

  if (title === "" || artist === "" || genre === "" || date === "") {
    alert("Please fill all the field");
    return;
  }

  const data = new FormData();
  data.append("judul", title);
  data.append("penyanyi", artist);
  data.append("genre", genre);
  data.append("tanggal_terbit", date);
  data.append("file", document.getElementById("input-file").files[0]);


  const xhr = new XMLHttpRequest();
  xhr.open("POST", "../../api/album/upload.php", true);
  xhr.onload = function () {
    if (this.status === 200) {
      alert("Add album success :D. Add the songs via the album page.");
    } else {
      alert("Add album failed :(");
    }
  };
  xhr.send(data);
};
