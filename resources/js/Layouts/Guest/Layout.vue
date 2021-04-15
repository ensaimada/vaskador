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

  </main>
</template>

<script>
  import Navbar from "@/Components/Public/Navbar"

  export default {
    components: {
      Navbar,
    }
  }
</script>