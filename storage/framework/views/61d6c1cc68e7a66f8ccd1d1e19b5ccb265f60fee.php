<?php $__env->startSection('head'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.5/examples/dashboard/dashboard.css" />

    <!-- Custom fonts for this template -->
    <link href="<?php echo e(URL::asset('vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="<?php echo e(URL::asset('css/clean-blog.css')); ?>" rel="stylesheet">


    <title><?php echo $__env->yieldContent('pageTitle', 'Zartist'); ?></title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <?php echo $__env->make('/ui/parts/nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('/ui/parts/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php $__env->startSection('js'); ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

        <script src="<?php echo e(URL::asset('vendor/jquery/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('js/jqBootstrapValidation.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('js/contact_me.js')); ?>"></script>

        <script src="<?php echo e(URL::asset('js/clean-blog.js')); ?>"></script>
    <?php echo $__env->yieldSection(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('/ui/base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp64\www\ProjectLara\projectlara\resources\views//ui/layout.blade.php ENDPATH**/ ?>