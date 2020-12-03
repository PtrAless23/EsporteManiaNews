<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            <h1>LaraQuiz</h1>
            <p class="lead">Faça aqui simulados para o Enem e vestibular.</p>
        </div>
    </div>
    <form class="row mt-3" action="<?php echo e(route('result')); ?>" method="POST">
        <?php echo e(csrf_field()); ?>

        <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-12">
                <p><?php echo e(($i + 1)); ?>. <?php echo e($question->description); ?> </p>
                <?php if($question->url_image): ?>
                    <img style="max-width: 500px;" src="<?php echo e(asset('storage/questions/' . $question->url_image)); ?>" alt="<?php echo e($question->description); ?>" class="img-thumbnail mb-2">
                <?php endif; ?>
                <?php $__currentLoopData = $question->options()->orderByRaw('RAND()')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="form-check">
                        <input type="radio" name="answers[<?php echo e($question->id); ?>]" id="opcao<?php echo e($option->id); ?>" value="<?php echo e($option->id); ?>" class="form-check-input" >
                        <label for="opcao<?php echo e($option->id); ?>" class="form-check-label"><?php echo e($option->description); ?></label>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <hr>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="col-12 mb-5">
            <button type="submit" class="btn btn-lg btn-block btn-success">Enviar respostas</button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('partials.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>