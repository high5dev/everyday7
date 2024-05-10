<div>
    <livewire:header />

    <div class="relative isolate overflow-hidden bg-pine text-white">


  <div class="mx-auto max-w-7xl px-6 pb-24 pt-10 sm:pb-32 lg:flex lg:px-8 lg:py-20">

    <div class="mx-auto">
      <div class="max-w-2xl flex-none sm:max-w-5xl lg:max-w-none p-16">
        <img src="{{ asset('storage/'.$p->image) }}" alt="{{ $p->name }}" class="size-full rounded shadow-lg shadow-white" />
      </div>
    </div>

    <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-xl lg:flex-shrink-0 lg:pt-8">

      <h1 class="mt-10 text-4xl tracking-tight text-white sm:text-6xl font-serif">{{ $p->name }}</h1>
      <p class="mt-6 text-lg leading-8 text-white font-sans">{{ htmlentities($p->bio) }}</p>
      <div class="mt-10 flex items-center gap-x-6">
        <a href="#" class="rounded-md bg-pebble px-3.5 py-2.5 text-sm font-semibold text-pine shadow-sm hover:bg-sage hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-plum-600">Schedule {{ $p->name }}</a>
        <a href="#meet" class="text-sm font-semibold leading-6 text-white">Meet {{ $p->name }} <span aria-hidden="true">→</span></a>
      </div>
    </div>    
  </div>
</div>

<div class="mx-auto max-w-7xl px-6 py-16 lg:flex lg:px-8" id="meet">
  <div class="mx-auto shadow-lg p-5 border-1 text-center">
    <h2 class="text-5xl mb-5 font-serif">Meet {{ $p->name }}</h2>
    <iframe width="640" height="360" src="https://www.youtube.com/embed/ssss7V1_eyA?si=f3vq6S-cA0mj1WcE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
  </div>
</div>


    <livewire:availability :name="$p->name" />
    <livewire:payment :name="$p->name" />
    <livewire:footer />
</div>