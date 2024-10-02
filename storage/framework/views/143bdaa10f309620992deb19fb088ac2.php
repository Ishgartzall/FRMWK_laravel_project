<header>
    <div class="relative">
        <div class="absolute inset-0 clip-shape bg-red-800"></div>
        <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8 relative z-10">
            <h1 class="text-4xl font-extrabold tracking-wider text-white uppercase pb-2">
                <?php echo e($slot); ?>

            </h1>
        </div>
    </div>
</header>

<style>
    .clip-shape {
        clip-path: polygon(0 0, 100% 0, 100% 30%, 34% 100%, 0 80%);
    }
</style>



<?php /**PATH C:\xampp\htdocs\framework_prog_class_test\resources\views/components/header.blade.php ENDPATH**/ ?>