const saveChanges = () => {
    console.log("kepanggil")
    const title = document.getElementById("input-title").value;
    const genre = document.getElementById("input-genre").value;
    const date = document.getElementById("input-date").value;

    const data = new FormData();
    data.append("judul", title);
    data.append("genre", genre);
    data.append("tanggal_terbit", date);
    data.append("file", document.getElementById("input-file-1").files[0]);

    for (var p of data) {
        let name = p[0];
        let value = p[1];
    
        console.log(name, value)
    }

    const xhr = new XMLHttpRequest();
    xhr.open("POST", "../../api/music/edit.php", true);
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.onload = () => {
        if (xhr.status === 200) {
            window.location.href = "/?songs/"+song.id;
        } else {
            alert("EDIT song failed :(");
        }
    };
    xhr.send(data);
}