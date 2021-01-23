$(document).ready(function () {

    $("#submitBtn").click(function (e) {
        e.preventDefault();
        var token = $("#csrfToken").val();
        var email = $("#email").val();
        var password = $("#password").val();
        $.ajax({
            type: "POST",
            url: "\login",
            data: {
                'email': email,
                '_token': token,
                'password': password
            },
            success: function (response) {
                var timer = 4;

                const showSuccessResponse = () => {
                    location.replace('home');
                };
                const decresTime = () => {
                    $("#div-timer").text(timer--);
                }

                if (response == 1) {
                    $("#hidden-success-message").removeClass('hidden-div');
                    $("#hidden-error-message").addClass('hidden-div');
                    setInterval(decresTime, 1000);
                    setTimeout(showSuccessResponse, 5000);
                } else {
                    $("#hidden-success-message").addClass('hidden-div');
                    $("#hidden-error-message").removeClass('hidden-div');
                }
            }
        });
    })

    $('#mobile').click(function () {
        $('.mobile_menu_list').toggleClass("show");
    });

})


