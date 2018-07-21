var user = {
    ajaxMethod: 'POST',


    update: function() {
        var formData = $('#formUsers').serialize();

        $.ajax({
            url: '/admin/user/update/',
            type: this.ajaxMethod,
            data: formData,
            beforeSend: function(){

            },
            success: function(result){
                console.log(result);
                window.location = '/admin/user/';
            }
        });
    },

    upd: function() {
        var formData = new FormData();

        formData.append('user_id', $('#formUserId').val());
        formData.append('name', $('#formName').val());
        formData.append('lastname', $('#formLastName').val());
        formData.append('date', $('#formDate').val());
        formData.append('email', $('#formEmail').val());
        formData.append('password', $('#formPassword').val());
        formData.append('role', $('#formRole').val());
        formData.append('date_red', $('#formDateReg').val());

        $.ajax({
            url: '/admin/user/update/',
            type: this.ajaxMethod,
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            beforeSend: function(){

            },
            success: function(result){
                console.log(result);
            }
        });
    },
};