<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            <h1>LaraQuiz - Usuários</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            <?php echo $__env->make('partials.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <?php if($user->id): ?>
            <form action="<?php echo e(route('users.update', ['id' => $user->id])); ?>" method="POST">
            <?php echo e(method_field('PUT')); ?>

            <?php else: ?>
            <form action="<?php echo e(route('users.store')); ?>" method="POST">
            <?php endif; ?>

                <?php echo e(csrf_field()); ?>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">Nome</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Nome do usuário" value="<?php echo e($user->name); ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">E-mail</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="E-mail do usuário" value="<?php echo e($user->email); ?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="password">Senha (para manter a senha atual, basta deixar o campo em branco)</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="password_confirmation">Confirmar Senha</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>

            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>