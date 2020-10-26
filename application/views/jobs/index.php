<?php $this->load->view('templates/header.php')?>
    <div class="" id="main-wrapper">
        <div>

        </div>
        <?php 
        if(function_exists(success_message()))
        {
            echo success_message();
        }
        ?>
        <div class="find-job">
            <h1>FIND A JOB</h1>
            <form action="<?=site_url('Home')?>" method='GET'>
                <div class="select">
                    <select name="category_id" id="" class="text-input">
                        <option value="0">Choose A category</option>
                        <?php foreach($categories as $category):?>
                            <option value="<?=$category->id?>"><?=$category->name?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div>
                <button type="submit" class="btn">FIND</button>
            </div>
            </form>
        </div>
        <div class="info">
            <h3 class="latest-jobs"><?=$title?></h3>
            <?php foreach ($jobs as $job):?>
            <div class="job-info">
                <h2><?=$job->contact_user?>(<?=$job->location?>)</h2>
                <p><?=html_entity_decode($job->description)?></p>
                <p>Category: <?=$job->job_title?></p>
                <a href="<?=site_url('home/single/'.$job->id)?>" class="view-btn">View</a>
            </div>
            <?php endforeach;?>
        </div>
        <p style="text-align: right; margin-right: 4em;"><a href="#">Back to top&nbsp;</a><i class="fas fa-arrow-up"></i></p>
    </div>
<?php $this->load->view('templates/footer.php')?>