<template>
<nav class="flex items-center bg-gray-900 p-3 flex-wrap">
  
  <!--Link: Home Page-->
  <inertia-link 
    href="/index" 
    class="p-2 mr-4 inline-flex items-center">
    <span class="text-xl text-white font-bold uppercase tracking-wide">.VSKDR</span>
  </inertia-link>

  <!--Dropdown Navbar Toggler || Hamburger -->
  <button 
    class="text-white inline-flex p-3 hover:bg-gray-900 rounded lg:hidden ml-auto hover:text-white outline-none nav-toggler" 
    data-target="#navigation" 
    id="hamburger">
    <i class="material-icons">.OPENME</i>
  </button>

  <div class="hidden top-navbar w-full lg:inline-flex lg:flex-grow lg:w-auto" id="navigation">
    <div class="lg:inline-flex lg:flex-row lg:ml-auto lg:w-auto w-full lg:items-center items-start flex flex-col lg:h-auto" >

      <!--Link: Services Page-->
      <inertia-link 
        href="/services" 
        class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:bg-gray-900 hover:text-white">
        <span>.SERVICES</span>
      </inertia-link>

      <!--Link: Documentation Page-->
      <inertia-link 
        href="/docs" 
        class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:bg-gray-900 hover:text-white">
        <span>.DOCS</span>
      </inertia-link>

      <!--Link: About Page-->
      <inertia-link 
        href="/about" 
        class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:bg-gray-900 hover:text-white">
        <span>.ABOUT</span>
      </inertia-link>

      <!--Link: Contact Page-->
      <inertia-link 
        href="/contact" 
        class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:bg-gray-900 hover:text-white">
        <span>.CONTACT</span>
      </inertia-link>
      
    </div>
    
    <!--Link: Login/Signup Page-->
    <inertia-link 
      href="/enter"
      class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:bg-gray-900 hover:text-white">
      .ENTER
    </inertia-link>

  </div>
</nav>    
</template>
