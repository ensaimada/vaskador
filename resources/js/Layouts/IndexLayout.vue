<template>
  <main>
    <header><IndexNavbar/></header>
      <article><slot/></article>
    <IndexFooter/>
  </main>
</template>

<script>
  import IndexNavbar from "@/Components/Public/IndexNavbar"
  import IndexFooter from "@/Components/Public/IndexFooter"
  export default {
    components: {
      IndexNavbar,
      IndexFooter
    }
  }
</script>