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
    <div id="app">
        <nav class="w-screen h-[85px] bg-principal drop-shadow-xl flex items-center" >
            <div class="mx-6 bg-white w-[70px] h-[70px] rounded-full">

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
        <main class="container py-3">
            <!-- espacio cedido a templates anexos -->
            @yield('content')
        </main>
        <footer>
            <p class="text-3xl font-bold underline">Portales y Comercio Electrónico - Parcial 1</p>
            <p>Gonzalez Chavez Pedro - Scotto Rocío - Valdiviezo Ezequiel</p>
        </footer>
    </div>
</body>

</html>
