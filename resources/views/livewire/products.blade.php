<div>
    <div>
        <ul class="flex ">
            @foreach ($categories as $cat)
                <li><button class="border border-gray-300 px-2 py-1 hover:bg-gray-400 rounded-md m-1"
                        wire:click="selectCategory({{ $cat->id }})">{{ $cat->title }}</button></li>
            @endforeach
        </ul>

    </div>



    Products:
    @foreach ($products as $p)
        <div>{{ $p->title }}</div>
    @endforeach


</div>
