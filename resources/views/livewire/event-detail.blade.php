<div>
    <livewire:header />

    <div class="relative isolate overflow-hidden bg-pine text-white">
        <div class="mx-auto max-w-7xl px-6 pb-24 pt-10 sm:pb-32 lg:flex lg:px-8 lg:py-20">

            <div class="mx-auto">
            <div class="max-w-2xl flex-none sm:max-w-5xl lg:max-w-none p-16">
                <img src="{{ asset('storage/'.$e->image) }}" alt="{{ $e->name }}" class="size-full rounded shadow-lg shadow-white" />
            </div>
            </div>

            <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-xl lg:flex-shrink-0 lg:pt-8">

            <h1 class="mt-10 text-4xl tracking-tight text-white sm:text-6xl font-serif">{{ $e->name }}</h1>
            <p class="mt-6 text-lg leading-8 text-white font-sans">{{  $e->description }}</p>
            <div class="mt-10 flex items-center gap-x-6">
                <a href="#" class="rounded-md bg-pebble px-12 py-2.5 text-sm font-semibold text-pine shadow-sm hover:bg-sage hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-plum-600">Register</a>
            </div>
            </div>

        </div>
    </div>

    <livewire:registration :name="$e->name" />
    <livewire:payment :name="$e->name" />
    <livewire:footer />
</div>