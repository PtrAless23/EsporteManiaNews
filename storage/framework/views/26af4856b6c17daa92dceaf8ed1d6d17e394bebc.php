<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            <h1>LaraQuiz - Questões</h1>
            <a href="<?php echo e(route('questions.create')); ?>" class="btn btn-success">Inserir</a>
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
                    <th>Categoria</th>
                    <th>Ações</th>
                </tr>
                <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($question->id); ?></td>
                        <td><?php echo e($question->description); ?></td>
                        <td><?php echo e($question->category->nome); ?></td>
                        <td>
                            <form action="<?php echo e(route('questions.destroy', ['id' => $question->id])); ?>" method="POST">
                                <?php echo e(method_field('DELETE')); ?>

                                <?php echo e(csrf_field()); ?>

                                <div class="btn-group">
                                    <a href="<?php echo e(route('options.index', ['question_id' => $question->id])); ?>" class="btn btn-primary">Gerenciar Opções</a>
                                    <a href="<?php echo e(route('questions.edit', ['id' => $question->id])); ?>" class="btn btn-info">Editar</a>
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