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
            <p class="lead">Você acertou <?php echo e($total); ?> de <?php echo e($count); ?> questões(ão)!</p>
        </div>
    </div>
    <div class="row mt-3">
        <?php echo e(csrf_field()); ?>

        <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-12">
                <?php if($question->correct): ?>
                    <p class="text-success">
                        <?php echo e(($i+1)); ?> . <?php echo e($question->description); ?>

                        <br>
                        <strong>Resposta correta: <?php echo e($question->options()->where('correct', true)->first()->description); ?></strong>
                    </p>
                <?php else: ?>
                    <p class="text-danger">
                        <?php echo e(($i+1)); ?> . <?php echo e($question->description); ?>

                        <br>
                        <strong>Resposta correta: <?php echo e($question->options()->where('correct', true)->first()->description); ?></strong>
                    </p>
                <?php endif; ?>
                <hr>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e(route('home')); ?>" class="btn btn-success mb-5">Voltar para a página inicial</a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('partials.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>