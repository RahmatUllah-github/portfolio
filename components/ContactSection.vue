<template>
  <section id="contact" class="py-20 bg-white dark:bg-gray-800">
    <div class="container mx-auto px-6">
      <div class="text-center mb-16">
        <h2 class="text-4xl font-bold mb-4 animate-fade-in">Get In Touch</h2>
        <p class="text-gray-600 dark:text-gray-400 animate-slide-up">Let's discuss your next project or opportunity</p>
      </div>
      
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-6xl mx-auto">
        <div class="animate-slide-in-left">
          <h3 class="text-2xl font-bold mb-8">Let's Connect</h3>
          <p class="text-gray-600 dark:text-gray-400 mb-8 leading-relaxed">
            I'm always interested in new opportunities, challenging projects, and collaborations. 
            Whether you have a project in mind or just want to chat about technology, feel free to reach out!
          </p>
          
          <div class="space-y-6">
            <div class="flex items-center space-x-4">
              <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center text-xl">
                ✉️
              </div>
              <div>
                <h4 class="font-semibold">Email</h4>
                <a href="mailto:rahmatul368@gmail.com" class="text-blue-600 dark:text-blue-400 hover:underline">
                  rahmatul368@gmail.com
                </a>
              </div>
            </div>
            
            <div class="flex items-center space-x-4">
              <div class="w-12 h-12 bg-purple-100 dark:bg-purple-900 rounded-lg flex items-center justify-center text-xl">
                💼
              </div>
              <div>
                <h4 class="font-semibold">LinkedIn</h4>
                <a href="https://www.linkedin.com/in/rahmatul368/" target="_blank" class="text-purple-600 dark:text-purple-400 hover:underline">
                  linkedin.com/in/rahmatul368
                </a>
              </div>
            </div>
            
            <div class="flex items-center space-x-4">
              <div class="w-12 h-12 bg-green-100 dark:bg-green-900 rounded-lg flex items-center justify-center text-xl">
                📍
              </div>
              <div>
                <h4 class="font-semibold">Location</h4>
                <p class="text-gray-600 dark:text-gray-400">Available for remote work worldwide & onsite in Lahore, Pakistan</p>
              </div>
            </div>
            
            <div class="flex items-center space-x-4">
              <div class="w-12 h-12 bg-green-100 dark:bg-green-900 rounded-lg flex items-center justify-center text-xl">
                💬
              </div>
              <div>
                <h4 class="font-semibold">WhatsApp</h4>
                <a href="https://wa.me/923469070799" target="_blank" class="text-green-600 dark:text-green-400 hover:underline">
                  +92 346 9070799
                </a>
              </div>
            </div>
            
            <div class="flex items-center space-x-4">
              <div class="w-12 h-12 bg-orange-100 dark:bg-orange-900 rounded-lg flex items-center justify-center text-xl">
                ⏰
              </div>
              <div>
                <h4 class="font-semibold">Response Time</h4>
                <p class="text-gray-600 dark:text-gray-400">Usually within 24 hours</p>
              </div>
            </div>
          </div>
          
          <div class="mt-8">
            <h4 class="font-semibold mb-4">Follow Me</h4>
            <div class="flex space-x-4">
              <a 
                href="https://www.linkedin.com/in/rahmatul368/" 
                target="_blank"
                class="w-10 h-10 bg-purple-600 text-white rounded-lg flex items-center justify-center hover:bg-purple-700 transition-colors duration-300"
              >
                💼
              </a>
              <a 
                href="https://github.com/RahmatUllah-github" 
                target="_blank"
                class="w-10 h-10 bg-gray-700 dark:bg-gray-600 text-white rounded-lg flex items-center justify-center hover:bg-gray-800 dark:hover:bg-gray-700 transition-colors duration-300"
              >
                🐙
              </a>
              <a 
                href="https://wa.me/923469070799" 
                target="_blank"
                class="w-10 h-10 bg-green-600 text-white rounded-lg flex items-center justify-center hover:bg-green-700 transition-colors duration-300"
              >
                💬
              </a>
            </div>
          </div>
        </div>
        
        <div class="animate-slide-in-right">
          <form @submit.prevent="submitForm" class="bg-gray-50 dark:bg-gray-900 p-8 rounded-2xl shadow-lg">
            <h3 class="text-xl font-bold mb-6">Send Me a Message</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
              <div>
                <label for="name" class="block text-sm font-medium mb-2">Name *</label>
                <input 
                  id="name"
                  v-model="form.name"
                  type="text" 
                  required
                  class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-800 transition-all duration-300"
                  placeholder="Your Name"
                />
              </div>
              <div>
                <label for="email" class="block text-sm font-medium mb-2">Email *</label>
                <input 
                  id="email"
                  v-model="form.email"
                  type="email" 
                  required
                  class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-800 transition-all duration-300"
                  placeholder="your@email.com"
                />
              </div>
            </div>
            
            <div class="mb-6">
              <label for="subject" class="block text-sm font-medium mb-2">Subject *</label>
              <input 
                id="subject"
                v-model="form.subject"
                type="text" 
                required
                class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-800 transition-all duration-300"
                placeholder="Project Discussion"
              />
            </div>
            
            <div class="mb-6">
              <label for="message" class="block text-sm font-medium mb-2">Message *</label>
              <textarea 
                id="message"
                v-model="form.message"
                rows="5" 
                required
                class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-800 transition-all duration-300 resize-none"
                placeholder="Tell me about your project or opportunity..."
              ></textarea>
            </div>
            
            <div class="relative">
              <button 
                type="submit"
                :disabled="isSubmitting || !isFormValid"
                @mouseenter="showTooltip = !isFormValid && !isSubmitting"
                @mouseleave="showTooltip = false"
                class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 py-3 rounded-lg font-medium transition-all duration-300 hover:shadow-lg hover:scale-105 disabled:opacity-50 disabled:cursor-not-allowed disabled:hover:scale-100 disabled:hover:shadow-none flex items-center justify-center space-x-2"
              >
                <span v-if="isSubmitting">⏳</span>
                <span v-else>📤</span>
                <span>{{ isSubmitting ? 'Sending...' : 'Send Message' }}</span>
              </button>
              
              <!-- Custom Tooltip -->
              <div 
                v-if="showTooltip"
                class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 px-3 py-2 bg-gray-800 dark:bg-gray-700 text-white text-sm rounded-lg shadow-lg whitespace-nowrap animate-fade-in"
              >
                Please fill the form correctly
                <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800 dark:border-t-gray-700"></div>
              </div>
            </div>
            
            <p class="text-xs text-gray-500 dark:text-gray-400 mt-4 text-center">
              I'll get back to you as soon as possible!
            </p>
          </form>
        </div>
      </div>
    </div>
    
    <!-- Notification Popup -->
    <div 
      v-if="showNotification"
      class="fixed top-4 right-4 z-50 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg shadow-lg p-4 max-w-sm animate-slide-in-right"
    >
      <div class="flex items-center space-x-3">
        <div class="flex-shrink-0">
          <div v-if="notificationType === 'success'" class="w-8 h-8 bg-green-100 dark:bg-green-900 rounded-full flex items-center justify-center animate-bounce">
            <span class="text-green-600 dark:text-green-400 text-lg">✓</span>
          </div>
          <div v-else class="w-8 h-8 bg-red-100 dark:bg-red-900 rounded-full flex items-center justify-center animate-bounce">
            <span class="text-red-600 dark:text-red-400 text-lg">✕</span>
          </div>
        </div>
        <div class="flex-1">
          <p class="text-sm font-medium text-gray-900 dark:text-white">
            {{ notificationType === 'success' ? 'Success!' : 'Error!' }}
          </p>
          <p class="text-sm text-gray-600 dark:text-gray-400">
            {{ notificationMessage }}
          </p>
        </div>
        <button 
          @click="showNotification = false"
          class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300"
        >
          ✕
        </button>
      </div>
    </div>
  </section>
</template>

<script setup>
const form = ref({
  name: '',
  email: '',
  subject: '',
  message: ''
})

const isSubmitting = ref(false)
const showNotification = ref(false)
const notificationType = ref('success')
const notificationMessage = ref('')
const showTooltip = ref(false)

const config = useRuntimeConfig()

// Form validation
const isFormValid = computed(() => {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
  return (
    form.value.name.trim().length >= 2 &&
    emailRegex.test(form.value.email.trim()) &&
    form.value.subject.trim().length >= 3 &&
    form.value.message.trim().length >= 10
  )
})

const showNotificationPopup = (type, message) => {
  notificationType.value = type
  notificationMessage.value = message
  showNotification.value = true
  
  setTimeout(() => {
    showNotification.value = false
  }, 5000)
}



const submitForm = async () => {
  if (!isFormValid.value) return
  
  isSubmitting.value = true
  
  try {
    await $fetch(`https://formspree.io/f/${config.public.formspreeFormId}`, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: form.value
    })
    
    form.value = {
      name: '',
      email: '',
      subject: '',
      message: ''
    }
    
    showNotificationPopup('success', 'Message sent successfully! I\'ll get back to you soon.')
    
  } catch (error) {
    console.error('Error submitting form:', error)
    showNotificationPopup('error', 'There was an error sending your message. Please try again.')
  } finally {
    isSubmitting.value = false
  }
}
</script>