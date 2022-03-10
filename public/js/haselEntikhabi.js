// HSEBET EL HASEL ELENTIKHABI

function calculateHasel() {
    var haselTotal = document.getElementById("haselTotal");
    var muktari3inTotal = document.getElementById("muktari3inTotal").value

    haselTotal.innerHTML = muktari3inTotal / 11;

}
// ---------------------------

// HIDE UNHIDE TAKHATTAT OR NOT 

var aswatTotal = parseFloat(document.getElementById("aswatTotal").innerHTML);
var aadadMaka3edCont = document.getElementById("aadadMaka3edCont");
var haselTotalNumb = parseFloat(document.getElementById("haselTotal").innerHTML);
var takhattatAlHasel = document.getElementById("takhattatAlHasel");
var lamTatakhattaAlHasel = document.getElementById("lamTatakhattaAlHasel");

if (aswatTotal < haselTotalNumb) {
    aadadMaka3edCont.classList.add("d-none")
    takhattatAlHasel.classList.add("d-none")
}

else {
    lamTatakhattaAlHasel.classList.add("d-none")
}


// ----------------------------

// EHTISAB AADAD AL MAKA3ED

var aadadMaka3ed = document.getElementById("aadadMaka3ed");

aadadMaka3ed.innerHTML = aswatTotal / haselTotalNumb;

