<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?php echo e(route('questions.edit', ['id' => $question->id])); ?>"><?php echo e($question->description); ?></a>
                    </li>
                    <li class="breadcrumb-item active">
                        Opções
                    </li>
                </ol>
            </nav>
            <h1>LaraQuiz - Opções</h1>
            <a href="<?php echo e(route('options.create', ['question_id' => $question->id])); ?>" class="btn btn-success">Inserir</a>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            <table class="table table-hover table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Descrição</th>
                    <th>Correta?</th>
                    <th>Ações</th>
                </tr>
                <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($option->id); ?></td>
                        <td><?php echo e($option->description); ?></td>
                        <td><?php echo e(($option->correct) ? 'Sim' : 'Não'); ?></td>
                        <td>
                            <form action="<?php echo e(route('options.destroy', ['id' => $option->id, 'question_id' => $option->question_id])); ?>" method="POST">
                                <?php echo e(method_field('DELETE')); ?>

                                <?php echo e(csrf_field()); ?>

                                <div class="btn-group">
                                    <a href="<?php echo e(route('options.edit', ['id' => $option->id, 'question_id' => $option->question_id])); ?>" class="btn btn-info">Editar</a>
                                    <button type="submit" class="btn btn-danger">Excluir</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>