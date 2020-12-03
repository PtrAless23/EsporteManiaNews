<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            <h1>LaraQuiz - Categorias</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            <?php echo $__env->make('partials.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <?php if($category->id): ?>
            <form action="<?php echo e(route('categories.update', ['id' => $category->id])); ?>" method="POST">
            <?php echo e(method_field('PUT')); ?>

            <?php else: ?>
            <form action="<?php echo e(route('categories.store')); ?>" method="POST">
            <?php endif; ?>

                <?php echo e(csrf_field()); ?>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome da categoria" value="<?php echo e($category->nome); ?>">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>

            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>