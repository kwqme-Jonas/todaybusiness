@extends('layouts.main')

@section('content')
  <div class="mt-6">
    <br>
    <br>
    <div class="container mx-auto px-12 pt-8 min-h-screen text-center sm:text-center">
      <div class="grid grid-cols-1 gap-8 sm:grid-cols-1 md:grid-cols-2">
        <div class="mt-6">
          <h1 class="font-bold text-gray-900 uppercase text-2xl">Contact Us</h1>
          <div class=" mt-6">

            @if(session::has('success'))
                <div class="flex items-center bg-green-500 text-white text-sm rounded font-bold px-2 py-1">
                  {{session::get('success')}}
                </div>
            @endif

            <form action="" method="POST" action="{{route('contact.store')}}">

              @csrf

              <div>
                <label class="block uppercase tracking-wide text-gray-800 text-sm font-bold" for="grid-first-name">Name</label>
                <input class="appearance-none block w-full bg-gray-400 text-gray-700 rounded py-2 px-3 mb-4 leading-tight focus:outline-none focus:bg-green-200" id="grid-first-name" type="text"
                placeholder="Name">
              </div>

              <div>
                <label class="block uppercase tracking-wide text-gray-800 text-sm font-bold" for="grid-email">email</label>
                <input class="appearance-none block w-full bg-gray-400 text-gray-700 rounded py-2 px-3 mb-4 leading-tight focus:outline-none focus:bg-green-200" id="email" type="email"
                placeholder="Email">
              </div>

              <div>
                <label class="block uppercase tracking-wide text-gray-800 text-sm font-bold" for="grid-message">message</label>
                <textarea class="no-resize appearance-none block w-full bg-gray-400 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-4 leading-tight focus:outline-none focus:bg-green-200 focus:border-gray-500 h-60 resize-none" id="message"></textarea>
              </div>
              
              <div>
                <button class="shadow-lg bg-green-500 hover:bg-teal-700 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded-lg" type="button">Send</button>
              </div> 
              </form>
            </div>      
        </div>
        <div class="mt-6">
          <img src="/img/contact.png" alt="Meeting" class="rounded-full md:object-cover object-center">
        </div>
      </div>
    </div>
   </div>
  </div>
@endsection
