<!-- resources/views/education.blade.php -->

@extends('layouts.app')

@section('content')
<div class="relative flex flex-col-reverse md:flex-row items-center justify-between px-4 sm:px-6 lg:px-8 py-12 max-w-6xl mx-auto z-10">
    
    <!-- Text Section -->
    <div class="w-full md:w-1/2 text-center md:text-left">
        <h1 class="text-3xl sm:text-2xl md:text-6xl font-bold leading-tight">
            Hi I am <span class="text-blue-700">Merius Ntuli</span>
        </h1>
        
        <p class="mt-4 text-base sm:text-md md:text-md">
            I am a passionate and results-oriented IT professional with a strong foundation in
            software development, programming, and problem-solving. I am a graduate of
            Tshwane University of Technology with hands-on experience in web application
            development. Seeking an entry-level role to apply my technical expertise, contribute
            to innovative projects, and grow within the IT industry.
        </p>
        
        <!-- Hidden extra info -->
        <div id="hidden-info" class="mt-4 hidden">
            <p class="text-base sm:text-md md:text-md">
                My strengths include full-stack development, UI/UX design, API integration, and agile collaboration. 
                I am committed to continuous learning, staying up-to-date with the latest industry trends, and delivering high-quality solutions that drive real-world impact. 
                I am excited to bring my energy, creativity, and strong work ethic to a forward-thinking team.
            </p> 
        </div>

        <!-- Read More Button -->
        <a href="#" id="read-more" class="mt-8 inline-block bg-blue-600 text-white py-2 px-5 rounded-lg hover:bg-blue-700 text-sm sm:text-base">
            Read More
        </a>
    </div>

    <!-- Image Section -->
  

</div>

<script>
    document.getElementById('read-more').addEventListener('click', function(e) {
        e.preventDefault(); // prevent page jump
        var hiddenInfo = document.getElementById('hidden-info');
        if (hiddenInfo.classList.contains('hidden')) {
            hiddenInfo.classList.remove('hidden');
            this.textContent = 'Read Less';
        } else {
            hiddenInfo.classList.add('hidden');
            this.textContent = 'Read More';
        }
    });
</script>
@endsection
