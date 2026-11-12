<x-layout>
    <x-slot:title>
        Welcome
    </x-slot:title>
    <div class="max-w-2xl mx-auto">

        @foreach ($chirps as $chirp)

            <div class="card bg-base-100 shadow mt-8">
                <div class="card-body">
                    <div>
                        <h1 class="text-3xl font-bold">{{$chirp['author']}}</h1>
                        <p class="mt-4 text-base-content/60">{{$chirp['message']}}</p>
                        <p class="text-sm text-base-content/40">{{$chirp['time']}}</p>
                    </div>
                </div>
            </div>

        @endforeach

    </div>
</x-layout>
