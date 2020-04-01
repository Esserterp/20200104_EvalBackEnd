<html>

<body>
    <?php
    include_once('database.php');
    $db = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
    $query = "SELECT * FROM housing";
    $result = mysqli_query($db, $query);
    ?>
    <table border="1" cellspacing="2" cellpadding="2">
        <tr>
            <td>Title</td>
            <td>Address</td>
            <td>City</td>
            <td>PostCode</td>
            <td>area</td>
            <td>Price</td>
            <td>Photo</td>
            <td>Type</td>
            <td>Description</td>
        </tr>';
        <?php
        while ($row = $result->fetch_assoc()) {
            $title = $row["title"];
            $address = $row["address"];
            $city = $row["city"];
            $postcode = $row["pc"];
            $area = $row["area"];
            $price = $row["price"];
            $photo = $row["photo"];
            $type = $row["type"];
            $descrp = $row["description"];

            echo '<tr>
            <td>' . $title . '</td>
            <td>' . $address . '</td>
            <td>' . $city . '</td>
            <td>' . $postcode . '</td>
            <td>' . $area . 'm²</td>
            <td>' . $price . '€</td>
            <td><img src="' . $photo . '" height="42" width="42"></td>
            <td>' . $type . '</td>
            <td>' . $descrp . '</td>
        </tr>';
        }
        $result->free();
        ?>
</body>

</html>