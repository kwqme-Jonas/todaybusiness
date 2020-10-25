@extends('layouts.main')


@section('content')
  <style>
       .carousel-open:checked + .carousel-item {
         position: static;
         opacity: 100;
       }
       .carousel-item {
         -webkit-transition: opacity 0.6s ease-out;
         transition: opacity 0.6s ease-out;
       }
       #carousel-1:checked ~ .control-1,
       #carousel-2:checked ~ .control-2,
       #carousel-3:checked ~ .control-3 {
         display: block;
       }
       .carousel-indicators {
         list-style: none;
         margin: 0;
         padding: 0;
         position: absolute;
         bottom: 2%;
         left: 0;
         right: 0;
         text-align: center;
         z-index: 10;
       }
       #carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
       #carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
       #carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
         color: #2b6cb0;  /*Set to match the Tailwind colour you want the active one to be */
       }
     </style>


  <div class="carousel relative shadow-lg bg-white mx-auto">
    <div class="carousel-inner relative overflow-hidden w-full">

      <!--Slide 1-->
      <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
      <div class="carousel-item absolute opacity-0" style="height:60vh;">
          <img class="object-cover h-full w-full" src="/img/savings2.jpg" alt="">
      <div class="center block text-gray-700 text-2xl">Slide 1</div>
      </div>
      <label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
      <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>


      <!--Slide 2-->
      <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
      <div class="carousel-item absolute opacity-0" style="height:60vh;">
        <img class="object-cover h-full w-full" src="/img/savings.jpg" alt="">
      <div class="block h-full w-full text-gray-900 text-5xl text-center">Slide 2</div>
      </div>
      <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
      <label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

      <!--Slide 3-->
      <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
      <div class="carousel-item absolute opacity-0" style="height:60vh;">
        <img class="object-cover h-full w-full" src="/img/team.jpg" alt="">
          <div class="block text-gray-900 text-5xl text-center">Slide 3</div>
      </div>
      <label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
      <label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

      <!-- Add additional indicators for each slide-->
      <ol class="carousel-indicators">
        <li class="inline-block mr-3">
        <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
        </li>
        <li class="inline-block mr-3">
        <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
        </li>
        <li class="inline-block mr-3">
        <label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
        </li>
      </ol>
    </div>
  </div>
  <!--- Section--->

  <div class="container mx-auto px-12 pt-8 sm:text-center">
    <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2">
      <div class="mt-6">
        <h1 class=" whitespace-normal font-bold tracking-tight text-gray-900 text-center text-3xl md:text-4xl">Welcome To
          <span class="text-green-500">businesstodaygh</span>
         </h1>
         <p class=" whitespace-normal text-gray-600 font-semibold md:px-6 pt-2">
           Businesstoday is an online network marketing organization and was born out of the need to build up people financially all across the globe to the point of experiencing high quality life in all areas of living.
            The founding members are all networkers who have experienced different kinds of connections all over the world.Together we believe we can bring a change to the quality of life of our partners.
         </p>
      </div>
      <div class="mt-6">
        <img src="/img/team5.jpg" alt="Meeting" class="cursor-pointer rounded md:object-cover object-center h-60">
      </div>
      <div class="mt-6">
        <img src="/img/team2.jpg" alt="support" class="cursor-pointer rounded md:object-cover object-center h-60">
      </div>
      <div class="mt-6">
        <h1 class=" whitespace-normal font-bold tracking-wide text-gray-900 text-center text-3xl md:text-4xl">
          About US
         </h1>
         <p class="whitespace-normal text-gray-600 font-semibold md:px-6 pt-2">
           To be dream achievers and a networker’s network. Search out for innovative ways to build up our organization to achieve high quality of life and prosperity for our partners and the less privileged members of the larger society. Foster an atmosphere of positive attitude, consistent high performance, joy and happiness for all partners to achieve great success and all their dreams.
         </p>
         <div class="mt-4 ml-4">
           <a href="/about" class="inline-block justify-center px-5 py-3 rounded-lg bg-green-500 hover:bg-teal-700 text-sm text-white uppercase tracking-wider font-semibold">read more</a>
         </div>
      </div>
    </div>
  </div>

  <div class="mt-6 bg-gray-200 px-6 py-4 text-center">
    <h1 class="whitespace-normal font-bold tracking-wide text-gray-900 text-center uppercase text-3xl md:text-4xl">updates</h1>
    <div class=" grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3">
      <div class="mt-8">
        <a href="/news">
          <svg class="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="em" height="5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 64 64"><path d="M57.247 24.222c.973-2.628 1.254-5.134.555-7.383c-.322.029-.656.044-.998.044C46.562 16.883 28.46 4.006 27.09 2C21.445 10.223 9.613 16.545 4.265 23.635c-2.164 2.869-3.246 5.004-1.093 8.286l22.549 28.973c1.017 1.377 3.01 1.489 4.429.219c0 0 18.492-23.729 31.851-31.071c-1.004-1.961-2.675-3.918-4.754-5.82M25.328 54.754l-.094.065l-.085.074a5.768 5.768 0 0 0-.912 1.041L4.699 30.831c-1.407-2.177-1.008-3.323 1.063-6.067c2.349-3.113 6.103-6.135 10.078-9.334c4.132-3.326 8.388-6.75 11.514-10.646c5.16 4.246 19.593 13.621 28.932 13.964c1.12 10.997-21.682 29.536-30.958 36.006" fill="teal"/><path d="M19.993 14.158l25.205 19.75l.898-.804L20.649 13.57z" fill="teal"/><path d="M28.207 24.671l-10.316-8.632s-3.59 2.292-7.938 7.319l9.152 9.462l9.102-8.149" fill="teal"/><path d="M5.606 28.06l19.468 23.861l3.595-3.217L7.913 24.973s-1.809.979-2.307 3.087" fill="teal"/><path d="M27.42 29.428l11.309 10.27l3.593-3.217l-11.775-9.852z" fill="teal"/><path d="M21.166 35.027l10.377 11.104l3.592-3.216l-10.842-10.687z" fill="teal"/><path d="M27.857 10.756l-1.525 4.282l.956.696l4.855-4.347l-.95-.598l-3.345 2.995l1.479-4.174l-.992-.626l-4.627 4.142l.829.603z" fill="teal"/><path d="M32.012 19.179l.926-.831l-2.825-2.008l1.281-1.146l2.509 1.718l.891-.799l-2.537-1.694l1.058-.946l2.809 1.817l.912-.815l-3.884-2.452l-4.918 4.403z" fill="teal"/><path d="M35.021 21.371l3.839-2.325l1.257-.796l-.834 1.078l-2.47 3.351l1.193.869l7.388-3.799l-1.402-.885l-4.051 2.318l-1.034.626l.694-.913l2.401-3.287l-1.348-.85l-3.745 2.321l-.995.629l.685-.871l2.268-3.207l-1.264-.798l-3.661 5.753z" fill="teal"/><path d="M48.907 21.705c-.909-.571-1.758-.844-2.552-.828c-.788.017-1.434.254-1.943.71c-.559.5-.747 1.019-.563 1.557c.108.323.452.79 1.039 1.408l.607.638c.362.376.595.684.697.92c.1.239.051.448-.146.624c-.337.301-.776.358-1.315.174a3.844 3.844 0 0 1-.938-.515c-.57-.406-.847-.797-.84-1.174c.004-.206.117-.442.338-.708l-1.311-.914c-.591.529-.815 1.119-.667 1.774c.149.661.656 1.313 1.536 1.955c.877.643 1.75.987 2.608 1.025c.867.037 1.581-.191 2.131-.686c.54-.482.732-1 .578-1.551c-.098-.353-.373-.764-.817-1.232l-.995-1.05c-.379-.396-.605-.671-.682-.828c-.12-.239-.077-.45.13-.634c.225-.202.513-.284.865-.249c.357.035.729.178 1.118.428c.353.228.602.464.741.708c.215.368.155.723-.175 1.06l1.477.973c.614-.592.806-1.219.577-1.878c-.224-.653-.725-1.223-1.498-1.707" fill="teal"/></svg>
        </a>
        <div class="mt-1">
          <h1 class="font-bold text-gray-900 uppercase text-2xl">news</h1>
        </div>
      </div>
      <div class="mt-6">
        <a href="/gallery">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="em" height="5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 15 15"><path d="M10.71 4L7.85 1.15a.5.5 0 0 0-.707-.003l-.003.003L4.29 4H1.5a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h12a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-2.79zM7.5 2.21L9.29 4H5.71L7.5 2.21zM13  13H2V5h11v8zM5 8a1 1 0 1 1 0-2a1 1 0 0 1 0 2zm7 4H4.5L6 9l1.25 2.5L9.5 7l2.5 5z" fill="teal"/>
          </svg>
        </a>
        <div class="mt-1">
          <h1 class="font-bold text-gray-900 uppercase text-2xl">gallery</h1>
        </div>
      </div>
      <div class="mt-6">
        <a href="/events">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="em" height="5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path class="uim-tertiary" d="M22 10H2v9a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3v-9zM7 8a1 1 0 0 1-1-1V3a1 1 0 0 1 2 0v4a1 1 0 0 1-1 1zm10 0a1 1 0 0 1-1-1V3a1 1 0 0 1 2 0v4a1 1 0 0 1-1 1z" opacity=".5" fill="teal"/><path class="uim-primary" d="M19 4h-1v3a1 1 0 0 1-2 0V4H8v3a1 1 0 0 1-2 0V4H5a3 3 0 0 0-3 3v3h20V7a3 3 0 0 0-3-3z" fill="teal"/></svg>
        </a>
        <div class="mt-1">
          <h1 class="font-bold text-gray-900 uppercase  text-2xl">Events</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="container mx-auto px-12 pt-8 sm:text-center">
    <div class="grid grid-cols-1 gap-8 sm:grid-cols-1 md:grid-cols-2">
      <div class="mt-6">
        <h1 class="font-bold text-gray-900 uppercase text-2xl">Contact Us</h1>
        
          <form action="" method="POST" action="{{route('contact.store')}}">
            
            @csrf

           <div class=" mt-10">
              <label class="block uppercase tracking-wide text-gray-800 text-sm font-bold" for="grid-first-name">Name</label>
              <input class="appearance-none block w-full bg-gray-400 text-gray-700 rounded py-2 px-3 mb-4 leading-tight focus:outline-none focus:bg-green-200" id="grid-first-name" type="text"
              placeholder="Name">
              <label class="block uppercase tracking-wide text-gray-800 text-sm font-bold" for="grid-email">email</label>
              <input class="appearance-none block w-full bg-gray-400 text-gray-700 rounded py-2 px-3 mb-4 leading-tight focus:outline-none focus:bg-green-200" id="email" type="email"
              placeholder="Email">
              <label class="block uppercase tracking-wide text-gray-800 text-sm font-bold" for="grid-message">message</label>
              <textarea class="no-resize appearance-none block w-full bg-gray-400 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-4 leading-tight focus:outline-none focus:bg-green-200 focus:border-gray-500 h-60 resize-none" id="message"></textarea>
              <button class="shadow-lg bg-green-500 hover:bg-teal-700 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded-lg" type="button">Send</button>
            </div>
         </form>
      </div>
      <div class="mt-10">
        <img src="/img/contact.png" alt="Meeting" class="rounded-full md:object-cover object-center h-50 w-50">
      </div>
    </div>
  </div>

@endsection
