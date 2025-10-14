<template>
  <section id="experience" class="py-20 bg-gray-50 dark:bg-gray-900">
    <div class="container mx-auto px-6">
      <div class="text-center mb-16">
        <h2 class="text-4xl font-bold mb-4 animate-fade-in">Experience</h2>
        <p class="text-gray-600 dark:text-gray-400 animate-slide-up">My professional journey and achievements</p>
      </div>
      
      <div class="max-w-4xl mx-auto">
        <div class="relative">
          <div class="absolute left-1/2 transform -translate-x-1/2 w-0.5 h-full bg-gradient-to-b from-blue-500 to-purple-500"></div>
          
          <div 
            v-for="(experience, index) in experiences" 
            :key="experience.id"
            class="relative mb-12 animate-slide-up flex items-start"
            :style="{ animationDelay: `${index * 0.2}s` }"
          >
            <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full border-4 border-white dark:border-gray-900 shadow-lg z-10"></div>
            
            <div 
              class="px-4 md:px-0 w-full"
              :class="index % 2 === 0 ? 'md:pr-1/2 md:text-right' : 'md:pl-1/2 md:ml-8'"
            >
              <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg card-hover text-left">
                <div class="mb-4">
                  <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">{{ experience.position }}</h3>
                  <span class="inline-block text-sm font-medium text-blue-600 dark:text-blue-400 bg-blue-100 dark:bg-blue-900 px-3 py-1 rounded-full">
                    {{ experience.duration }}
                  </span>
                </div>
                
                <div class="flex items-center mb-4">
                  <h4 class="text-lg font-semibold text-purple-600 dark:text-purple-400">{{ experience.company }}</h4>
                  <span class="mx-2 text-gray-400">•</span>
                  <span class="text-gray-600 dark:text-gray-400">{{ experience.location }}</span>
                </div>
                
                <p class="text-gray-600 dark:text-gray-400 mb-4 leading-relaxed">
                  {{ experience.description }}
                </p>
                
                <div class="flex flex-wrap gap-2 mb-4">
                  <span 
                    v-for="tech in experience.technologies" 
                    :key="tech"
                    class="px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-full text-xs font-medium"
                  >
                    {{ tech }}
                  </span>
                </div>
                
                <ul class="space-y-2">
                  <li 
                    v-for="achievement in experience.achievements" 
                    :key="achievement"
                    class="flex items-start space-x-2 text-sm text-gray-600 dark:text-gray-400"
                  >
                    <span class="text-green-500 mt-0.5">✓</span>
                    <span>{{ achievement }}</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="mt-20">
        <h3 class="text-3xl font-bold text-center mb-12 animate-fade-in">Education & Certifications</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
          <div 
            v-for="(edu, index) in education" 
            :key="edu.id"
            class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg card-hover animate-scale-in"
            :style="{ animationDelay: `${index * 0.1}s` }"
          >
            <div class="flex items-center mb-4">
              <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-500 rounded-lg flex items-center justify-center mr-4 text-white text-xl">
                🎓
              </div>
              <div>
                <h4 class="font-bold text-gray-900 dark:text-white">{{ edu.degree }}</h4>
                <p class="text-sm text-gray-600 dark:text-gray-400">{{ edu.institution }}</p>
              </div>
            </div>
            <p class="text-sm text-blue-600 dark:text-blue-400 font-medium">{{ edu.year }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
const experiences = [
  {
    id: 1,
    position: 'Sr. Full Stack Developer',
    company: 'DeltaDots',
    location: 'Lahore, Pakistan',
    duration: 'Nov 2023 - Present',
    description: 'Owning full stack delivery across SaaS, e-commerce, and integrations with a Laravel + Nuxt/NestJS focus, plus AWS and Stripe.',
    technologies: ['Laravel', 'Laravel Nova', 'Nuxt 3', 'NestJS', 'TypeScript', 'PostgreSQL', 'MySQL', 'Redis', 'AWS (S3, CloudFront)', 'Stripe'],
    achievements: [
      'Led core features on KP-Pharma, Regen Bespoke, Festa and RPM',
      'Integrated Stripe Payment Intents with Apple Pay and Google Pay',
      'Improved throughput using Redis queues, indexing, and Nginx tuning',
      'Partnered with DevOps on AWS S3/CloudFront, deployments, and rollbacks'
    ]
  },
  {
    id: 2,
    position: 'Laravel & Vue.js Developer',
    company: 'OnyxTec Solutions',
    location: 'Lahore, Pakistan',
    duration: 'Aug 2022 - Oct 2023',
    description: 'Delivered product features for web apps using a monolithic Laravel + Vue stack with REST APIs and MySQL.',
    technologies: ['Laravel', 'Vue 2', 'Nuxt', 'MySQL', 'Redis', 'Git'],
    achievements: [
      'Built dashboards, CRUD modules, validations, and role-based access',
      'Optimized slow queries with proper indexing and eager loading',
      'Hardened APIs with auth, rate limiting, and request sanitization',
      'Wrote developer docs and reviewed PRs for consistency'
    ]
  },
  {
    id: 3,
    position: 'Laravel & Vue.js Developer',
    company: 'SOFTTNS Trading & Services',
    location: 'Peshawar, Pakistan',
    duration: 'Jul 2021 - Aug 2022',
    description: 'Implemented and maintained monolithic Laravel + Vue applications with payments and third-party API integrations.',
    technologies: ['Laravel', 'Vue 2', 'MySQL', 'Stripe', 'PayPal', 'Bootstrap/Tailwind'],
    achievements: [
      'Shipped authentication, roles/permissions, and media management',
      'Integrated Stripe/PayPal and external REST services',
      'Improved UX with reusable Vue components and form handling',
      'Handled deployments on shared/VPS environments with zero-downtime steps'
    ]
  },
  {
    id: 4,
    position: 'Laravel Developer',
    company: 'Eden Spell Technologies',
    location: 'Rawalpindi, Pakistan',
    duration: 'Jan 2021 - Jun 2021',
    description: 'Developed Laravel backends, designed schemas, and exposed REST APIs for business modules with automated testing.',
    technologies: ['Laravel', 'MySQL', 'Redis', 'Git/GitHub', 'Docker (basics)'],
    achievements: [
      'Modeled relational schemas and wrote migration/seed strategies',
      'Built REST controllers, policies, and request validation layers',
      'Increased performance using caching and query refactoring',
      'Adopted branching standards and introduced code review checklists'
    ]
  }
];

const education = [
  {
    id: 1,
    degree: 'Bachelor of Computer Science',
    institution: 'Abbottabad University of Science & Technology',
    year: '2016 - 2020'
  },
  {
    id: 2,
    degree: 'FSC (Pre-Engineering)',
    institution: 'BISE Abbottabad',
    year: '2016'
  },
  {
    id: 3,
    degree: 'Matriculation',
    institution: 'BISE Mardan',
    year: '2013'
  },
  {
    id: 4,
    degree: 'Shahada Hifz Al Quran ul Kareem',
    institution: 'Wifaqul Madaris Al Arbiya',
    year: '2010'
  }
]
</script>