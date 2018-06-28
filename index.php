<?php require_once 'db_connect.php'; ?>
 
<!DOCTYPE html>
<html>
<head>
    <title>PHP CRUD</title>
 
    <style type="text/css">
        table {
            margin-top: 20px;
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {background-color: #f2f2f2;}
        </style>
 
    </style>
 
</head>
<body>
 
<div class="manageMember">
    <a href="create.php"><button type="button">Add Member</button></a>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Options</th>
                
            </tr>
        </thead>
        <tbody>
           <?php
            $sql = "SELECT * FROM member";
            $result = $connect->query($sql);
 
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>".$row['fname']."</td>
                        <td>".$row['lname']."</td>
                        <td>
                            <a href='edit.php?id=".$row['id']."'><button type='button'>Edit</button></a>
                            <a href='delete.php?id=".$row['id']."'><button type='button'>Remove</button></a>
                        </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='3'><center>No Data Avaliable</center></td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>
 
</body>
</html>