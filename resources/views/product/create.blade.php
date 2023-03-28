<x-dashboard>
    <div class="max-w-screen-2xl mx-auto">
        <div class="flex ">
            <div class="m-5">

                <h2 class="m-4 uppercase">Add new Product</h2>
                @if ($errors->any())
                    <ul class=" text-red-600">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                @endif

                <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="m-4 flex flex-col">
                        <label for="model">Model:</label>
                        <input type="text" name="model" id="model" class="dark:bg-slate-800">
                    </div>

                    <div class="m-4 flex flex-col">
                        <label for="kod">Kod:</label>
                        <input type="text" name="kod" id="kod" class="dark:bg-slate-800">
                    </div>

                    <div class="m-4 flex flex-col">
                        <label for="title">Title:</label>
                        <input type="text" name="title" id="title" class="dark:bg-slate-800">
                    </div>

                    <div class="m-4 flex flex-col">
                        <label for="price">Price:</label>
                        <input type="number" name="price" id="price" class="dark:bg-slate-800">
                    </div>

                    <div class="m-4 flex flex-col">
                        <label for="description">Description:</label>
                        <textarea name="description" id="description" cols="80" rows="5" class="dark:bg-slate-800"></textarea>
                    </div>

                    <div class="m-4 flex flex-col">
                        <label for="details">Details:</label>
                        <textarea name="details" id="details" cols="80" rows="5" class="dark:bg-slate-800"></textarea>
                    </div>

                    <div class="m-4 flex flex-col">
                        <label for="brand_id">Brand:</label>
                        <select name="brand_id" id="brand_id" class="dark:bg-slate-800">
                            @foreach ($brands as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->title }}</option>
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
