<?php $this->load->view('templates/header.php')?>
    <div class="" id="main-wrapper">
        <div class="grid-container">
            <div class="side-bar">
                <a href="<?=site_url('categories/manage')?>">Manage Categories</a>
                <a href="<?=site_url('jobs/manage')?>">Manage Jobs</a>
            </div>
            <div class="main-bar">
                <?php if (validation_errors()):?>
                <div class="msg error">
                    <li><?=validation_errors()?></li>
                </div>
                <?php endif?>
                <?=form_open('categories/create')?>
                    <div class="input-box">
                        <p>Name</p>
                        <input type="text" name="name" value="<?=set_value('name')?>">
                    </div>
                    <div class="input-box">
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $this->load->view('templates/footer.php')?>