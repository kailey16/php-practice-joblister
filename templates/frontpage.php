<?php include 'inc/header.php'; ?>

<div class="jumbotron main-container">
    <div class="container">
        <h1 class="display-3">Find A Job</h1>
        <form method="GET" action="index.php" class="find-form">
            <select name="category" class="form-control">
                <option value="0">Choose Category</option>
                <?php foreach($categories as $category): ?>
                    <option value="<?= $category->id; ?>"><?= $category->name; ?></option>
                <?php endforeach; ?>
            </select>
            <br>
            <input type="submit" class="btn btn-lg btn-success" value="FIND">
        </form>
    </div>
</div>

<div class="container">

    <h1><?= $title; ?></h1>
    <br>
    <?php foreach($jobs as $job) : ?>
    <div class="row marketing">
        <div class="col-md-10">
            <h2 class="job-title"><?= $job->job_title; ?></h2>
            <p><?= $job->description; ?></p>
        </div>
        <div clas="cold-md-2">
            <a class="btn btn-secondary" href="job.php?id=<?= $job->id; ?>" role="button">View &raquo;</a>
        </div>
    </div>
    <?php endforeach; ?>

    <hr>
</div>

<?php include 'inc/footer.php'; ?>