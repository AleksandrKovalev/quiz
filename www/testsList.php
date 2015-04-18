<?php
include "includes/config.php";

?>
<html>
<head>
    <title>Список тестов</title>
    <link href="css/style.css" rel="stylesheet"></link>
</head>
<body>
<?php
$query = "SELECT * FROM `testlist`";
if ($res = mysqli_query($db, $query))
{
    ?>
    <div>
        Список тестов:
    </div>
    <ul>
        <?php
        while ($row = mysqli_fetch_array($res)) {
            echo "<li>" . $row['name'] . "</li>";
        }
        ?>
    </ul>
<?php } ?>
</body>
</html>