<template>
  <main>
    <!-- HEADER -->
    <Navbar/>
    <Sidebar/>

    <!-- CONTENT -->
    <div class="bg-red-400">
      <article>
        <slot/>
      </article>
    </div>
    <!-- FOOTER -->
    <Footer/>
  </main>
</template>

<script>
  import Navbar from "@/Components/Dashboard/Navbar"
  import Sidebar from "@/Components/Dashboard/Sidebar"
  export default {
    components: {
      Navbar,
      Sidebar
    }
  }
</script>