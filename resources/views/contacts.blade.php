<!-- resources/views/education.blade.php -->

@extends('layouts.app')


@section('content')


        
        <div class="flex items-center justify-center text-white-700 space-x-4">
            <div class="flex items-center space-x-2">
                <h2 class="text-2xl font-bold text-yellow-500 mb-6 mt-4">Contact</h2>
            </div>
        </div>
           
                <img class="w-28 h-28 rounded-full mx-auto" src="{{ asset('storage/mypicture.jpg')}}" alt="Merius Terry Ntuli">
                
                <div class="flex items-center justify-center text-white-700 space-x-4">
                    <div class="flex items-center space-x-2">
                        <h2 class="text-xl font-semibold text-white-700 mt-4">MERIUS TERRY NTULI</h2>
                    </div>
                </div>

                <div class="flex items-center justify-center text-white-700 space-x-4">
                    <div class="flex items-center space-x-2">
                        <p class="text-blue-600 text-xl mt-2 flex items-center">Software Engineer</p>
                    </div>
                </div>


                <hr class="my-4">
                <div class="flex items-center justify-center text-white-700 space-x-4">
                    <div class="flex items-center space-x-2">
                        Phone : <a href="tel:+27607577774" class="text-blue-400 hover:underline"> 0607577774</a></p>
                    </div>
                </div>
                <div class="flex items-center justify-center text-white-700 space-x-4 mt-2">
                    <div class="flex items-center space-x-2">
                        

                        Email : <a href="mailto:meriusterry@gmail.com" class="text-blue-400 hover:underline"> meriusterry@gmail.com</a></p>
                    </div>

                    
                </div>
        
        </body>
         
   

@endsection
