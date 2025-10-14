<template>
  <footer class="bg-gray-900 dark:bg-black text-white py-12">
    <div class="container mx-auto px-6">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="animate-slide-in-left">
          <h3 class="text-2xl font-bold gradient-text mb-4">Rahmat</h3>
          <p class="text-gray-400 mb-4">
            Senior Full Stack Developer passionate about creating innovative web solutions and scalable applications.
          </p>
          <div class="flex space-x-4">
            <a 
              href="https://www.linkedin.com/in/rahmatul368/" 
              target="_blank"
              class="p-2 bg-gray-800 rounded-lg hover:bg-blue-600 transition-colors duration-300"
            >
              💼
            </a>
            <a 
              href="mailto:rahmatul368@gmail.com"
              class="p-2 bg-gray-800 rounded-lg hover:bg-red-600 transition-colors duration-300"
            >
              ✉️
            </a>
            <a 
              href="https://github.com/rahmat"
              target="_blank"
              class="p-2 bg-gray-800 rounded-lg hover:bg-gray-600 transition-colors duration-300"
            >
              🐙
            </a>
          </div>
        </div>
        
        <div class="animate-slide-up">
          <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
          <ul class="space-y-2">
            <li><a href="#about" class="text-gray-400 hover:text-white transition-colors duration-300">About</a></li>
            <li><a href="#skills" class="text-gray-400 hover:text-white transition-colors duration-300">Skills</a></li>
            <li><a href="#projects" class="text-gray-400 hover:text-white transition-colors duration-300">Projects</a></li>
            <li><a href="#experience" class="text-gray-400 hover:text-white transition-colors duration-300">Experience</a></li>
            <li><a href="#contact" class="text-gray-400 hover:text-white transition-colors duration-300">Contact</a></li>
          </ul>
        </div>
        
        <div class="animate-slide-in-right">
          <h4 class="text-lg font-semibold mb-4">Get In Touch</h4>
          <p class="text-gray-400 mb-2">
            ✉️ rahmatul368@gmail.com
          </p>
          <p class="text-gray-400 mb-4">
            📍 Available for remote work
          </p>
          <p class="text-sm text-gray-500">
            Open to new opportunities and exciting projects.
          </p>
        </div>
      </div>
      
      <div class="border-t border-gray-800 mt-8 pt-8 text-center">
        <p class="text-gray-400">
          © {{ new Date().getFullYear() }} Rahmat. All rights reserved. Built with Nuxt.js & Tailwind CSS.
        </p>
      </div>
    </div>
  </footer>
</template>