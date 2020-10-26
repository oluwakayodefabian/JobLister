<?php $this->load->view('templates/header');?>
<div id="main-wrapper">
        <div class="grid-container">
            <div class="side-bar">
            <div class="side-bar">
                <a href="<?=site_url('categories/manage')?>">Manage Categories</a>
                <a href="<?=site_url('jobs/manage')?>">Manage Jobs</a>
            </div>
            </div>
            <div class="main-bar">
                <h1>Manage Jobs</h1>
                <?php if (function_exists(success_message()))
                        {
                            echo success_message();
                        }
                        elseif (function_exists(error_message()))
                        {
                            echo error_message();
                        }
                ?>
                <table>
                    <thead>
                        <th>SN</th>
                        <th>Title</th>
                        <th>Company</th>
                        <th>Date</th>
                        <th colspan="2">Action</th>
                    </thead>
                    <tbody>
                        <?php foreach($jobs as $key=>$job):?>
                        <tr>
                            <td><?=$key + 1?></td>
                            <td><?=$job->job_title?></td>
                            <td><?=$job->company?></td>
                            <td><?=format_date($job->created_at)?></td>
                            <td><a href="<?=site_url('jobs/edit/'.$job->id)?>" class="edit">Edit</a></td>
                            <td><a href="<?=site_url('jobs/delete/'.$job->id)?>" class="delete">Delete</a></td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $this->load->view('templates/footer')?>