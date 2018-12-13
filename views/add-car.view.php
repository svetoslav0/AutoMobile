<h1>Добави нова обява</h1>
<hr>

<form method="POST" enctype='multipart/form-data'>
    <div class="modal-body row">
        <div class="col-md-2"></div>

        <div class="col-md-4">
            <table>
                <tr>
                    <td>Снимка:</td>
                    <td>
                        <span class="btn btn-primary btn-file">
                            <input type="file" name="fileToUpload" />Browse
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>Марка:</td>
                    <td><input type="text" name="brand" /></td>
                </tr>
                <tr>
                    <td>Модел:</td>
                    <td><input type="text" name="model" /></td>
                </tr>
                <tr>
                    <td>Състояние:</td>
                    <td>
                        <input type="radio" name="state" value="new_car" />Нов<br />
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="radio" name="state" value="used_car" checked />Употребяван<br />
                        <input type="radio" name="state" value="for_parts" />За части<br />
                    </td>
                </tr>
                <tr>
                    <td>Година на производство:</td>
                    <td><input type="text" name="release_year" /></td>
                </tr>
                <tr>
                    <td>Цена:</td>
                    <td><input type="text" name="price" /></td>
                </tr>
                <tr>
                    <td>Мощност:</td>
                    <td><input type="text" name="power" /></td>
                </tr>
                <tr>
                    <td>Кубатура:</td>
                    <td><input type="text" name="engine_volume" /></td>
                </tr>
            </table>
        </div>

        <div class="col-md-4">
            <table>
                <tr>
                    <td>Категория:</td>
                    <td>
                        <?= HTMLBuilder::getAllOptions($db, 'categories', 'name') ?>
                    </td>
                </tr>
                <tr>
                    <td>Евростандарт:</td>
                    <td>
                        <?= HTMLBuilder::getAllOptions($db, 'eurostandarts', 'name') ?>
                    </td>
                </tr>
                <tr>
                    <td>Тип двигател:</td>
                    <td>
                        <?= HTMLBuilder::getAllOptions($db, 'engines', 'type') ?>
                    </td>
                </tr>
                <tr>
                    <td>Скоростна кутия:</td>
                    <td>
                        <?= HTMLBuilder::getAllOptions($db, 'gears', 'type') ?>
                    </td>
                </tr>
                <tr>
                    <td>Пробег в км:</td>
                    <td>
                        <input type="text" name="mileage" />
                    </td>
                </tr>
                <tr>
                    <td>Цвят:</td>
                    <td>
                        <?= HTMLBuilder::getAllOptions($db, 'colors', 'color') ?>
                    </td>
                </tr>
                <tr>
                    <td>Град:</td>
                    <td>
                        <?= HTMLBuilder::getAllOptions($db, 'towns', 'town') ?>
                    </td>
                </tr>
                <tr>
                    <td>Описание:</td>
                    <td>
                        <textarea name="textarea" id="" cols="40" rows="3"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Телефон:</td>
                    <td>
                        <input type="text" name="phone">
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <hr>
    <div class="modal-body row">
        <div class="col-md-2"></div>
        <div class="col-md-4">
            <table>
                <h3>Допълнителни:</h3><br />
                <?php $extra_types = Repository::getAll($db, 'extra_types');
                foreach ($extra_types as $extra_type) : ?>
                    <tr>
                        <td valign="top">
                            <p><strong><?= $extra_type->extra_type ?></strong></p>
                        </td>
                        <td>
                            <?php $extras = Repository::getSome($db, 'extras', 'type_id', $extra_type->id) ?>
                            <?php foreach ($extras as $extra): ?>
                                <input type="checkbox" name="<?= $extra->id ?>" id="<?= $extra->id ?>" value="<?= $extra->id ?>">
                                    <label for="<?= $extra->id ?>"><?= $extra->extra ?></label><br />
                            <?php endforeach; ?>
                                <br>
                            <?php endforeach; ?>
                        </td>
                    </tr>
            </table>
        </div>
    </div>
    <div class="modal-body row">
        <div class="col-md-3"></div>
        <div class="col-md-9">
            <input type="submit" value="Публикувай" name="add_car_button" class="btn btn-success btn-lg " />
        </div>
    </div>
</form>

<?php include_once ('footer.view.php'); ?>
