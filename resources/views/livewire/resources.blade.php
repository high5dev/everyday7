<div>
    <livewire:header />

    <livewire:PageHeader :title="$title" :description="$description" />


    <div class="mx-auto max-w-7xl px-6 lg:px-8">            
            
            <div class="mx-auto lg:mx-0">
                <ul role="list" class="mx-auto grid max-w-2xl grid-cols-1 gap-x-6 gap-y-20 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:gap-x-8 xl:col-span-2">

                @foreach ($resources as $r)
                <li>
                    <div class="mx-auto max-w-4xl my-12 shadow-lg p-12">
                        <div class="mb-2"><span class="text-sm">{{ strtoupper($r->type) }}</span></div>
                        <img class="aspect-[3/2] w-full rounded-2xl object-cover" src="{{ asset('storage/'.$r->image) }}" alt="">
                        <h3 class="mt-12 text-2xl font-semibold leading-8 text-pine font-serif mb-2"><a href="#" class="underline">{{ $r->name }}</a></h3>
                        <p class="mt-4 mb-8 text-base leading-7 text-gray-600">{{ $r->description }}</p>
                        <a href="{{ url('resources/download/'.$r->slug) }}" class="rounded-md bg-soul px-12 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-pebble hover:text-pine focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-pine-600">Download</a>                            
                    </div>
                </li>
                @endforeach
                </ul>
            </div>
        </div>    

    <livewire:footer />
</div>