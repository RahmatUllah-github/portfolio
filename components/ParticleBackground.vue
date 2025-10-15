<template>
  <div class="absolute inset-0 overflow-hidden pointer-events-none">
    <div 
      v-for="particle in particles" 
      :key="particle.id"
      class="absolute star animate-float"
      :style="{ 
        left: particle.x + '%', 
        top: particle.y + '%',
        animationDelay: particle.delay + 's',
        animationDuration: particle.duration + 's'
      }"
    />
    <svg class="absolute inset-0 w-full h-full">
      <defs>
        <linearGradient id="lineGradient" x1="0%" y1="0%" x2="100%" y2="100%">
          <stop offset="0%" class="text-blue-300 dark:text-purple-300" stop-color="currentColor" stop-opacity="0.3"/>
          <stop offset="100%" class="text-purple-300 dark:text-blue-300" stop-color="currentColor" stop-opacity="0.1"/>
        </linearGradient>
      </defs>
      <path 
        v-for="line in lines" 
        :key="line.id"
        :d="line.path"
        stroke="url(#lineGradient)"
        stroke-width="1"
        fill="none"
        class="animate-draw"
        :style="{ animationDelay: line.delay + 's' }"
      />
    </svg>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'

const particles = ref([])
const lines = ref([])

onMounted(() => {
  // Generate particles
  for (let i = 0; i < 20; i++) {
    particles.value.push({
      id: i,
      x: Math.random() * 100,
      y: Math.random() * 100,
      delay: Math.random() * 5,
      duration: 10 + Math.random() * 6
    })
  }
  
  // Generate stars around profile area (center)
  for (let i = 20; i < 23; i++) {
    const angle = (i - 20) * 45
    const radius = 15 + Math.random() * 10
    const x = 50 + radius * Math.cos(angle * Math.PI / 180)
    const y = 35 + radius * Math.sin(angle * Math.PI / 180)
    particles.value.push({
      id: i,
      x: Math.max(5, Math.min(95, x)),
      y: Math.max(5, Math.min(95, y)),
      delay: Math.random() * 5,
      duration: 8 + Math.random() * 6
    })
  }
  
  // Generate lines
  for (let i = 0; i < 5; i++) {
    const x1 = Math.random() * 100
    const y1 = Math.random() * 100
    const x2 = Math.random() * 100
    const y2 = Math.random() * 100
    lines.value.push({
      id: i,
      path: `M${x1}% ${y1}% Q${(x1+x2)/2}% ${(y1+y2)/2}% ${x2}% ${y2}%`,
      delay: i * 0.5
    })
  }
})
</script>

<style scoped>
@keyframes float {
  0%, 100% { transform: translateY(0px) translateX(0px); }
  25% { transform: translateY(-30px) translateX(20px); }
  50% { transform: translateY(-15px) translateX(-25px); }
  75% { transform: translateY(-45px) translateX(30px); }
}

@keyframes draw {
  0% { stroke-dasharray: 0 1000; }
  100% { stroke-dasharray: 1000 0; }
}

.animate-float {
  animation: float ease-in-out infinite;
}

.animate-draw {
  animation: draw 4s ease-in-out infinite;
}

.star {
  width: 8px;
  height: 8px;
  position: relative;
  background: #3b82f6;
  clip-path: polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%);
  filter: drop-shadow(0 0 4px rgba(255, 255, 255, 0.8)) drop-shadow(0 0 8px rgba(59, 130, 246, 0.4));
}

:global(.dark) .star {
  background: #a855f7;
  filter: drop-shadow(0 0 4px rgba(255, 255, 255, 0.8)) drop-shadow(0 0 8px rgba(168, 85, 247, 0.4));
}
</style>