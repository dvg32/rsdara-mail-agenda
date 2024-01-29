// $("#Tanggal").flatpickr({
//     enableTime: false,
//     dateFormat: "Y-m-d",
// });

$("#tanggaljam").flatpickr({
    enableTime: true,
    dateFormat: "Y-m-d H:i",
    minuteIncrement: 1,
    maxDate: "today",
    defaultDate: new Date()
});


var selectElement = $("#TahunSc");

// Tambahkan opsi "Pilih Tahun" dengan nilai null dan properti display: none
$("<option>")
    .val(null)
    .text("Pilih Tahun")
    .css("display", "none")
    .appendTo(selectElement);

// Tambahkan opsi "0000" dengan nilai 0 dan properti display: none
$("<option>")
    .val(0)
    .text("0000")
    .css("display", "none")
    .appendTo(selectElement);

var date = new Date();
var currentYear = date.getFullYear();

// Tambahkan opsi tahun dari 1970 hingga tahun saat ini
for (var i = 1970; i <= currentYear; i++) {
    var option = $("<option>")
        .val(i)
        .text(i)
        .appendTo(selectElement);

    // Tetapkan opsi yang dipilih untuk tahun saat ini
    if (i === currentYear) {
        option.prop("selected", true);
    }
}

// Gantikan elemen select dengan class dan atribut lainnya
$("#TahunSc").replaceWith(function () {
    return $("<select>")
        .attr("name", "tahunsc")
        .attr("id", "TahunSc")
        .attr("aria-label", "Select a Country")
        .attr("data-control", "select2")
        .addClass("form-select form-select-solid form-select-lg fw-bold")
        .append($(this).find("option"));
});






$("#HPHT").flatpickr({
    enableTime: false,
    dateFormat: "Y-m-d",
});

document.addEventListener('DOMContentLoaded', function () {
    flatpickr("#Tanggal", {
        dateFormat: "Y-m-d",
        altInput: true,
        altFormat: "d F Y",
        onChange: function (selectedDates, dateStr, instance) {
            if (selectedDates.length > 0) {
                // Hitung umur berdasarkan tanggal lahir
                var today = new Date();
                var birthDate = selectedDates[0];
                var ageInMilliseconds = today - birthDate;

                var years = Math.floor(ageInMilliseconds / (365.25 * 24 * 60 * 60 * 1000));
                var months = Math.floor((ageInMilliseconds % (365.25 * 24 * 60 * 60 * 1000)) / (30.44 * 24 * 60 * 60 * 1000));
                var days = Math.floor((ageInMilliseconds % (30.44 * 24 * 60 * 60 * 1000)) / (24 * 60 * 60 * 1000));

                // Update input umur
                document.querySelector('input[id="umur_tahun"]').value = years;
                document.querySelector('input[id="umur_bulan"]').value = months;
                document.querySelector('input[id="umur_hari"]').value = days;
            }
        }
    });
});