<template>
  <!-- HEADER -->
  <header>
    <Navbar/>
  </header>

  <section class="flex w-full mx-auto ">
    <div class="grid grid-flow-col auto-cols-auto">
      <aside class="hidden md:col-span-3 bg-red-400">
        Text heeeeeeeeeeeere
      </aside>

      <main class="md:col-span-6 mb-6">
        <!-- CONTENT -->
        <article>
          <slot/>
        </article>
      </main>

      <aside class="hidden md:col-span-3 bg-red-400">
        Text
      </aside>
    </div>
  </section>

  <!-- FOOTER -->
  <Footer/>

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