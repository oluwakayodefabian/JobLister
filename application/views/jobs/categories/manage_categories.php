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
                <h1>Manage Job Categories</h1>
                <?php if (function_exists(success_message()))
                        {
                            echo success_message();
                        }
                ?>
                <table>
                    <thead>
                        <th>SN</th>
                        <th>Name</th>
                        <th>Date</th>
                        <th colspan="2">Action</th>
                    </thead>
                    <tbody>
                        <?php foreach($categories as $key=>$category):?>
                        <tr>
                            <td><?=$key + 1?></td>
                            <td><?=$category->name?></td>
                            <td><?=format_date($category->date_created)?></td>
                            <td><a href="<?=site_url('categories/edit/'.$category->id)?>" class="edit">Edit</a></td>
                            <td><a href="<?=site_url('categories/delete/'.$category->id)?>" class="delete">Delete</a></td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $this->load->view('templates/footer')?>