<!-- resources/views/education.blade.php -->

@extends('layouts.app')



@section('content')
    <div class="relative p-10 text-center max-w-3xl z-10">
        <h1 class="text-4xl md:text-6xl font-bold leading-tight">Hi I am <span class="text-blue-700">Terry Ntuli</span> </h1>
        <p class="mt-4 text-xl md:text-xl">A Software Engineer is an IT professional who designs, develops and maintains computer software at a company. 
            They use their creativity and technical skills and apply the principles of software engineering to help solve new and ongoing problems for an organization.</p>
        <div id="hidden-info" style="display: none;">
            <p class="mt-4 text-xl md:text-xl"> Furthermore, the constant connectivity facilitated by smartphones and social media has blurred the boundaries between work and personal life.
                 Many individuals find themselves constantly checking their devices, which can disrupt family time, relaxation, and sleep patterns. This "always-on" culture can strain relationships, 
                 as individuals struggle to balance their digital and offline lives. You can adjust the CSS to style the hidden information .</p> 
           
        </div>
        
        <a href="#" id="read-more" class="mt-8 inline-block bg-blue-600 text-white py-3 px-6 rounded-lg hover:bg-blue-700">Read More</a>
       
    </div>
    

    
        <img src="{{ asset('storage/mypicture.jpg') }}" class="absolute right-10 top-12 mt-40 mr-20 w-40 h-70 rounded-lg z-10">

   
    
    <script>
        document.getElementById('read-more').addEventListener('click', function() {
            var hiddenInfo = document.getElementById('hidden-info');
            if (hiddenInfo.style.display === 'none') {
                hiddenInfo.style.display = 'block';
                this.textContent = 'Read Less'; // Change link text to "Read Less" when expanded
            } else {
                hiddenInfo.style.display = 'none';
                this.textContent = 'Read More'; // Change link text back to "Read More" when collapsed
            }
        });
        </script>
        
@endsection
