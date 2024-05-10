<div>
    <livewire:header />

    <livewire:PageHeader :title="$title" :description="$description" />

            <div class="mx-auto max-w-7xl px-6 lg:px-8">            
            
                <div class="mx-auto lg:mx-0">
                    <ul role="list" class="mx-auto grid max-w-2xl grid-cols-1 gap-x-6 gap-y-20 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:gap-x-8 xl:col-span-2">
                    @foreach ($events as $e)
                    <li>
                        <div class="mx-auto max-w-4xl my-12 shadow-lg p-12">
                            <div class="mb-2"><span class="text-sm">{{ $e->start }}</span></div>
                            <img class="aspect-[3/2] w-full rounded-2xl object-cover" src="{{ asset('storage/'.$e->image) }}" alt="">
                            <h3 class="mt-6 text-2xl font-semibold leading-8 text-pine font-serif mb-2"><a href="#" class="underline">{{ $e->name }}</a></h3>
                            <p class="text-base leading-7 text-gray-600">{{ $e->type }}</p>
                            <p class="mt-4 mb-8 text-base leading-7 text-gray-600">{{ $e->description }}</p>
                            <a href="{{ url('events/'.$e->slug) }}" class="rounded-md bg-soul px-12 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-pebble hover:text-pine focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-pine-600">More Info</a>                            
                            <span class="float-right font-serif text-3xl">
                                @if ($e->price == 0)
                                    FREE
                                @else
                                    {{ number_format($e->price) }}
                                @endif
                            </span>
                        </div>
                    </li>
                    @endforeach
                    </ul>
                </div>
            </div>
    <livewire:footer />
</div>