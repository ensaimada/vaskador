<template>
  <main>
    <!-- HEADER -->
      <Navbar/>
      <Sidebar/>

    <!-- CONTENT -->
    <article>
      <slot/>
    </article>

    <!-- FOOTER -->
    <Footer/>
  </main>
</template>

<script>
  import Navbar from "@/Components/Dashboard/Navbar"
  import Sidebar from "@/Components/Dashboard/Sidebar"
  import Footer from "@/Components/Dashboard/Footer"
  export default {
    components: {
      Navbar,
      Sidebar,
      Footer
    }
  }
</script>