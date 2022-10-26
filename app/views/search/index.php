<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../../../public/js/search.js"></script>
    <link rel="stylesheet" href="">
  </head>
  <body>
    <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <input type="text" id="search-input"> </input>

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
    <div id="song-list"></div>
  </body>

  
</html>

<!-- sort by abjad, tahun terbit -->
<!-- filter by genre -->
