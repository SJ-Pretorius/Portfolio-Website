var printer = {
    print: function () {
        $.ajax({
            url: "ajax.php",
            method: "POST",
            data: {
                'm': "printer",
                'printer_do': 'print',
                'text': $('#printer_text').val()
            },
            success: function (response) {
                toast.success('Printer', response.success);
            },
            error: function (response) {
                toast.error('Printer', response.responseJSON.error);
            }
        });
    }
};
