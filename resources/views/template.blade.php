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
<header class="bg-neutral-900">
    <div class="container">
        <h1 class="text-white text-2xl py-6">CodeZeus</h1>
    </div>
</header>

<section id="introduction"
         class="bg-neutral-800 min-h-[90vh] grid place-items-center items-center lg:min-h-[100vh] xl:min-h-[70vh]">
    <div class="container">
        <div class="flex justify-between items-center">
            <div class="w-1/2">
                <h1 class="text-white text-6xl">
                    <strong class="text-yellow-600">Desenvolveror</strong>
                    Full-Stack para o seu projeto.
                </h1>
                <p class="pt-7 text-white text-2xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            </div>
            <div class="profile">
                <img class="profile-img" src="{{ asset('image/fotopng.png') }}" alt="">
                <span class="span-img"></span>
            </div>
        </div>
    </div>
</section>

<section id="about" class="bg-white min-h-screen grid place-items-center items-center xl:min-h-[70vh]">
    <div class="container">
        <h2 class="text-neutral-800 text-5xl text-center">
            Olá, me chamo <strong class="text-yellow-600">Alexandre Schielke</strong>.
        </h2>

        <p class="text-center text-lg text-neutral-700 pt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel
            facilisis leo. Nunc ac nisi in
            felis hendrerit porttitor. Vivamus commodo quam nunc, in pulvinar justo tristique vitae. Donec nec feugiat
            ipsum. Pellentesque velit justo, volutpat a mattis feugiat, accumsan ut augue. Donec scelerisque rhoncus
            augue, a vestibulum ligula varius non. Suspendisse ultrices molestie semper. Ut vel faucibus lacus, sed
            congue urna. Ut tempus finibus fringilla. Sed sagittis tempus consectetur.
        </p>

    </div>
</section>

<section id="skill" class="bg-neutral-800 min-h-screen grid place-items-center items-center xl:min-h-[80vh]">
    <div class="container">
        <h2 class="text-white text-5xl text-center">
            Meus <strong class="text-yellow-600">Conhecimentos</strong>.
        </h2>

        <div class="grid grid-cols-3 pt-28">

            <div
                class="cards-skill relative h-72 flex flex-col content-center items-center border-4 border-neutral-700 rounded-2xl p-4 my-14 mx-6">
                <div
                    class="w-24 h-24 absolute top-0 left-2/4 -translate-x-2/4 -translate-y-2/4 bg-neutral-700 rounded-full">
                    <img src="{{ asset('image/code.png') }}" class="w-full p-5" alt="code">
                </div>
                <p class="pt-16 pb-6 text-yellow-600 font-semibold text-xl">Front-end</p>
                <ul class="grid grid-cols-2 gap-x-8">
                    <li class="text-white pb-1.5"><i class="fa-solid fa-check text-blue-500 mr-2"></i>Lorem Ipsum</li>
                    <li class="text-white pb-1.5"><i class="fa-solid fa-check text-blue-500 mr-2"></i>Lorem Ipsum</li>
                    <li class="text-white pb-1.5"><i class="fa-solid fa-check text-blue-500 mr-2"></i>Lorem Ipsum</li>
                    <li class="text-white pb-1.5"><i class="fa-solid fa-check text-blue-500 mr-2"></i>Lorem Ipsum</li>
                    <li class="text-white pb-1.5"><i class="fa-solid fa-check text-blue-500 mr-2"></i>Lorem Ipsum</li>
                    <li class="text-white pb-1.5"><i class="fa-solid fa-check text-blue-500 mr-2"></i>Lorem Ipsum</li>
                </ul>
            </div>

            <div
                class="cards-skill relative h-72 flex flex-col content-center items-center border-4 border-neutral-700 rounded-2xl p-4 my-14 mx-6">
                <div
                    class="w-24 h-24 absolute top-0 left-2/4 -translate-x-2/4 -translate-y-2/4 bg-neutral-700 rounded-full">
                    <img src="{{ asset('image/database.png') }}" class="w-full p-5" alt="code">
                </div>
                <p class="pt-16 pb-6 text-yellow-600 font-semibold text-xl">Back-end</p>
                <ul class="grid grid-cols-2 gap-x-8">
                    <li class="text-white pb-1.5"><i class="fa-solid fa-check text-blue-500 mr-2"></i>Lorem Ipsum</li>
                    <li class="text-white pb-1.5"><i class="fa-solid fa-check text-blue-500 mr-2"></i>Lorem Ipsum</li>
                    <li class="text-white pb-1.5"><i class="fa-solid fa-check text-blue-500 mr-2"></i>Lorem Ipsum</li>
                    <li class="text-white pb-1.5"><i class="fa-solid fa-check text-blue-500 mr-2"></i>Lorem Ipsum</li>
                    <li class="text-white pb-1.5"><i class="fa-solid fa-check text-blue-500 mr-2"></i>Lorem Ipsum</li>
                </ul>
            </div>

            <div
                class="cards-skill relative h-72 flex flex-col content-center items-center border-4 border-neutral-700 rounded-2xl p-4 my-14 mx-6">
                <div
                    class="w-24 h-24 absolute top-0 left-2/4 -translate-x-2/4 -translate-y-2/4 bg-neutral-700 rounded-full">
                    <img src="{{ asset('image/points.png') }}" class="w-full p-5" alt="code">
                </div>
                <p class="pt-16 pb-6 text-yellow-600 font-semibold text-xl">Outros</p>
                <ul class="grid grid-cols-2 gap-x-8">
                    <li class="text-white pb-1.5"><i class="fa-solid fa-check text-blue-500 mr-2"></i>Lorem Ipsum</li>
                    <li class="text-white pb-1.5"><i class="fa-solid fa-check text-blue-500 mr-2"></i>Lorem Ipsum</li>
                    <li class="text-white pb-1.5"><i class="fa-solid fa-check text-blue-500 mr-2"></i>Lorem Ipsum</li>
                </ul>
            </div>

        </div>
    </div>
</section>

<section id="projects" class="bg-white min-h-screen grid place-items-center items-center">
    <div class="container">
        <h2 class="text-neutral-800 text-5xl text-center pb-28">
            Meus <strong class="text-yellow-600">Projetos</strong>.
        </h2>

        <div class="cards-projects grid grid-cols-3	items-center gap-10">

            <div
                class="project-box h-[240px] flex relative overflow-hidden shadow-2xl rounded-[1rem] group transition-transform transform-gpu">
                <img src="{{ asset('image/foto1.jpg') }}"
                     class="w-full object-cover ease-in duration-[.5s] transition-transform transform-gpu hover:scale-110"
                     alt="">
                <div
                    class="project-description flex absolute justify-center items-center flex-col text-center px-3 text-white bottom-0 left-0 w-full h-full bg-gradient-to-t from-neutral-800/90 to-neutral-800 ease-in duration-[.5s] transition-transform transform-gpu translate-y-full group-hover:translate-y-0">
                    <h4 class="text-2xl text-yellow-600 font-semibold pb-2">Lorem ipsum</h4>
                    <p class="pb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="#" class="inline-flex justify-center items-center w-10 h-10 bg-white rounded-full"><i
                            class="fa-solid fa-arrow-up-right-from-square text-blue-600"></i></a>
                </div>
            </div>

            <div
                class="project-box h-[240px] flex relative overflow-hidden shadow-2xl rounded-[1rem] group transition-transform transform-gpu">
                <img src="{{ asset('image/foto2.png') }}"
                     class="w-full object-cover ease-in duration-[.5s] transition-transform transform-gpu hover:scale-110"
                     alt="">
                <div
                    class="project-description flex absolute justify-center items-center flex-col text-center px-3 text-white bottom-0 left-0 w-full h-full bg-gradient-to-t from-neutral-800/90 to-neutral-800 ease-in duration-[.5s] transition-transform transform-gpu translate-y-full group-hover:translate-y-0">
                    <h4 class="text-2xl text-yellow-600 font-semibold pb-2">Lorem ipsum</h4>
                    <p class="pb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="#" class="inline-flex justify-center items-center w-10 h-10 bg-white rounded-full"><i
                            class="fa-solid fa-arrow-up-right-from-square text-blue-600"></i></a>
                </div>
            </div>

            <div
                class="project-box h-[240px] flex relative overflow-hidden shadow-2xl rounded-[1rem] group transition-transform transform-gpu">
                <img src="{{ asset('image/foto3.png') }}"
                     class="w-full object-cover ease-in duration-[.5s] transition-transform transform-gpu hover:scale-110"
                     alt="">
                <div
                    class="project-description flex absolute justify-center items-center flex-col text-center px-3 text-white bottom-0 left-0 w-full h-full bg-gradient-to-t from-neutral-800/90 to-neutral-800 ease-in duration-[.5s] transition-transform transform-gpu translate-y-full group-hover:translate-y-0">
                    <h4 class="text-2xl text-yellow-600 font-semibold pb-2">Lorem ipsum</h4>
                    <p class="pb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="#" class="inline-flex justify-center items-center w-10 h-10 bg-white rounded-full"><i
                            class="fa-solid fa-arrow-up-right-from-square text-blue-600"></i></a>
                </div>
            </div>

            <div
                class="project-box h-[240px] flex relative overflow-hidden shadow-2xl rounded-[1rem] group transition-transform transform-gpu">
                <img src="{{ asset('image/foto4.png') }}"
                     class="w-full object-cover ease-in duration-[.5s] transition-transform transform-gpu hover:scale-110"
                     alt="">
                <div
                    class="project-description flex absolute justify-center items-center flex-col text-center px-3 text-white bottom-0 left-0 w-full h-full bg-gradient-to-t from-neutral-800/90 to-neutral-800 ease-in duration-[.5s] transition-transform transform-gpu translate-y-full group-hover:translate-y-0">
                    <h4 class="text-2xl text-yellow-600 font-semibold pb-2">Lorem ipsum</h4>
                    <p class="pb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="#" class="inline-flex justify-center items-center w-10 h-10 bg-white rounded-full"><i
                            class="fa-solid fa-arrow-up-right-from-square text-blue-600"></i></a>
                </div>
            </div>


        </div>
    </div>
</section>

<section id="journey" class="bg-neutral-800 min-h-screen grid place-items-center items-center">
    <div class="container py-28">
        <h2 class="text-white text-5xl text-center">
            Minha <strong class="text-yellow-600">Jornada</strong>.
        </h2>

        <div class="grid gap-y-24 gap-x-4 mx-4 sm:grid-cols-12 pt-28 text-white">
            <div class="col-span-12 sm:col-span-3">
                <div class="text-center sm:text-left mb-14 before:block before:w-24 before:h-2 before:mb-3 before:rounded-md before:mx-auto sm:before:mx-0 before:bg-yellow-600">
                    <h3 class="text-3xl font-semibold">Estudos</h3>
                </div>
            </div>
            <div class="relative col-span-12 px-4 space-y-6 sm:col-span-9">
                <div class="col-span-12 space-y-12 relative px-4 sm:col-span-8 sm:space-y-8 sm:before:absolute sm:before:top-2 sm:before:bottom-0 sm:before:w-0.5 sm:before:-left-3 before:bg-yellow-600">
                    <div class="flex flex-col sm:relative border-4 border-white/10 rounded-2xl p-5 sm:before:absolute sm:before:top-1 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-39px] sm:before:z-[1] before:bg-yellow-600">
                        <h3 class="text-xl font-semibold tracking-wide">Donec porta enim vel </h3>
                        <time class="text-xs text-blue-500 tracking-wide uppercase">Dec 2020</time>
                        <p class="mt-3 text-neutral-300">Pellentesque feugiat ante at nisl efficitur, in mollis orci scelerisque. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                    </div>
                    <div class="flex flex-col sm:relative border-4 border-white/10 rounded-2xl p-5 sm:before:absolute sm:before:top-1 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-39px] sm:before:z-[1] before:bg-yellow-600">
                        <h3 class="text-xl font-semibold tracking-wide">Aliquam sit amet nunc ut</h3>
                        <time class="text-xs text-blue-500 tracking-wide uppercase">Jul 2019</time>
                        <p class="mt-3 text-neutral-300">Morbi vulputate aliquam libero non dictum. Aliquam sit amet nunc ut diam aliquet tincidunt nec nec dui. Donec mollis turpis eget egestas sodales.</p>
                    </div>
                    <div class="flex flex-col sm:relative border-4 border-white/10 rounded-2xl p-5 sm:before:absolute sm:before:top-1 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-39px] sm:before:z-[1] before:bg-yellow-600">
                        <h3 class="text-xl font-semibold tracking-wide">Pellentesque habitant morbi</h3>
                        <time class="text-xs text-blue-500 tracking-wide uppercase">Jan 2016</time>
                        <p class="mt-3 text-neutral-300">Suspendisse tincidunt, arcu nec faucibus efficitur, justo velit consectetur nisl, sit amet condimentum lacus orci nec purus. Mauris quis quam suscipit, vehicula felis id, vehicula enim.</p>
                    </div>
                </div>
            </div>

            <div class="col-span-12 sm:col-span-3 text-white">
                <div class="text-center sm:text-left mb-14 before:block before:w-24 before:h-2 before:mb-3 before:rounded-md before:mx-auto sm:before:mx-0 before:bg-yellow-600">
                    <h3 class="text-3xl font-semibold">Experiências</h3>
                </div>
            </div>
            <div class="relative col-span-12 px-4 space-y-6 sm:col-span-9">
                <div class="col-span-12 space-y-12 relative px-4 sm:col-span-8 sm:space-y-8 sm:before:absolute sm:before:top-2 sm:before:bottom-0 sm:before:w-0.5 sm:before:-left-3 before:bg-yellow-600">
                    <div class="flex flex-col sm:relative border-4 border-white/10 rounded-2xl p-5 sm:before:absolute sm:before:top-1 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-39px] sm:before:z-[1] before:bg-yellow-600">
                        <h3 class="text-xl font-semibold tracking-wide">Donec porta enim vel </h3>
                        <time class="text-xs text-blue-500 tracking-wide uppercase dark:text-gray-400">Dec 2020</time>
                        <p class="mt-3 text-neutral-300">Pellentesque feugiat ante at nisl efficitur, in mollis orci scelerisque. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                    </div>
                    <div class="flex flex-col sm:relative border-4 border-white/10 rounded-2xl p-5 sm:before:absolute sm:before:top-1 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-39px] sm:before:z-[1] before:bg-yellow-600">
                        <h3 class="text-xl font-semibold tracking-wide">Aliquam sit amet nunc ut</h3>
                        <time class="text-xs text-blue-500 tracking-wide uppercase dark:text-gray-400">Jul 2019</time>
                        <p class="mt-3 text-neutral-300">Morbi vulputate aliquam libero non dictum. Aliquam sit amet nunc ut diam aliquet tincidunt nec nec dui. Donec mollis turpis eget egestas sodales.</p>
                    </div>
                    <div class="flex flex-col sm:relative border-4 border-white/10 rounded-2xl p-5 sm:before:absolute sm:before:top-1 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-39px] sm:before:z-[1] before:bg-yellow-600">
                        <h3 class="text-xl font-semibold tracking-wide">Pellentesque habitant morbi</h3>
                        <time class="text-xs text-blue-500 tracking-wide uppercase dark:text-gray-400">Jan 2016</time>
                        <p class="mt-3 text-neutral-300">Suspendisse tincidunt, arcu nec faucibus efficitur, justo velit consectetur nisl, sit amet condimentum lacus orci nec purus. Mauris quis quam suscipit, vehicula felis id, vehicula enim.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section id="contact" class="bg-white min-h-[70vh] grid place-items-center items-center">
    <div class="container">
        <h2 class="text-neutral-800 text-5xl text-center pb-28">
            <strong class="text-yellow-600">Contatos</strong>.
        </h2>

        <div class="social-media flex justify-center gap-6">

            <div class="inline-block text-center w-44 h-40 py-5">
                <a href="#" class="">
                    <i class="fa-brands fa-github text-2xl text-white font-semibold bg-neutral-700 rounded-full p-5"></i>
                    <h3 class="pt-1.5 text-yellow-600 font-semibold">GitHub</h3>
                    <p class="text-neutral-700">Lorem Ipsum</p>
                </a>
            </div>

            <div class="inline-block text-center w-44 h-40 py-5">
                <a href="#" class="">
                    <i class="fa-brands fa-linkedin-in text-2xl text-white font-semibold bg-neutral-700 rounded-full p-5"></i>
                    <h3 class="pt-1.5 text-yellow-600 font-semibold">Linkedin</h3>
                    <p class="text-neutral-700">Lorem Ipsum</p>
                </a>
            </div>

            <div class="inline-block text-center w-44 h-40 py-5">
                <a href="#" class="">
                    <i class="fa-regular fa-envelope text-2xl text-white font-semibold bg-neutral-700 rounded-full p-5"></i>
                    <h3 class="pt-1.5 text-yellow-600 font-semibold">E-mail</h3>
                    <p class="text-neutral-700">Lorem Ipsum</p>
                </a>
            </div>

            <div class="inline-block text-center w-44 h-40 py-5">
                <a href="#" class="">
                    <i class="fa-brands fa-instagram text-2xl text-white font-semibold bg-neutral-700 rounded-full p-5"></i>
                    <h3 class="pt-1.5 text-yellow-600 font-semibold">Instagram</h3>
                    <p class="text-neutral-700">Lorem Ipsum</p>
                </a>
            </div>

        </div>
    </div>
</section>


<section class="p-4 text-center bg-neutral-800 text-white">
    <p>
        &copy; Copyright 2023 -
        <span class="block lg:inline-block">Desenvolvido por
            <a style="color: #fff" href="https://wa.me/5591998284095" target="_blank">
                <b>Code <i class="fas fa-bolt" style="color: #ca8a04" aria-hidden="true"></i> Zeus</b>
            </a>
        </span>
    </p>
</section>

</body>
</html>
