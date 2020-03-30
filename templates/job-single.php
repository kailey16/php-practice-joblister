<?php include 'inc/header.php'; ?>

<div class="single-container">
<h2 class="page-header"><?php echo $job->job_title; ?> (<?= $job->location; ?>)</h2>

<small>Posted By <?= $job->contact_user; ?> on <?= $job->post_date; ?></small>
<hr>

<p class="lead"><?= $job->description; ?></p>

<ul>
    <li class="list-group-item">Company: <strong><?= $job->company; ?></strong></li>
    <li class="list-group-item">Salary: <strong><?= $job->salary; ?></strong></li>
    <li class="list-group-item">Contact Email: <strong><?= $job->contact_email; ?></strong></li>
</ul>
<br><br>
<a href="index.php" class="btn btn-success">Go Back</a>
<br><br>

<div class="well">
    <a href="edit.php?id=<?= $job->id; ?>" class="btn btn-primary">Edit</a>

    <form style="display:inline;" method="post" action="job.php">
        <input type="hidden" name="del_id" value="<?= $job->id; ?>">
        <input type="submit" class="btn btn-danger" value="Delete">
    </form>

</div>

</div>

<?php include 'inc/footer.php'; ?>