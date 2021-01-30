require('./bootstrap');

$('#authorization').submit(function (event) {
    event.preventDefault();
    let th = $(this);
    $.ajax({
        type: "POST",
        url: $(this).attr('action'),
        dataType: "json",
        data: th.serialize(),
        success: function (data) {
            if (data.status === "success") {
                location.reload();
            }
        },
        error: function (data) {
            if (data.responseJSON.errors.email && data.responseJSON.errors.password) {
                document.querySelector('#login-password').style.border = '1px solid red';
                document.querySelector('#login-email').style.border = '1px solid red';
            } else if (data.responseJSON.errors.password) {
                document.querySelector('#login-password').style.border = '1px solid red';
                document.querySelector('#login-email').style.border = '0';
            } else if (data.responseJSON.errors.email) {
                document.querySelector('#login-email').style.border = '1px solid red';
                document.querySelector('#login-password').style.border = '0';
            } else {
                document.querySelector('#login-email').style.border = '0';
                document.querySelector('#login-password').style.border = '0';
            }
        }
    });
    return false;
});

$('.second-reg-form').submit(function (event) {
    event.preventDefault();
    let th = $(this);
    $.ajax({
        type: "POST",
        url: $(this).attr('action'),
        dataType: "json",
        data: th.serialize(),
        success: function (data) {
            if (data.status === "success") {
                location.reload();
            }
        },
        error: function (data) {
            if (data.responseJSON.errors.name_company) {
                th.find("input[name=name_company]").css({'border': '1px solid red'});
            } else {
                th.find("input[name=name_company]").css({'border': '0'});
            }
            if (data.responseJSON.errors.name) {
                th.find("input[name=name]").css({'border': '1px solid red'});
            } else {
                th.find("input[name=name]").css({'border': '0'});
            }
            if (data.responseJSON.errors.surname) {
                th.find("input[name=surname]").css({'border': '1px solid red'});
            } else {
                th.find("input[name=surname]").css({'border': '0'});
            }
            if (data.responseJSON.errors.phone) {
                th.find("input[name=phone]").css({'border': '1px solid red'});
            } else {
                th.find("input[name=phone]").css({'border': '0'});
            }
            if (data.responseJSON.errors.email) {
                th.find("input[name=email]").css({'border': '1px solid red'});
            } else {
                th.find("input[name=email]").css({'border': '0'});
            }
            if (data.responseJSON.errors.password) {
                th.find("input[name=password]").css({'border': '1px solid red'});
            } else {
                th.find("input[name=password]").css({'border': '0'});
            }
        }
    });
    return false;
});
