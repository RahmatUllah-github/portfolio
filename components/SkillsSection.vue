<template>
  <section id="skills" class="py-20 bg-gray-50 dark:bg-gray-900">
    <div class="container mx-auto px-6">
      <div class="text-center mb-16">
        <h2 class="text-4xl font-bold mb-4 animate-fade-in">Skills & Technologies</h2>
        <p class="text-gray-600 dark:text-gray-400 animate-slide-up">Technologies I work with to bring ideas to life</p>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <div 
          v-for="(category, index) in skills" 
          :key="category.name"
          class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg card-hover animate-scale-in"
          :style="{ animationDelay: `${index * 0.1}s` }"
        >
          <div class="text-center mb-6">
            <div class="w-16 h-16 mx-auto mb-4 rounded-full flex items-center justify-center text-2xl" :class="category.bgColor">
              {{ category.icon }}
            </div>
            <h3 class="text-xl font-bold mb-2">{{ category.name }}</h3>
          </div>
          
          <div class="space-y-3">
            <div 
              v-for="skill in category.skills" 
              :key="skill.name"
              class="flex items-center justify-between"
            >
              <span class="text-sm font-medium">{{ skill.name }}</span>
              <div class="flex-1 mx-3 bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                <div 
                  class="h-2 rounded-full transition-all duration-1000 ease-out"
                  :class="skill.color"
                  :style="{ width: `${skill.level}%` }"
                ></div>
              </div>
              <span class="text-xs text-gray-500">{{ skill.level }}%</span>
            </div>
          </div>
        </div>
      </div>
      
      <div class="mt-16 text-center">
        <h3 class="text-2xl font-bold mb-8 animate-fade-in">Other Technologies</h3>
        <div class="flex flex-wrap justify-center gap-4">
          <span 
            v-for="(tech, index) in additionalTechs" 
            :key="tech"
            class="px-4 py-2 bg-white dark:bg-gray-800 rounded-full shadow-md text-sm font-medium hover:shadow-lg transition-all duration-300 animate-bounce-in"
            :style="{ animationDelay: `${index * 0.05}s` }"
          >
            {{ tech }}
          </span>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
const skills = [
  {
    name: 'Frontend',
    icon: '💻',
    bgColor: 'bg-blue-100 dark:bg-blue-900',
    skills: [
      { name: 'Vue.js/Nuxt.js', level: 95, color: 'bg-green-500' },
      { name: 'JavaScript/TypeScript', level: 95, color: 'bg-yellow-500' },
      { name: 'Bootstrap/TailwindCSS', level: 95, color: 'bg-blue-600' },
      { name: 'HTML/CSS', level: 95, color: 'bg-orange-500' }
    ]
  },
  {
    name: 'Backend',
    icon: '⚙️',
    bgColor: 'bg-purple-100 dark:bg-purple-900',
    skills: [
      { name: 'Laravel', level: 100, color: 'bg-red-500' },
      { name: 'PHP', level: 95, color: 'bg-purple-600' },
      { name: 'REST APIs', level: 95, color: 'bg-orange-500' },
      { name: 'Node.js/Nest.js', level: 85, color: 'bg-green-600' }
    ]
  },
  {
    name: 'Database',
    icon: '🗄️',
    bgColor: 'bg-green-100 dark:bg-green-900',
    skills: [
      { name: 'MySQL', level: 95, color: 'bg-blue-600' },
      { name: 'PostgreSQL', level: 95, color: 'bg-red-500' },
      { name: 'MongoDB', level: 95, color: 'bg-green-600' },
      { name: 'Schema Design', level: 95, color: 'bg-indigo-500' }
    ]
  },
  {
    name: 'Tools & Others',
    icon: '🛠️',
    bgColor: 'bg-orange-100 dark:bg-orange-900',
    skills: [
      { name: 'Git', level: 95, color: 'bg-gray-400' },
      { name: 'Postman', level: 95, color: 'bg-orange-500' },
      { name: 'Linux', level: 95, color: 'bg-indigo-700' },
      { name: 'AWS', level: 95, color: 'bg-red-500' }
    ]
  }
]

const additionalTechs = [
  'Nuxt.js', 'Express.js', 'Auth', 'Socket', 'jQuery',
  'JSON', 'XML', 'AJAX', 'Webpack', 'Vite', 'Nginx', 'Apache'
]
</script>