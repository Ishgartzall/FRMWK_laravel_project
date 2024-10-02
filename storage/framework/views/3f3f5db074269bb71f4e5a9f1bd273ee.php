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

  <div class="container mx-auto px-4 py-8">
    <h1 class="text-4xl font-bold mb-4 text-center">Welcome to My Laravel Project!</h1>
    <p class="text-lg text-gray-700 mb-6 text-center">
      This project showcases various features of Laravel. It is designed to provide a seamless user experience and includes functionalities such as user authentication, post creation, and category management.
    </p>
    <p class="text-lg text-gray-700 mb-6 text-center">
      Explore the source code and contribute to the project on GitHub.
    </p>
    
    <div class="text-center">
      <a href="https://github.com/Ishgartzall/FRMWK_laravel_project" class="inline-block bg-red-500 text-white font-semibold py-2 px-4 rounded hover:bg-red-700">
        View on GitHub
      </a>
    </div>

    <div class="mt-8">
      <h2 class="text-2xl font-bold mb-2">Features</h2>
      <ul class="list-disc list-inside text-gray-700">
        <li>User Authentication</li>
        <li>Post Management</li>
        <li>Category Organization</li>
        <li>Responsive Design</li>
        <li>And much more!</li>
      </ul>
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
<?php /**PATH C:\xampp\htdocs\framework_prog_class_test\resources\views/home.blade.php ENDPATH**/ ?>