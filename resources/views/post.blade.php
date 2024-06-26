<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <article class="py-4 max-w-screen-md border-b border-gray-400">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
        <div class="text-base text-gray-500">
            <a href="#">{{ $post['author'] }}</a> | 26 June 2023
        </div>
        <p class="my-4 font-light">{{ $post['body'] }}</p>
        <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back To Post</a>
    </article>
</x-layout>
