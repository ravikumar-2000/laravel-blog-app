@props(['categories', 'current_category', 'name'])

<div x-data="{show : false}" @click.away="show = false">
    <button @click="show = ! show" class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex">
        {{ isset($current_category) ? ucwords($current_category -> category_name) : 'Category' }}
        <x-icon name="$name" />
    </button>

    <div x-show="show" class="py-2 absolute bg-gray-100 mt-2 rounded-xl w-full z-50 overflow-auto max-h-52" style="display: none">
        <a href="/" class="block text-left px-3 test-sm leading-6 hover:bg-blue-500 focus:bg-blue-500 hover:text-white focus:text-white
        {{ ( $current_category == null ) ? 'bg-blue-500 text-white' : '' }}
        ">
            All
        </a>
        @foreach($categories as $category)
        <a href="/categories/{{ $category -> category_name }}" class="block text-left px-3 test-sm leading-6 hover:bg-blue-500 focus:bg-blue-500 hover:text-white focus:text-white 
                    {{ ( isset($current_category) && $current_category -> id == $category -> id) ? 'bg-blue-500 text-white' : '' }}">
            {{ ucwords($category -> category_name) }}
        </a>
        @endforeach
    </div>
</div>