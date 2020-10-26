<?php $this->load->view('templates/header.php')?>
    <div id="main-wrapper">
        <div class="form-group">
            <h2>Create Job Listing</h2>
            <?=form_open('jobs/create')?>
                <div>
                    <p>Company</p>
                    <input type="text" name="company" class="input-text" value="<?=set_value('company')?>">
                    <?=form_error('company', '<div style="color: red">', '<div>')?>
                </div>
                <div>
                    <p>Category</p>
                   <select name="category_id" id="" class="input-text">
                       <option value="0">Choose a Category</option>
                       <?php foreach ($categories as $category):?>
                                <?php if(!empty($this->input->post('category_id')) && $this->input->post('category_id') === $category->id):?>
                                    <option selected value="<?php echo $category->id;?>"><?php echo $category->name;?></option>
                                <?php else:?>
                                    <option value="<?php echo $category->id;?>"><?php echo $category->name;?></option>
                                <?php endif;?> 
                        <?php endforeach;?>
                   </select>
                </div>
                <div>
                    <p>Job Title</p>
                    <input type="text" name="job_title" class="input-text" value="<?=set_value('job_title')?>">
                    <?=form_error('job_title', '<div style="color: red">', '<div>')?>
                </div>
                <div class="text-area">
                    <p>Description</p>
                    <textarea name="description" id="body" class="input-text"><?=set_value('description')?></textarea>
                    <?=form_error('description', '<div style="color: red">', '<div>')?>
                </div>
                <div>
                    <p>Salary</p>
                    <input type="text" name="salary" class="input-text" <?=set_value('salary')?>>
                    <?=form_error('salary', '<div style="color: red">', '<div>')?>
                </div>
                <div>
                    <p>Location</p>
                    <input type="text" name="location" class="input-text" value="<?=set_value('location')?>">
                    <?=form_error('location', '<div style="color: red">', '<div>')?>
                </div>
                <div>
                    <p>Contact user</p>
                    <input type="text" name="contact_user" class="input-text" value="<?=set_value('contact_user')?>">
                    <?=form_error('contact_user', '<div style="color: red">', '<div>')?>
                </div>
                <div>
                    <p>Contact Email</p>
                    <input type="text" name="contact_email" class="input-text" value="<?=set_value('contact_email')?>">
                    <?=form_error('contact_email', '<div style="color: red">', '<div>')?>
                </div>
                <div>
                    <button type="submit" class="btn-submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
<?php $this->load->view('templates/footer.php')?>
</body>
</html>