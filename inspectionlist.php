<?= $this->extend('layouts/inspection'); ?>

<!-- putting the data into the section -->
<?= $this->section('content'); ?>

    <style>
        .infos{
            width: 75%;
            margin-left: 10%;
            margin-top: 5%;
        }

        .insp_check{
            margin-left: 40%;
        }
        body{
            
            background: linear-gradient(to right, rgb(182, 244, 146), rgb(51, 139, 147));
        }

        .search{
            bottom: 0;
            position: absolute;
        }

    </style>
<body>
    

    <br>
    <a href="<?= site_url("/inspection") ?>">Back</a>
    <br><br>
    <h2>Site Inspection List</h2>

    <?php if (current_user()->role_id != 1){ ?>
    <section class="infos">
  
                                    
        <?= form_open("/inspection/inspectionlist") ?>
            <div class="form-row row">
                <div class="col">
                    <label class="label" for="">Site :</label>
                    <select class="form-select" id="site_id" name="site_id">
                        <option value="All">All</option>
                        <?php foreach($sites as $site): ?>
                            <option value="<?= $site->site_id ?>"><?= $site->site_name ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col">
                    <label class="label" for="">Entered By :</label>
                    <select class="form-select" id="user_id" name="user_id">
                        <option selected>All</option>
                        <?php foreach($users as $user): ?>
                            <option value="<?= $user->user_id ?>"><?= $user->name ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col">
                    <label class="label" for="">Date :</label>
                    <div class="row">
                        <div class="col"> 
                        <select class="form-select" id="inlineFormCustomSelect" name="month">
                            <option value="All" selected>All</option>
                            <option value="1">January</option>
                            <option value="2">February</option>
                            <option value="3">March</option>
                            <option value="4">April</option>
                            <option value="5">May</option>
                            <option value="6">June</option>
                            <option value="7">July</option>
                            <option value="8">August</option>
                            <option value="9">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                        </div>
                        <div class="col">
                        <select class="form-select" id="inlineFormCustomSelect" name="year">
                            <option value="All" selected>All</option>
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                        </select>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <label class="label" for=""></label><br>
                    <button type="submit" class="btn btn-light search">Search</button>
                </div>
            </div>
        </form>

    </section>
    <?php } ?>



    <section class="infos">

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Site</th>
                    <th>Work Area</th>
                    <th>Inspector</th>
                    <th>Entered By</th>
                    <th>Total<br>Interventions</th>
                    <th>Outstanding ?</th>
                    <th>Inspection</th>
                    <th>Attachment</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($inspections as $inspection): ?>    
                    <tr>
                        <td><?= changeDateFormat($inspection->date) ?></td>

                        <?php foreach($sites as $site): ?>
                            <?php if($site->site_id == $inspection->site_id): ?>
                                <td><?= $site->site_name ?></td>
                            <?php endif; ?>            
                        <?php endforeach; ?>

                        <td><?= $inspection->work_area ?></td>
                        <td><?= $inspection->inspection_inspector ?></td>
                        <td><?= $inspection->user_id ?></td>

                        <?php $countinter = 0; ?>
                        <?php foreach($interventions as $intervention): ?>
                            <?php if($intervention->inspection_id == $inspection->inspection_id): ?>
                                <?php $countinter += $intervention->intervention_nb; ?>
                            <?php endif; ?>            
                        <?php endforeach; ?>
                        <td><?= $countinter ?></td>
                        <td></td>
                        <td><a href="<?= site_url("/inspection/show/$inspection->inspection_id") ?>">View</a></td>
                        <td><a href="<?= site_url("/inspection/show/$inspection->inspection_id") ?>">View</a></td>
                    </tr>
                    <?php endforeach; ?>                
            </tbody>
        </table>

    </section>
    </body>

    <!DOCTYPE html>
<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<body>

<canvas id="myChart" style="width:100%;max-width:600px"></canvas>

<script>
var xValues = ["PPE", "work at height", "Site set up", "Hot work", "Fire precautions"];
var yValues = [55, 49, 44, 24, 15];
var barColors = ["red", "green","blue","yellow","black"];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Top 5 Positive Interventions by %"
    }
  }
});
</script>

</body>
</html>



<?= $this->endSection();  ?>
