<template>
  <main>
    <!-- HEADER -->
    <header>
      <Navbar/>
    </header>
    
    <!-- Wide center column -->
    <div class="flex pb-4">
      <div class="w-1/12 bg-gray-500"></div>

      <div class="w-10/12 bg-gray-400">
        <!-- CONTENT -->
        <article>
          <slot/>
        </article>
      </div>

      <div class="w-1/12 bg-gray-500"></div>
    </div>

    <!-- FOOTER -->
    <Footer/>
  </main>
</template>

<script>
  import Navbar from "@/Components/Dashboard/Navbar"
  import Footer from "@/Components/Dashboard/Footer"
  import Sidebar from "@/Components/Dashboard/Sidebar"
  export default {
    components: {
      Navbar,
      Footer,
      Sidebar
    }
  }
</script>