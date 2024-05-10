<div>
    <livewire:header />

    <livewire:PageHeader :title="$title" :description="$description" />


    <div class="bg-white py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-4xl text-center">
      <h2 class="text-base font-semibold leading-7 text-soul">Join Us</h2>
      <p class="mt-2 text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">Self-Directed Growth, Choose Your Plan!</p>
    </div>
    <p class="mx-auto mt-6 max-w-2xl text-center text-lg leading-8 text-gray-600">Community, discussion, education, and coaching for personal & professional development. 
Shift out of overwhelm and elevate your everyday life.</p>



    <div class="mt-16 flex justify-center">
      <fieldset class="grid grid-cols-2 gap-x-1 rounded-full p-1 text-center text-xs font-semibold leading-5 ring-1 ring-inset ring-gray-200">
        <legend class="sr-only">Payment frequency</legend>
        <!-- Checked: "bg-indigo-600 text-white", Not Checked: "text-gray-500" -->
        <label class="cursor-pointer rounded-full px-2.5 py-1">
          <input type="radio" name="frequency" value="monthly" class="sr-only">
          <span>Monthly</span>
        </label>
        <!-- Checked: "bg-indigo-600 text-white", Not Checked: "text-gray-500" -->
        <label class="cursor-pointer rounded-full px-2.5 py-1">
          <input type="radio" name="frequency" value="annually" class="sr-only">
          <span>Annually</span>
        </label>
      </fieldset>
    </div>



    <div class="isolate mx-auto mt-10 grid max-w-md grid-cols-1 gap-8 lg:mx-0 lg:max-w-none lg:grid-cols-3">

    @foreach ($plans as $p)
    <div class="rounded-3xl p-8 xl:p-10 ring-1 ring-oceanmist">
        <div class="flex items-center justify-between gap-x-4">
          <h3 id="tier-freelancer" class="text-lg font-semibold leading-8 text-gray-900">{{ $p->name }}</h3>
        </div>
        <p class="text-sm mb-4 leading-6 text-gray-600">{{ $p->tagline }}</p>
        <img src="{{ asset('storage/'.$p->image) }}" alt="{{ $p->title }}" />

        <p class="mt-6 flex items-baseline gap-x-1">
          <!-- Price, update based on frequency toggle state -->
          <span class="text-4xl font-bold tracking-tight text-gray-900">${{ $p->monthprice }}</span>
          <!-- Payment frequency, update based on frequency toggle state -->
          <span class="text-sm font-semibold leading-6 text-gray-600">/month</span>
        </p>
        <a href="{{ url('join') }}" aria-describedby="tier-freelancer" class="mt-6 block rounded-md py-2 px-3 text-center text-sm font-semibold leading-6 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 text-oceanmist ring-1 ring-inset ring-oceanmist hover:ring-indigo-300">Choose plan</a>
        <ul role="list" class="mt-8 space-y-3 text-sm leading-6 text-gray-600 xl:mt-10">
          <li class="flex gap-x-3">
            <svg class="h-6 w-5 flex-none text-oceanmist" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
            </svg>
            5 products
          </li>
          <li class="flex gap-x-3">
            <svg class="h-6 w-5 flex-none text-oceanmist" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
            </svg>
            Up to 1,000 subscribers
          </li>
          <li class="flex gap-x-3">
            <svg class="h-6 w-5 flex-none text-oceanmist" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
            </svg>
            Basic analytics
          </li>
        </ul>
      </div>
    @endforeach






    
      
  </div>
</div>



    <livewire:footer />
</div>