<h2>My profile</h2>
<hr>
<table>
    <tr>
        <td>Username:</td>
        <td><?= $user_data->username ?></td>
    </tr>
    <tr>
        <td>First Name:</td>
        <td><?= $user_data->first_name ?></td>
    </tr>
    <tr>
        <td>Last Name:</td>
        <td><?= $user_data->last_name ?></td>
    </tr>
    <tr>
        <td>Email:</td>
        <td><?= $user_data->email ?></td>
    </tr>
</table>
<form action="../change_data.php" method="post">
    <input type="submit" name="changeData" value="Редактирай профила" /><br />
</form>
<form action="change_pass.php" method="post">
    <input type="submit" name="changePass" value="Промени паролата" /><br />
</form>
