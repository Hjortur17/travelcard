@extends('layouts.app')

@section ('content')
       <section id="login">
              <div class="container mx-auto px-4 py-32">
                     <div class="flex justify-center">
                            <div class="w-2/3 text-grey-darker text-center bg-white rounded-lg shadow-lg px-24 py-2 m-2">
                                   <h1 class="pt-6 mb-12 text-yellow-dark">Innskráning</h1>
                                   <form method="POST" action="{{ route('login') }}">
                                          @csrf

                                          <div class="w-100% mb-4">
                                                 <input id="username" type="username" class="w-full bg-grey-lightest border-2 border-grey-light appearance-none rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:border-yellow-dark font-light" name="username" value="{{ old('username') }}"  placeholder="Notendarnafn" required autofocus>

                                                 @if ($errors->has('username'))
                                                        <span class="invalid-feedback" role="alert">
                                                               <strong>{{ $errors->first('username') }}</strong>
                                                        </span>
                                                 @endif
                                          </div>

                                          <div class="w-100%">
                                                 <input id="password" type="password" class="w-full bg-grey-lightest border-2 border-grey-light appearance-none rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:border-yellow-dark font-light" name="password" required placeholder="Lykilorð">

                                                 @if ($errors->has('password'))
                                                        <span class="invalid-feedback" role="alert">
                                                               <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                 @endif
                                          </div>

                                          <div class="flex justify-center mt-6">
                                                 <button type="submit" class="mb-6 py-4 px-6 bg-yellow-dark hover:bg-yellow transition text-white rounded-lg">
                                                        {{ __('Login') }}
                                                 </button>
                                          </div>
                                   </form>
                            </div>
                     </div>
              </div>
       </section>
@endsection