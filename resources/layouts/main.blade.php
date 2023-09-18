<!-- template madre -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <link rel="stylesheet" href=" <?= url('css/styles.css') ?>">

    <title> @yield('title') :: El Rincón Sustentable</title>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">

        </nav>
        <main class="container py-3">
            <!-- espacio cedido a templates anexos -->
            @yield('content')
        </main>
        <footer class="footer">
            <p>Parcial 1</p>
        </footer>
    </div>
</body>

</html>
