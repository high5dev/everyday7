<div class="mt-24">
    <div class="text-center mt-12">
        <h2 class="text-5xl mb-4 font-serif">Registration</h2>
        <p class="text-lg font-sans">Please complete the form below to register for {{ $name }}.</p>
    </div>    
    <form>
    <div class="mx-auto max-w-4xl mb-12 shadow-lg p-6">

        <!-- <h2 class="text-base font-semibold leading-7 text-gray-900">Personal Information</h2>
        <p class="mt-1 text-sm leading-6 text-gray-600">Use a permanent address where you can receive mail.</p> -->

        <div class="mt-10 mb-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-3">
            <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">First name</label>
            <div class="mt-2">
                <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
            </div>

            <div class="sm:col-span-3">
            <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">Last name</label>
            <div class="mt-2">
                <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
            </div>

            <div class="sm:col-span-3">
            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
            <div class="mt-2">
                <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
            </div>

            <div class="sm:col-span-3">
            <label for="phone" class="block text-sm font-medium leading-6 text-gray-900">Mobile phone</label>
            <div class="mt-2">
                <input id="phone" name="phone" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
            </div>            

    </div>

    <div class="flex items-center justify-end gap-x-6 mb-2">
        <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
        <button type="submit" class="rounded-md bg-coastalcalm px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-pebble hover:text-pine focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-pine-600">Save</button>
    </div>
    </form>
</div>