@extends('layouts.app', ['noMargin' => false])

@section('content')
    <div class="relative">
        <h1
            class="text-4xl xs:text-5xl text-6xl font-bold font-serif text-neutral-100 absolute top-[-10%] -left-5 left- z-30 select-none whitespace-nowrap"
        >
            About me
        </h1>

        <div class="relative z-40 space-y-6">
            <h2
                class="text-2xl xs:text-3xl sm:text-4xl font-bold tracking-light whitespace-nowrap"
            >
                Let me introduce myself
            </h2>

            <p class="text-neutral-500">
                Hi, my name's Kieron. I'm an experienced software developer and systems architect based in Cambridge,
                United Kingdom. When I'm not busy building the next big thing, or fixing bugs,
                I'm trying to be father to 3 <span class="italic font-semibold">very</span> hyper kittens.
            </p>

            <p class="text-neutral-500">
                I've had a passion for building <span class="text-sm italic">(and breaking)</span> tech-related things
                since a very early age. My passion grew out of the fascination of the limitless potential of what we can
                do and achieve with the help of technology.
            </p>

            <p class="text-neutral-500">
                My comprehensive experience allows me to deliver quality services, backed by strong communication skills
                and a strong client focus, regardless if I'm in an office or remote.
            </p>

            <p class="text-neutral-500">
                After spending several years in the fast-paced fintech sector, leading on the design and development of
                critical infrastructure used daily by corporate executives, I have perfected making logical
                decisions whilst not cracking under pressure.
            </p>

            <div class="flex items-center justify-center md:justify-end">
                <a
                    href="{{route('contact')}}"
                    class="flex items-center justify-center bg-white border-2 border-neutral-900 rounded-md py-2 px-4 font-medium text-neutral-900 transition-colors duration-200 hover:text-white hover:bg-black focus:text-white focus:bg-black"
                >
                    Get in touch
                </a>
            </div>
        </div>
    </div>
@endsection
