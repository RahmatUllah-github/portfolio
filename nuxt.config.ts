export default defineNuxtConfig({
  devtools: { enabled: true },
  modules: [
    '@nuxtjs/tailwindcss',
    '@nuxtjs/google-fonts',
    '@vueuse/nuxt'
  ],
  


  // App Configuration
  app: {
    head: {
      charset: 'utf-8',
      viewport: 'width=device-width, initial-scale=1',
      title: 'Rahmat - Senior Full Stack Developer',
      meta: [
        { name: 'description', content: 'Senior Full Stack Developer with expertise in React, Node.js, Python, and modern web technologies. Available for freelance projects and full-time opportunities.' },
        { name: 'keywords', content: 'Full Stack Developer, React, Node.js, Python, JavaScript, TypeScript, Web Development, API Development, Frontend, Backend' },
        { name: 'author', content: 'Rahmat' },
        { property: 'og:type', content: 'website' },
        { property: 'og:title', content: 'Rahmat - Senior Full Stack Developer' },
        { property: 'og:description', content: 'Senior Full Stack Developer specializing in modern web technologies and scalable solutions.' },
        { property: 'og:image', content: '/og-image.jpg' },
        { name: 'twitter:card', content: 'summary_large_image' },
        { name: 'twitter:title', content: 'Rahmat - Senior Full Stack Developer' },
        { name: 'twitter:description', content: 'Senior Full Stack Developer specializing in modern web technologies and scalable solutions.' },
        { name: 'twitter:image', content: '/og-image.jpg' }
      ],
      link: [
        { rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' },
        { rel: 'canonical', href: 'https://rahmat-portfolio.com' }
      ]
    }
  },

  // Google Fonts
  googleFonts: {
    families: {
      Inter: [300, 400, 500, 600, 700],
      'JetBrains Mono': [400, 500, 600]
    }
  },

  // CSS
  css: ['~/assets/css/main.css'],


})