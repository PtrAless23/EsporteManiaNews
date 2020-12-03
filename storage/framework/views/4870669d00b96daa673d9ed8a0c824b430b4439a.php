<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row mt-3">
        <div class="col-4 offset-4">
            <h1 class="text-center">LaraQuiz</h1>
            <form action="<?php echo e(route('login')); ?>" method="POST">
                <?php echo e(csrf_field()); ?>

                <div class="form-row">
                    <div class="form-group col-12">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Digite o email">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-12">
                        <label for="password">Senha</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Digite a senha">
                    </div>
                </div>
                <button type="submit" class="btn btn-block btn-success">Entrar</button>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('partials.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>