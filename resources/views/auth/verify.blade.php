@extends('layouts.app')

@section('content')
<div class="container mx-auto">
       <div class="flex justify-center items-center">
              <div class="w-1/5 h-screen"></div>
              <div class="w-3/5">
                     <div class="bg-teal-lightest border-t-4 border-teal rounded-b text-teal-darkest px-4 py-3 shadow-md rounded h-auto" role="alert">
                            <div class="flex items-center">
                                   <div class="py-1"><svg class="fill-current h-6 w-6 text-teal mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                                   <div>
                                          <p class="font-middle text-lg mb-4 pt-8">Staðfestu netfangið þitt</p>
                                          <p class="font-light text-md mb-4">Áður en lengra er haldið er mikilvægt að staðfesta netfangið þitt með því að smella á hlekkin sem var sendur til þín á netfangið þitt.</p>
                                          @if (session('resent'))
                                                 <p class="font-light uppercase text-md text-md mb-4">Nýr hlekkur hefur verið sendur á netfangið þitt.</p>
                                          @endif
                                          <p class="font-light text-xs pb-8">Ef þú fékkst ekki tölvupóstinn, ýttu <a href="{{ route('verification.resend') }}">hér</a></p>
                                   </div>
                            </div>
                     </div>
              </div>
              <div class="w-1/5 h-screen"></div>
       </div>
</div>
@endsection
