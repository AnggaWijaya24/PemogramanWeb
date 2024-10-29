<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    include "MySQLI.php";
?>
<body>
    <table border="1">
        <caption>Biodata</caption>
        <tr>
            <th>no</th>
            <th>npm</th>
            <th>nama</th>
            <th>prodi</th>
        </tr>
        <?php
        $query = "SELECT * FROM biodata";
        $result = $mysqli-> query($query);
        $no = 0;
        while ($row = $result->fetch_assoc()) {
        $no++

           ?> 
           <tr>
               <td><?php echo $no ?></td>
               <td><?php echo $row['npm']; ?></td>
               <td><?php echo $row['nama']; ?></td>
               <td><?php echo $row['prodi']; ?></td>
           </tr> 
           <?php   
        }
        ?>
    </table>
    
</body>
</html>