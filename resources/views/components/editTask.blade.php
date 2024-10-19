<x-layout>
    <div class="flex">
        <a href="{{ route('tasks') }}" class="ml-auto mb-5">
            <button class="border rounded-lg p-2 bg-blue-400">
                <i class="fa fa-arrow-left"></i>
            </button>
        </a>
    </div>
    <h3 class="text-2xl font-semibold text-center">Edit Tugas</h3>
    <form action="{{ route('task.updateAll', $task->id) }}" method="POST" class="border rounded-lg shadow-md mx-auto mt-5 md:w-1/3 p-5">
        @csrf
        @method('PUT')
        <input type="text" value="{{ Auth::user()->id }}" hidden name="user_id">
        <div class="form-group">
            <label for="">Deskripsi Tugas</label>
            <br>
            <textarea name="description" id="" rows="5" class="rounded-lg mt-2 w-full" required>{{ old('description', $task->description) }}</textarea>
        </div>
        <div class="form-group mt-5">
            <label for="">Prioritas</label>
            <select name="priority" id="" class="rounded-lg w-full text-center mt-3 p-2">
                <option value="">- Pilih Prioritas -</option>
                <option value="Low" {{ $task->priority == 'Low' ? 'selected' : '' }}>Low</option>
                <option value="Medium" {{ $task->priority == 'Medium' ? 'selected' : '' }}>Medium</option>
                <option value="High" {{ $task->priority == 'High' ? 'selected' : '' }}>High</option>
            </select>
        </div>
        <div class="form-group mt-5">
            <label for="">Status</label>
            <br>
            <input type="checkbox" name="status" id="" class="mt-5" {{ $task->is_completed ? 'checked' : '' }}> Done
        </div>
        <button class="w-full border rounded-lg mt-5 p-2 bg-green-500" type="submit">Simpan</button>
    </form>
</x-layout>
