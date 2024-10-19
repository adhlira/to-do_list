<x-layout>
    @if (session('success'))
        <script>
            Swal.fire({
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                icon: 'success',
                confirmButtonText: 'OK'
            });
        </script>
    @endif
    <h3 class="md:text-2xl mt-64 md:mt-10 text-center">Selamat Datang di ToDos App <strong>{{ Auth::user()->name }}</strong></h3>
    <div class="flex justify-center mt-5 gap-2">
        <a href="{{ route('tasks') }}">
            <button class="border rounded-lg p-2 bg-blue-500 hover:bg-blue-400 font-semibold text-white">Lihat
                Tugas</button>
        </a>
        <a href="{{ route('newTaskPage') }}">
            <button class="border rounded-lg p-2 bg-green-500 hover:bg-green-400 font-semibold text-white">Buat
                Tugas</button>
        </a>
    </div>
</x-layout>
