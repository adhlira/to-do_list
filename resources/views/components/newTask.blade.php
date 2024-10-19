<x-layout>
    <div class="flex">
        <a href="{{ route('home') }}" class="ml-auto mb-5">
            <button class="border rounded-lg p-2 bg-blue-400">
                <i class="fa fa-arrow-left"></i>
            </button>
        </a>
    </div>
    <h3 class="text-2xl font-semibold text-center">Buat Tugas Baru</h3>
    <form action="{{ route('add_task') }}" method="POST" class="border rounded-lg shadow-md mx-auto mt-5 md:w-1/3 p-5">
        @csrf
        <input type="text" value="{{ Auth::user()->id }}" hidden name="user_id">
        <div class="form-group">
            <label for="">Deskripsi Tugas</label>
            <br>
            <textarea name="description" id="" rows="5" class="rounded-lg mt-2 w-full"></textarea>
        </div>
        <div class="form-group mt-5">
            <label for="">Prioritas</label>
            <select name="priority" id="" class="rounded-lg w-full text-center mt-3 p-2">
                <option value="" class="md:text-base text-xs">- Pilih Prioritas -</option>
                <option value="Low" class="md:text-base text-xs">Low</option>
                <option value="Medium" class="md:text-base text-xs">Medium</option>
                <option value="High" class="md:text-base text-xs">High</option>
            </select>
        </div>
        <button class="w-full border rounded-lg mt-5 p-2 bg-green-500" type="submit">TAMBAH</button>
    </form>
</x-layout>
