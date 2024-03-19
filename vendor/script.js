function countChars(body, counter, max) {
  var count = max + document.getElementById(body).value.length;
  if (count >= 0 && count <= 50) {
    document.getElementById(counter).innerHTML =
      '<span class="text-red-400 ">' + count + "</span>";
  } else if (count > 50 && count <= 120) {
    document.getElementById(counter).innerHTML =
      '<span class="text-red-500">' + count + "</span>";
  } else if (count > 120 && count < 140) {
    document.getElementById(counter).innerHTML =
      '<span class="text-red-600">' + count + "</span>";
  } else if (count == 140) {
    document.getElementById(counter).innerHTML =
      '<span class="text-red-700 font-bold">' + count + "</span>";
  } else {
    document.getElementById(counter).innerHTML = count;
  }
}
