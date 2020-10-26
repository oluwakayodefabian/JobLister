<?php $this->load->view('templates/header.php')?>
    <div id="main-wrapper">
        <?php foreach ($single_jobs as $single_job): ?>
        <h1 class="single-header">Job Information</h1>
        <div class="container">
            <h1><?=$single_job->job_title?></h1>
            <p class="date">posted by <?=$single_job->contact_user?> on <?=format_date($single_job->created_at)?></p>
            <p class="para">
                <?=html_entity_decode($single_job->description)?>
            </p>
            <div class="more-info">
                <p><strong>Company:</strong>&nbsp;<?=$single_job->company?></p>
                <p><strong>Salary:</strong>&nbsp;<?=$single_job->salary?></p>
                <p><strong>Contact Email:</strong>&nbsp;<?=$single_job->contact_email?></p>
                <p><strong>Location</strong>&nbsp;<?=$single_job->location?></p>
            </div>
        </div>
        <a href="<?=site_url('Home')?>" style="color: #00ff00; font-size: 1.5em;margin-left: 8em;">Go Back</a>
        <?php endforeach;?>
    </div>
<?php $this->load->view('templates/footer.php')?>