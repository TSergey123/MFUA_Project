<script src="https://unpkg.com/react@16/umd/react.development.js"></script>
<script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js"></script>
<script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>

<form method="post">
    <title>Тест</title>
    <style type = "text/css">
        div.questionBlock {
            display: none;
        }
    </style>
    <script type = "text/javascript">
        var answer;
    </script>
    </head>
    <body background="tz13.jpg"><h1>Тест по теме: "Основы Java синтаксиса"</h1>
    <div class = "questionBlock">
        1. Что такое объект в Java?<br>
        <input type = "radio" name=q1 onclick="qa.nowRight = 1">Экземпляр<br>
        <input type = "radio" name=q1 onclick="qa.nowRight = 0">Оператор<br>
        <input type = "radio" name=q1 onclick="qa.nowRight = 0">Специальный метод<br>
        <input type = "radio" name=q1 onclick="qa.nowRight = 0">Тип данных<br>
    </div>
    <div class = "questionBlock">
        2. Выбери только примитивный тип данных<br>
        <input type = "radio" name=q2 onclick="qa.nowRight = 0">String<br>
        <input type = "radio" name=q2 onclick="qa.nowRight = 0">Character<br>
        <input type = "radio" name=q2 onclick="qa.nowRight = 1">int<br>
        <input type = "radio" name=q2 onclick="qa.nowRight = 0">Object<br>
        <input type = "radio" name=q2 onclick="qa.nowRight = 0">Integer<br>
    </div>
    <div class = "questionBlock">
        3. Что будет выведено на экран<br>
        System.out.println("hello" + " world");<br>
        <input type = "radio" name=q3 onclick="qa.nowRight = 0">helloworld<br>
        <input type = "radio" name=q3 onclick="qa.nowRight = 1">hello world<br>
        <input type = "radio" name=q3 onclick="qa.nowRight = 0">ничего<br>
        <input type = "radio" name=q3 onclick="qa.nowRight = 0">ошибка<br>
    </div>
    <div class = "questionBlock">
        4. У какого модификатора доступа самая высокая степень открытости?<br>
        <input type = "radio" name=q4 onclick="qa.nowRight = 0">private<br>
        <input type = "radio" name=q4 onclick="qa.nowRight = 0">protected<br>
        <input type = "radio" name=q4 onclick="qa.nowRight = 0">default<br>
        <input type = "radio" name=q4 onclick="qa.nowRight = 1">public<br>
    </div>
    <div class = "questionBlock">
        5. У какого модификатора доступа самая высокая степень закрытости?<br>
        <input type = "radio" name=q4 onclick="qa.nowRight = 1">private<br>
        <input type = "radio" name=q4 onclick="qa.nowRight = 0">protected<br>
        <input type = "radio" name=q4 onclick="qa.nowRight = 0">default<br>
        <input type = "radio" name=q4 onclick="qa.nowRight = 0">public<br>
    </div>
    <div class = "questionBlock">
        6. Как правильно объявить переменную?<br>
        <input type = "radio" name=q2 onclick="qa.nowRight = 0">x int<br>
        <input type = "radio" name=q2 onclick="qa.nowRight = 1">int x<br>
        <input type = "radio" name=q2 onclick="qa.nowRight = 0">int<br>

    </div>
    <div class = "questionBlock">
        7. Какой тип возвращаемого значения у метода, если он не возвращает результат своей работы?<br>
        <input type = "radio" name=q2 onclick="qa.nowRight = 0">String<br>
        <input type = "radio" name=q2 onclick="qa.nowRight = 1">void<br>
        <input type = "radio" name=q2 onclick="qa.nowRight = 0">int<br>
        <input type = "radio" name=q2 onclick="qa.nowRight = 0">byte<br>
    </div>
    <div class = "questionBlock">
        8. Полное имя класса состоит из:<br>
        <input type = "radio" name=q2 onclick="qa.nowRight = 0">Имени класса<br>
        <input type = "radio" name=q2 onclick="qa.nowRight = 0">Имени пакета<br>
        <input type = "radio" name=q2 onclick="qa.nowRight = 1">Имени всех пакетов<br>
        <input type = "radio" name=q2 onclick="qa.nowRight = 0">имени проекта<br>

    </div>
    <div class = "questionBlock">
        9. Какое ключевое слово отвечает за импорт нужного класса??<br>
        <input type = "radio" name=q2 onclick="qa.nowRight = 0">need<br>
        <input type = "radio" name=q2 onclick="qa.nowRight = 1">import<br>
        <input type = "radio" name=q2 onclick="qa.nowRight = 0">require<br>
        <input type = "radio" name=q2 onclick="qa.nowRight = 0">expect<br>
    </div>
    <div class = "questionBlock">
        10. Что хранится в переменной не примитивного типа?<br>
        <input type = "radio" name=q2 onclick="qa.nowRight = 0">Обьект<br>
        <input type = "radio" name=q2 onclick="qa.nowRight = 0">Константа<br>
        <input type = "radio" name=q2 onclick="qa.nowRight = 1">Ссылка на обьект<br>
        <input type = "radio" name=q2 onclick="qa.nowRight = 0">Все<br>
    </div>
    <input type="button" value="Ответить"  onclick="qa.nextOrResult()">
    <script type = "text/javascript">
        var qa = new QuestAnalizer();
        function QuestAnalizer() {
            var now = 0, printed = false, rightCount = 0;
            var questionBlocks = document.querySelectorAll("div.questionBlock");
            var allQCount = questionBlocks.length;
            this.nowRight = 0;
            questionBlocks[now].style.display = "block";
            this.nextOrResult = function () {
                if (now >= allQCount-1) {
                    now++;
                    if (!printed) {
                        questionBlocks[now - 1].style.display = "none"
                        var div = document.getElementById("div");
                        div.innerHTML = "Верных ответов " + rightCount + ". Вы набрали " + (rightCount / allQCount * 100).toFixed(0) + "%";
                        div.style.cssText='background-color: yellow; color:red; margin-left: 90%;\n' +
                            '    border-radius: 1px;\n' +
                            '    border: 2px solid silver;' +

                            document.body.append(div);
                        printed = true;

                    } else {
                        alert("Ваш результат на экране.");
                    }
                } else {
                    questionBlocks[now].style.display = "none";
                    now++;
                    rightCount += this.nowRight;
                    questionBlocks[now].style.display = "block";
                }
            }
        }
    </script>

</form>