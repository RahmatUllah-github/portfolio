<template>
  <section id="projects" class="py-20 bg-white dark:bg-gray-800">
    <div class="container mx-auto px-6">
      <div class="text-center mb-16">
        <h2 class="text-4xl font-bold mb-4 animate-fade-in">Featured Projects</h2>
        <p class="text-gray-600 dark:text-gray-400 animate-slide-up">Some of my recent work and contributions</p>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div 
          v-for="(project, index) in projects" 
          :key="project.id"
          class="bg-gray-50 dark:bg-gray-900 rounded-2xl overflow-hidden shadow-lg card-hover animate-scale-in"
          :style="{ animationDelay: `${index * 0.1}s` }"
        >
          <div class="relative overflow-hidden">
            <img 
              :src="project.image" 
              :alt="project.title"
              class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110"
            />
            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300 flex items-end">
              <div class="p-4 text-white">
                <p class="text-sm">{{ project.category }}</p>
              </div>
            </div>
          </div>
          
          <div class="p-6">
            <h3 class="text-xl font-bold mb-3">{{ project.title }}</h3>
            <p class="text-gray-600 dark:text-gray-400 mb-4 text-sm leading-relaxed">
              {{ project.description }}
            </p>
            
            <div class="flex flex-wrap gap-2 mb-4">
              <span 
                v-for="tech in project.technologies" 
                :key="tech"
                class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-xs font-medium"
              >
                {{ tech }}
              </span>
            </div>
            
            <div class="flex space-x-4">
              <a 
                :href="project.liveUrl" 
                target="_blank"
                class="flex items-center space-x-2 text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300 transition-colors duration-300"
              >
                <span>🔗</span>
                <span class="text-sm font-medium">Live Demo</span>
              </a>
              <a 
                :href="project.githubUrl" 
                target="_blank"
                class="flex items-center space-x-2 text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-300 transition-colors duration-300"
              >
                <span>🐙</span>
                <span class="text-sm font-medium">Code</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      
      <div class="text-center mt-12">
        <a 
          href="https://github.com/rahmat" 
          target="_blank"
          class="btn-secondary"
        >
          View All Projects on GitHub
        </a>
      </div>
    </div>
  </section>
</template>

<script setup>
const projects = [
  {
    id: 1,
    title: 'KP Pharma Platform',
    description: 'A comprehensive pharmaceutical management system with inventory tracking, order management, and analytics dashboard.',
    image: '/images/project-1-placeholder.jpg',
    category: 'Web Application',
    technologies: ['React', 'Node.js', 'PostgreSQL', 'AWS'],
    liveUrl: 'https://kp-pharma.co.uk/',
    githubUrl: 'https://github.com/rahmat/kp-pharma'
  },
  {
    id: 2,
    title: 'Regen Bespoke',
    description: 'Custom tailoring and fashion e-commerce platform with advanced customization features and payment integration.',
    image: '/images/project-2-placeholder.jpg',
    category: 'E-commerce',
    technologies: ['Vue.js', 'Laravel', 'MySQL', 'Stripe'],
    liveUrl: 'https://regenbespoke.com/',
    githubUrl: 'https://github.com/rahmat/regen-bespoke'
  },
  {
    id: 3,
    title: 'Care Quorum',
    description: 'Healthcare management system for patient care coordination and medical record management.',
    image: '/images/project-3-placeholder.jpg',
    category: 'Healthcare',
    technologies: ['React', 'Python', 'Django', 'PostgreSQL'],
    liveUrl: 'https://carequorum.com/',
    githubUrl: 'https://github.com/rahmat/care-quorum'
  },
  {
    id: 4,
    title: 'ILRC Platform',
    description: 'Immigration law resource center with document management and case tracking capabilities.',
    image: '/images/project-4-placeholder.jpg',
    category: 'Legal Tech',
    technologies: ['Next.js', 'TypeScript', 'MongoDB', 'Vercel'],
    liveUrl: 'https://www.ilrc.org/',
    githubUrl: 'https://github.com/rahmat/ilrc-platform'
  },
  {
    id: 5,
    title: 'Divinity Metals',
    description: 'Metal trading and inventory management system with real-time pricing and market analytics.',
    image: '/images/project-5-placeholder.jpg',
    category: 'Trading Platform',
    technologies: ['React', 'Node.js', 'Redis', 'WebSocket'],
    liveUrl: 'https://divinitymetals.com/',
    githubUrl: 'https://github.com/rahmat/divinity-metals'
  },
  {
    id: 6,
    title: 'Portfolio Website',
    description: 'This responsive portfolio website built with Nuxt.js, featuring modern animations and SEO optimization.',
    image: '/images/project-6-placeholder.jpg',
    category: 'Portfolio',
    technologies: ['Nuxt.js', 'Tailwind CSS', 'TypeScript'],
    liveUrl: '#',
    githubUrl: 'https://github.com/rahmat/portfolio'
  }
]
</script>