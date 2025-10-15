export default defineNuxtConfig({
  compatibilityDate: '2025-10-15',
  devtools: { enabled: true },
  modules: [
    '@nuxtjs/tailwindcss',
    '@nuxtjs/google-fonts',
    '@nuxtjs/color-mode',
    '@vueuse/nuxt'
  ],
  
  // Runtime Config
  runtimeConfig: {
    public: {
      formspreeFormId: process.env.FORMSPREE_FORM_ID
    }
  },

  // Color Mode
  colorMode: {
    classSuffix: ''
  },

  // App Configuration
  app: {
    head: {
      charset: 'utf-8',
      viewport: 'width=device-width, initial-scale=1',
      title: 'Rahmat - Senior Full Stack Developer | Vue.js, Node.js, PHP Laravel Expert',
      meta: [
        { name: 'description', content: 'Senior Full Stack Developer with expertise in Vue.js, Node.js, PHP, JavaScript, TypeScript, MySQL, PostgreSQL, MongoDB. Building scalable web applications, APIs, and e-commerce platforms for healthcare, legal tech, and pharmaceutical industries.' },
        { name: 'keywords', content: 'Full Stack Developer, Vue.js, Node.js, PHP Laravel, JavaScript, TypeScript, MySQL, PostgreSQL, MongoDB, REST APIs, Web Development, E-commerce, Healthcare Tech, Legal Tech, Pharmaceutical' },
        { name: 'author', content: 'Rahmat' },
        { property: 'og:type', content: 'website' },
        { property: 'og:title', content: 'Rahmat - Senior Full Stack Developer | Vue.js, Node.js, PHP Laravel Expert' },
        { property: 'og:description', content: 'Senior Full Stack Developer with 5+ years experience. Expert in Vue.js, Node.js, PHP Laravel, JavaScript, TypeScript, MySQL, PostgreSQL, MongoDB. Delivered 15+ successful projects in healthcare, e-commerce, and legal tech.' },
        { property: 'og:image', content: '/images/about-rahmat.png' },
        { name: 'twitter:card', content: 'summary_large_image' },
        { name: 'twitter:title', content: 'Rahmat - Senior Full Stack Developer | Vue.js, Node.js, PHP Laravel Expert' },
        { name: 'twitter:description', content: 'Senior Full Stack Developer with 5+ years experience. Expert in Vue.js, Node.js, PHP Laravel, JavaScript, TypeScript, MySQL, PostgreSQL, MongoDB. Delivered 15+ successful projects.' },
        { name: 'twitter:image', content: '/images/about-rahmat.png' }
      ],
      link: [
        { rel: 'icon', type: 'image/svg+xml', href: '/favicon.svg' },
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