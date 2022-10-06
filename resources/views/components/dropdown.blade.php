@props(['categories', 'current_category'])

<div x-data="{show : false}" @click.away="show = false">
    <button @click="show = ! show" class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex">
        {{ isset($current_category) ? ucwords($current_category -> category_name) : 'Category' }}
        <svg class="transform -rotate-90 absolute" style="right: 12px;" width="22" height="22" viewBox="0 0 22 22">
            <g fill="none" fill-rule="evenodd">
                <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                </path>
                <path fill="#222" d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
            </g>
        </svg>
    </button>


    <div x-show="show" class="py-2 absolute bg-gray-100 mt-2 rounded-xl w-full z-50 overflow-auto max-h-52" style="display: none">
        <a href="/?{{ http_build_query(request()->except('category', 'page'))}}" class="block text-left px-3 test-sm leading-6 hover:bg-blue-500 focus:bg-blue-500 hover:text-white focus:text-white
        {{ ( $current_category == null ) ? 'bg-blue-500 text-white' : '' }}
        ">
            All
        </a>
        @foreach($categories as $category)
        <a href="/?category={{ $category -> category_name }}&{{ http_build_query(request()->except('category', 'page'))}}" class="block text-left px-3 test-sm leading-6 hover:bg-blue-500 focus:bg-blue-500 hover:text-white focus:text-white 
                    {{ ( isset($current_category) && $current_category -> id == $category -> id) ? 'bg-blue-500 text-white' : '' }}">
            {{ ucwords($category -> category_name) }}
        </a>
        @endforeach
    </div>
</div>