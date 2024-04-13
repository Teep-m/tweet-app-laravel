@props([
    'images' => []
])

 @if (count($images) > 0)
     <div x-data="{}" class="px-2">
        <div class="flex justify-center -mx-2">
            @foreach ($images as $image)
                <div class="bg-gray-400">
                    <a @click="$dispatch('img-modal', {  imgModalSrc: '{{ asset('storage/images/' . $image->name) }}' })" 
                        class="cursor-pointer">
                        <img src="{{ asset('storage/images/' . $image->name) }}" alt="{{ $image->name }}" class="object-fit w-full">
                    </a>
                </div>
            @endforeach
        </div>
     </div>
 @endif