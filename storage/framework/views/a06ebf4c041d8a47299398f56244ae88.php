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

  <div class="container mx-auto px-4 py-10">
    <h3 class="text-4xl font-bold text-center mb-8">Useful Links</h3>

    <p class="text-xl text-gray-700 text-center mb-10">
      You can reach me on my social media platforms. Feel free to connect!
    </p>

    <div class="flex justify-center space-x-10">
      <a href="https://instagram.com/victor_lqx" target="_blank" class="transform hover:scale-110 transition-transform">
        <img src="img/instagram_icon.png" alt="Instagram" width="120" height="120">
      </a>
      
      <a href="https://www.youtube.com/@lequeuxvictor3745" target="_blank" class="transform hover:scale-110 transition-transform">
        <img src="img/youtube_icon.png" alt="YouTube" width="120" height="120">
      </a>
    </div>

    <div class="text-center mt-8">
      <p class="text-gray-500 text-base">
        You will find more frequent updates on my social networks!
      </p>
    </div>
  </div>
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
<?php /**PATH C:\xampp\htdocs\framework_prog_class_test\resources\views/contact.blade.php ENDPATH**/ ?>