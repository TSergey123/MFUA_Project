<!doctype html>
    <head>
        <?php
        $title = "Новости обо всем";
        require_once "blocks/head.php";
        ?>
    </head>

    <header>
        <?php require_once "blocks/header.php"?>
    </header>
<body>
    <div id="wrapper">
        <div id="leftCol">
            <div id="bigArticle">
                <img src="img/articles/code-java.jpg" alt="Статья 1", title="Статья 1">
                <h2>Обучение основам java синтаксиса</h2>
                <p>Java — Синтаксис языка для начинающих Когда мы рассматриваем java-программу,
                    она может быть определена как совокупность объектов, которые взаимодействуют с помощью вызова методов
                    друг друга. Объект является экземпляром класса. Класс — может быть определен как шаблон,
                    который описывает поведение объекта...</p>
                <a href="firstArt.php">
                    <div class="more">Далее</div>
                </a>
            </div>

            <div class="clear"><br></div>
            <div class="article">
                <img src="img/articles/article_1.png" alt="Статья 2", title="Статься 2">
                <h2>Углубленное изучение Java</h2>
                <p>Java — строго типизированный объектно-ориентированный язык программирования,
                    разработанный компанией Sun Microsystems (в последующем приобретённой компанией Oracle).
                    Разработка ведётся сообществом, организованным через Java Community Process...</p>
                <a href="secondArt.php">
                    <div class="more">Далее</div>
                </a>
            </div>
            <div class="article">
                <img src="img/articles/java-oop.jpeg" alt="Статья 3", title="Статья 3">
                <h2>Java ООП</h2>
                <p>Объе́ктно-ориенти́рованное программи́рование (ООП) — методология программирования,
                    основанная на представлении программы в виде совокупности объектов, каждый из которых
                    является экземпляром определённого класса, а классы образуют иерархию наследования.Объект —
                    это сущность, экземпляр класса, которой можно посылать сообщения и которая может на них
                    реагировать, используя свои данные...</p>
                <a href="thirdArt.php">
                    <div class="more">Далее</div>
                </a>
            </div>
        </div>

        <?php require_once "blocks/rightCol.php" ?>
    </div>
</body>

<footer>
   <?php require_once "blocks/footer.php"?>
</footer>
