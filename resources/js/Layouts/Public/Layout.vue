<template>
  <main>
    <!-- HEADER -->
    <header>
      <Navbar/>
    </header>

    <!-- CONTENT -->
    <article>
      <slot/>
    </article>

    <!-- FOOTER -->
    <Footer/>
  </main>
</template>

<script>
  import Navbar from "@/Components/Public/Navbar"
  import Footer from "@/Components/Public/Footer"
  export default {
    components: {
      Navbar,
      Footer
    }
  }
</script>