<?php 
 
require_once 'db_connect.php';
 
if($_GET['id']) {
    $id = $_GET['id'];
 
    $sql = "SELECT * FROM member WHERE id = {$id}";
    $result = $connect->query($sql);
 
    $data = $result->fetch_assoc();
 
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Edit Member</title>
 
    <style type="text/css">
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 50%;
        }
 
        table tr th {
            padding-top: 20px;
        }
    </style>
 
</head>
<body>
 
<fieldset>
    <legend>Edit Member</legend>
 
    <form action="edit_process.php" method="post">
        <table cellspacing="0" cellpadding="0">
            <tr>
                <th>First Name</th>
                <td><input type="text" name="fname" placeholder="First Name" value="<?php echo $data['fname'] ?>" /></td>
            </tr>     
            <tr>
                <th>Last Name</th>
                <td><input type="text" name="lname" placeholder="Last Name" value="<?php echo $data['lname'] ?>" /></td>
            </tr>
            <tr>
                <input type="hidden" name="id" value="<?php echo $data['id']?>" />
                <td><button type="submit">Save Changes</button></td>
                <td><a href="index.php"><button type="button">Back</button></a></td>
            </tr>
        </table>
    </form>
 
</fieldset>
 
</body>
</html>
 
<?php
}
?>