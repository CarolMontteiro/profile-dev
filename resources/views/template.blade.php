<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script defer src="/resources/js/jsapp.js"></script>
    <script src="https://kit.fontawesome.com/8005c041ac.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" media="screen"/>
    <title>CodeZeus</title>
</head>
<body>
<header class="bg-stone-900">
    <div class="container">
        <h1 class="text-white text-2xl py-6">CodeZeus</h1>
    </div>
</header>

<section id="introduction" class="bg-white min-h-[90vh] grid place-items-center items-center">
    <div class="container">
        <div class="flex">
            <div class="w-1/2">
                <h3 class="">Olá, eu sou o</h3>
                <h1 class="">Alexandre Schielke</h1>
                <h3 class="">Desenvolveror Full-Stack</h3>
                <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            </div>
            <div class="w-1/2 h-auto">
                <img class="h-300 w-300" src="{{ asset('image/fotolight.jpeg') }}" alt="">
            </div>
        </div>
    </div>
</section>

<section id="about" class="bg-stone-900 min-h-screen grid place-items-center items-center">
    <div class="container">
        <div class="bg-stone-800 border-2 border-white/10 rounded-lg p-8">
            <div class="pb-10">
                <h4 class="text-lg text-white pb-5">Quem sou</h4>
                <h2 class="text-2xl text-white font-semibold pb-4">Alexandre Schielke</h2>
                <p class="text-white">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque facilisis diam et condimentum sagittis.
                    Etiam sollicitudin, magna a pretium consectetur, arcu augue imperdiet quam, vel consectetur massa enim nec
                    dolor. Nullam libero mauris, convallis vitae sapien vel, malesuada tempor libero.
                </p>
            </div>

            <div class="social-media flex">
                <a href="#" class="border-2 border-white/10 p-5 mr-3"><i class="fa-brands fa-github text-2xl text-white font-semibold"></i></a>
                <a href="#" class="border-2 border-white/10 p-5 mr-3"><i class="fa-brands fa-linkedin-in text-2xl text-white font-semibold"></i></a>
                <a href="#" class="border-2 border-white/10 p-5"><i class="fa-regular fa-envelope text-2xl text-white font-semibold"></i></a>
            </div>
        </div>

    </div>
</section>

<section id="skill" class="bg-stone-800 min-h-screen grid place-items-center items-center">
    <div class="container">
        <h2 class="text-3xl font-semibold pb-16">Conhecimentos</h2>

        <div class="cards-skill flex flex-wrap gap-6">

            <div class="bg-amber-200 w-28 flex flex-col justify-center items-center aspect-square rounded-tl-3xl">
                <p class="text-md pb-2">Lorem ipsum</p>
                <i class="fa-brands fa-html5 text-5xl"></i>
            </div>

            <div class="bg-amber-200 w-28 flex flex-col justify-center items-center aspect-square rounded-tl-3xl">
                <p class="text-md pb-2">Lorem ipsum</p>
                <i class="fa-brands fa-html5 text-5xl"></i>
            </div>

            <div class="bg-amber-200 w-28 flex flex-col justify-center items-center aspect-square rounded-tl-3xl">
                <p class="text-md pb-2">Lorem ipsum</p>
                <i class="fa-brands fa-html5 text-5xl"></i>
            </div>

            <div class="bg-amber-200 w-28 flex flex-col justify-center items-center aspect-square rounded-tl-3xl">
                <p class="text-md pb-2">Lorem ipsum</p>
                <i class="fa-brands fa-html5 text-5xl"></i>
            </div>

            <div class="bg-amber-200 w-28 flex flex-col justify-center items-center aspect-square rounded-tl-3xl">
                <p class="text-md pb-2">Lorem ipsum</p>
                <i class="fa-brands fa-html5 text-5xl"></i>
            </div>

            <div class="bg-amber-200 w-28 flex flex-col justify-center items-center aspect-square rounded-tl-3xl">
                <p class="text-md pb-2">Lorem ipsum</p>
                <i class="fa-brands fa-html5 text-5xl"></i>
            </div>

            <div class="bg-amber-200 w-28 flex flex-col justify-center items-center aspect-square rounded-tl-3xl">
                <p class="text-md pb-2">Lorem ipsum</p>
                <i class="fa-brands fa-html5 text-5xl"></i>
            </div>

            <div class="bg-amber-200 w-28 flex flex-col justify-center items-center aspect-square rounded-tl-3xl">
                <p class="text-md pb-2">Lorem ipsum</p>
                <i class="fa-brands fa-html5 text-5xl"></i>
            </div>

            <div class="bg-amber-200 w-28 flex flex-col justify-center items-center aspect-square rounded-tl-3xl">
                <p class="text-md pb-2">Lorem ipsum</p>
                <i class="fa-brands fa-html5 text-5xl"></i>
            </div>

            <div class="bg-amber-200 w-28 flex flex-col justify-center items-center aspect-square rounded-tl-3xl">
                <p class="text-md pb-2">Lorem ipsum</p>
                <i class="fa-brands fa-html5 text-5xl"></i>
            </div>

            <div class="bg-amber-200 w-28 flex flex-col justify-center items-center aspect-square rounded-tl-3xl">
                <p class="text-md pb-2">Lorem ipsum</p>
                <i class="fa-brands fa-html5 text-5xl"></i>
            </div>

            <div class="bg-amber-200 w-28 flex flex-col justify-center items-center aspect-square rounded-tl-3xl">
                <p class="text-md pb-2">Lorem ipsum</p>
                <i class="fa-brands fa-html5 text-5xl"></i>
            </div>

            <div class="bg-amber-200 w-28 flex flex-col justify-center items-center aspect-square rounded-tl-3xl">
                <p class="text-md pb-2">Lorem ipsum</p>
                <i class="fa-brands fa-html5 text-5xl"></i>
            </div>

            <div class="bg-amber-200 w-28 flex flex-col justify-center items-center aspect-square rounded-tl-3xl">
                <p class="text-md pb-2">Lorem ipsum</p>
                <i class="fa-brands fa-html5 text-5xl"></i>
            </div>

            <div class="bg-amber-200 w-28 flex flex-col justify-center items-center aspect-square rounded-tl-3xl">
                <p class="text-md pb-2">Lorem ipsum</p>
                <i class="fa-brands fa-html5 text-5xl"></i>
            </div>

        </div>
    </div>
</section>

<section id="projects" class="bg-stone-900 min-h-screen grid place-items-center items-center">
    <div class="container">
        <h2 class="text-white text-3xl font-semibold pb-16">Projetos</h2>

        <div class="cards-projects grid grid-cols-3	items-center gap-10">

            <div class="project-box h-[240px] flex relative overflow-hidden border-2 border-blue-600 rounded-[2rem] group transition-transform transform-gpu">
                <img src="{{ asset('image/foto1.jpg') }}" class="w-full object-cover ease-in duration-[.5s] transition-transform transform-gpu hover:scale-110" alt="">
                <div class="project-description flex absolute justify-center items-center flex-col text-center px-3 text-white bottom-0 left-0 w-full h-full bg-gradient-to-t from-cyan-600 to-blue-500/90 ease-in duration-[.5s] transition-transform transform-gpu translate-y-full group-hover:translate-y-0">
                    <h4 class="text-2xl font-semibold pb-2">Lorem ipsum</h4>
                    <p class="pb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="#" class="inline-flex justify-center items-center w-10 h-10 bg-white rounded-full"><i class="fa-solid fa-arrow-up-right-from-square text-yellow-600"></i></a>
                </div>
            </div>

            <div class="project-box h-[240px] flex relative overflow-hidden border-2 border-blue-600 rounded-[2rem] group transition-transform transform-gpu">
                <img src="{{ asset('image/foto2.png') }}" class="w-full object-cover ease-in duration-[.5s] transition-transform transform-gpu hover:scale-110" alt="">
                <div class="project-description flex absolute justify-center items-center flex-col text-center px-3 text-white bottom-0 left-0 w-full h-full bg-gradient-to-t from-cyan-600 to-blue-500/90 ease-in duration-[.5s] transition-transform transform-gpu translate-y-full group-hover:translate-y-0">
                    <h4 class="text-2xl font-semibold pb-2">Lorem ipsum</h4>
                    <p class="pb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="#" class="inline-flex justify-center items-center w-10 h-10 bg-white rounded-full"><i class="fa-solid fa-arrow-up-right-from-square text-yellow-600"></i></a>
                </div>
            </div>

            <div class="project-box h-[240px] flex relative overflow-hidden border-2 border-blue-600 rounded-[2rem] group transition-transform transform-gpu">
                <img src="{{ asset('image/foto3.png') }}" class="w-full object-cover ease-in duration-[.5s] transition-transform transform-gpu hover:scale-110" alt="">
                <div class="project-description flex absolute justify-center items-center flex-col text-center px-3 text-white bottom-0 left-0 w-full h-full bg-gradient-to-t from-cyan-600 to-blue-500/90 ease-in duration-[.5s] transition-transform transform-gpu translate-y-full group-hover:translate-y-0">
                    <h4 class="text-2xl font-semibold pb-2">Lorem ipsum</h4>
                    <p class="pb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="#" class="inline-flex justify-center items-center w-10 h-10 bg-white rounded-full"><i class="fa-solid fa-arrow-up-right-from-square text-yellow-600"></i></a>
                </div>
            </div>

            <div class="project-box h-[240px] flex relative overflow-hidden border-2 border-blue-600 rounded-[2rem] group transition-transform transform-gpu">
                <img src="{{ asset('image/foto4.png') }}" class="w-full object-cover ease-in duration-[.5s] transition-transform transform-gpu hover:scale-110" alt="">
                <div class="project-description flex absolute justify-center items-center flex-col text-center px-3 text-white bottom-0 left-0 w-full h-full bg-gradient-to-t from-cyan-600 to-blue-500/90 ease-in duration-[.5s] transition-transform transform-gpu translate-y-full group-hover:translate-y-0">
                    <h4 class="text-2xl font-semibold pb-2">Lorem ipsum</h4>
                    <p class="pb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="#" class="inline-flex justify-center items-center w-10 h-10 bg-white rounded-full"><i class="fa-solid fa-arrow-up-right-from-square text-yellow-600"></i></a>
                </div>
            </div>


        </div>
    </div>
</section>
</body>
</html>
