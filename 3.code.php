<!DOCTYPE html>
<html>
<head>
    <title>PHP INSERT UPDATE DELETE SEARCH</title>
</head>
<body>
    <form action="php_insert_update_delete_search.php"  method="post">
        <input type="number" name="id" placeholder="id" value="<?php echo $id;?>"><br><br>
         <input type="text" name="firstname" placeholder="first name" value="<?php echo $firstname;?>"><br><br>
         <input type="text" name="lastname" placeholder="last name" value="<?php echo $lastname;?>"><br><br>
         <input type="number" name="age" placeholder="age" value="<?php echo $age;?>"><br><br>
         <div>
            <input type="submit" name="insert" value="ADD">
            <input type="submit" name="update" value="UPDATE">
            <input type="submit" name="delete" value="DELETE">
            <input type="submit" name="search" value="FIND">
        </DIV>
    </form>
</body>
</html>
