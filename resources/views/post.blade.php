<x-layout>
  <x-slot:title>{{$title}}</x-slot:title>
<main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
  <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
      <article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
          <header class="mb-4 lg:mb-6 not-format">
          <a href="/posts" class="font-bold text-sm text-blue-600 hover:underline inline-flex items-center">
            <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" transform="rotate(180)">
            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
            Back to all posts
          </a>
              <address class="flex items-center my-6 not-italic">
                  <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                      <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="{{$post->author->name}}">
                      <div>
                          <a href="/posts?author={{$post->author->username}}" rel="author" class="text-xl font-bold text-gray-900 dark:text-white hover:underline">{{$post->author->name}}</a>
                          <p class="text-base text-gray-500 dark:text-gray-400 mb-1">{{$post->created_at->diffForHumans()}}</p>
                          <a href="/posts?category={{$post->category->slug}}">
                            <span class="bg-{{$post->category->color}}-100 text-{{$post->category->color}}-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-{{$post->category->color}}-200 dark:text-{{$post->category->color}}-800">
                            {{ $post->category->name }}
                            </span>
                          </a>
                      </div>
                  </div>
              </address>
              <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{$post->title}}</h1>
          </header>
          <p>{{$post->body}}
          </p> 
      </article>
    </div>
</main>
</x-layout>