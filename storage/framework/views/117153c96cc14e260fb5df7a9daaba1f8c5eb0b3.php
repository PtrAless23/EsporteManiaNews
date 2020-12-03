<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            <h1>LaraQuiz - Questões</h1>
            <?php if($question->id): ?>
                <a href="<?php echo e(route('options.index', ['question_id' => $question->id])); ?>" class="btn btn-success">Gerenciar Opções</a>
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            <?php echo $__env->make('partials.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <?php if($question->id): ?>
            <form action="<?php echo e(route('questions.update', ['id' => $question->id])); ?>" method="POST" enctype="multipart/form-data">
            <?php echo e(method_field('PUT')); ?>

            <?php else: ?>
            <form action="<?php echo e(route('questions.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php endif; ?>

                <?php echo e(csrf_field()); ?>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="description">Descrição</label>
                        <textarea name="description" id="description" rows="5" class="form-control" placeholder="Digite a descrição da questão"><?php echo e($question->description); ?></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="category_id">Categoria</label>
                        <select name="category_id" id="category_id" class="form-control">
                            <option value="0">Selecione...</option>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($category->id == $question->category_id): ?>
                                    <option value="<?php echo e($category->id); ?>" selected><?php echo e($category->nome); ?></option>
                                <?php else: ?>
                                    <option value="<?php echo e($category->id); ?>"><?php echo e($category->nome); ?></option>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="image">Imagem (para manter a imagem antiga, basta não passar nenhum arquivo)</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>

            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>