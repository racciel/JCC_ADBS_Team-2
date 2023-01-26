<?php 
    require('header.php');
    $username = $_GET['username'];
    $query = "SELECT Users_roles.*, role.role_name 
    FROM Users_roles
    JOIN role
    ON role.role_id = users_roles.role_id
    WHERE Users_roles.user_name = '$username';";

    $result = pg_query($conn, $query);
?>
<br><br>
<form style="padding: 2%; color: white; width:50%; border-radius:25px; text-align:center; margin: 0 auto; background-color: lightslategrey;" method="POST" action="giveRoleToUser.php">
    <label>User: </label> <?php echo $username ?> <br>
    <input type="hidden" value="<?php echo $username ?>" name="username">
    <label>List of roles:</label>
    <?php 
    if($result) {
        echo "<ol>";
        while($row = pg_fetch_row($result)) {
            //echo $row[1];
            echo "<listyle='all: unset;'>".$row[4]." <a style='color:lightgrey' href='remove_role.php?username=$username&permission=$row[1]'>remove</a></li><br>";
        }
        echo "</ol>";
    }
    ?>


    <br><br>
    <label>Grant a role: </label>
    <select id="roles" name="givenRole">
        <option value="-">-</option>
        <?php
        $result2 = pg_query($conn, "SELECT * FROM role;");
        while ($row2 = pg_fetch_row($result2)) {
            echo "<option value='$row2[0]'>$row2[2]</option>";
        }
        ?>
    </select>
    <br><label>Expire at: </label> <input type="datetime-local" name="expired"><br>

    <br><input type="submit" value="Add">
</form>
<br><br>
<?php
    //echo $username;


    require('footer.php');

?>