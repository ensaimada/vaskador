<template>
    <nav class="flex items-center bg-gray-900 p-3 flex-wrap">
        <inertia-link href="/index" class="p-2 mr-4 inline-flex items-center">
            <span class="text-xl text-white font-bold uppercase tracking-wide">.VSKDR</span>
        </inertia-link>

        <!--
        <button class="text-white inline-flex p-3 hover:bg-gray-900 rounded lg:hidden ml-auto hover:text-white outline-none nav-toggler" data-target="#navigation" id="openme">
            <i class="material-icons">OPEN.ME</i>
        </button>
        -->

        <div class="hidden top-navbar w-full lg:inline-flex lg:flex-grow lg:w-auto" id="navigation" >
            <div class="lg:inline-flex lg:flex-row lg:ml-auto lg:w-auto w-full lg:items-center items-start  flex flex-col lg:h-auto" >
                <inertia-link href="/index" class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:bg-gray-900 hover:text-white">
                    <span>.HOME</span>
                </inertia-link>
                <inertia-link href="/about" class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:bg-gray-900 hover:text-white">
                    <span>.ABOUT</span>
                </inertia-link>
                <inertia-link href="/services" class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:bg-gray-900 hover:text-white">
                    <span>.SERVICES</span>
                </inertia-link>
                <inertia-link href="/docs" class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:bg-gray-900 hover:text-white">
                    <span>.DOCS</span>
                </inertia-link>
                <inertia-link href="/contact" class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:bg-gray-900 hover:text-white">
                    <span>.CONTACT</span>
                </inertia-link>
            </div>
            <button class="bg-transparent text-gray-400 hover:text-white py-2 px-3 border border-gray-400 hover:border-white rounded">
                .ENTER
            </button>
        </div>
    </nav>    
</template>

<!---<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $(".nav-toggler").each(function(_, navToggler) {
            var target = $(navToggler).data("target");
            $(navToggler).on("click", function() {
                $(target).animate({
                    height: "toggle"
                });
            });
        });
    });
</script>-->

<!--<script>
    let openbtn = document.getElementById('openme');
    let navbardrop = document.getElementById('navigation');

    openbtn.addEventListener('click', function(){
        navbardrop.classList.toggle('active');
    });

</script>-->