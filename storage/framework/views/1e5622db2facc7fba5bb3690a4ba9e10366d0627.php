<!-- Page Header -->
<header class="masthead">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading">
                    <h1>Les Actualités</h1>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">

        <?php if(session()->has('info')): ?>
            <div class="alert alert-success">
                <?php echo e(session('info')); ?>

            </div>
        <?php endif; ?>
        <div class="col d-flex justify-content-end">
            <a href="<?php echo e(route('actuality.create')); ?>" class="btn btn-primary mb-3">Ajouter</a>
        </div>

        <table class="table table-striped mt-3">
            <thead>
            <tr>
                <th scope="col">#</th>

                <th scope="col">Créé le</th>
                <th scope="col">Titre</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $actualities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $actuality): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th><?php echo e($actuality->id); ?></th>

                    <td>
                        <?php echo e($actuality->created_at); ?><br/>
                        <small class="text-xs"><?php echo e($actuality->updated_at); ?></small>
                    </td>
                    <td><?php echo e($actuality->title); ?></td>
                    <td>
                        <a href="<?php echo e(route('actuality.edit', $actuality->id)); ?>" class="btn btn-sm btn-primary">Editer</a>
                        <?php if($actuality->deleted_at): ?>
                            <form class="form-actuality-force-delete" method="post" action="<?php echo e(route('actuality.force-destroy', $actuality->id)); ?>">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-dark btn-sm">Supprimer définitivement</button>
                                <?php if($actuality->deleted_at): ?>
                                    <br>
                                    <small class="text-xs .text-danger">Mise en corbeille : <?php echo e($actuality->deleted_at); ?></small>
                                <?php endif; ?>
                            </form>
                            <form class="d-inline" method="post" action="<?php echo e(route('actuality.restore', $actuality->id)); ?>">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <button type="submit" class="btn btn-success btn-sm">Restaurer</button>
                            </form>
                        <?php else: ?>
                            <form class="d-inline form-actuality-delete" method="post" action="<?php echo e(route('actuality.destroy', $actuality->id)); ?>">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                            </form>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>





<?php $__env->startSection('js'); ?>
    ##parent-placeholder-93f8bb0eb2c659b85694486c41717eaf0fe23cd4##
    <script type="text/javascript">
        $(document).ready(
            function() {
                $('.form-actuality-force-delete').on('submit', function(event) {
                    if (!confirm('Êtes vous certain ? Action définitive.')) {
                        event.preventDefault();
                    }
                })
            }
        )
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('/ui/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp64\www\ProjectLara\projectlara\resources\views/admin/actuality/index.blade.php ENDPATH**/ ?>