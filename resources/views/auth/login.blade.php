
<x-guest-layout >

    <x-jet-validation-errors class="mb-4" />

    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif



<!-- LOGIN CONTAINER  -->
    <div class="container mx-auto ">
        <div class="flex justify-center items-center h-screen px-6 ">
            <!-- Row -->
            <div class="w-full xl:w-3/4 lg:w-11/12 flex border-2 border-slate-100 rounded-xl">
                {{-- IMAGE LOGIN --}}
                <div
                    class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
                    style="background-image: url('https://source.unsplash.com/Mv9hjnEUHR4/600x800')"
                ></div>
                  {{-- IMAGE LOGIN END--}}


                  <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none ">
                    <h3 class="pt-4 text-2xl text-center font-bold mb-5"> INICIAR SESIÓN</h3>
                    <div class="w-full h-100">

                        <form method="POST" action="{{ route('login') }}">
                        @csrf

                        {{-- EMAIL INPUT --}}
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full  px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                                    Correo Electrónico
                                </label>
                                <input autofocus autocomplete required name="email" :value="old('email')" id="email"  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder=" correo@correo.com">
                            </div>
                          </div>
                         {{-- EMAIL INPUT END--}}


                        {{-- PASSWORD INPUT --}}
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full  px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="password">
                                    Contraseña
                                </label>
                                <input name="password" :value="old('password')" id="password"  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="password"  placeholder=" ********* "  required autocomplete="current-password">
                            </div>
                          </div>
                         {{-- PASSWORD INPUT END--}}



                        <div class="text-right mt-2">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm font-semibold text-gray-700 hover:text-blue-700 focus:text-blue-700" href="{{ route('password.request') }}">
                                    {{ __('¿Olvidaste tu contraseña?') }}
                                </a>
                            @endif
                        </div>



                        <button type="submit" class="w-full block bg-indigo-500 hover:bg-indigo-400 focus:bg-indigo-400 text-white font-semibold rounded-lg
                                px-4 py-3 mt-6">Log In</button>
                        </form>


                        {{-- <hr class="my-6 border-gray-300 w-full">

                        <a href="{{route('login_google')}}">
                        {{-- <button type="button" class="w-full block bg-white hover:bg-gray-100 focus:bg-gray-100 text-gray-900 font-semibold rounded-lg px-4 py-3 border border-gray-300"> --}}
                            {{-- <div class="flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-6 h-6" viewBox="0 0 48 48"><defs><path id="a" d="M44.5 20H24v8.5h11.8C34.7 33.9 30.1 37 24 37c-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4C34.6 4.1 29.6 2 24 2 11.8 2 2 11.8 2 24s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z"/></defs><clipPath id="b"><use xlink:href="#a" overflow="visible"/></clipPath><path clip-path="url(#b)" fill="#FBBC05" d="M0 37V11l17 13z"/><path clip-path="url(#b)" fill="#EA4335" d="M0 11l17 13 7-6.1L48 14V0H0z"/><path clip-path="url(#b)" fill="#34A853" d="M0 37l30-23 7.9 1L48 0v48H0z"/><path clip-path="url(#b)" fill="#4285F4" d="M48 48L17 24l-4-3 35-10z"/></svg>
                            <span class="ml-4">
                            Log in with Google</span>
                            </div>

                        </a> --}}
                        <p class="mt-8">¿No tienes una cuenta? <a href="{{ route('register') }}" class="text-blue-500 hover:text-blue-700 font-semibold">Crear mi cuenta</a></p>
                  </div>
                </div>


            </div>
        </div>
    </div>
    {{-- LOGIN CONTAINER END--}}

</x-guest-layout>
