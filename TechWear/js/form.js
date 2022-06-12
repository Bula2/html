$('#send').click(function () {
    var email = $('#email').val();
    var name = $('#name').val();
    var message = $('#message').val();
    $.ajax({
        url: 'ajax/contact.php',
        type: 'POST',
        cache: false,
        data: {'name': name, 'email': email, 'message': message},
        dataType: 'html',
        beforeSend: function () {
            $('#send').attr("disabled", "disabled");
        },
        success: function (data) {
            if (data == true) {
                $('#name').val("");
                $('#email').val("");
                $('#message').val("");
                $('#send').text("Сообщение отправлено");
                $('#email').css("border-color", "#01b7d7");
                $('#name').css("border-color", "#01b7d7");
                $('#message').css("border-color", "#01b7d7");
            } else {
                if (data == false)
                    alert("Что-то пошло не так! Сообщение не отправлено");
                else {
                    switch (data) {
                        case "Имя не указано":
                            $('#name').css("border-color", "#d26565");
                            break;
                        case "Сообщение не указано":
                            $('#message').css("border-color", "#d26565");
                            break;
                        case "Неправильный e-mail":
                            $('#email').css("border-color", "#d26565");
                            break;
                        default:
                            $('#email').css("border-color", "#d26565");
                            $('#message').css("border-color", "#d26565");
                            $('#name').css("border-color", "#d26565");
                    }
                }
            }
            $('#send').removeAttr("disabled");
        }
    });
});
