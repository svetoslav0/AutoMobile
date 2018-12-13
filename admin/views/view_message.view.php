<div class="modal-body row">
    <div class="col-md-2"></div>
    <table>
        <tr>
            <td>От:</td>
            <td>
                <strong>
                    <?= $sender_first_name . ' ' . $sender_last_name ?><br>
                    <?= $sender_email ?>
                </strong>
            </td>
        </tr>
        <tr>
            <td>Заглавие:</td>
            <td>
                <strong><?= $title ?></strong>
            </td>
        </tr>
        <tr>
            <td>Съобщение:</td>
            <td>
                <?= $content ?>
            </td>
        </tr>
    </table>
</div>