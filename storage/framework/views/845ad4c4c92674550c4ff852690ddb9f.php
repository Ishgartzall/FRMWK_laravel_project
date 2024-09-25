<?php if (isset($component)) { $__componentOriginal1f9e5f64f242295036c059d9dc1c375c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c = $attributes; } ?>
<?php $component = App\View\Components\Layout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Layout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
   <?php $__env->slot('title', null, []); ?> <?php echo e($title); ?> <?php $__env->endSlot(); ?>
  <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <article class="py-8 max-w-screen-md border-b border-gray-300">
    <a href="/posts/<?php echo e($post['slug']); ?>" class="hover:underline">
      <h2 class = "mb-1 text-3xl tracking-tight font-bold text-gray-900"><?php echo e($post['title']); ?></h2>
    </a>

    <div class="text-base text-gray-500">
      <!-- Dynamic Category Color -->
      <a href="/categories/<?php echo e($post->category->id); ?>" class="hover:underline">
        <span class="category-label 
            <?php if($post->category->name == 'Science'): ?> category-science 
            <?php elseif($post->category->name == 'Environment'): ?> category-environment
            <?php elseif($post->category->name == 'Economy'): ?> category-economy
            <?php elseif($post->category->name == 'Sport'): ?> category-sport
            <?php elseif($post->category->name == 'Politics'): ?> category-politics
            <?php endif; ?>">
          <?php echo e($post->category->name); ?>

        </span>
      </a> 
      | <a href="/authors/<?php echo e($post->author->id); ?>" class="hover:underline"><?php echo e($post->author->name); ?></a> 
      | <?php echo e($post->created_at->diffForHumans()); ?>

    </div>
     <!-- original code 
    <div class="text-base text-gray-500 ">
    <a href="/categories/<?php echo e($post->category->id); ?>" class="hover:underline"><?php echo e($post->category->name); ?></a> | <a href="/authors/<?php echo e($post->author->id); ?>" class="hover:underline"><?php echo e($post->author->name); ?></a> | <?php echo e($post->created_at->diffForHumans()); ?>

    </div>  
    -->
    <p class="my-4 font-light"><?php echo e(Str::limit($post['body'],100)); ?></p>
    <a href="/posts/<?php echo e($post['slug']); ?>" class="font-medium text-blue-500 hover:underline">Read more &raquo</a>
  </article>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $attributes = $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $component = $__componentOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\framework_prog_class_test\resources\views/posts.blade.php ENDPATH**/ ?>