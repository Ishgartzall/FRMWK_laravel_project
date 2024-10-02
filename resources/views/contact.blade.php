<x-layout>
  <x-slot:title>{{$title}}</x-slot:title>

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
</x-layout>
