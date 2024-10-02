<x-layout>
  <x-slot:title>{{$title}}</x-slot:title>

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
</x-layout>
