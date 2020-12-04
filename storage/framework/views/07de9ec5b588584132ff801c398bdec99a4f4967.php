<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="container">
    <br/>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if($post->id == $id): ?>
    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($category->id == $post->category_id): ?>
              <strong class="d-inline-block mb-2 text-success"><?php echo e($category->name); ?></strong>
              <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </h3>

          <div class="blog-post content">
            <h2 class="blog-post-title"><?php echo e($post->title); ?></h2>
            <blockquote>
              <p><?php echo e($post->summary); ?></p>
              <?php if($post->created_at != $post->updated_at ): ?>
                <p class="mb-1 text-muted">Postado em: <?php echo e(date('d/m/Y H:i:s', strtotime($post->created_at))); ?></p>
                <p class="mb-1 text-muted">Editado em: <?php echo e(date('d/m/Y H:i:s', strtotime($post->updated_at))); ?></p>
              <?php else: ?>
                <p class="mb-1 text-muted">Postado em: <?php echo e(date('d/m/Y H:i:s', strtotime($post->created_at))); ?></p>
              <?php endif; ?>
            </blockquote>
            <hr>
            <blockquote>
              <article>
                <?php
                  $paragrafos = [];
                  $paragrafos[] = $post->text;
                  foreach( $paragrafos as $paragrafo){
                    echo "<p>".$paragrafo."</p>";
                  }
                ?>
                
              </article>	
            </blockquote>
            
          </div><!-- /.blog-post -->

        </div><!-- /.blog-main -->
          <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        <aside class="col-md-4 blog-sidebar">
          <div class="p-3 mb-3 bg-light rounded">
            <h4 class="font-italic center">Outras notícias:</h4>
            <br>
            <main role="main">
                <div class="album p bg-light">
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php if($post->id != $id): ?>
                    <div class="container">
                        <div>
                            <div class="col-md">
                                <div class="card shadow-sm">
                                    <img class="card-img-top" src="https://esportemaniasite.000webhostapp.com/images/E.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text"><?php echo e($post->title); ?></p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                              <a href="<?php echo e(route('artigo', ['id' => $post->id])); ?>"><button type="button" class="btn btn-sm btn-outline-secondary">Ver</button></a>
                                            </div>
                                        </div>  
                                        <small class="text-muted">
                                          <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($category->id == $post->category_id): ?>
                                            <strong class="d-inline-block mb-2 text-success"><?php echo e($category->name); ?></strong>
                                            <?php endif; ?>
                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </small>
                                    </div>  
                                  </div>
                            </div>
                          </div>
                      </div>
                  <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>   
            </main>          
          </div>

        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </main><!-- /.container -->
</div>
      

<footer class="text-muted p-3 mb-3 bg-light rounded">
      <div class="container" align='center'>
        <p>
          <a href="#">Voltar ao topo</a>
        </p>
      </div>
</footer>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>