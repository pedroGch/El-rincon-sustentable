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
            <div class="mx-6 bg-white w-[70px] h-[85px]  shadow-lg">
                <img src="{{ asset('img/logo.png') }}" alt="logo del rincon sustentable" class=" w-screen my-2  ">
                <h1 class="text-[0px]" >El Rincón Sustentable</h1>
            </div>
            <ul class="text-white flex flex-row">
                <li class="mx-6 h-[30px] text-lg hover:border-b-[5px] hover:border-yellow-500 transition duration-300 ease-in-out"><a href="<?= url('/') ?>">Inicio</a></li>
                <li class="mx-6 h-[30px] text-lg hover:border-b-[5px] hover:border-yellow-500 transition duration-300 ease-in-out"><a href="<?= url('/nosotros') ?>">Nosotros</a></li>
                <li class="mx-6 h-[30px] text-lg hover:border-b-[5px] hover:border-yellow-500 transition duration-300 ease-in-out"><a href="<?= url('/tienda') ?>">Tienda</a></li>
                <li class="mx-6 h-[30px] text-lg hover:border-b-[5px] hover:border-yellow-500 transition duration-300 ease-in-out"><a href="<?= url('/blog') ?>">Blog</a></li>
                <li class="mx-6 h-[30px] text-lg hover:border-b-[5px] hover:border-yellow-500 transition duration-300 ease-in-out"><a href="<?= url('/contacto') ?>">Contacto</a></li>
            </ul>
        </nav>
        <main class="container mx-auto flex-grow">
            <!-- espacio cedido a templates anexos -->
            @yield('content')
        </main>
        <footer class="w-screen py-6 h-[360px] bg-secundario drop-shadow-xl text-white">
            <div class="flex mx-auto max-w-screen-xl">
              <div class="flex-1">
                <div class="mb-4" >
                  <h3 class="block mb-2 text-2xl font-bold ">Materia:</h3>
                  <p class="text-xl">Portales y Comercio Electrónico - Parcial 1</p>
                </div>

                <div class="mb-4" >
                  <h3 class="block mb-2 text-2xl font-bold ">Profesor:</h3>
                  <p class="text-xl">Santiago Gallino</p>
                </div>
                <div class="mb-4" >
                  <h3 class="block mb-2 text-2xl font-bold ">Comisión - Cuatrimestre - Año:</h3>
                  <p class="text-xl">DWN4BV - 4to - 2023</p>
                </div>
                <div class="mb-4" ><img src="./../public/img/logo-davinci.png" class="" alt="logo Escuela Da Vinci" /></div>
              </div>

              <div id="container-team" class="flex-1">

                <h3 class="block text-2xl font-bold ">Alumnos:</h3>

                <div class="flex">

                  <div id="avatar-pedro" class="text-center px-6 pt-8">
                                    <img
                                      src="./../public/img/avatar/avatar-pedro.jpg"
                                      class="mx-auto mb-4 w-32 rounded-lg"
                                      alt="Avatar Pedro Gonzalez Chavez" />
                                    <p class="mb-2 text-xl font-medium leading-tight">Pedro <br>Gonzalez Chavez</p>
                                    <div >
                                      <a href="https://github.com/pedroGch" target="_blank">
                                        <div class="github flex justify-center">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#fff" class="bi bi-github" viewBox="0 0 16 16">
                                                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                                          </svg>
                                        </div>
                                        <span class="hidden">Github</span>
                                      </a>
                                    </div>
                  </div>

                  <div id="avatar-rocio" class="text-center px-6 pt-8">
                                    <img
                                      src="./../public/img/avatar/avatar-rocio.jpg"
                                      class="mx-auto mb-4 w-32 rounded-lg"
                                      alt="Avatar Rocío Scotto" />
                                    <p class="mb-2 text-xl font-medium leading-tight">Rocío <br>Scotto</p>
                                    <div >
                                      <a href="https://github.com/roscotto" target="_blank">
                                        <div class="github flex justify-center">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#fff" class="bi bi-github" viewBox="0 0 16 16">
                                                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                                          </svg>
                                        </div>
                                        <span class="hidden">Github</span>
                                      </a>
                                    </div>
                  </div>

                  <div id="avatar-valdi" class="text-center px-6 pt-8">
                                    <img
                                      src="./../public/img/avatar/avatar-valdi.jpg"
                                      class="mx-auto mb-4 w-32 rounded-lg"
                                      alt="Avatar Ezequiel Valdiviezo" />
                                    <p class="mb-2 text-xl font-medium leading-tight">Ezequiel <br>Valdiviezo</p>
                                    <div >
                                      <a href="https://github.com/Valdiviezo-Ezequiel" target="_blank">
                                        <div class="github flex justify-center">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#fff" class="bi bi-github" viewBox="0 0 16 16">
                                                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                                          </svg>
                                        </div>
                                        <span class="hidden">Github</span>
                                      </a>
                                    </div>
                     </div>
                  </div>


              </div>
            </div>

        </footer>
    </div>

    <script
      type="text/javascript"
      src="./../node_modules/tw-elements/dist/js/tw-elements.umd.min.js">
    </script>
</body>

</html>
