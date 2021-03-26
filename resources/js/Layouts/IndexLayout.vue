<template>
  <main>
    <!-- HEADER -->
    <header>
      <IndexNavbar/>
    </header>

    <!-- CONTENT -->
    <article>
      <slot/>
    </article>

    <!-- FOOTER -->
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