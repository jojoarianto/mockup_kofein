//javascript 
$(document).ready(function () {
	$("#loginform").submit(function (e) {
        e.preventDefault();
        var url = $(this).attr('action');
        var method = $(this).attr('method');
        var data = $(this).serialize();
        $.ajax({
            url: url + "login/doLogin",
            type: method,
            data: data
        }).done(function (data) {
            if (data !== "login") {
                $("#alert").html(data);
                $("#alert").show('fast');
            } else if(data === "login") {
                window.location.replace(url + 'home');
            } else {
                window.location.replace(url + 'login');
            }
        });
    });
});