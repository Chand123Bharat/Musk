<?= $this->extend('layouts/inspection') ?>

<?= $this->section('content'); ?>

    <style>
        aru{
            background-color:green;
        }
        .infos{
            width: 75%;
            margin-left: 10%;
            margin-top: 5%;
        }

        .test{
            display:inline-flex;
            margin-top: 5%;
        }

        .insp_input{
            margin-left:5%;
        }

        .badge{
            width:130px;
            font-weight: 5;
        }

        .check{
            text-align: center;
        }

    </style>

    <body style="background:linear-gradient(to right, rgb(182, 244, 146), rgb(51, 139, 147));">
<aru>
    <br>
    
    <a href="<?= site_url("/inspection") ?>">Back</a>
    <br><br>
    <h2 style="color:white">View Inspection</h2>
    <div style="margin-right: 200px;" class="d-flex flex-row-reverse bd-highlight">
    </div>

        <section style="color:black" class="infos" name="">
            <div class="row">
                <div class="col">
                    <div class="form-group test">
                        <h5><span class="badge bg-primary">Work Area</span></h5>
                        <input type="text" class="form-control insp_input" name="work_area" value="<?= $inspection->work_area ?>" >
                    </div>
                    <div class="form-group test">
                        <h5><span class="badge bg-primary">Supervisor</span></h5>
                        <input type="text" class="form-control insp_input" name="inspection_supervisor" value="<?= $inspection->inspection_supervisor ?>">
                    </div> 
                    <div class="form-group test">
                        <h5><span class="badge bg-primary">Inspection Date</span></h5>
                        <input type="date" class="form-control insp_input" name="date" value="<?= $inspection->date ?>">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group test">
                        <h5><span class="badge bg-primary">Job Description</span></h5>
                        <input type="text" class="form-control insp_input" name="job_description" value="<?= $inspection->job_description ?>">
                    </div>
                    <div class="form-group test">
                    <h5><span class="badge bg-primary">Inspector</span></h5>
                        <input type="text" class="form-control insp_input" name="inspection_inspector" value="<?= $inspection->inspection_inspector ?>">
                    </div>
                    <br>
                </div>
            </div>
        </section>

        <section class="infos">

<table style="color:black" class="table table-bordered">
    <thead>
        <tr>
            <th>Inspection Type</th>
            <th>Nb. of Interventions</th>
            <th>Comment</th>
            <th>Is completed?</th>
            <th>Action taken</th>
        </tr>
    </thead>
    <tbody>
            <?php foreach($interventions as $intervention): ?>
                <tr>
                    <?php  foreach($inspectiontypes as $inspectiontype): 
                        if($intervention->inspection_type_id == $inspectiontype->inspection_type_id): ?>
                        <td><?= $inspectiontype->inspection_type_name ?></td>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    <td><?= $intervention->intervention_nb ?></td>
                    <td><?= $intervention->comment ?></td>
                    <td><?= $intervention->is_completed ?></td>
                    <td><?= $intervention->action_taken ?></td>
                </tr>
            <?php endforeach; ?>
        
    </tbody>
</table>
                        </aru>

</section>
                        </body>
                        <!DOCTYPE html>
<html>
<body>

<p>Click the button to print the current page.</p>


<button onclick="window.print()">Print this page</button>

</body>
</html>



<?= $this->endSection();  ?>