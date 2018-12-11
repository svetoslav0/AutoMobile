<?php include_once ('header.view.php'); ?>

<h1>Add new car advertisement</h1>
<hr>

<form method="get">
    Марка:
    <input type="text" name="brand" />
    Модел:
    <input type="text" name="model" />
    Състояние:
    <input type="checkbox" name="new_car" />Нов
    <input type="checkbox" name="used_car" />Употребяван
    <input type="checkbox" name="for_parts" />За части
    Година на производство:
    <input type="text" name="release_year" />
    Цена:
    <input type="text" name="price" />
    Мощност:
    <input type="text" name="power" />
    Кубатура:
    <input type="text" name="engine_volume" />
    Категория:
    <!-- select of ван, кабрио, седан.... -->
    Евростандарт:
    <!-- eurostandarts' select -->
    Тип двигател:
    <!-- engine type select -->
    Скоростна кутия:
    <!-- gear type select -->
    Пробег в км:
    <input type="text" name="mileage" />
    Цвят:
    <!-- colors select -->
    Град:
    <!-- town select -->
    <hr>
    Допълнителни:
    <!-- extras' select -->
</form>

<?php include_once ('footer.view.php'); ?>
