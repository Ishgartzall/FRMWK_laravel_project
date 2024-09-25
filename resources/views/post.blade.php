<x-layout>
  <x-slot:title>{{$title}}</x-slot:title>
  <article class="py-8 max-w-screen-md">
    <h2 class = "mb-1 text-3xl tracking-tight font-bold text-gray-900">{{$post['title']}}</h2>
    
    <div class="text-base text-gray-500">
      <!-- Dynamic Category Color -->
      <a href="/categories/{{$post->category->id}}" class="hover:underline font-bold 
            @if($post->category->name == 'Science') category-science 
            @elseif($post->category->name == 'Environment') category-environment
            @elseif($post->category->name == 'Economy') category-economy
            @elseif($post->category->name == 'Sport') category-sport
            @elseif($post->category->name == 'Politics') category-politics
            @endif">
          {{ $post->category->name }}
      </a> 
      |  by <em><a href="/authors/{{$post->author->id}}" class="hover:underline">{{$post->author->name}}</em></a> 
      | {{$post->created_at->diffForHumans()}}
    </div>
    
    <!-- original code 
      <div class="text-base text-gray-500">
        <a href="/categories/{{$post->category->id}}">{{$post->category->name}}</a> | <a href="/authors/{{$post->author->id}}">{{$post->author->name}}</a> | {{$post->created_at->diffForHumans()}} 
      </div>
    -->  
    <p class="my-4 font-light">{{$post['body']}}</p>
    <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to posts</a>
  </article>
</x-layout>