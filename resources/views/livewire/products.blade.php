<div>
    Categories:
    <ul>
        @foreach ($categories as $cat)
            <li><button class="border border-gray-300 px-2 py-1" wire:click="filterCategory({{$cat->id}})">{{ $cat->title }}</button></li>
        @endforeach
    </ul>

    SubCat:

    @foreach ($subcategories as $cat)
        <div>{{ $cat->title }}</div>
    @endforeach

    Products:
    @foreach ($products as $p)
        <div>{{ $p->title }}</div>
    @endforeach


</div>
