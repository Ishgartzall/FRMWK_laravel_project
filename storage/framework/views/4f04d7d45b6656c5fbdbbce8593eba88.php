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
    <h3 class="text-3xl font-bold text-center mb-6">Here is my CV to learn more about me:</h3>
    
    <!-- PDF.js viewer -->
    <canvas id="pdf-render" class="mx-auto border shadow"></canvas>
  </div>

  <!-- Include PDF.js library -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js"></script>
  
  <!-- Custom JavaScript to render the single-page PDF -->
  <script>
    const url = "<?php echo e(asset('files/CV - Victor Lequeux - English version.pdf')); ?>";

    const scale = 1.5,
          canvas = document.getElementById('pdf-render'),
          ctx = canvas.getContext('2d');

    // Render the PDF
    pdfjsLib.getDocument(url).promise.then(pdfDoc => {
      pdfDoc.getPage(1).then(page => {
        const viewport = page.getViewport({ scale });
        canvas.height = viewport.height;
        canvas.width = viewport.width;

        const renderCtx = {
          canvasContext: ctx,
          viewport
        };

        page.render(renderCtx);
      });
    });
  </script>
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
<?php /**PATH C:\xampp\htdocs\framework_prog_class_test\resources\views/about.blade.php ENDPATH**/ ?>