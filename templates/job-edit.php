<?php include 'inc/header.php'; ?>
    <div class="single-container">
    <h2 class="page-header">Edit Job Listing</h2>
    <form method="post" action="edit.php?id=<?= $job->id; ?>">
        <div class="form-group">
            <label>Company</label>
            <input type="text" class="form-control" name="company" value="<?= $job->company; ?>"> 
        </div>
        <div class="form-group">
            <label>Category</label>
            <select type="text" class="form-control" name="category_id">
                <option value="0">Choose Category</option>
                    <?php foreach($categories as $category): ?>
                        <?php if($job->category_id == $category->id) : ?>
                            <option value="<?= $category->id; ?>" selected><?= $category->name; ?></option>
                        <?php else : ?>
                            <option value="<?= $category->id; ?>"><?= $category->name; ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Job Title</label>
            <input type="text" class="form-control" name="job_title" value="<?= $job->job_title; ?>"> 
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea type="text" class="form-control" name="description"><?= $job->description; ?></textarea> 
        </div>
        <div class="form-group">
            <label>Location</label>
            <input type="text" class="form-control" name="location" value="<?= $job->location; ?>"> 
        </div>
        <div class="form-group">
            <label>Salary</label>
            <input type="text" class="form-control" name="salary" value="<?= $job->salary; ?>"> 
        </div>
        <div class="form-group">
            <label>Contact User</label>
            <input type="text" class="form-control" name="contact_user" value="<?= $job->contact_user; ?>"> 
        </div>
        <div class="form-group">
            <label>Contact Email</label>
            <input type="text" class="form-control" name="contact_email" value="<?= $job->contact_email; ?>"> 
        </div>
        <input type="submit" class="btn btn-primary" value="submit" name="submit">
    </form>
    </div>

<?php include 'inc/footer.php'; ?>