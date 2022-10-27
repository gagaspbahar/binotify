const submitForm = () => {
  console.log("kepanggil")
  const title = document.getElementById("input-title").value;
  const artist = document.getElementById("input-artist").value;
  const genre = document.getElementById("input-genre").value;
  const date = document.getElementById("input-date").value;

  const data = new FormData();
  data.append("judul", title);
  data.append("penyanyi", artist);
  data.append("genre", genre);
  data.append("tanggal_terbit", date);
  data.append("file", document.getElementById("input-file-1").files[0]);
  data.append("file2", document.getElementById("input-file-2").files[0]);

  for (var p of data) {
    let name = p[0];
    let value = p[1];

    console.log(name, value)
}

  const xhr = new XMLHttpRequest();
  xhr.open("POST", "../../api/music/upload.php", true);
  xhr.onload = function () {
    if (this.status === 200) {
      alert("Add song success :D");
    } else {
      alert("Add song failed :(");
    }
  };
  xhr.send(data);
};