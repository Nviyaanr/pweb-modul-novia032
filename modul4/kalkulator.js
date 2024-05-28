function hitung() {
  var bil1 = parseFloat(document.getElementById("bil1").value);
  var bil2 = parseFloat(document.getElementById("bil2").value);
  var operator = document.getElementById("operator").value;
  var hasil;

  if (operator === "+") {
    hasil = bil1 + bil2;
  } else if (operator === "-") {
    hasil = bil1 - bil2;
  } else if (operator === "x") {
    hasil = bil1 * bil2;
  } else if (operator === "/") {
    hasil = bil1 / bil2;
  } else {
    hasil = "Operasi tidak valid";
  }

  document.getElementById("hasil").value = hasil;
}