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
    <div class="flex">
        <div class="ml-auto mb-5">
            <a href="{{ route('newTaskPage') }}">
                <button class="border p-2 rounded-lg bg-green-800 text-white">
                    <i class="fa fa-plus"></i>
                </button>
            </a>
            <a href="{{ route('home') }}" class="ml-auto mb-5">
                <button class="border rounded-lg p-2 bg-blue-500 hover:bg-blue-400">
                    <i class="fa fa-arrow-left"></i>
                </button>
            </a>
        </div>
    </div>
    <h3 class="text-center font-semibold mt-10 text-xl md:text-2xl">Daftar Tugas</h3>
    <div class="w-full overflow-x-auto">
        <table class="mt-10 border min-w-full table-auto p-2 shadow-md">
            <thead>
                <tr class="text-center">
                    <th class="border p-2">No</th>
                    <th class="border p-2">Description</th>
                    <th class="border p-2">Priority</th>
                    <th class="border p-2">Status</th>
                    <th class="border p-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($tasks as $task)
                    <tr class="text-center">
                        <td class="border p-2">{{ $no++ }}</td>
                        <td class="border p-2">{{ $task->description }}</td>
                        <td class="border p-2">{{ $task->priority }}</td>
                        <td class="border p-2">
                            <form action="{{ route('task.updateStatus', $task->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <input type="checkbox" name="is_completed" {{ $task->is_completed ? 'checked' : '' }}>
                                Done
                        </td>
                        <td class="border p-2">
                            <div class="flex gap-2 md:justify-center">
                                <button class="border p-2 rounded-lg bg-green-500 hover:bg-green-400" type="submit">
                                    <i class="fa fa-floppy-disk"></i>
                                </button>
                                </form>
                                <a href="{{ route('editTask', $task->slug) }}">
                                    <button class="border p-2 rounded-lg bg-yellow-500 hover:bg-yellow-400">
                                        <i class="fa fa-pen-to-square"></i>
                                    </button>
                                </a>
                                <form action="{{ route('task.delete', $task->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="border p-2 rounded-lg bg-red-500 hover:bg-red-400"
                                        onclick="return confirm('Yakin ingin menghapus data ini ?')">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
