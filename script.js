function countChars(body, counter, max) {
  var count = max + document.getElementById(body).value.length;
  if (count > 100 && count <= 120) {
    document.getElementById(counter).innerHTML =
      '<span class="text-red-500">' + count + "</span>";
  } else if (count > 120) {
    document.getElementById(counter).innerHTML =
      '<span class="text-red-500 font-bold">' + count + "</span>";
  } else {
    document.getElementById(counter).innerHTML = count;
  }
}
