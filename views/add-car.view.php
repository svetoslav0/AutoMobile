

<h1>Add new car advertisement</h1>
<hr>

<form method="POST" enctype='multipart/form-data'>
    Снимка:
    <input type="file" name="fileToUpload" /><br />
    Марка:
    <input type="text" name="brand" /><br />
    Модел:
    <input type="text" name="model" /><br />
    Състояние:<br />
    <input type="radio" name="state" value="new_car" />Нов<br />
    <input type="radio" name="state" value="used_car" checked />Употребяван<br />
    <input type="radio" name="state" value="for_parts" />За части<br />
    Година на производство:
    <input type="text" name="release_year" /><br />
    Цена:
    <input type="text" name="price" /><br />
    Мощност:
    <input type="text" name="power" /><br />
    Кубатура:
    <input type="text" name="engine_volume" /><br />
    Категория:
    <?= HTMLBuilder::getAllOptions($db, 'categories', 'name') ?>
    <br />
    Евростандарт:
    <?= HTMLBuilder::getAllOptions($db, 'eurostandarts', 'name') ?>
    <br />
    Тип двигател:
    <?= HTMLBuilder::getAllOptions($db, 'engines', 'type') ?>
   <br />
    Скоростна кутия:
    <?= HTMLBuilder::getAllOptions($db, 'gears', 'type') ?>
    <br />
    Пробег в км:
    <input type="text" name="mileage" /><br />
    Цвят:
    <?= HTMLBuilder::getAllOptions($db, 'colors', 'color') ?>
    <br />
    Град:
    <?= HTMLBuilder::getAllOptions($db, 'towns', 'town') ?>
    <br />
    <hr>
    Допълнителни:
    <?php $extra_types = Repository::getAll($db, 'extra_types');
    foreach ($extra_types as $extra_type) : ?>
        <p><strong><?= $extra_type->extra_type ?></strong></p>
        <?php $extras = Repository::getSome($db, 'extras', 'type_id', $extra_type->id) ?>
        <?php foreach ($extras as $extra): ?>
            <input type="checkbox" name="<?= $extra->id ?>" id="<?= $extra->id ?>" value="<?= $extra->id ?>">
                <label for="<?= $extra->id ?>"><?= $extra->extra ?></label><br />
        <?php endforeach; ?>
    <?php endforeach; ?>

    <input type="submit" value="Публикувай" name="add_car_button" />
</form>

<?php include_once ('footer.view.php'); ?>
