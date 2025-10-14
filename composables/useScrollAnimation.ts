export const useScrollAnimation = () => {
  const animateOnScroll = (selector: string) => {
    if (process.client) {
      const elements = document.querySelectorAll(selector)
      
      elements.forEach((element) => {
        const observer = new IntersectionObserver(
          (entries) => {
            entries.forEach((entry) => {
              if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in')
                observer.unobserve(entry.target)
              }
            })
          },
          { threshold: 0.1 }
        )
        
        observer.observe(element)
      })
    }
  }
  
  return {
    animateOnScroll
  }
}