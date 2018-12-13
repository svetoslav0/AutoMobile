<form action="" method="post">
    <table>
        <tr>
            <td>Потребителско име: </td>
            <td><input type="text" name="username" value="<?= $username ?>" /></td>
        </tr>
        <tr>
            <td>Име:</td>
            <td><input type="text" name="first_name" value="<?= $first_name ?>" /></td>
        </tr>
        <tr>
            <td>Фамилия:</td>
            <td><input type="text" name="last_name" value="<?= $last_name ?>" /></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="text" name="email" value="<?= $email ?>" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Промени" name="updateData"></td>
        </tr>
    </table>
</form>