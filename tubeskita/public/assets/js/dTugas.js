 // SEMUA ONCLICK=ALERT(*) SAMA LOG YG DIBAWAH CUMAN BUAT DEBUGGING
console.log("JS-JQuery Running")


// MATERI OPTION
$('.dTugas-material-download').children("a").click(function (e) { 
    e.stopPropagation()
    alert('Downloading Materi....')
});
