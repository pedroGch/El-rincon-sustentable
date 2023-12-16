<!-- template madre -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
    @vite('resources/css/styles.css')
    @vite('resources/js/app.js')

    <title> @yield('title') :: El Rincón Sustentable</title>
</head>

<body>
    <div id="app" class="min-h-screen flex flex-col">

        <!-- Main navigation container -->
        <nav class="relative flex w-full flex-nowrap items-center justify-between  bg-principal py-2 text-white shadow-lg lg:flex-wrap lg:justify-start lg:py-4"
            data-te-navbar-ref>
            <div class="flex w-full flex-wrap items-center justify-between px-3">
                <div class="flex items-center">
                    <div class="mx-6 p-1 bg-white w-[80px]  shadow-lg">
                        <img src="{{ asset('img/logo.png') }}" alt="logo del rincón sustentable"
                            class=" w-screen my-2  ">
                        <h1 class="text-[0px]">El Rincón Sustentable</h1>
                    </div>
                    <div class="flex justify-center align-middle">
                        <div class="sm:hidden">
                            @if (auth()->check())
                                <div class="relative me-10" data-te-dropdown-ref>
                                    <button
                                        class="flex items-center whitespace-nowrap rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out  hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]  focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] motion-reduce:transition-none dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                                        type="button" id="dropdownMenuButton2d" data-te-dropdown-toggle-ref
                                        aria-expanded="false" data-te-ripple-init data-te-ripple-color="light">
                                       <?= Auth::user()->name ?>
                                        <span class="ml-2 w-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" class="h-5 w-5">
                                                <path fill-rule="evenodd"
                                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </button>
                                    <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
                                        aria-labelledby="dropdownMenuButton1d" data-te-dropdown-menu-ref>
                                        <li>
                                            <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                                                href="<?= url('/panel_admin') ?>" data-te-dropdown-item-ref>Mi
                                                Perfil</a>
                                        </li>
                                        <li>
                                            <hr
                                                class="my-2 h-0 border border-t-0 border-solid border-neutral-700 opacity-25 dark:border-neutral-200" />
                                        </li>
                                        <li>
                                            <form action="<?= url('/cerrar_sesion') ?>" method="post">
                                                @csrf
                                                <button type="submit"
                                                    class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600">
                                                    Cerrar sesión
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- Hamburger button for mobile view -->
                <button
                    class="block border-0 bg-transparent px-2  text-white hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0  lg:hidden"
                    type="button" data-te-collapse-init data-te-target="#navbarSupportedContent14"
                    aria-controls="navbarSupportedContent14" aria-expanded="false" aria-label="Toggle navigation">
                    <!-- Hamburger icon -->
                    <span class="[&>svg]:w-7">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-7 w-7">
                            <path fill-rule="evenodd"
                                d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                </button>

                <!-- Collapsible navbar container -->
                <div class="!visible mt-2 hidden flex-grow basis-[100%] items-center lg:mt-0 lg:!flex lg:basis-auto"
                    id="navbarSupportedContent14" data-te-collapse-item>
                    <!-- Left links -->
                    <ul class="list-style-none mr-auto flex flex-col pl-0 lg:mt-1 lg:flex-row" data-te-navbar-nav-ref>

                        <li class="my-4 pl-2 lg:my-0 lg:pl-2 lg:pr-1" data-te-nav-item-ref>
                            <a class="active lg:px-2  text-white" aria-current="page" href="<?= url('/') ?>"
                                data-te-nav-link-ref> Inicio </a>
                        </li>
                        <li class="my-4 pl-2 lg:my-0 lg:pl-2 lg:pr-1" data-te-nav-item-ref>
                            <a class="active lg:px-2  text-white" aria-current="page" href="<?= url('/nosotros') ?>"
                                data-te-nav-link-ref> Nosotros </a>
                        </li>
                        <li class="my-4 pl-2 lg:my-0 lg:pl-2 lg:pr-1" data-te-nav-item-ref>
                            <a class="active lg:px-2  text-white" aria-current="page" href="<?= url('/tienda') ?>"
                                data-te-nav-link-ref> Tienda </a>
                        </li>
                        <li class="my-4 pl-2 lg:my-0 lg:pl-2 lg:pr-1" data-te-nav-item-ref>
                            <a class="active lg:px-2  text-white" aria-current="page" href="<?= url('/blog') ?>"
                                data-te-nav-link-ref> Blog </a>
                        </li>
                        <li class="my-4 pl-2 lg:my-0 lg:pl-2 lg:pr-1" data-te-nav-item-ref>
                            <a class="active lg:px-2  text-white" aria-current="page" href="<?= url('/contacto') ?>"
                                data-te-nav-link-ref> Contacto </a>
                        </li>

                        @if (!auth()->check())
                            <li class="my-4 pl-2 lg:my-0 lg:pl-2 lg:pr-1" data-te-nav-item-ref>
                                <a class="active lg:px-2  text-white" aria-current="page"
                                    href="<?= url('/crear_cuenta') ?>" data-te-nav-link-ref> Crear cuenta </a>
                            </li>
                            <li class="my-4 pl-2 lg:my-0 lg:pl-2 lg:pr-1" data-te-nav-item-ref>
                                <a class="active lg:px-2  text-white" aria-current="page"
                                    href="<?= url('/iniciar_sesion') ?>" data-te-nav-link-ref>Iniciar sesión</a>
                            </li>
                        @endif

                    </ul>
                    @if (auth()->check())
                    <div class="me-3">
                      <a href="<?= url('/carrito') ?>"><img src="{{ asset('img/shopping_trolley_icon.png') }}" alt="Carrito"></a>
                    </div>
                    @endif
                    @if (auth()->check())
                      @if(Auth::user()->rol == 'admin')
                      <div>
                        <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-white hover:text-stone-950 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                            href="<?= url('/panel_admin') ?>" data-te-dropdown-item-ref>Panel Admin</a>
                      </div>
                      @endif
                    @endif
                    <div>

                        <!-- Boton usuario logueado -->
                        <div class="hidden lg:block">
                            @if (auth()->check())
                                <div class="relative me-10" data-te-dropdown-ref>
                                    <button
                                        class="flex items-center whitespace-nowrap rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out  hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]  focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] motion-reduce:transition-none dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                                        type="button" id="dropdownMenuButton1d" data-te-dropdown-toggle-ref
                                        aria-expanded="false" data-te-ripple-init data-te-ripple-color="light">

                                        <?= Auth::user()->name ?>
                                        <span class="ml-2 w-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" class="h-5 w-5">
                                                <path fill-rule="evenodd"
                                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </button>
                                    <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
                                        aria-labelledby="dropdownMenuButton1d" data-te-dropdown-menu-ref>

                                       @if(Auth::user()->rol != 'admin')
                                        <li>
                                            <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                                                href="<?= url('/perfil_usuario') ?>" data-te-dropdown-item-ref>Mi
                                                Perfil</a>
                                        </li>
                                        @endif
                                        <li>
                                            <hr
                                                class="my-2 h-0 border border-t-0 border-solid border-neutral-700 opacity-25 dark:border-neutral-200" />
                                        </li>
                                        <li>
                                            <form action="<?= url('/cerrar_sesion') ?>" method="post">
                                                @csrf
                                                <button type="submit"
                                                    class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600">
                                                    Cerrar sesión
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                              </div>
                        @endif
                    </div>

                </div>
            </div>
        </nav>
        <main class="container mx-auto flex-grow">
            @if (\Session::has('status.message'))
                <div class="mt-5 mb-3 inline-flex w-full items-center rounded-lg bg-{{ \Session::get('status.type') ? \Session::get('status.type') : 'success' }}-100 px-6 py-5 bg- text-base text-{{ \Session::get('status.type') ? \Session::get('status.type') : 'success' }}-700"
                    role="alert">
                    <span class="mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="h-5 w-5">
                            <path fill-rule="evenodd"
                                d="{{ \Session::get('status.svg', 'M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z') }}"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                    <div>
                        {!! \Session::get('status.message') !!}
                    </div>
                </div>
            @endif
            <!-- espacio cedido a templates anexos -->
            @yield('content')
        </main>
        <footer class="lg:py-6 lg:h-[360px] bg-secundario drop-shadow-xl text-white">
            <div>
                <div class="lg:flex mx-auto max-w-screen-xl">
                    <h2 class="hidden">Datos:</h2>
                    <div class="p-4 lg:p-0 lg:flex-1 ">
                        <div class="mb-4">
                            <h3 class="block mb-2 lg:text-2xl font-bold ">Materia:</h3>
                            <p class="lg:text-xl">Portales y Comercio Electrónico - Final</p>
                        </div>
                        <div class="mb-4">
                            <h3 class="block mb-2 lg:text-2xl font-bold ">Profesor:</h3>
                            <p class="lg:text-xl">Santiago Gallino</p>
                        </div>
                        <div class="mb-4">
                            <h3 class="block mb-2 lg:text-2xl font-bold ">Comisión - Cuatrimestre - Año:</h3>
                            <p class="lg:text-xl">DWN4BV - 4to - 2023</p>
                        </div>
                        <div class="hidden lg:flex align-middle justify-center lg:justify-normal lg:mb-4"><img
                                src="{{ url('img/logo-davinci.png') }}" alt="logo Escuela Da Vinci" /></div>
                    </div>
                    <div id="container-team" class="lg:flex-1 p-4">
                        <h3 class="block lg:text-2xl font-bold ">Alumnos:</h3>
                        <div class="flex flex-wrap pb-2 justify-center">
                            <div id="avatar-pedro" class="text-center px-6 pt-8">
                                <img src="{{ url('img/avatar/avatar-pedro.jpg') }}"
                                    class="mx-auto mb-4 w-32 rounded-lg" alt="Avatar Pedro Gonzalez Chavez" />
                                <p class="mb-2 text-xl font-medium leading-tight">Pedro <br>Gonzalez Chavez</p>
                                <div>
                                    <a href="https://github.com/pedroGch" target="_blank">
                                        <div class="github flex justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                fill="#fff" class="bi bi-github" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                                            </svg>
                                        </div>
                                        <span class="hidden">Github</span>
                                    </a>
                                </div>
                            </div>
                            <div id="avatar-rocio" class="text-center px-6 pt-8">
                                <img src="{{ url('img/avatar/avatar-rocio.jpg') }}"
                                    class="mx-auto mb-4 w-32 rounded-lg" alt="Avatar Rocío Scotto" />
                                <p class="mb-2 text-xl font-medium leading-tight">Rocío <br>Scotto</p>
                                <div>
                                    <a href="https://github.com/roscotto" target="_blank">
                                        <div class="github flex justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                fill="#fff" class="bi bi-github" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                                            </svg>
                                        </div>
                                        <span class="hidden">Github</span>
                                    </a>
                                </div>
                            </div>
                            <div id="avatar-valdi" class="text-center px-6 pt-8">
                                <img src="{{ url('img/avatar/avatar-valdi.jpg') }}"
                                    class="mx-auto mb-4 w-32 rounded-lg" alt="Avatar Ezequiel Valdiviezo" />
                                <p class="mb-2 text-xl font-medium leading-tight">Ezequiel <br>Valdiviezo</p>
                                <div>
                                    <a href="https://github.com/Valdiviezo-Ezequiel" target="_blank">
                                        <div class="github flex justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                fill="#fff" class="bi bi-github" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                                            </svg>
                                        </div>
                                        <span class="hidden">Github</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sm:hidden">
                <div class="flex align-middle justify-center lg:justify-normal lg:mb-4"><img
                        src="{{ url('img/logo-davinci.png') }}" alt="logo Escuela Da Vinci" /></div>
            </div>

        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
