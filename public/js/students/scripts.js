$(function () {
    $('#main_form').on('submit', function (e) {
        e.preventDefault();

        $.ajax({
            url:$(this).attr('action'),
            method:$(this).attr('method'),
            data: new FormData(this),
            processData: false,
            dataType: 'JSON',
            contentType: false,
            beforeSend: function () {
                $(document).find('span.error-text').text('')
            },
            success: function (data) {
                if (data.status == 1) {
                    $('#main_form')[0].reset();
                    alert(data.msg);
                }
            },
            error: function (jqXHR, status, error) {
                if (jqXHR.status === 422) {
                    $.each(jqXHR.responseJSON.errors, function (prefix, val) {
                        $('span.' + prefix + '_error').text(val[0]);
                    });
                }
        }
        })
    })
});
