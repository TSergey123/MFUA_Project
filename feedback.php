<!doctype html>
<head>
    <?php
    $title = "Обратная связь";
    require_once "blocks/head.php";
    ?>
</head>

<header>

    <?php
    $title = "Обратная связь";
    require_once "blocks/header.php"
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready (function ()
        {
            $("#done").click (function () {
                $("#messageShow").hide ();
                var name = $("#name").val ();
                var email = $("#Email").val ();
                var subject = $("#subject").val ();
                var message = $("#message").val ();
                var fail = "";
                if (name.length < 3) { fail = "Имя не меньше 3 символов";
                }
                else if (email.split ('@').length - 1 == 0 || email.split ('.').length - 1 == 0)
                {
                    fail = "Вы ввели неоректный E-mail";
                }
                else if (subject.length < 5)
                {
                    fail = "Тема сообщения меньше 5 символов";
                }
                else if (message.length < 20)
                {
                    fail = "Сообщение не менее 20 символов";
                }
                if (fail != "")
                {
                    $('#messageShow').html (fail + "<div class='clear'><br></div>");
                    $('#messageShow').show ();
                    return false;
                }
                $ajax ({
                    url: '/ajax/feedback.php',
                    type: 'POST',
                    cache: false,
                    data: {'name': name, 'email': email, 'subject': subject, 'message': message }
                    dataType: 'html',
                    success: function (data){
                        (data == 'Сообщение отправлено')
                            $('#messageShow').html (data + "<div class='clear'><br></div>");
                            $('#messageShow').show ();

                    }
                })
            });
        });
    </script>
</header>
<body>
<div id="wrapper">
    <div id="leftCol">
        <input type="text" placeholder="Имя" id="name" name="name"><br />
        <input type="text" placeholder="Email" id="email" name="email"><br />
        <input type="text" placeholder="Тема сообщения" id="subject" name="subject"><br />
        <textarea type="message" id="message" name="message" placeholder="Введите ваше сообщение"></textarea><br />
        <div id="messageShow"></div>
        <input type="button" id="done" name="done" value="Отправить">


    </div>

    <?php require_once "blocks/rightCol.php" ?>
</div>
</body>

<footer>
    <?php require_once "blocks/footer.php" ?>
</footer>
