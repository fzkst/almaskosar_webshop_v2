window.addEventListener('load', function() {
    $("#category_id").on('change', function () {
        var id = $(this).find('option:selected').val();
        if (id == 1){
            $("#cpu").val("");
            $("#cpu").prop("disabled", true);
            $("#memory").val("");
            $("#memory").prop("disabled", true);
            $("#cellular").prop('checked', false);
            $("#cellular").prop("disabled", true);
        }
        if (id == 2){
            $("#cpu").val("");
            $("#cpu").prop("disabled", true);
            $("#memory").val("");
            $("#memory").prop("disabled", true);
        }
        console.log(id);
    });
    termekek_szama();
    function termekek_szama(){
        $.ajax({
            type: "GET",
            url: "/products-size",
            dataType: "json",
            success: function (response) {
                $('.termekek_szama').text(response.products_size);
            }
        })
    }

});