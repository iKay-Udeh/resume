@extends('layouts.app')

@section('content')
    @if(session()->has('message'))
        <div class="m-auto w-4/5 text-center font-bold text-4xl text-gray-900">
        {{ session()->get('message') }}
        </div>
    @endif

<div class="bg-white shadow overflow-hidden sm:rounded-lg">
    <div class="px-4 py-5 sm:px-6">
      <h3 class="text-lg text-center leading-10 font-extrabold text-gray-900 uppercase lg:text-4xl">
        Profile
      </h3>
    </div>
    <div class="border-t border-gray-200">
      <dl>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500 uppercase lg:font-bold lg:text-xl">
            Full name
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 lg:text-base">
            Ikenna Patrick Udeh
          </dd>
        </div>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500 uppercase lg:font-bold lg:text-xl">
            Dev role
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 lg:text-base">
            Backend Developer
          </dd>
        </div>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500 uppercase lg:font-bold lg:text-xl">
            Email address
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 leading-6 lg:text-base">
            <ol>udeh.ikenna@yahoo.com</ol> 
            <ol>devikenna@yahoo.com</ol>
          </dd>
        </div>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500 uppercase lg:font-bold lg:text-xl">
            About
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 leading-6 lg:text-base">
            Hello! My name is Ikenna Udeh. I'm an PHP and Python backend developer. I abosolutely the thrill I get from writing some words on a computer screen and seeing my creation transformed into an amazing tool. When I'm not coding, I'm usually reading about tech
          </dd>
        </div>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500 uppercase lg:font-bold lg:text-xl">
            Experience
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 leading-6 lg:text-base">
            <ol>
              2019 - 2020 --- NYSC
            </ol>
            <ol>
              2021 - Present --- Customer Service Agent at Hugotech
            </ol>
          </dd>
        </div>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500 uppercase lg:font-bold lg:text-xl">
            Skills
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 leading-6 lg:text-base">
            <ul>
              <li>
                PHP
              </li>
              <li>
                Laravel
              </li>
              <li>
                Python
              </li>
              <li>
                Django
              </li>
              <li>
                MySQL
              </li>
            </ul>
          </dd>
        </div>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500 uppercase lg:font-bold lg:text-xl">
            Hobbies
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 leading-6 lg:text-base">
            <ul>
              <li>
                Travelling
              </li>
              <li>
                Playing video Games
              </li>
              <li>
                Listening to music
              </li>
              <li>
                Reading
              </li>
              <li>
                Tech Enthusiast
              </li>
            </ul>
          </dd>
        </div>
      </dl>
    </div>
  </div>
  <div id="contact-me"class="container lg:w-4/5 lg:m-auto">
	<!-- code here -->
	<div class="card lg:w-4/6 lg:m-auto lg:my-5">
		<div class="card-image text-center">
			<h3 class="text-lg text-center leading-10 font-extrabold text-gray-900 uppercase lg:text-4xl">
        Contact me
      </h3>
		</div>
		<form class="card-form">
      @csrf
			<div class="input">
				<input type="text" class="input-field" name="first_name" required />
				<label class="input-label">First name</label>
			</div>
      <div class="input">
				<input type="text" class="input-field" name="last_name" required />
				<label class="input-label">Last name</label>
			</div>
			<div class="input">
				<input type="emai" class="input-field" name="email" required />
				<label class="input-label">Email</label>
			</div>
			<div class="input">
				<input type="text" class="input-field" name="subject" required />
				<label class="input-label">Subject</label>
			</div>
      <div class="input">
				<input type="text" class="input-field h-40" name="message" required />
				<label class="input-label">Message</label>
			</div>
			<div class="action">
				<button class="action-button">Submit</button>
			</div>
		</form>
	</div>
</div>

@endsection