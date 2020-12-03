<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            <h1>LaraQuiz</h1>
            <p class="lead">Faça aqui simulados para o Enem e vestibular.</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <form action="<?php echo e(route('quiz')); ?>" method="POST">
                <?php echo e(csrf_field()); ?>

                <div class="form-row">
                    <div class="form-group col-4">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Categoria</span>
                            </div>
                            <select name="category" id="category" class="form-control">
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($category->id); ?>"><?php echo e($category->nome); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-4">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Número de questões</span>
                            </div>
                            <input type="number" name="questions" id="questions" class="form-control" min="1" max="10" value="1">
                        </div>
                    </div>
                    <div class="form-group col-4">
                        <button type="submit" class="btn btn-block btn-success">Gerar simulado</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('partials.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>