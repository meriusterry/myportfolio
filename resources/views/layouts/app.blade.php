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
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body class="bg-gray-900 text-white">

    <!-- Navigation Bar -->
    <nav class="bg-white bg-opacity-10 backdrop-blur-md p-4 flex justify-between items-center relative">
        <div class="flex items-center space-x-4">
            <span class="text-xl font-bold">MT Ntuli</span>
        </div>

        <!-- Desktop Menu -->
        <div class="hidden md:flex space-x-6 text-md font-bold">
            <a href="{{ route('welcome') }}" class="hover:underline hover:text-blue-400">About</a>
            <a href="{{ route('education') }}" class="hover:underline hover:text-blue-400">Education</a>
            <a href="{{ route('experience') }}" class="hover:underline hover:text-blue-400">Experience</a>
            <a href="{{ route('skills') }}" class="hover:underline hover:text-blue-400">Skills</a>
            <a href="{{ route('projects') }}" class="hover:underline hover:text-blue-400">Projects</a>
            <a href="{{ route('view.Merius_Ntuli_CV') }}" class="hover:underline hover:text-blue-400" target="_blank">Resume</a>
            <a href="{{ route('contacts') }}" class="hover:underline hover:text-blue-400">Contacts</a>
        </div>

    <!-- Mobile Menu Button -->
<div class="md:hidden flex items-center">
    <button id="menu-toggle" class="text-white focus:outline-none">
        <!-- Hamburger Icon -->
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
    </button>
</div>

<!-- Mobile Dropdown Menu -->
<div id="mobile-menu" class="hidden absolute top-full left-0 w-full bg-blue-600 py-2 flex flex-col space-y-1 text-center md:hidden">
    <a href="{{ route('welcome') }}" class="hover:underline hover:text-blue-400" onclick="closeMenu()">About</a>
    <a href="{{ route('education') }}" class="hover:underline hover:text-blue-400" onclick="closeMenu()">Education</a>
    <a href="{{ route('experience') }}" class="hover:underline hover:text-blue-400" onclick="closeMenu()">Experience</a>
    <a href="{{ route('skills') }}" class="hover:underline hover:text-blue-400" onclick="closeMenu()">Projects</a>
    <a href="{{ route('projects') }}" class="hover:underline hover:text-blue-400" onclick="closeMenu()">Skills</a>
    <a href="{{ route('contacts') }}" class="hover:underline hover:text-blue-400" onclick="closeMenu()">Contacts</a>
</div>



    </nav>

    <hr class="border-gray-600 my-0">

    <!-- Main Content Section -->
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        @yield('content')
    </div>

   <!-- JavaScript for Mobile Menu -->
<script>
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    // Toggle the mobile menu visibility when the button is clicked
    menuToggle.addEventListener('click', function() {
        mobileMenu.classList.toggle('hidden');  // Toggle the 'hidden' class
    });

    // Close the mobile menu after clicking a link
    function closeMenu() {
        mobileMenu.classList.add('hidden');  // Hide the menu after clicking the link
    }
</script>

</body>
</html>
