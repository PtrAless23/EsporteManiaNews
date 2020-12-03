<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row mt-3">
        <div class="col-12">
        <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?php echo e(route('questions.edit', ['id' => $option->question_id])); ?>"><?php echo e($option->question->description); ?></a>
                    </li>
                    <li class="breadcrumb-item">
                    <a href="<?php echo e(route('options.index', ['question_id' => $option->question_id])); ?>">Opções</a>
                    </li>
                    <li class="breadcrumb-item active">Formulário</li>
                </ol>
            </nav>
            <h1>LaraQuiz - Categorias</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            <?php echo $__env->make('partials.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <?php if($option->id): ?>
            <form action="<?php echo e(route('options.update', ['id' => $option->id, 'question_id' => $option->question_id])); ?>" method="POST">
            <?php echo e(method_field('PUT')); ?>

            <?php else: ?>
            <form action="<?php echo e(route('options.store', ['question_id' => $option->question_id])); ?>" method="POST">
            <?php endif; ?>

                <?php echo e(csrf_field()); ?>

                <input type="hidden" name="question_id" id="question_id" value="<?php echo e($option->question_id); ?>">
                <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="description">Descrição</label>
                    <textarea name="description" id="description" rows="5" class="form-control" placeholder="Digite a descrição da opção"><?php echo e($option->description); ?></textarea>
                </div>
                </div>
                <div class="form-row">
                <div class="form-group col-md-12">
                    <div class="custom-control custom-switch">
                    <?php if($option->correct): ?>
                        <input type="checkbox" name="correct" id="correct" class="custom-control-input" value="S" checked>
                    <?php else: ?>
                        <input type="checkbox" name="correct" id="correct" class="custom-control-input" value="S">
                    <?php endif; ?>
                    <label for="correct" class="custom-control-label">Opção correta</label>
                    </div>   
                </div>
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>

            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>