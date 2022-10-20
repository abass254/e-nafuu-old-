$(document).ready(function(){
    $('input[name=status]').change(function(){
        var mode = $(this).prop('checked');
        var id = $(this).val();
        var token = $('#token').val();

        $.ajax({
            url : "/admin/updateStatus",
            type : "POST",
            data: {
                _token: token,
                mode : mode,
                id : id,
            },
            success : function (response){
                toastr.success('Success!', 'Status updated successfully');
            }

        });
    });
});
