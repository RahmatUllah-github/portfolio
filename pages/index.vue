<template>
  <div>
    <!-- Hero Section -->
    <section class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 via-white to-purple-50 dark:from-gray-900 dark:via-gray-800 dark:to-purple-900 pt-20">
      <div class="container mx-auto px-6 text-center">
        <div class="animate-fade-in">
          <img 
            src="/images/rahmat-profile.png" 
            alt="Rahmat - Senior Full Stack Developer"
            class="w-32 h-32 rounded-full mx-auto mb-8 shadow-2xl animate-bounce-in"
          />
          <h1 class="text-5xl md:text-7xl font-bold mb-6">
            Hi, I'm <span class="gradient-text">Rahmat</span>
          </h1>
          <p class="text-xl md:text-2xl text-gray-600 dark:text-gray-300 mb-8 animate-slide-up">
            Senior Full Stack Developer
          </p>
          <p class="text-lg text-gray-500 dark:text-gray-400 max-w-2xl mx-auto mb-12 animate-slide-up">
            Passionate about creating innovative web solutions with modern technologies. 
            Specializing in PHP Laravel, Node.js/Nest.js, Vue.js/Nuxt.js and scalable application development.
          </p>
          <div class="flex flex-col sm:flex-row gap-4 justify-center animate-slide-up">
            <a href="#projects" class="btn-primary">
              View My Work
            </a>
            <a href="#contact" class="btn-secondary">
              Get In Touch
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white dark:bg-gray-800">
      <div class="container mx-auto px-6">
        <div class="text-center mb-16">
          <h2 class="text-4xl font-bold mb-4 animate-fade-in">About Me</h2>
          <p class="text-gray-600 dark:text-gray-400 animate-slide-up">Get to know more about my background and expertise</p>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
          <div class="animate-slide-in-left">
            <img 
              src="/images/about-rahmat.png" 
              alt="About Rahmat"
              class="rounded-2xl shadow-2xl w-full"
            />
          </div>
          
          <div class="animate-slide-in-right">
            <h3 class="text-3xl font-bold mb-6">Senior Full Stack Developer</h3>
            <p class="text-gray-600 dark:text-gray-400 mb-6 leading-relaxed">
              With extensive experience in full-stack development, I specialize in creating robust, 
              scalable web applications using modern technologies. My expertise spans across frontend 
              and backend development, with a strong focus on user experience and performance optimization.
            </p>
            
            <div class="grid grid-cols-2 gap-6 mb-8">
              <div>
                <h4 class="font-semibold text-blue-600 dark:text-blue-400 mb-2">Frontend</h4>
                <p class="text-sm text-gray-600 dark:text-gray-400">Vue.js, JavaScript, TypeScript, Tailwind CSS</p>
              </div>
              <div>
                <h4 class="font-semibold text-purple-600 dark:text-purple-400 mb-2">Backend</h4>
                <p class="text-sm text-gray-600 dark:text-gray-400">Node.js, Nest.js, PHP Laravel, REST APIs</p>
              </div>
              <div>
                <h4 class="font-semibold text-green-600 dark:text-green-400 mb-2">Database</h4>
                <p class="text-sm text-gray-600 dark:text-gray-400">MySQL, PostgreSQL, MongoDB</p>
              </div>
              <div>
                <h4 class="font-semibold text-orange-600 dark:text-orange-400 mb-2">Tools</h4>
                <p class="text-sm text-gray-600 dark:text-gray-400">Git, C Panel, AWS, CI/CD</p>
              </div>
            </div>
            
            <a href="/resume.pdf" class="btn-primary" target="_blank">
              Download Resume
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Skills Section -->
    <SkillsSection />

    <!-- Projects Section -->
    <ProjectsSection />

    <!-- Experience Section -->
    <ExperienceSection />

    <!-- Contact Section -->
    <ContactSection />
  </div>
</template>

<script setup>
// Page setup
</script>