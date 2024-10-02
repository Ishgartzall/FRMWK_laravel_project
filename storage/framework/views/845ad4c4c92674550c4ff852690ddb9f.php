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

  <div class="my-4 py-4 px-4 mx-auto max-w-screen-xl mt-5 lg:px-4">
      <div class="mx-auto max-w-screen-md sm:text-center">
          <form>
            <?php if(request('category')): ?>
              <input type="hidden" name="category" value = "<?php echo e(request('category')); ?>">
            <?php endif; ?>
            <?php if(request('author')): ?>
              <input type="hidden" name="author" value = "<?php echo e(request('author')); ?>">
            <?php endif; ?>
              <div class="items-center mx-auto mb-3 space-y-4 max-w-screen-sm sm:flex sm:space-y-0">
                  <div class="relative w-full">
                      <label for="search" class="hidden mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Search</label>
                      <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                      <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                      </svg>
                      </div>
                      <input class="block p-3 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 
                      sm:rounded-none sm:rounded-l-lg focus:ring-red-500 focus:border-red-500 dark:bg-gray-700 dark:border-gray-600
                       dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500" placeholder="Search for a precise article" type="search" id="search" name="search" autocomplete ="off">
                  </div>
                  <div>
                      <button type="submit" class="py-3 px-5 w-full text-sm font-medium text-center text-white rounded-lg border cursor-pointer bg-red-700 border-red-600 sm:rounded-none sm:rounded-r-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Search</button>
                  </div>
              </div>
          </form>
      </div>
  </div>

<?php echo e($posts->links()); ?>


  <div class="my-4 py-4 px-4 mx-auto max-w-screen-xl lg:py-8 lg:px-6">
      <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
  <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
              <div class="flex justify-between items-center mb-5 text-gray-500">
              <a href="/posts?category=<?php echo e($post->category->slug); ?>">
                    <span class="bg-<?php echo e($post->category->color); ?>-100 text-<?php echo e($post->category->color); ?>-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-<?php echo e($post->category->color); ?>-200 dark:text-<?php echo e($post->category->color); ?>-800">
                        <?php echo e($post->category->name); ?>

                    </span>
              </a>    
                <span class="text-sm"><?php echo e($post->created_at->diffForHumans()); ?></span>  
              </div>
              <a href="/posts/<?php echo e($post->slug); ?>">
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:underline"><?php echo e($post->title); ?></h2>
              </a>
              <p class="mb-5 font-light text-gray-500 dark:text-gray-400 "><?php echo e(Str::limit($post->body,100)); ?></p>
              <div class="flex justify-between items-center">
                  <a href="/posts?author=<?php echo e($post->author->username); ?>">
                    <div class="flex items-center space-x-3">
                    <img class="w-7 h-7 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="<?php echo e($post->author->name); ?>" />
                        <span class="font-medium text-sm dark:text-white hover:underline">
                        <?php echo e(Str::limit($post->author->name,50)); ?>

                      </span>
                  </div>
                </a>
                  <a href="/posts/<?php echo e($post['slug']); ?>" class="inline-flex items-center font-bold text-red-600 dark:text-red-500 text-sm hover:underline">
                      Read more
                      <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  </a>
              </div>
    </article>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
  <div> 
    <p class = "font-bold text-xl my-4"> Article not found !</p>
    <a href="/posts" class = "block text-red-600 hover:underline">&laquo; Back to all posts</a>                     
  </div>
   <?php endif; ?>
  </div>  
  </div>

<div class="mb-4">
<?php echo e($posts->links()); ?>

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
<?php /**PATH C:\xampp\htdocs\framework_prog_class_test\resources\views/posts.blade.php ENDPATH**/ ?>