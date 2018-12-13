<h1>Преглед на обява</h1>
<hr><br>

<div class="modal-body row">
    <div class="col-md-1"></div>
    <div class="col-md-5">
        <img src="../uploads/<?= $car_data->image ?>" alt="<?= $car_data->brand ?>" width="500">
    </div>
    <div class="col-md-4">
        <table>
            <tr>
                <td>
                    <span class="brand"><?= $car_data->brand ?> </span>
                    <span class="model"><?= $car_data->model ?></span>
                </td>
            </tr>
            <tr>
                <td>Цена</td>
                <td><strong><?= $car_data->price ?> лв.</strong></td>
            </tr>
            <tr>
                <td>Произведена</td>
                <td><strong><?= $car_data->release_year ?></strong></td>
            </tr>
            <tr>
                <td>Тип на двигателя</td>
                <td>
                    <strong>
                        <?= Repository::getSome($db, 'engines', 'id', $car_data->engine_id)[0]->type ?>
                    </strong>
                </td>
            </tr>
            <tr>
                <td>Мощност</td>
                <td>
                    <strong><?= $car_data->power ?> к.с.</strong>
                </td>
            </tr>
            <tr>
                <td>Обем на двигателя</td>
                <td>
                    <strong><?= $car_data->volume ?> л.</strong>
                </td>
            </tr>
            <tr>
                <td>Евростандарт</td>
                <td>
                    <strong>
                        <?= Repository::getSome($db, 'eurostandarts', 'id', $car_data->eurostd_id)[0]->name ?>
                    </strong>
                </td>
            </tr>
            <tr>
                <td>Скоростна кутия</td>
                <td>
                    <strong>
                        <?= Repository::getSome($db, 'gears', 'id', $car_data->gear_id)[0]->type ?>
                    </strong>
                </td>
            </tr>
            <tr>
                <td>Категория</td>
                <td>
                    <strong>
                        <?= Repository::getSome($db, 'categories', 'id', $car_data->cat_id)[0]->name ?>
                    </strong>
                </td>
            </tr>
            <tr>
                <td>Пробег</td>
                <td>
                    <strong>
                        <?= $car_data->mileage ?> км.
                    </strong>
                </td>
            </tr>
            <tr>
                <td>Цвят</td>
                <td>
                    <strong>
                        <?= Repository::getSome($db, 'colors', 'id', $car_data->color_id)[0]->color ?>
                    </strong>
                </td>
            </tr>
            <tr>
                <td>За контакти</td>
                <td>
                    <strong>
                        <?= Repository::getSome($db, 'users', 'id', $car_data->user_id)[0]->first_name . ' ' .
                        Repository::getSome($db, 'users', 'id', $car_data->user_id)[0]->last_name ?>
                    </strong>
                </td>
            </tr>
            <tr>
                <td>Телефон</td>
                <td>
                    <strong>
                        <?= $car_data->phone ?>
                    </strong>
                </td>
            </tr>
        </table>
    </div>
</div>
<hr>
<div class="modal-body row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <h3>Описание</h3>
        <p> <?= $car_data->description ?></p>
        <h3>Налични екстри</h3>
        <?= HTMLBuilder::extrasBuilder(Repository::extrasDecoder($db, $car_data->extras)) ?>
    </div>
</div>
