<div>
    
    <div class="bg-white flex">
        <div class="flex items-center justify-end">
            @foreach ($categories as $cat)
                <div class="flex flex-col relative text-left dropdown gap">
                    <span class="rounded-md shadow-sm m-1"><button
                            class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800"
                            type="button" aria-haspopup="true" aria-expanded="true"
                            aria-controls="headlessui-menu-items-117"
                            wire:click="selectCategory({{ $cat->id }})">
                            <span>{{ $cat->title }}</span>                            
                        </button></span>


                    <div
                        class="opacity-0 invisible dropdown-menu transition-all duration-300 transform origin-top-right -translate-y-2 scale-95">
                        <div class="absolute mx-1 left-0 mt-2 origin-top-right ">
                            @foreach ($cat->children as $scat)
                                <div>                                    
                                    <button class=" px-2 py-1 w-full bg-gray-200 m-1 rounded-lg hover:bg-slate-400">{{ $scat->title }}</button>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <style>
        .dropdown:hover .dropdown-menu {
            opacity: 1;
            transform: translate(0) scale(1);
            visibility: visible;
        }
    </style>

    Products:
    @foreach ($products as $p)
        <div class="m-2 bg-red-200">{{ $p->title }}</div>
    @endforeach


</div>
