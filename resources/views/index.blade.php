@extends('layouts.app')

@section('content')
    @if(session()->has('message'))
        <div class="m-auto w-4/5 text-center font-bold text-4xl text-gray-900">
        {{ session()->get('message') }}
        </div>
    @endif

    <div class="m-auto w-4/5 gap-20 py-15">
        <h1 class="uppercase text-black font-extrabold text-4xl text-center pb-5">
            about me
        </h1>
        <p class="m-auto text-center text-gray-900 text-xl">
            Hello. My name is Ikenna Udeh, a Python and PHP web developer. This is a simple resume page I designed for HNG
        </p>
    </div>


    <div class="m-auto w-4/5 gap-20 py-10">
        <h1 class="uppercase text-black font-extrabold text-3xl text-center pb-5">
            Education
        </h1>

        <div class="grid grid-cols-2 m-auto pb-5">
            <div>
                <h3 class="text-3xl text-cool-gray-600 m-auto text-center font-bold">
                    2009 - 2011
                </h3>
                <h4 class="text-center pt-5 text-gray-900 font-bold">
                    Government Secondary School, Jibi, Abuja
                </h4>
            </div>
            <div>
                <h3 class="text-3xl text-cool-gray-600 m-auto text-center font-bold">
                    2012 - 2017
                </h3>
                <h4 class="text-center pt-5 text-gray-900 font-bold">
                    Nnamdi Azikiwe University, Awka, Anambra
                </h4>
            </div>
        </div>
    </div>

    <div class="m-auto w-4/5 gap-20 py-10">
        <h1 class="uppercase text-black font-extrabold text-3xl text-center pb-5">
            Experience
        </h1>
        <div class="grid grid-cols-2 m-auto pb-5">
            <div>
                <h3 class="text-3xl text-cool-gray-600 m-auto text-center font-bold">
                    2018 - 2020
                </h3>
                <h4 class="text-center pt-5 pb-5 text-gray-900 font-bold">
                    3nity Cyber Cafe
                </h4>
                <h3 class="text-3xl text-cool-gray-600 m-auto text-center font-bold">
                    Role
                </h3>
                <h4 class="text-center pt-5 text-gray-900 font-bold">
                    Manager
                </h4>
            </div>

            <div>
                <h3 class="text-3xl text-cool-gray-600 m-auto text-center font-bold">
                    2021 - Present
                </h3>
                <h4 class="text-center pt-5 pb-5 text-gray-900 font-bold">
                    Hugo Tech
                </h4>
                <h3 class="text-3xl text-cool-gray-600 m-auto text-center font-bold">
                    Role
                </h3>
                <h4 class="text-center pt-5 text-gray-900 font-bold">
                    Customer Support Agent
                </h4>
            </div>
        </div>
    </div>
    

    <div class="flex grid-cols-3 justify-between items-center">
        <div class="m-auto w-4/5 gap-20 py-10">
            <h1 class="uppercase text-black font-extrabold text-3xl text-center pb-5">
                Hobbies and Interests
            </h1>
            <div>
                <ul class="m-auto pb-2 text-center">
                    <li class="text-center pt-5 text-gray-900 font-bold">
                        Music
                    </li>
                    <li class="text-center pt-5 text-gray-900 font-bold">
                        Video Games
                    </li>
                    <li class="text-center pt-5 text-gray-900 font-bold">
                        Tech
                    </li>
                    <li class="text-center pt-5 text-gray-900 font-bold">
                        Travelling
                    </li>
                </ul>
            </div>
        </div>
    
        <div class="m-auto w-4/5 gap-20 py-10">
            <h1 class="uppercase text-black font-extrabold text-3xl text-center pb-5">
                Skills 
            </h1>
            <div>
                <ul class="m-auto pb-2 text-center">
                    <li class="text-center pt-5 text-gray-900 font-bold">
                        Django
                    </li>
                    <li class="text-center pt-5 text-gray-900 font-bold">
                        Laravel
                    </li>
                    <li class="text-center pt-5 text-gray-900 font-bold">
                        Tailwind CSS
                    </li>
                    <li class="text-center pt-5 text-gray-900 font-bold">
                        My SQL
                    </li>
                </ul>
            </div>
    
        </div>

        <div class="m-auto w-4/5 gap-20 py-10">
            <h1 class="uppercase text-black font-extrabold text-3xl text-center pb-5">
                Contact Info
            </h1>
            <div>
                <ul class="m-auto pb-2 text-center">
                    <li class="text-center pt-5 text-gray-900 font-bold">
                        Email : udeh.ikenna@yahoo.com
                    </li>
                    <li class="text-center pt-5 text-gray-900 font-bold">
                        Phone : 08135544767
                    </li>
                    <li class="text-center pt-5 text-gray-900 font-bold">
                        Github : <a href="https://github.com/ikay-udeh" target="_blank">github.com/ikay-udeh</a>
                    </li>
                    <li class="text-center pt-5 text-gray-900 font-bold">
                        Website : <a href="https://ikayresume.herokuapp.com/" target="_blank">https://ikayresume.herokuapp.com/</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div id="contact-me" class="m-auto w-5/12 gap-20 py-10 shadow-lg mt-5">
        <h1 class="uppercase text-black font-extrabold text-3xl text-center pb-5">
            Contact Me
        </h1>
        <form action="/" method="post">
            @csrf
            <ul class="m-auto pb-2 text-center">
                <li class="py 2 mb-2 text-xl mt-2">
                    First Name
                </li>
                <input type="text" name="first_name" class="w-4/5 h-10 focus:outline-none" placeholder="Enter your first name">
                <li class="py 2 mb-2 text-xl mt-2">
                    Last Name
                </li>
                <input type="text" name="last_name" class="w-4/5 h-10 focus:outline-none" placeholder="Enter your last name">
                <li class="py 2 mb-2 text-xl mt-2">
                    Email
                </li>
                <input type="email" name="email" class="w-4/5 h-10 focus:outline-none" placeholder="Enter your email">
                <li class="py 2 mb-2 text-xl mt-2">
                    Subject
                </li>
                <input type="text" name="subject" class="w-4/5 h-10 focus:outline-none" placeholder="Enter subject">
                <li class="py 2 mb-2 text-xl mt-2">
                    Message
                </li>
                <textarea type="text" name="message" class="w-4/5 h-32 focus:outline-none" placeholder="Enter message"></textarea>
            </ul>
            <div class="w-full text-center h-10">
                <button type="submit" value="submit" class="border bg-green-400 h-full w-4/5 hover-fill text-gray-900 uppercase">
                    Submit
                </button>
            </div>
            
        </form>
    </div>

@endsection