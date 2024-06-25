<!DOCTYPE html>
<html>
<head>
    <title>Edit Paper</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-light bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand text-light">
                <img src="<?php echo e(asset('images/b.png')); ?>" alt="" width="30" height="30" class="img-circle elevation-3 d-inline-block align-text-top">
                SOLID Submission
            </a>
        </div>
    </nav>
    <div class="card text-left">
        <img class="card-img-top" src="holder.js/100px180/" alt="">
        <div class="card-header">
            <b>Edit</b> | Edit Submission
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('papers.update', $paper->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" class="form-control" name="author" required<?php echo e($paper->author); ?>>
                </div>
                <div class="form-group">
                    <label for="topic">Topic</label>
                    <input type="text" class="form-control" name="topic" required<?php echo e($paper->topic); ?>>
                </div>
                
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
<?php /**PATH /home/shinka1/fnl-crud/resources/views/papers/edit.blade.php ENDPATH**/ ?>