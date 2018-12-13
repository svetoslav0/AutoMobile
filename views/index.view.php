<h2>Всички обяви:</h2>
<hr>
<?php foreach ($ads_data as $data) : ?>
    <div class="modal-body row">
        <div class="col-md-1"></div>
        <div class="col-md-4">
            <a href="../view-ad.php?car=<?= $data->id ?>">
                <img src="../uploads/<?= $data->image ?>" alt="car_image" width="370">
            </a>
        </div>
        <div class="col-md-5">
            <h4>
                <a href="../view-ad.php?car=<?= $data->id ?>">
                    <?= $data->brand ?>
                </a>
            </h4>
            <h6>
                <?= $data->model ?>
                <kbd>
                    <?= $data->price ?> лв.
                </kbd>
            </h6>
            <p><?= $data->mileage ?> км. Град:
                <?= Repository::getSome($db, 'towns', 'id', $data->town_id)[0]->town ?>
            </p>
            <h6>Телефон: <?= $data->phone ?></h6>
            <p>
                <?php if (strlen($data->description) > 200) {
                    echo substr($data->description, 0, 210) . ' . . .';
                }else{
                    echo $data->description;
                }
            ?>
            </p>

        </div>
    </div>
<?php endforeach; ?>