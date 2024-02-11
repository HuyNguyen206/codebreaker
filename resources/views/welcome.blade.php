<x-layout>
    <section class="px-6 mx-auto h-full container flex flex-col" style="max-width: 1000px">
            <header class="print:justify-start flex justify-center ">
                <h1>
                    <img src="{{asset('img/logo.svg')}}" alt="code breaker" aria-label="Code Breaker" class="w-52 print:w-36">
                </h1>
            </header>
            <livewire:create-code/>
    </section>
</x-layout>
