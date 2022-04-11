<?= $this->extend('layouts/inspection'); ?>

<!-- putting the data into the section -->
<?= $this->section('content'); ?>

    <style>
        body{
            background: linear-gradient(to right, rgb(182, 244, 146), rgb(51, 139, 147));;
        }
        
        .menu{
            margin-top: 5%;
        }
        .dashboard-stats {
            background: #9152f8;
  background:powderblue;
  margin: 2%;
  padding: 15px;
  border: 1px solid #02b6ff;
  cursor: pointer;
  width: 300px;
  border: 5px black;
  padding: 50px;
}
        .menu_insp{
            margin-bottom: 3%;
        }
        .container {
  flex-direction: row | row-reverse | column | column-reverse;
}

    </style>
<body >

<br>
        <div class="container">
    <?php if (current_user()->role_id == 1){ ?>
        <a class="btn" href="<?= site_url("/inspection/newinspection") ?>" class=" container btn dashboard-stats btn-secondary" role="button">New Site Inspection</a><br>
    <?php } ?>
    </div>
    
    <!-- To be checked for specific permissions as per role table -->
    <div>
    <?php if (current_user()->role_id == 0){ ?>
        <a href="<?= site_url("/Site/new") ?>" class=" container dashboard-stats btn" role="button">Add Sites</a><br>
        <br>
        <a href="<?= site_url("/Signup/new") ?>" class="btn container dashboard-stats " role="button">Add User</a><br><br>
    <?php } ?>
    </div>
    <div>
        
        <a href="<?= site_url("/inspection/inspectionlist") ?>" class="btn container dashboard-stats " role="button">Site Inspection List</a><br><br>
        <a href="<?= site_url("/inspection/newinspection") ?>" class="btn container dashboard-stats " role="button">Inspections Action List</a><br>
    </div>
    </div>

<?= $this->endSection();  ?>
</body>