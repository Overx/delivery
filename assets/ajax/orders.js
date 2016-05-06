(function(window, document, $, undefined){

    /**
     * Open Modal
     */
    $(document).on('click', '#openAddItem', function( event ) {
        $('#modalFillIn').modal();
        event.preventDefault();
    });

    /**
     *
     */
    $(document).on('change', '#product_id', function() {
        var selectID = $(this).select2('data').id;
        if(selectID !== 0) {
            $.ajax({
                url: $("#baseURL").attr("data-url") + "admin/items/read/" + selectID,
                type: 'GET'
            }).done(function(e) {
                $("#price").val(e.price);
                $("#produto").val(e.description);
            });
        }
    });

    $(document).on('submit', '#createItem', function( event ) {
        event.preventDefault();
        $.ajax({
            url: $("#baseURL").attr("data-url") + "admin/items/store",
            type: 'get',
            data: $( this ).serialize()
        }).done(function(e) {
            if(e === "sucesso") {
                location.reload();
            }
        });
    });


})(window, document, window.jQuery);