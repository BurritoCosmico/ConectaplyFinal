<x-guest-layout>


    <x-jet-validation-errors class="mb-4" />

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
                       <h3 class="pt-4 text-2xl text-center font-bold mb-5"> CREAR MI CUENTA</h3>
                       <div class="w-full h-100">

                           <form method="POST" action="{{ route('register') }}">
                           @csrf
                           {{-- NOMBRE INPUT --}}
                           <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full md:w-1/2 px-3">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                                        Nombre
                                    </label>
                                    <input required  id="name" name="name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  type="text" placeholder="John">
                                </div>
                                 <div class="w-full md:w-1/2 px-3">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="lastname">
                                        Apellido
                                    </label>
                                    <input required  id="lastname" name="lastname" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  type="text" placeholder="Doe">
                                </div>
                          </div>

                          <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full  px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                                    Correo Electrónico
                                </label>
                                <input required name="email"  id="email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder=" correo@correo.com">
                            </div>
                          </div>


                           {{-- <div>
                               <x-jet-label for="name" value="{{ __('Nombre') }}" />
                               <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                           </div> --}}
                           {{-- NOMBRE  INPUT END--}}


                           {{-- PASSWORD EMAIL --}}
                           {{-- <div class="mt-4">
                               <x-jet-label for="email" value="{{ __('Email') }}" />
                               <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                           </div> --}}
                           {{-- PASSWORD EMAIL END--}}


                           {{-- <div class="mt-4">
                               <x-jet-label for="pais" value="{{ __('Pais') }}" />
                               <x-jet-input id="pais" class="block mt-1 w-full" type="text" name="pais" :value="old('pais')" required autofocus autocomplete="name" />
                           </div> --}}

                           <div class="mt-4">
                            <div class="relative">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="pais">
                                    Seleccionar tu país
                                </label>
                                <select  name="pais"  required class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                  <option value="México">México</option>
                                  </select>

                              </div>
                           </div>

                           <div class="flex flex-wrap -mx-3 mb-6 mt-5">
                                <div class="w-full md:w-1/2 px-3">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="password">
                                        Contraseña
                                    </label>
                                    <input required autocomplete="new-password" id="password" name="password" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  type="password" placeholder="*********">
                                </div>
                                <div class="w-full md:w-1/2 px-3">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="password_confirmation">
                                        Confirme su Contraseña
                                    </label>
                                    <input  required autocomplete="new-password" id="password_confirmation" name="password_confirmation"  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  type="password" placeholder="*********">
                                </div>
                            </div>


                           {{-- <div class="mt-4">
                               <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                               <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                           </div>

                           <div class="mt-4">
                               <x-jet-label for="password_confirmation" value="{{ __('Confirme su Contraseña') }}" />
                               <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                           </div> --}}


                           @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                           <div class="mt-4">
                               <x-jet-label for="terms">
                                   <div class="flex items-center">
                                       <x-jet-checkbox name="terms" id="terms"/>

                                       <div class="ml-2">
                                           {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                   'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                   'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                           ]) !!}
                                       </div>
                                   </div>
                               </x-jet-label>
                           </div>
                       @endif





                           <button type="submit" class="w-full block bg-indigo-500 hover:bg-indigo-400 focus:bg-indigo-400 text-white font-semibold rounded-lg
                                   px-4 py-3 mt-6">Registrarme </button>







                           </form>
                           <hr class="my-6 border-gray-300 w-full">

                           <p class="mt-8">¿Ya tienes una cuenta? <a href="{{ route('login') }}" class="text-blue-500 hover:text-blue-700 font-semibold">Iniciar Sesión</a></p>
                     </div>
                   </div>


               </div>
           </div>
       </div>
       {{-- LOGIN CONTAINER END--}}





</x-guest-layout>
