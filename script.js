function countChars(body, counter, max) {
  var count = max - document.getElementById(body).value.length;
  if (count < 0) {
    document.getElementById(counter).innerHTML =
      '<span style="color: red;">' + count + "</span>";
  } else {
    document.getElementById(counter).innerHTML = count;
  }
}