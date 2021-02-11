<link href="<?php echo e(URL::asset('css/new.css')); ?>" rel="stylesheet">


<!-- Page Header -->
<header class="masthead" style="background-image: url('<?php echo e($actuality->picture_url); ?>')">
    <div class="filtre">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1><?php echo e($actuality->title); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<!-- Main Content -->
<div class="container">
    <div class="row">

        <div class="col">
            <p>
                <?php echo e($actuality->content); ?>

            </p>
            <div class="btn d-flex justify-content-end">
                <a href="<?php echo e($actuality->link_url); ?>" class="btn btn-primary mb-3">Je veux voir ça !</a>
            </div>
        </div>

    </div>
</div>

<?php echo $__env->make('/ui/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp64\www\ProjectLara\projectlara\resources\views/actuality/show.blade.php ENDPATH**/ ?>