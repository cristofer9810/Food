<style>
    .imagen {
        background-image: url("{{ asset('inicio/img/fondo.jpg') }}");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 100vh;
        width: 100vw;
    }

    .rgb {
        background-color: rgba(0,0,0,.90);
    }

</style>


<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 imagen bg-fixed bg-bottom">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 shadow-md overflow-hidden sm:rounded-lg rgb">
        {{ $slot }}
    </div>
</div>
