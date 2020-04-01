<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <form name="pleineform" method="post" action="">
        <?php include('errors.php'); ?>
        <table>
            <tr>
                <td>Title:</td>
                <td><input type="text" name="title" value="<?php echo $title; ?>"></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type="text" name="address" value="<?php echo $address; ?>"></td>
            </tr>
            <tr>
                <td>City:</td>
                <td><input type="text" name="city" value="<?php echo $city; ?>"></td>
            </tr>
            <tr>
                <td>PostCode:</td>
                <td><input type="text" name="postcode" value="<?php echo $postcode; ?>"></td>
            </tr>
            <tr>
                <td>Area:</td>
                <td> <input type="number" name="area" value="<?php echo $area; ?>">
                </td>
            </tr>
            <tr>
                <td>Price:</td>
                <td><input step="0.1" type="number" name="price" value="<?php echo $price; ?>">
                </td>
            </tr>
            <tr>
                <td>Select image to upload:</td>
                <input type="file" name="photo" id="photo">
                <input type="submit" value="photo" name="submit">
            </tr>
            <tr>
                <td>Description:</td>
                <td><textarea rows="4" cols="50" name="descrp" value="<?php echo $descrp; ?>"></textarea></td>
            </tr>
        </table>
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-secondary active">
                <input type="radio" name="radio" id="sale" value="sale" checked>Sale
            </label>
            <label class="btn btn-secondary">
                <input type="radio" name="radio" id="rent" value="rent">Rent
            </label>
        </div><br>
        <button type="submit" class="btn btn-primary" name="reg_house">Add House</button>
    </form>
</body>

</html>