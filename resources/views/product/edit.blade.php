<x-dashboard>
    <div class="max-w-screen-2xl mx-auto">
        <div class="flex ">
            <div class="m-5">

                <h2 class="m-4 uppercase">Edit Product</h2>
                @if ($errors->any())
                    <ul class=" text-red-600">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                @endif

                <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                    <button class="border border-slate-600 py-2 px-4 rounded-md bg-green-600 m-4"
                        type="submit">Update</button>
                    @csrf
                    @method('put')

                    <div class="m-4 flex flex-col">
                        <label for="model">Model:</label>
                        <input type="text" name="model" id="model" class="dark:bg-slate-800"
                            value="{{ $product->model }}">
                    </div>

                    <div class="m-4 flex flex-col">
                        <label for="title">Title:</label>
                        <input type="text" name="title" id="title" class="dark:bg-slate-800"
                            value="{{ $product->title }}">
                    </div>

                    <div class="m-4 flex flex-col">
                        <label for="price">Price:</label>
                        <input type="number" name="price" id="price" class="dark:bg-slate-800"
                            value="{{ $product->price }}">
                    </div>

                    <div class="m-4 flex flex-col">
                        <label for="description">Description:</label>
                        <textarea name="description" id="description" cols="80" rows="5" class="dark:bg-slate-800">{{ $product->description }}</textarea>
                    </div>

                    <div class="m-4 flex flex-col">
                        <label for="details">Details:</label>
                        <textarea name="details" id="details" cols="80" rows="5" class="dark:bg-slate-800">{{ $product->details }}</textarea>
                    </div>

                    {{-- Images --}}
                    <div class="m-4 flex flex-col">
                        <label for="url">Add images</label>
                        <input type="file" name="url[]" id="url" multiple>
                    </div>

                    <div class="m-4 flex flex-col">
                        <label for="brand_id">Brand:</label>
                        <select name="brand_id" id="brand_id" class="dark:bg-slate-800">
                            @foreach ($brands as $brand)
                                <option value="{{ $brand->id }}"
                                    @if ($brand->id == $product->brand->id) selected = 'selected' @endif>
                                    {{ $brand->category->title }} - {{ $brand->title }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </form>





                <div class="m-4 flex flex-col">
                    <label for="details">Current Images:</label>
                    <div class="flex flex-wrap">
                        @foreach ($product->pictures as $pic)
                            <div class="relative">
                                <img src="{{ asset('/storage/' . $pic->url) }}" class="w-48 h-48 object-scale-down"
                                    alt="Фото">

                                <div class="absolute top-0 right-0 ">
                                    <form action="{{ route('picture.destroy', $pic->id) }}" method="Post"
                                        class="flex">
                                        @csrf
                                        @method('DELETE')
                                        <div class="border  bg-red-600 hover:bg-red-400 rounded-md m-2">
                                            <button type="submit" class="py-2 px-4">Delete</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>


            </div>
        </div>
    </div>

</x-dashboard>
