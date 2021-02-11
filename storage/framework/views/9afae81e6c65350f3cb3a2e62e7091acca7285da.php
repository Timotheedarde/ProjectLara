<link href="<?php echo e(URL::asset('css/news.css')); ?>" rel="stylesheet">


<!-- Page Header -->
<header class="masthead" style="background-image: url('img/news-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-heading">
                    <h1>Follows my news</h1>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Post Content -->

<div class="container">
    <div class="row">

        <?php $__currentLoopData = $actualities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $actuality): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4">
            <div class="single-blog-item">
                <div class="blog-thumnail">
                    <a href="<?php echo e(URL::to('actuality')); ?>/<?php echo e($actuality->id); ?>"><img src="<?php echo e($actuality->picture_url); ?>" alt="blog-img"></a>
                </div>
                <div class="blog-content">
                    <h4><a href="#"><?php echo e($actuality->title); ?></a></h4>
                </div>
                <span class="blog-date"><?php echo e($actuality->created_at->format('d/m/y')); ?></span>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
</div>

<hr>


<?php echo $__env->make('/ui/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp64\www\ProjectLara\projectlara\resources\views/news.blade.php ENDPATH**/ ?>