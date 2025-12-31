<template>
  <section id="projects" class="py-20 bg-white dark:bg-gray-800">
    <div class="container mx-auto px-6">
      <div class="text-center mb-16">
        <h2 class="text-4xl font-bold mb-4 animate-fade-in">Featured Projects</h2>
        <p class="text-gray-600 dark:text-gray-400 animate-slide-up">Some of my recent work and contributions</p>
      </div>
      
      <div class="flex flex-wrap justify-center gap-8">
        <div 
          v-for="(project, index) in projects" 
          :key="project.id"
          class="w-full max-w-md bg-gray-50 dark:bg-gray-900 rounded-2xl overflow-hidden shadow-lg card-hover animate-scale-in"
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
              <div class="relative">
                <a 
                  v-if="project.liveUrl"
                  :href="project.liveUrl" 
                  target="_blank"
                  class="flex items-center space-x-2 text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300 transition-colors duration-300"
                >
                  <span>🔗</span>
                  <span class="text-sm font-medium">Live Url</span>
                </a>
                <span 
                  v-else
                  class="flex items-center space-x-2 text-gray-400 dark:text-gray-600 cursor-not-allowed relative group"
                >
                  <span>🔗</span>
                  <span class="text-sm font-medium">Live Url</span>
                  <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 px-2 py-1 bg-gray-800 text-white text-xs rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">
                    No URL available
                  </div>
                </span>
              </div>
              <div class="relative">
                <a 
                  v-if="project.githubUrl"
                  :href="project.githubUrl" 
                  target="_blank"
                  class="flex items-center space-x-2 text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-300 transition-colors duration-300"
                >
                  <img src="/images/github.svg" alt="GitHub" class="w-4 h-4 dark:invert" />
                  <span class="text-sm font-medium">Code</span>
                </a>
                <span 
                  v-else
                  class="flex items-center space-x-2 text-gray-400 dark:text-gray-600 cursor-not-allowed relative group"
                >
                  <img src="/images/github.svg" alt="GitHub" class="w-4 h-4 opacity-50 dark:invert" />
                  <span class="text-sm font-medium">Code</span>
                  <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 px-2 py-1 bg-gray-800 text-white text-xs rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">
                    Private repository
                  </div>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- <div class="text-center mt-12">
        <a 
          href="https://github.com/rahmat" 
          target="_blank"
          class="btn-secondary"
        >
          View All Projects on GitHub
        </a>
      </div> -->
    </div>
  </section>
</template>

<script setup>
const projects = [
  {
    id: 1,
    title: 'KP-Pharma',
    description: 'Diagnostics platform for tests, multi panel admin with Laravel Nova, reporting, S3 uploads, CloudFront CDN, HL7 planning, Rekognition based checks, and performance tuning throughout flows.',
    image: '/images/project-kp-pharma.png',
    category: 'Healthcare / E-commerce',
    technologies: ['Laravel', 'Laravel Nova', 'Nuxt 3', 'MySQL', 'AWS S3', 'CloudFront', 'AWS Rekognition', 'Amazon Personalize'],
    liveUrl: 'https://kp-pharma.co.uk/',
    githubUrl: null
  },
  {
    id: 2,
    title: 'Regen Bespoke',
    description: 'Antique and vintage decor marketplace offering purchase and hire, optimized catalogs, checkout using Stripe Payment Intents, Apple Pay, Google Pay, and DigitalOcean deployment with caching.',
    image: '/images/project-regen-bespoke.png',
    category: 'E-commerce / Hire',
    technologies: ['Laravel', 'Laravel Nova', 'Nuxt 3', 'MySQL', 'Stripe', 'DigitalOcean'],
    liveUrl: 'https://regenbespoke.com/',
    githubUrl: null
  },
  {
    id: 3,
    title: 'Care Quorum',
    description: 'Social health community enabling profiles, posts, comments, and moderation; implemented authentication, controls, and cloud NLP text screening, with S3 storage and streamlined APIs for performance. Monolithic Laravel with Vue 2 components for UI and API integrations.',
    image: '/images/project-carequorum.png',
    category: 'Healthcare / Social Community',
    technologies: ['Laravel', 'Vue 2', 'MySQL', 'Google Cloud NLP', 'AWS S3'],
    liveUrl: 'https://carequorum.com/',
    githubUrl: null
  },
  {
    id: 4,
    title: 'Divinity Metals',
    description: 'Inventory and order synchronization with automated SKU updates, queue workers, and reporting; delivered REST integrations, jobs, and dashboards to stabilize supply, pricing, and fulfillment data.',
    image: '/images/project-divinity-metals.png',
    category: 'Ecommerce / Inventory Management',
    technologies: ['Laravel', 'MySQL', 'Redis Queues', 'REST APIs', 'Nginx'],
    liveUrl: 'https://divinitymetals.com/',
    githubUrl: null
  },
  {
    id: 5,
    title: 'FreelaDesk',
    description: 'Team based project and task management SaaS with multi workspace, lists, board view, roles and permissions, and real time updates via WebSockets, built with Nuxt.',
    image: '/images/project-freeladesk.png',
    category: 'SaaS / Task Management',
    technologies: ['NestJS', 'TypeScript', 'Prisma', 'PostgreSQL', 'Redis', 'WebSockets', 'Nuxt 3'],
    liveUrl: 'https://freeladesk.com/',
    githubUrl: null
  },
  {
    id: 6,
    title: 'Festa',
    description: 'Event management backend providing categories, events, and media uploads, exposing scalable REST APIs for public and admin UIs, with NestJS, Prisma, and S3 storage integration.',
    image: '/images/project-festa.png',
    category: 'Events API',
    technologies: ['NestJS', 'TypeScript', 'Prisma', 'PostgreSQL', 'Redis', 'AWS S3'],
    liveUrl: null,
    githubUrl: null
  },
  {
    id: 7,
    title: 'Baladi Express',
    description: 'Developed Laravel REST APIs powering catalog, cart, checkout, and order workflows; implemented authentication, validation, rate limiting, and caching, coordinating with a separate frontend partner team.',
    image: '/images/project-baladi-express.png',
    category: 'E-commerce',
    technologies: ['Laravel', 'MySQL', 'Redis', 'REST APIs', 'Sanctum/JWT'],
    liveUrl: 'https://baladiexpress.com/',
    githubUrl: null
  },
  {
    id: 8,
    title: 'PropQA',
    description: 'AI powered property analytics with listing ingestion and search; built Python NLP microservice for ranking and integrated AWS Rekognition, with Laravel, Nuxt, PostgreSQL, Redis processing.',
    image: '/images/project-propqa.png',
    category: 'Real Estate / AI',
    technologies: ['Laravel', 'Nuxt 3', 'PostgreSQL', 'Python (NLP)', 'AWS Rekognition', 'Redis', 'Socialite'],
    liveUrl: 'https://propqa.ai/',
    githubUrl: null
  },
  {
    id: 9,
    title: 'RPM',
    description: 'Management and operations tool with route scheduling, job tickets, invoicing, and reporting; backed processing for tasks, summaries, and admin controls to streamline dispatch operations.',
    image: '/images/project-rpm.png',
    category: 'Operations Management / SaaS',
    technologies: ['Laravel', 'MySQL', 'Redis Queues', 'Cron', 'Nginx'],
    liveUrl: 'https://reliablepremium.com/',
    githubUrl: null
  },
  {
    id: 10,
    title: 'StackConvert',
    description: 'Comprehensive file conversion platform with 20+ specialized tools built on Nuxt.js 3, WebAssembly processing, image/PDF/JSON manipulation utilities, QR code generation, and privacy-focused client-side architecture.',
    image: '/images/stackconvert-screenshot.png',
    category: 'Utility / Conversion',
    technologies: ['Nuxt.js 3', 'Tailwind CSS', 'WebAssembly', 'Canvas API'],
    liveUrl: 'https://www.stackconvert.com/',
    githubUrl: null
  },
  {
    id: 11,
    title: 'Portfolio Website',
    description: 'Responsive developer portfolio highlighting projects, clean UI, SEO friendly structure, and content sections, built with Nuxt 3 and Tailwind CSS, optimized for performance and updates.',
    image: '/images/project-portfolio.png',
    category: 'Portfolio',
    technologies: ['Nuxt 3', 'Tailwind CSS', 'TypeScript'],
    liveUrl: '#',
    githubUrl: 'https://github.com/RahmatUllah-github/portfolio.git'
  }
];
</script>