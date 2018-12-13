<?php foreach ($ads_data as $data) : ?>
<div class="modal-body row">
    <div class="col-md-1"></div>
    <div class="col-md-3">
        <img src="../uploads/<?= $data->image ?>" alt="car_image" width="300">
    </div>
    <div class="col-md-5">
        <h4><?= $data->brand ?></h4>
        <h6><?= $data->model ?> <?= $data->price ?> лв.</h6>
        <p><?= $data->mileage ?> км. Град:
            <?= Repository::getSome($db, 'towns', 'id', $data->town_id)[0]->town ?>
        </p>

    </div>
</div>
<?php endforeach; ?>