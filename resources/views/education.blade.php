<!-- resources/views/education.blade.php -->

@extends('layouts.app')


@section('content')


        <h2 class="text-2xl font-bold text-yellow-500 mb-6 mt-4">Education</h2>
        <div class="relative border-l-4 border-gray-300 pl-6">
            <!-- B.Tech. -->
            <div class="mb-8 ">
                <div class="absolute -left-4 top-0 bg-yellow-500 w-8 h-8 rounded-full flex items-center justify-center text-white text-lg font-bold ">
                    1.
                </div>
                <span class="  block text-white-700 text-sm mb-1">02/2019 –  10/2024</span>
                <span class="block text-white-500 text-sm mb-1">South Africa, Pretoria</span>
                <div class="flex items-center space-x-4">
                    <h3 class="text-xl font-bold">Diploma : IT (Software Development) : </h3>
                    <a href="{{ route('download.MT Ntuli Completion letter') }}" target="_blank" class=" pl-10 text-bold text-blue-600 underline hover:text-blue-800">
                        View Certificate
                    </a>
                </div>
                
                <h4 class="text-lg font-semibold">Tshwane University of Technology</h4>
                <ul class="list-disc pl-5 mt-2 space-y-1">
      
                    <li>Development Software</li>
                    <li>Technical Programming</li>
                    <li>Information Systems</li>
                    <li>Computing Fundamentals</li>
                    <li>System Software</li>
                    <li>Industry Exposure</li>
            </div>
            <!-- Schooling -->
     
        </div>


        <div class="relative border-l-4 border-gray-300 pl-6">
            <!-- B.Tech. -->
            <div class="mb-8">
                <div class="absolute -left-4 top-0 bg-yellow-500 w-8 h-8 rounded-full flex items-center justify-center text-white text-lg font-bold">
                    2.
                </div>
                <span class="  block text-white-700 text-sm mb-1">Start - 11/2019</span>
                <span class="block text-white-500 text-sm mb-1">South Africa, Mpumalanga</span>
                <h3 class="text-xl font-bold">NSC : (Matric)</h3>
                <h4 class="text-lg font-semibold">Inkunzi Secondary School</h4>
                
            </div>
            <!-- Schooling -->
     
        </div>
   

@endsection
