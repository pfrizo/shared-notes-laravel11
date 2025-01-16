<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Posts
        </h2>
    </x-slot>

    <div class="py-10">
        
        @can('post.create')
            <div class="max-w-7xl mx-auto mb-6 px-8">
                <a href="" class="bg-blue-700 hover:bg-blue-900 text-white font-bold py-2 px-6 rounded">Create Post</a>
            </div>
        @endcan
        
        @foreach ($posts as $post) 
            <x-post-component :$post></x-post-component>
        @endforeach

    </div>
</x-app-layout>
