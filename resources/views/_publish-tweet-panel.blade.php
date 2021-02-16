<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form method="POST" action="/tweets">
        @csrf
        <div class="text-xs text-muted mb-1 text-right">
            <span id="publish-symbols-count">0</span> / 255
        </div>
        <textarea
            name="body"
            class="w-full"
            id="publish-panel"
            placeholder="What's up doc?"
            required
            autofocus
        >{{ old('body') }}</textarea>

        <hr class="my-4">

        <footer class="flex items-center justify-between">
            <img
                src="{{ auth()->user()->avatar }}"
                alt="Your avatar"
                class="rounded-full mr-2"
                width="40"
                height="40"
            />

            <button
                type="submit"
                class="bg-blue-500 hover:bg-blue-600 rounded-lg shadow h-10 px-10 text-white"
            >
                Tweet a-roo!
            </button>
        </footer>

    </form>

    @error('body')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>
