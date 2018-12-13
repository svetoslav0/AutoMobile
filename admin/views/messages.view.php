<div class="modal-body row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <h4>Непрочетени съобщения</h4>
        <hr>
        <ul class="list-group list-group-flush">
            <?php foreach ($unseenMessages as $message) : ?>
                <li class="list-group-item">
                    <strong>
                        <a href="/admin/view_message.php?mess_id=<?= $message->id ?>">
                            <?= $message->title ?>
                        </a>
                    </strong>
                </li>
            <?php endforeach; ?>
        </ul>
        <br>
        <h4>Прочетени съобщения</h4>
        <hr>
        <ul class="list-group list-group-flush">
            <?php foreach ($seenMessages as $message) : ?>
                <li class="list-group-item">
                    <a href="/admin/view_message.php?mess_id=<?= $message->id ?>">
                        <?= $message->title ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
