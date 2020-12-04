<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials.privmenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            <h1>EsporteManiaNews - Cadastro de Categorias</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            <?php echo $__env->make('partials.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <?php if($post->id): ?>
            <form action="<?php echo e(route('posts.update', ['id' => $post->id])); ?>" method="POST">
            <?php echo e(method_field('PUT')); ?>

            <?php else: ?>
            <form action="<?php echo e(route('posts.store')); ?>" method="POST">
            <?php endif; ?>

                <?php echo e(csrf_field()); ?>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="title">Título</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Digite o título do texto" value="<?php echo e($post->title); ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="summary">Resumo</label>
                        <textarea name="summary" id="summary" rows="2" class="form-control" placeholder="Digite o resumo do texto"><?php echo e($post->summary); ?></textarea>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="text">Texto</label>
                        <textarea name="text" id="text" rows="5" class="form-control" placeholder="Digite o texto"><?php echo e($post->text); ?></textarea>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="category_id">Categoria</label>
                            <select name="category_id" id="category_id" class="form-control">
                                <option value="0">Selecione uma categoria</option>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($category->id == $post->category_id): ?>
                                        <option value="<?php echo e($category->id); ?>" selected><?php echo e($category->name); ?></option>
                                    <?php else: ?>
                                        <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                            <div class="custom-control custom-switch">
                                <?php if($post->active): ?>
                                <input type="checkbox" name="active" id="active" class="custom-control-input" value="S" checked>
                                <?php else: ?>
                                <input type="checkbox" name="active" id="active" class="custom-control-input" value="S">
                                <?php endif; ?>
                                <label for="active" class="custom-control-label">Ativo</label>
                            </div>   
                    </div>
                </div> 

                <button type="submit" class="btn btn-primary form-row mt-3">Salvar</button>

            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>