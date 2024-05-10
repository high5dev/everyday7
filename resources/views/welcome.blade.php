<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Everyday 7</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                        <div class="flex lg:justify-center lg:col-start-2">
                            <img src="{{ url('img/logo.png') }}" />
                        </div>
                    </header>

                    <main class="mt-6">
                        <div class="grid">                        
                            <div class="flex align-center items-center rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800">
                                <div class="pt-3 align-center mx-auto mw-50 sm:pt-5">
                                    <a href="{{ url('admin') }}" class="inline-flex items-center rounded-md bg-green-700 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-500">Staff Login</a>
                                </div>                                
                                <div class="pt-3 align-center mx-auto mw-50 sm:pt-5">
                                    <a href="{{ url('members') }}" class="inline-flex items-center rounded-md bg-indigo-900 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-500">Member Login</a>
                                </div>
                            </div>
                        </div>
                    </main>

                    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                        Everyday7 v2.0
                    </footer>
                </div>
            </div>
        </div>
    </body>
</html>
