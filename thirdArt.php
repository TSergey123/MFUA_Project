<!doctype html>
<head>
    <?php
    $title = "Первый тест";
    require "blocks/head.php";
    ?>
</head>

<header>
    <?php require "blocks/header.php" ?>
</header>
<body>
<div id="wrapper">
    <div id="leftCol">
        <div id="bigArticle">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/XmCAGUo5k70" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            <h2>Урок на тему: Обьектно-ориентированное программирование</h2>
            <!--            --><?php //require_once "tests/firstTest.php" ?>
            <p><strong>Обьектно-ориентированное программирование (ООП)</strong> — это методология программирования,
                основанная на представлении программы в виде совокупности объектов, каждый из которых
                является экземпляром определенного класса, а классы образуют иерархию наследования.<br>

                <br><strong>Основные принципы ООП:</strong> абстракция, инкапсуляция, наследование, полиморфизм.<br>

                <br><strong>Абстракция</strong> —  означает выделение значимой информации и исключение из рассмотрения незначимой.
                С точки зрения программирования это правильное разделение программы на объекты. Абстракция позволяет
                отобрать главные характеристики и опустить второстепенные.<br>

                <br><strong>Пример</strong>: описание должностей в компании. Здесь название должности значимая информация, а описание
                обязанностей у каждой должности это второстепенная информация. К примеру главной характеристикой
                для «директор» будет то, что это должность чем-то управляет, а чем именно (директор по персоналу,
                финансовый директор, исполнительный директор) это уже второстепенная информация.<br>

                <br><strong>Инкапсуляция</strong> — свойство системы, позволяющее объединить данные и методы, работающие с ними,
                в классе. Для Java корректно будет говорить, что инкапсуляция это «сокрытие реализации».
                Пример из жизни — пульт от телевизора. Мы нажимаем кнопочку «увеличить громкость» и она
                увеличивается, но в этот момент происходят десятки процессов, которые скрыты от нас. Для Java:
                можно создать класс с 10 методами, например вычисляющие площадь сложной фигуры, но сделать из них
                9 private. 10й метод будет называться «вычислитьПлощадь()» и объявлен public, а в нем уже будут
                вызываться необходимые скрытые от пользователя методы. Именно его и будет вызывать пользователь.<br>

                <br><strong>Наследование</strong> — свойство системы, позволяющее описать новый класс на основе уже существующего с
                частично или полностью заимствующейся функциональностью. Класс, от которого производится наследование,
                называется базовым, родительским или суперклассом. Новый класс — потомком, наследником, дочерним или
                производным классом.<br>

                <br>Полиморфизм — свойство системы использовать объекты с одинаковым интерфейсом без информации о
                типе и внутренней структуре объекта.</p>
            <a href="firstArticle.php">
                <div class="more">Далее</div>
            </a>
        </div>
    </div>


    <?php require_once "blocks/rightCol.php" ?>

</div>
</body>

<footer>
    <?php require_once "blocks/footer.php" ?>
</footer>
