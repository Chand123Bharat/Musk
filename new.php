<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Site</title>
    <style>
.show{
            margin-left:300px;
            margin-right: 250px;
            max-width: 600px;
            margin-top: 20px;
  border-radius: 30px;
  border-color: gray;
  overflow: hidden;
  padding: 55px 55px 37px 55px;
  box-shadow: 5px 10px 8px 10px #888888;

  background: linear-gradient(to right, rgb(182, 244, 146), rgb(51, 139, 147));
  text-align: center;
  text: size 20px;

        }
        .back{
  border: none;
  color: white;
  padding: 10px 15px;
  text-align: center;
  text-decoration: underline;
  display: inline-block;
  font-size: 20px;
  border-radius: 5px 10px;
    </style>
    
</head>
<body style= "background-color:powderblue;">

<?= $this->extend('layouts/inspection'); ?>

<!-- putting the data into the section -->
<?= $this->section('content'); ?>
<div class="show">
<br>
    <a href="<?= site_url("/inspection") ?>">Back</a>
    <br><br>
    <?= form_open("/site/create") ?>

        <div>
            <label style="font-size: 20px; font-weight: bold;" for="site_name">Site Name :</label>
            <input style="padding: 5px;"  type="text" name="site_name" id="site_name" placeholder="Enter site name">
        </div>
        <br>

        <button onclick="alert('Site added successfully')" style="background-color:aqua; padding: 10px 20px; text-align: center; border-radius: 5px;" class="btn bg-primary btn-primary">Send</button>

    </form> 
    </div>

</body>
</html>