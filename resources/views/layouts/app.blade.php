<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>iKay</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div>
        <div id="app" class="background-image stack z-10">
            <header class="py-4 fixed w-full stack z-20">
                <div class="container mx-auto flex justify-between items-center px-6">
                    <div>
                        <a href="/" class="no-underline font-extrabold text-lg text-gray-100 uppercase">
                            Home
                        </a>
                    </div>
                    <a href="#contact-me" class="uppercase">
                        <nav class="space-x-4 text-gray-300 text-s sm:text-base border border-white p-5 hover:bg-gray-400 hover-fill">
                            <span>Contact</span>
                        </nav>
                    </a> 
                </div>
            </header>
            <div class="grid grid-cols-1 m-auto stack w-full h-full">
                <div class="flex text-gray-100 pt-5">
                    <div class="m-auto pb-10 pt-4 sm:m-auto w-10/12 block text-center">
                        <h1 class="uppercase sm:text-gray-50 font-bold text-5xl text-shadow-md pb-10">
                            Ikenna Udeh
                        </h1>
                        <h3 class="text-gray-100 font-bold text-3xl">
                            Python and PHP Web Developer
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-gray-100 rounded-full h-48 w-48 flex items-center justify-center border-8 m-auto stack z-20 bottom-20">
            <img src=" {{ asset('images/image.jpg') }}" alt="An image of me" class="m-auto rounded-full h-48 w-48">
        </div>
    </div>
    
<!-- sample structure-->


<!-- ends here -->



    <!--This is an example of a blade syntax -->
    @yield('content') 
    <footer class="bg-gray-700 py-10 mt-10">
        <div class="w-10/12 sm:grid border-b-2 text-gray-100 m-auto border-gray-400 pb-5 sm:pt-5">
            <div class="flex text-center m-auto w-full justify-center sm:flex sm:text-s">
                <a href="https://facebook.com/zagzero/" target="_blank">
                    <img src="{{ asset('images/facebook.png') }}" alt="Facebook logo" class="w-10 h-10 mx-2">
                </a>
                <a href="https://twitter.com/zagzero" target="_blank">
                    <img src="{{ asset('images/twitter.png') }}" alt="Twitter logo" class="w-10 h-10 mx-2">
                </a>
                <a href="https://github.com/ikay-udeh" target="_blank"> 
                    <img src="{{ asset('images/github.png') }}" alt="Github logo" class="w-10 h-10 mx-2">
                </a>
                <a href="https://training.zuri.team" target="_blank">
                    <img src="{{ asset('images/zuri.png') }}" alt="Zuri logo" class="w-10 h-10">
                </a>
            </div>
            
        </div>
        <div class="w-10/12 pt-2 m-auto sm:font-bold">
            <p class="text-gray-50 text-xs">© Copyright 2021 iKay. All Rights Reserved</p>
        </div>
    </footer>
</body>
</html>