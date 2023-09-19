<!-- template madre -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/styles.css')

    <title> @yield('title') :: El Rincón Sustentable</title>
</head>

<body>
    <div id="app" class="min-h-screen flex flex-col">
        <nav class="w-screen h-[85px] bg-principal drop-shadow-xl flex items-center" >
            <div class="mx-6 bg-white w-[70px] h-[70px] rounded-full shadow-lg">
                <img src="{{ asset('img/logo-png.png') }}" alt="logo del rincon sustentable" class=" w-screen my-2 rounded-full ">
            </div>
            <ul class="text-white flex flex-row">
                <li class="mx-6 h-[30px] text-lg hover:border-b-[5px] hover:border-yellow-500 transition duration-300 ease-in-out"><a href="#">Inicio</a></li>
                <li class="mx-6 h-[30px] text-lg hover:border-b-[5px] hover:border-yellow-500 transition duration-300 ease-in-out"><a href="#">Tienda</a></li>
                <li class="mx-6 h-[30px] text-lg hover:border-b-[5px] hover:border-yellow-500 transition duration-300 ease-in-out"><a href="#">Noticias</a></li>
                <li class="mx-6 h-[30px] text-lg hover:border-b-[5px] hover:border-yellow-500 transition duration-300 ease-in-out"><a href="#">Blog</a></li>
                <li class="mx-6 h-[30px] text-lg hover:border-b-[5px] hover:border-yellow-500 transition duration-300 ease-in-out"><a href="#">Contacto</a></li>
                <li class="mx-6 h-[30px] text-lg hover:border-b-[5px] hover:border-yellow-500 transition duration-300 ease-in-out"><a href="#">Nosotros</a></li>
            </ul>
        </nav>
        <main class="container mx-auto flex-grow">
            <!-- espacio cedido a templates anexos -->
            @yield('content')
        </main>
        <footer class="w-screen py-4 h-[260px] bg-secundario drop-shadow-xl flex  text-white">
            <h3 class="block">Portales y Comercio Electrónico - Parcial 1</h3>
            <ul class="block">
                <li>Gonzalez Chavez Pedro</li>
                <li>Scotto Rocío</li>
                <li>Valdiviezo Ezequiel</li>
            </ul>

        </footer>
    </div>
</body>

</html>
