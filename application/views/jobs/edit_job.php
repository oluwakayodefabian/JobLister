<?php $this->load->view('templates/header.php')?>
    <div id="main-wrapper">
        <div class="form-group">
            <h2>Edit Job Listing</h2>
            <?php foreach ($edit_jobs as $data):?>
                <?=form_open('jobs/update')?>
                    <input type="hidden" name="id" value="<?=$data->id?>">
                    <div>
                        <p>Company</p>
                        <input type="text" name="company" class="input-text" value="<?=$data->company?>">
                    </div>
                    <div>
                        <p>Category</p>
                    <select name="category_id" id="" class="input-text">
                        <option value="0">Choose a Category</option>
                        <?php foreach ($categories as $category):?>
                                    <?php if(!empty($data->category_id) && $data->category_id === $category->id):?>
                                        <option selected value="<?=$category->id;?>"><?=$category->name?></option>
                                    <?php else:?>
                                        <option value="<?=$category->id?>"><?=$category->name?></option>
                                    <?php endif;?> 
                            <?php endforeach;?>
                    </select>
                    </div>
                    <div>
                        <p>Job Title</p>
                        <input type="text" name="job_title" class="input-text" value="<?=$data->job_title?>">
                    </div>
                    <div class="text-area">
                        <p>Description</p>
                        <textarea name="decription" id="body" class="input-text"><?=html_entity_decode($data->description)?></textarea>
                    </div>
                    <div>
                        <p>Salary</p>
                        <input type="text" name="salary" class="input-text" value="<?=$data->salary?>">
                    </div>
                    <div>
                        <p>Location</p>
                        <input type="text" name="location" class="input-text" value="<?=$data->location?>">
                    </div>
                    <div>
                        <p>Contact user</p>
                        <input name="contact_user" type="text" class="input-text" value="<?=$data->contact_user?>">
                    </div>
                    <div>
                        <p>Contact Email</p>
                        <input type="text" name="contact_email" class="input-text" value="<?=$data->contact_email?>">
                    </div>
                    <div>
                        <button type="submit" class="btn-submit">Update</button>
                    </div>
                </form>
            <?php endforeach;?>
        </div>
    </div>
<?php $this->load->view('templates/footer.php')?>