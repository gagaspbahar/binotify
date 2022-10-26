const getDuration = (length) => {
  let minutes = Math.floor(length / 60);
  let seconds = Math.floor(length - minutes * 60);
  return `${minutes}:${seconds}`;
}

const getReleaseDate = (date) => {
  let year = date.slice(0, 4);
  let month = date.slice(5, 7);
  let day = date.slice(8, 10);
  return `${day}-${month}-${year}`;
}