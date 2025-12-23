function openGSTCalculator() {
  $("#gstCalculatorModal").modal("show");
}

function calculateGST() {
  const amount = Number(document.getElementById("amount").value || 0);
  const gst = Number(document.getElementById("gst").value || 0);
  const type = document.getElementById("taxType").value;

  let actual = 0,
    gstValue = 0,
    total = 0;

  if (type === "exclusive") {
    gstValue = (amount * gst) / 100;
    actual = amount;
    total = amount + gstValue;
  } else {
    gstValue = (amount * gst) / (100 + gst);
    actual = amount - gstValue;
    total = amount;
  }

  document.getElementById("actual").innerText = actual.toFixed(2);
  document.getElementById("gstAmount").innerText = gstValue.toFixed(2);
  document.getElementById("totals").innerText = total.toFixed(2);
}

function calculateGST2() {
  const amount = Number(document.getElementById("amounts").value || 0);
  const gst = Number(document.getElementById("gsts").value || 0);
  const type = document.getElementById("taxTypes").value;

  let actual = 0,
    gstValue = 0,
    total = 0;

  if (type === "exclusive") {
    gstValue = (amount * gst) / 100;
    actual = amount;
    total = amount + gstValue;
  } else {
    gstValue = (amount * gst) / (100 + gst);
    actual = amount - gstValue;
    total = amount;
  }

  document.getElementById("actuals").innerText = actual.toFixed(2);
  document.getElementById("gstAmounts").innerText = gstValue.toFixed(2);
  document.getElementById("totalss").innerText = total.toFixed(2);
}
