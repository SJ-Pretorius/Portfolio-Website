var toast = {
    success: function (title, message) {
        $.SOW.core.toast.show('success', title, message, 'top-end', 1000, true);
    },
    error: function (title, message) {
        $.SOW.core.toast.show('danger', title, message, 'top-end', 1000, true);
    }
}