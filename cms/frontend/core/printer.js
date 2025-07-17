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
                console.log(response);
                toast.success('Printer', response.responseJSON.success);
            },
            error: function (response) {
                console.log(response);
                toast.error('Printer', response.responseJSON.error);
            }
        });
    }
};
