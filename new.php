<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Inspection Type</title>
</head>
<body style="background-color:linear-gradient(to top right, #33ccff 0%, #ff99cc 75%);">
    <?= form_open("/inspectiontype/create") ?>

        <div>
            <label for="inspection_type_name">Inspection Type Name :</label>
            <input type="text" name="inspection_type_name" id="inspection_type_name">
        </div>

        <button class="bg-primary btn btn-primary">Send</button>

    </form> 

</body>
</html>