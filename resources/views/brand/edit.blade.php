<x-dashboard>
    <div class="max-w-screen-2xl mx-auto">
        <div class="flex ">
            <div class="m-5">

                <h2>Edit Brand</h2>
                @if ($errors->any())
                    <ul class=" text-red-600">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                @endif

                <form action="{{ route('brand.update', $brand->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <div class="m-4">
                        <label for="title">Title:</label>
                        <input type="text" name="title" id="title" value={{ $brand->title }}
                            class="dark:bg-slate-800">
                    </div>



                    <div class="m-4">
                        <label for="category_id">parent category:</label>
                        <select name="category_id" id="category_id" class="dark:bg-slate-800">
                            @foreach ($categories as $category)
                                @if (!$category->isMain)
                                    <option value="{{ $category->id }}"
                                        @if ($brand->category->id == $category->id) selected = 'selected' @endif>
                                        {{ $category->title }}
                                @endif




                                </option>
                            @endforeach
                        </select>
                    </div>

                    <button class="border border-slate-600 py-2 px-4 rounded-md bg-green-600 m-4"
                        type="submit">Update</button>

                </form>
            </div>
        </div>
    </div>

</x-dashboard>
