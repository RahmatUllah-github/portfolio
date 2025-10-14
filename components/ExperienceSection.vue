<template>
  <section id="experience" class="py-20 bg-gray-50 dark:bg-gray-900">
    <div class="container mx-auto px-6">
      <div class="text-center mb-16">
        <h2 class="text-4xl font-bold mb-4 animate-fade-in">Experience</h2>
        <p class="text-gray-600 dark:text-gray-400 animate-slide-up">My professional journey and achievements</p>
      </div>
      
      <div class="max-w-4xl mx-auto">
        <div class="relative">
          <div class="absolute left-8 md:left-1/2 transform md:-translate-x-1/2 w-0.5 h-full bg-gradient-to-b from-blue-500 to-purple-500"></div>
          
          <div 
            v-for="(experience, index) in experiences" 
            :key="experience.id"
            class="relative flex items-center mb-12 animate-slide-up"
            :style="{ animationDelay: `${index * 0.2}s` }"
          >
            <div class="absolute left-6 md:left-1/2 transform md:-translate-x-1/2 w-4 h-4 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full border-4 border-white dark:border-gray-900 shadow-lg z-10"></div>
            
            <div 
              class="ml-16 md:ml-0 w-full"
              :class="index % 2 === 0 ? 'md:pr-1/2 md:text-right' : 'md:pl-1/2 md:ml-8'"
            >
              <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg card-hover">
                <div class="flex flex-col md:flex-row md:items-center justify-between mb-4">
                  <h3 class="text-xl font-bold text-gray-900 dark:text-white">{{ experience.position }}</h3>
                  <span class="text-sm font-medium text-blue-600 dark:text-blue-400 bg-blue-100 dark:bg-blue-900 px-3 py-1 rounded-full">
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
    position: 'Senior Full Stack Developer',
    company: 'Freelance',
    location: 'Remote',
    duration: '2022 - Present',
    description: 'Leading full-stack development projects for various clients, specializing in modern web technologies and scalable solutions.',
    technologies: ['React', 'Node.js', 'Python', 'AWS', 'PostgreSQL', 'TypeScript'],
    achievements: [
      'Delivered 15+ successful projects with 100% client satisfaction',
      'Reduced application load times by 40% through optimization',
      'Implemented CI/CD pipelines reducing deployment time by 60%',
      'Mentored junior developers and conducted code reviews'
    ]
  },
  {
    id: 2,
    position: 'Full Stack Developer',
    company: 'Tech Solutions Inc.',
    location: 'Remote',
    duration: '2020 - 2022',
    description: 'Developed and maintained web applications for healthcare and e-commerce clients, focusing on performance and user experience.',
    technologies: ['Vue.js', 'Laravel', 'MySQL', 'Docker', 'Redis'],
    achievements: [
      'Built responsive web applications serving 10,000+ users',
      'Integrated payment gateways and third-party APIs',
      'Improved database query performance by 50%',
      'Collaborated with cross-functional teams using Agile methodology'
    ]
  },
  {
    id: 3,
    position: 'Frontend Developer',
    company: 'Digital Agency',
    location: 'Remote',
    duration: '2019 - 2020',
    description: 'Created engaging user interfaces and interactive web experiences for various client projects.',
    technologies: ['JavaScript', 'React', 'SCSS', 'Webpack', 'Git'],
    achievements: [
      'Developed pixel-perfect responsive designs',
      'Implemented modern JavaScript frameworks and libraries',
      'Optimized websites for SEO and accessibility',
      'Collaborated with designers to bring mockups to life'
    ]
  }
]

const education = [
  {
    id: 1,
    degree: 'Bachelor of Computer Science',
    institution: 'University of Technology',
    year: '2015 - 2019'
  },
  {
    id: 2,
    degree: 'AWS Certified Developer',
    institution: 'Amazon Web Services',
    year: '2021'
  },
  {
    id: 3,
    degree: 'React Developer Certification',
    institution: 'Meta (Facebook)',
    year: '2020'
  },
  {
    id: 4,
    degree: 'Full Stack Web Development',
    institution: 'FreeCodeCamp',
    year: '2019'
  }
]
</script>