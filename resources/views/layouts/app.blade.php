<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MT Ntuli Portfolio')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('{{ asset('storage/bb1.jpg') }}');
            background-size: cover;
        }
    </style>
</head>
<body class="bg-gray-900 text-white mt-4">

    <!-- Navigation Bar -->
    <nav class="bg-white-400 p-2 flex justify-between items-center">
        <div class="flex items-center space-x-4">
            <img src="{{ asset('storage/mypicture.jpg') }}" class="h-12 w-10 rounded-xl">
        </div>
        <div class="space-x-6 hidden md:flex ml-3 text-lg">
            <a href="{{ route('welcome') }}" class="hover:underline">About</a>

            <a href="{{ route('education') }}" class="hover:underline">Education</a>
            <a href="{{ route('experience') }}" class="hover:underline">Experience</a>
            <a href="{{ route('skills') }}" class="hover:underline">Skills</a>
            <a href="{{ route('contacts') }}" class="hover:underline">Contacts</a> 
        </div>
        <div class="space-x-4 hidden md:flex">
            <a href="mailto:meriusterry@gmail.com" target="_blank"><img src="{{ asset('storage/email.jpeg') }}" alt="email" class="h-6 rounded-lg  "></a>
            <a href="tel:+27607577774" target="_blank"><img src="{{ asset('storage/contact.png') }}" alt="email" class="h-6 rounded-lg "></a>
            <a href="https://www.linkedin.com/in/merius-ntuli-a605a3166" target="_blank"><img src="{{ asset('storage/linkedin.png') }}" alt="LinkedIn" class="h-6 rounded-lg"></a>  
            <a href="https://wa.me/27607577774" target="_blank"><img src="{{ asset('storage/whatsapp.jpeg') }}" alt="whatsapp" class="h-6 rounded-lg"></a>
            <a href="https://www.facebook.com/sucre.mt" target="_blank"><img src="{{ asset('storage/facebook.jpeg') }}" alt="Facebook" class="h-6 rounded-lg "></a>
            <a href="{{ route('download.resume') }}" class="mt-0 inline-block bg-green-500 text-white py-1 px-3 rounded-lg hover:bg-green-700" download>Download Resume</a>
        </div>
    </nav>
    <hr class="my-4">

    <!-- Main Content Section -->
    <div class="container mx-auto">
        @yield('content')
    </div>


</body>

</html>

