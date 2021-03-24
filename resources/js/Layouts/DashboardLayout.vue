<template>
  <main>
    <header></header>
      <Sidebar/>
      <article><slot/></article>
  </main>
</template>

<script>
  import Sidebar from "@/Components/Dashboard/Sidebar"

  export default {
    components: {
      Sidebar
    }
  }
</script>