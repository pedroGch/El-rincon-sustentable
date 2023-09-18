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
        <nav >

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
