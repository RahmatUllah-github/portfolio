<template>
  <button
    v-show="showButton"
    @click="scrollToTop"
    :class="['fixed bottom-6 right-6 w-12 h-12 bg-gradient-to-br from-blue-500 via-purple-500 to-blue-600 hover:from-blue-600 hover:via-purple-600 hover:to-blue-700 dark:from-blue-500 dark:via-blue-400 dark:to-purple-500 dark:hover:from-blue-600 dark:hover:via-blue-500 dark:hover:to-purple-600 text-white rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 z-50 flex items-center justify-center transform hover:scale-110 active:scale-95', { 'animate-bounce': isScrolling }]"
    aria-label="Back to top"
  >
    ↑
  </button>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue'

const showButton = ref(false)
const isScrolling = ref(false)

const handleScroll = () => {
  showButton.value = window.scrollY > 300
}

const scrollToTop = () => {
  isScrolling.value = true
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  })
  setTimeout(() => {
    isScrolling.value = false
  }, 1000)
}

onMounted(() => {
  window.addEventListener('scroll', handleScroll)
})

onUnmounted(() => {
  window.removeEventListener('scroll', handleScroll)
})
</script>