var login = {
    check: function (formElement, response) {
        if (response.success) {
            location.reload();
        } else {
            toast.error('Login', response.message);
        }
    }
}