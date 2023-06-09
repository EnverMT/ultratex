<x-dashboard>
    <div class="max-w-screen-2xl mx-auto">
        <div class="flex ">
            <div class="m-5">

                <h2>Add new Category</h2>
                @if ($errors->any())
                    <ul class=" text-red-600">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                @endif

                <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="m-4">
                        <label for="title">Title:</label>
                        <input type="text" name="title" id="title" class=" dark:bg-slate-800">
                    </div>

                    <div class="m-4">
                        <label for="isMain">Is Main?:</label>
                        <input type="checkbox" name="isMain" id="isMain">
                    </div>

                    <div class="m-4">
                        <label for="pictures">Image</label>
                        <input type="file" name="picture_url" multiple>
                    </div>

                    <div class="m-4">
                        <label for="parent_id">parent category:</label>
                        <select name="parent_id" id="parent_id" class="dark:bg-slate-800 ">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button class="border border-slate-600 py-2 px-4 rounded-md bg-green-600 m-4"
                        type="submit">Add</button>

                </form>
            </div>
        </div>
    </div>

</x-dashboard>
