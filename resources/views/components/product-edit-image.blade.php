@props(['pic'])

<div class="relative">
    <img src="{{ asset('/storage/' . $pic->url) }}" class="w-48 h-48 object-scale-down" alt="Фото">

    <div class="absolute top-0 right-0 ">
        <form action="{{ route('picture.destroy', $pic->id) }}" method="Post" class="flex">
            @csrf
            @method('DELETE')
            <div class="border  bg-red-600 hover:bg-red-400 rounded-md m-2">
                <button type="submit" class="py-2 px-4">Delete</button>
            </div>
        </form>
    </div>
</div>
