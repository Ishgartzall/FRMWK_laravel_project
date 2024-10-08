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
  <article class="py-8 max-w-screen-md border-b border-gray-300">
    <h2 class = "mb-1 text-3xl tracking-tight font-bold text-gray-900">Article 1 </h2>
    <div class="text-base text-gray-500">
      <a href="">Victor Lequeux</a> | 3 September 2024 
    </div>  
    <p class="my-4 font-light">Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
      Labore sint, veniam dolorem perspiciatis ducimus doloremque deserunt porro dolor, ab iure adipisci consequatur 
      nobis eaque incidunt illo, provident neque non? Odio?</p>
    <a href="" class="font-medium text-blue-500 hover:underline">Read more &raquo</a>
  </article>

  <article class="py-8 max-w-screen-md border-b border-gray-300">
    <h2 class = "mb-1 text-3xl tracking-tight font-bold text-gray-900">Article 2 </h2>
    <div class="text-base text-gray-500">
      <a href="">Victor Lequeux</a> | 25 October 2024 
    </div>  
    <p class="my-4 font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
      Dolorem reprehenderit voluptatibus iure eius perspiciatis natus exercitationem fugiat, 
      quo aliquid ratione eligendi tenetur libero asperiores, explicabo molestias? Voluptate enim voluptates iste!</p>
    <a href="" class="font-medium text-blue-500 hover:underline">Read more &raquo</a>
  </article>

  <article class="py-8 max-w-screen-md border-b border-gray-300">
    <h2 class = "mb-1 text-3xl tracking-tight font-bold text-gray-900">Article 3 </h2>
    <div class="text-base text-gray-500">
      <a href="">Victor Lequeux</a> | 16 November 2023 
    </div>  
    <p class="my-4 font-light">Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
      Voluptatibus incidunt vel sunt saepe nobis molestiae? Molestiae, eveniet laudantium repellendus 
      saepe voluptatibus asperiores dolorum sequi eos cum cumque temporibus unde neque?</p>
    <a href="" class="font-medium text-blue-500 hover:underline">Read more &raquo</a>
  </article>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $attributes = $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $component = $__componentOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\framework_prog_class_test\resources\views/blog.blade.php ENDPATH**/ ?>