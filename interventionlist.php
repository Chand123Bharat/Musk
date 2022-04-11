<?= $this->extend('layouts/dashboard'); ?>

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

        
    </style>

    <br>
    <a href="<?= site_url("/inspection") ?>">Back</a>
    <br><br>
    <h2>All interventions</h2>


    <section class="infos">

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nb. of Interventions</th>
                    <th>Comment</th>
                    <th>Is completed?</th>
                    <th>Action taken</th>
                    <th>Inspection</th>
                    <th>Attachment</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

                <?php if ($interventionTab!=null){ ?>

                    <?php for($i=0;$i<sizeof($interventionTab);$i++): ?>
                        <?php if (isset($interventionTab[$i]->comment)){ ?>
                            <tr>
                                <td><?= $interventionTab[$i]->intervention_nb ?></td>
                                <td><?= $interventionTab[$i]->comment ?></td>
                                <td><?= $interventionTab[$i]->is_completed ?></td>
                                <td><?= $interventionTab[$i]->action_taken ?></td>
                                <td><a href="<?= site_url('/inspection/show/'.$interventionTab[$i]->inspection_id) ?>">View</a></td>
                                <td><?= $interventionTab[$i]->attachment ?></td>
                            </tr>
                            <?php }else{ ?>
                                <?php for($j=0;$j<sizeof($interventionTab[$i]);$j++): ?>
                                    <tr>
                                        <td><?= $interventionTab[$i][$j]->intervention_nb ?></td>
                                        <td><?= $interventionTab[$i][$j]->comment ?></td>
                                        <td><?= $interventionTab[$i][$j]->is_completed ?></td>
                                        <td><?= $interventionTab[$i][$j]->action_taken ?></td>
                                        <td><a href="<?= site_url('/inspection/show/'.$interventionTab[$i][$j]->inspection_id) ?>">View</a></td>
                                        <td><?= $interventionTab[$i][$j]->attachment ?></td>
                                    </tr>
                                <?php endfor; ?>
                            <?php } ?>
                    <?php endfor; ?> 

                <?php }else{ ?>

                    <?php foreach($interventions as $intervention): ?>
                        <tr>
                            <td><?= $intervention->intervention_nb ?></td>
                            <td><?= $intervention->comment ?></td>
                            <td><?= $intervention->is_completed ?></td>
                            <td><?= $intervention->action_taken ?></td>
                            <td><a href="<?= site_url('/inspection/show/'.$intervention->inspection_id) ?>">View</a></td>
                            <td><?= $intervention->attachment ?></td>
                            <td>
                                <a href="<?= site_url('/intervention/edit/'.$intervention->intervention_id) ?>">Edit</a>
                                <a href="<?= site_url('/intervention/delete/'.$intervention->intervention_id) ?>">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?> 

                <?php } ?>
                
            </tbody>
        </table>

    </section>


<?= $this->endSection();  ?>