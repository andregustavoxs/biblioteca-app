<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    >
    <meta
        http-equiv="X-UA-Compatible"
        content="ie=edge"
    >
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
<header class="text-gray-600">
    <div class="container mx-auto flex justify-between items-center p-5 items-center">
        <a href="/" class="flex title-font font-medium items-center text-gray-900">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                 stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full"
                 viewBox="0 0 24 24">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl">Biblioteca</span>
        </a>
        <div class="hidden lg:flex lg:gap-x-12">
            <a href="{{ route('books.index') }}" class="text-sm font-semibold leading-6 hover:text-indigo-500">Livro</a>
            <a href="{{ route('authors.index') }}" class="text-sm font-semibold leading-6 hover:text-indigo-500">Autor</a>
            <a href="{{ route('publishers.index') }}" class="text-sm font-semibold leading-6 hover:text-indigo-500">Editora</a>
        </div>
        <div class="flex items-center">
            <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                <a href="/" class="mr-5 hover:text-indigo-500">Home</a>
            </nav>
            <button
                class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base md:mt-0 text-gray-500 hover:text-indigo-500">
                Admin
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                     class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>
    </div>
</header>

@yield('content')

<footer class="text-gray-600">
    <div class="border-t border-gray-200">
        <div class="container px-5 py-8 flex flex-wrap mx-auto items-center">
            <span class="inline-flex lg:ml-auto lg:mt-0 mt-6 w-full justify-center md:justify-start md:w-auto">
                <a href="https://www.facebook.com/a3servicosweb/" class="ml-3 text-blue-500">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.instagram.com/a3servicosweb/" class="ml-3 text-orange-500">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://www.youtube.com/@a3servicosweb/" class="ml-3 text-red-500">
                    <i class="fab fa-youtube"></i>
                </a>
      </span>
        </div>
    </div>
    <div class="bg-indigo-500">
        <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row items-center justify-center">
            <p class="text-gray-500 text-sm text-center sm:text-left">
                <a href="https://a3servicosweb.com/" class="text-white ml-1" target="_blank"
                   rel="noopener noreferrer">© Copyright 2024 - A3 Serviços Web - Todos os direitos reservados</a>
            </p>
        </div>
    </div>
</footer>
</body>
</html>
