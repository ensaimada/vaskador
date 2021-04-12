<template>
  <div id="map">
    <div class="map" id="map"></div>
  </div>
</template>

<script>
  let map;
  let markersArray = [];
  let polyline = null;

  export default {
    props: ['lat', 'lng'],
    methods: {


    }
  }




</script>

<style>
  #map {
    height: 100%;
  }
  html, body {
    height: 100%;
    margin: 0;
    padding: 0;
  }	
</style>