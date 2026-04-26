<?php include "./head.php";?>


<table border="1" width="100%">
    <thead>
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Feedback</th>
    </tr>

    </thead>
    <tbody>
    <?php
    
        $sql = "SELECT * FROM users";

        $query = mysqli_query($connection, $sql);

        if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)) {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['Name']."</td>";
                echo "<td>".$row['Email']."</td>";
                echo "<td>".$row['Mssg']."</td>";
                echo "<td><a href='./edit.php?id=".$row['id']."'>Edit</a></td>";
                echo "</tr>";
            }
        }else{
            echo "no record found";
        }
    ?>
    </tbody>
</table>

<?php include "./footer.php";
?>    
