@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="container">
                    @if (session('status'))
                    <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
                        <div class="flex">
                          <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                            <div>
                                {{ session('status') }}
                            </div>
                        </div>
                    </div>
                    @endif
                    <p class="font-bold text-gray-700">You aare logged in!</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="flex items-center justify-center h-screen">
  <div class="bg-teal-500 text-white text-xl font-serif font-bold rounded-full border shadow-lg p-20 uppercase">
    <div class="transform rotate-45">
      coming soon
    </div>
  </div>
</div>
@endsection
