<div class="border border-blue-400 rounded-lg py-6 px-8 mb-8">
    <form method="POSt" action="/tweets">
        @csrf
        <textarea name="body"
                  class="w-full"
                  placeholder="What's up doc?"
                  autofocus
                  required
        ></textarea>

        <hr class="my-4"/>

        <footer class="flex justify-between items-center">
            <img src="{{ current_user()->avatar }}"
                 class="rounded-full mr-2"
                 alt="your avatar"
                 style="width: 40px; height: 40px"
            >

            <button type="submit"
                    class="bg-blue-500 hover:bg-blue-600 rounded-lg shadow px-10 text-white text-sm h-10">
                Publish
            </button>
        </footer>
    </form>

    @error('body')
    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>
