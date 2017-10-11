$(document).ready(function(){
    $('.btn-danger').click(function(e){
        e.preventDefault();
        var row = $(this).parents('tr');
        var id = row.data('id');
        var form = $('#form-delete');
        var url = form.attr('action').replace(':USER_ID',id);
        var data = form.serialize();
        
        row.fadeOut();
        
        $.post(url,data,function(result){
            $('#error_ajax').attr('class','alert alert-success');
            $('#error_ajax').text(result.message);
            $('#error_ajax').show();
            $('#error_ajax').fadeOut(3000);
            
        }).fail(function(){
            $('#error_ajax').attr('class','alert alert-danger');
            $('#error_ajax').text("El Usuario no Fue Eliminado");
            $('#error_ajax').show();
            $('#error_ajax').fadeOut(3000);
            row.show(3000);
        });
        
    });

});