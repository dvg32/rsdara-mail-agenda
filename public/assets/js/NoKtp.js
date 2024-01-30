var inputElement = $("#NoKtp");
var errorSpan = $("#errorSpan");

Inputmask({
    "mask": "9",
    "repeat": 16,
    "greedy": false
}).mask(inputElement);

inputElement.on('input', function () {
    var inputValue = $(this).val();
    
    // Periksa apakah panjang input mencapai 16
    if (inputValue.length !== 16) {
        // Tampilkan span error
        errorSpan.css("display", "inline");
    } else {
        // Sembunyikan span error jika panjang sudah 16
        errorSpan.css("display", "none");
    }
});



//Berat
Inputmask({
    "mask": "9",
    "repeat": 5,
    "greedy": false
}).mask("#berat");

//Berat
Inputmask({
    "mask": "9",
    "repeat": 2,
    "greedy": false
}).mask("#gravida");

//Berat
Inputmask({
    "mask": "9",
    "repeat": 2,
    "greedy": false
}).mask("#partus");

//Berat
Inputmask({
    "mask": "9",
    "repeat": 2,
    "greedy": false
}).mask("#abortus");

Inputmask({
    "mask": "9",
    "repeat": 6,
    "greedy": false
}).mask("#pervaginambbmax");

Inputmask({
    "mask": "9",
    "repeat": 3,
    "greedy": false
}).mask("#td");

Inputmask({
    "mask": "9",
    "repeat": 2,
    "greedy": false
}).mask("#nadi");
Inputmask({
    "mask": "9",
    "repeat": 2,
    "greedy": false
}).mask("#suhu");

Inputmask({
    "mask": "9",
    "repeat": 2,
    "greedy": false
}).mask("#ri");

Inputmask({
    "mask": "9",
    "repeat": 4,
    "greedy": false
}).mask("#tahunsc");