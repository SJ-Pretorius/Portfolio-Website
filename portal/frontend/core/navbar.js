var navbar = {
    update : function (html) {
        $('#middle').html(html);
        if ($('#overlay-default').length > 0) {
            $('.btn-sidebar-toggle').click();
        }
    },

    dashboard : function () {
        $.ajax({
            url: "ajax.php",
            type: "GET",
            data: {
                'm': "dashboard",
                'dashboard_do': 'show_home'
            },
            success: function (response) {
               navbar.update(response);
            },
            error: function () {
                toast.error('Dashboard', 'Network error or connection lost.');
            }
        })
    },

    printer : function () {
        $.ajax({
            url: "ajax.php",
            type: "GET",
            data: {
                'm': "printer",
                'printer_do': 'show_home'
            },
            success: function (response) {
                navbar.update(response);
            },
            error: function () {
                toast.error('Printer', 'Network error or connection lost.');
            }
        })
    },
    
    logout : function () {
        $.ajax({
            url: "ajax.php",
            type: "GET",
            data: {
                'm': "login",
                'login_do': 'logout'
            },
            success: function () {
                location.reload();
            },
            error: function () {
                toast.error('Logout', 'Network error or connection lost.');
            }
        })
    }
}