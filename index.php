<?php
/**
 * Created by PhpStorm.
 * User: Svetoslav
 * Date: 24-Nov-18
 * Time: 10:27 AM
 */

session_start();
spl_autoload_register();
include "db_connect.php";

if (!isset($_SESSION['id'])){
    header("Location: login.php");
    exit;
}

include_once('views/header.logged.view.php');
?>


<p>
    <?php
        var_dump(Repository::getAll($db, 'ads'));

    ?>
</p>


<?php
include_once('views/footer.view.php');
?>

