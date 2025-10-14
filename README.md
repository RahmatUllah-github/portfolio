# Rahmat's Portfolio Website

A modern, responsive portfolio website built with Nuxt.js, featuring smooth animations and SEO optimization.

## 🚀 Features

- **Responsive Design**: Fully responsive across all devices
- **Dark Mode**: Toggle between light and dark themes
- **Smooth Animations**: CSS animations and transitions
- **SEO Optimized**: Meta tags, structured data, and sitemap
- **Modern Stack**: Nuxt.js 3, Vue 3, Tailwind CSS
- **Performance**: Optimized for speed and accessibility

## 🛠️ Tech Stack

- **Framework**: Nuxt.js 3
- **Styling**: Tailwind CSS
- **Fonts**: Google Fonts (Inter, JetBrains Mono)
- **Icons**: Emoji-based icons for better compatibility
- **Deployment**: Ready for Vercel, Netlify, or any static hosting

## 📦 Installation

1. Clone the repository:
```bash
git clone <repository-url>
cd portfolio
```

2. Install dependencies:
```bash
npm install
```

3. Start development server:
```bash
npm run dev
```

4. Open [http://localhost:3000](http://localhost:3000) in your browser

## 🏗️ Build for Production

```bash
# Build the application
npm run build

# Preview the production build
npm run preview

# Generate static files
npm run generate
```

## 📁 Project Structure

```
portfolio/
├── assets/css/          # Global styles and Tailwind CSS
├── components/          # Vue components
│   ├── Header.vue
│   ├── Footer.vue
│   ├── SkillsSection.vue
│   ├── ProjectsSection.vue
│   ├── ExperienceSection.vue
│   └── ContactSection.vue
├── layouts/             # Layout components
├── pages/               # Page components
├── public/              # Static assets
│   └── images/          # Placeholder images
├── composables/         # Vue composables
├── server/              # Server-side code
└── nuxt.config.ts       # Nuxt configuration
```

## 🎨 Customization

### Personal Information
Update the following files with your information:
- `pages/index.vue` - Hero section and about content
- `components/ExperienceSection.vue` - Work experience and education
- `components/ProjectsSection.vue` - Portfolio projects
- `components/ContactSection.vue` - Contact information

### Images
Replace placeholder images in `public/images/` with your actual photos:
- `profile-placeholder.jpg` - Your profile photo
- `about-placeholder.jpg` - About section image
- `project-*-placeholder.jpg` - Project screenshots
- `og-image.jpg` - Social media sharing image

### Styling
- Modify `assets/css/main.css` for custom styles
- Update `tailwind.config.js` for Tailwind customization
- Change color schemes in component files

### SEO
Update SEO settings in:
- `nuxt.config.ts` - Site configuration
- `app.vue` - Global meta tags
- Individual page components for page-specific SEO

## 🌐 Deployment

### Vercel
1. Push to GitHub
2. Connect repository to Vercel
3. Deploy automatically

### Netlify
1. Build command: `npm run generate`
2. Publish directory: `dist`

### Static Hosting
1. Run `npm run generate`
2. Upload `dist` folder to your hosting provider

## 📧 Contact Form

The contact form is currently set up with a mock submission. To make it functional:

1. Set up a backend service (Formspree, Netlify Forms, etc.)
2. Update the `submitForm` function in `ContactSection.vue`
3. Add proper form validation and error handling

## 🔧 Development Notes

- The project uses emoji icons instead of icon libraries for better compatibility
- All animations are CSS-based for optimal performance
- Dark mode is handled by VueUse's `useColorMode`
- The site is fully accessible with proper ARIA labels

## 📄 License

This project is open source and available under the [MIT License](LICENSE).

## 🤝 Contributing

Feel free to fork this project and customize it for your own portfolio!

---

Built with ❤️ by Rahmat using Nuxt.js and Tailwind CSS