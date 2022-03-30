@extends('layouts.app')

@section('content')
    <div class="mt-[5.25rem] container mx-auto flex items-center justify-between px-6 py-6">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="space-y-6">
                <div class="relative">
                    <h1
                        class="text-6xl md:text-7xl lg:text-8xl font-bold font-serif text-neutral-100 absolute top-[-30%] md:top-[-40%] -left-5 left- z-30 select-none whitespace-nowrap"
                    >
                        Kieron Sutton
                    </h1>

                    <div class="relative z-40">
                        <h2
                            class="text-4xl md:text-5xl lg:text-6xl font-bold tracking-light whitespace-nowrap"
                        >
                            I love
                        </h2>

                        <h2
                            class="text-4xl pl-6 md:pl-0 md:text-5xl lg:text-6xl font-bold tracking-light md:text-right whitespace-nowrap ml4"
                            id="tagline"
                        >
                            Researching
                        </h2>

                        <h2
                            class="text-4xl md:text-5xl lg:text-6xl font-bold tracking-light whitespace-nowrap"
                        >
                            Quality Products
                        </h2>
                    </div>
                </div>

                <p class="text-neutral-500">
                    I'm a freelance web &amp; software developer based in Cambridge, United Kingdom. I have a serious
                    passion for all things tech, with over 6 years of experience.
                </p>
            </div>

            <div class="flex items-center justify-center">
                <img
                    src="https://bugrio-themeforest.firebaseapp.com/images/banner/banner1.png"
                    alt=""
                    class="h-auto w-1/2 md:w-full mt-8 md:-mt-12"
                />
            </div>
        </div>
    </div>
@endsection
