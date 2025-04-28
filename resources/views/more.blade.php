<!-- resources/views/education.blade.php -->

@extends('layouts.app')

@section('content')
<div class="relative min-h-screen flex flex-col items-center justify-center px-4 sm:px-6 lg:px-8 text-center z-10">
    <h1 class="text-3xl sm:text-4xl md:text-6xl font-bold leading-tight">
        Hi I am <span class="text-blue-700">Terry Ntuli</span>
    </h1>
    <p class="mt-4 text-base sm:text-lg md:text-xl max-w-2xl">
        A Software Engineer is an IT professional who designs, develops, and maintains computer software at a company.
        They use their creativity and technical skills and apply the principles of software engineering to help solve new and ongoing problems for an organization.
    </p>
    <a href="#" class="mt-8 inline-block bg-blue-600 text-white py-2 px-5 rounded-lg hover:bg-blue-700 text-sm sm:text-base">
        Read More
    </a>

    <div class="absolute bottom-4 flex space-x-2">
        <span class="h-3 w-3 bg-white rounded-full"></span>
        <span class="h-3 w-3 bg-gray-400 rounded-full"></span>
    </div>
</div>
@endsection
