<x-layout title="Welcome">

<form method="POST" action="/ideas/{{ $idea->id }}">

    @csrf
    @method('PATCH')

        <div class="col-span-full">
          <label for="description" class="block text-sm/6 font-medium text-gray-900">Edit your Idea</label>
          <div class="mt-2">
            <textarea id="description" name="description" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">{{ $idea->description }}</textarea>
          </div>
          <p class="mt-3 text-sm/6 text-gray-600">Have an idea you want to save for later?</p>
        </div>


        <div class="mt-6 flex items-center gap-x-6">
            <button type="submit"
                     class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Update
            </button>

            <button type="submit" form="delete-idea-form"
                    class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                delete
            </button>
        </div>
    </form>


    <form method="POST" action="/ideas/{{ $idea->id }}" id="delete-idea-form">
        @csrf
        @method('DELETE')
    </form>

</x-layout>