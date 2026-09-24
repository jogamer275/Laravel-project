<x-layout title="Welcome">

<form method="POST" action="/ideas">

    @if ($ideas->count())
    <div class="mt-6 text-white">
        <h2 class="font-bold">Your ideas</h2>
        <ul>
        @foreach ($ideas as $idea)
                <a href="/ideas/{{ $idea->id }}" class="text-small">{{ $idea->description }}</a>
        @endforeach
        </ul>
    </div>

    @else
    <p>No ideas yet. <a href="/ideas/create" class="underline">Create a new one</a>
    </p>

 @endif
</x-layout>