<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>To-Do List App</title>
    <script>
        // Function to toggle dropdown visibility
        function toggleDropdown() {
            const dropdownMenu = document.getElementById('dropdownMenu');
            dropdownMenu.classList.toggle('hidden');
        }
    </script>
</head>

<body class="h-full">
    <div class="container mx-auto border min-h-full">
        <x-navbar></x-navbar>

        <main class="bg-gray-300 border min-h-screen p-5">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
