<link href="<?php echo e(URL::asset('css/jukebox.css')); ?>" rel="stylesheet">

<!-- Page Header -->
<header class="masthead" style="background-image: url('img/jukebox-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading">
                    <h1>Jukebox</h1>
                    <span class="subheading">Discovering my soundTracks</span>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container-fluid ">
    <div class="row">
        <div class="col">
            <?php $__currentLoopData = $tracks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $track): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <br>
                <div class="container-audio">
                    <h3><?php echo e($track->title); ?></h3>
                    <audio controls>
                        <source src="<?php echo e($track->track_url); ?>" type="audio/ogg">
                        <source src="<?php echo e($track->track_url); ?>" type="audio/mp3">
                        Your browser dose not Support the audio Tag
                    </audio>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>

<?php echo $__env->make('/ui/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp64\www\ProjectLara\projectlara\resources\views/jukebox.blade.php ENDPATH**/ ?>