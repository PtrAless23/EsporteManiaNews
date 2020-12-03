<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <a class="navbar-brand" href="#">LaraQuiz</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nvb" aria-controls="nvb" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="nvb">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('categories.index')); ?>">Categorias</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('questions.index')); ?>">Questões</a>
        </li>
        </ul>
    </div>
</nav>