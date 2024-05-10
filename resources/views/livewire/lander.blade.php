<div>
    <livewire:header />

    <div class="relative isolate pt-14">
    <img class="absolute inset-0 h-full w-full object-cover brightness-150 saturate-0" src="https://images.unsplash.com/photo-1601381718415-a05fb0a261f3?ixid=MXwxMjA3fDB8MHxwcm9maWxlLXBhZ2V8ODl8fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1216&q=80" alt="">
    
        <div class="py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
            <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl font-serif">We Are Cycle Breakers.</h1>
            <p class="font-sans mt-6 text-lg leading-8 text-gray-600">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
                <a href="{{ url('community') }}" class="rounded-md bg-pine px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-plum focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Join the Community</a>
                <a href="{{ url('about') }}" class="text-sm font-semibold leading-6 text-gray-900">Learn more <span aria-hidden="true">→</span></a>
            </div>
            </div>
            <div class="mt-16 flow-root sm:mt-24">
            <div class="-m-2 rounded-xl bg-pine p-2 ring-1 ring-inset ring-white lg:-m-4 lg:rounded-2xl lg:p-4">
                <img src="{{ url('img/wellness.png') }}" alt="App screenshot" width="2432" height="1442" class="rounded-md shadow-2xl ring-1 ring-gray-900/10">
            </div>
            </div>
        </div>
        </div>
        <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
        </div>
    </div>
    <livewire:footer />
</div>