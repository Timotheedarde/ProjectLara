<!-- Page Header -->
<header class="masthead">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading">
                    <h1>Les Categories</h1>
                    <span class="subheading">Édition</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <form method="post" action="<?php echo e(route('track.update', $track->id)); ?>" class="col my-3 border p-4">
            <?php echo csrf_field(); ?>
            <?php echo method_field('put'); ?>
            <div class="form-group">
                <label for="form_title">Titre</label>
                <input value="<?php echo e(old('title', $track->title)); ?>" name="title"
                       type="text" step="1" min="0" id="form_title"
                       class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" />
                <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <label for="form_track_url">URL de l'upload</label>
                <input value="<?php echo e(old('track_url', $track->track_url)); ?>" name="track_url"
                       type="text" step="1" min="0" id="form_track_url"
                       class="form-control <?php $__errorArgs = ['track_url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" />
                <?php $__errorArgs = ['track_url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
            <a class="btn btn-secondary" href="<?php echo e(route('track.index')); ?>">Annuler</a>
        </form>
    </div>
</div>



<?php echo $__env->make('ui/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp64\www\ProjectLara\projectlara\resources\views/admin/track/edit.blade.php ENDPATH**/ ?>