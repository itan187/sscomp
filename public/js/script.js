$('.custom-file-input').on('change', function () {
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
});


$('select').on('change', function () {
    var valueSelected = this.value;
    
    var palabras = valueSelected,
        array = palabras.split(" "),
        total = array.length,
        resultado = "";
    for (var i = 0; i < total; resultado += array[i][0], i++);

    var folio = $("#folio").data("folio");
    $(".inp_folio").val(("prodemex-" + resultado + "-00" + folio).toUpperCase());
});