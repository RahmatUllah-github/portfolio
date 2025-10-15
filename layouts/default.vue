<template>
  <div class="min-h-screen">
    <Header />
    <main>
      <slot />
    </main>
    <Footer />
    <BackToTop />
  </div>
</template>

<script setup>
import Header from '~/components/Header.vue'
import Footer from '~/components/Footer.vue'
import BackToTop from '~/components/BackToTop.vue'
</script>