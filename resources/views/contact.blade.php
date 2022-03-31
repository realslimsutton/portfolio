@extends('layouts.app', ['noMargin' => false])

@section('content')
    <div class="w-full relative">
        <h1
            class="text-4xl xs:text-5xl text-6xl font-bold font-serif text-neutral-100 absolute top-[-10%] -left-5 left- z-30 select-none whitespace-nowrap"
        >
            Contact me
        </h1>

        <div class="relative z-40 space-y-6">
            <h2
                class="text-2xl xs:text-3xl sm:text-4xl font-bold tracking-light whitespace-nowrap"
            >
                Don't hesitate to reach out
            </h2>

            <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h2 class="text-lg font-semibold">
                        Kieron Sutton
                    </h2>

                    <p class="font-medium">
                        Freelancer &amp; Contractor
                    </p>

                    <div class="border-t border-neutral-100 pt-5 mt-5">
                        <ul class="space-y-2">
                            <li>
                                <p class="flex items-center space-x-2">
                                    <svg
                                        class="h-6 w-6"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            fill="currentColor"
                                            d="M12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5M12,2A7,7 0 0,1 19,9C19,14.25 12,22 12,22C12,22 5,14.25 5,9A7,7 0 0,1 12,2M12,4A5,5 0 0,0 7,9C7,10 7,12 12,18.71C17,12 17,10 17,9A5,5 0 0,0 12,4Z"
                                        />
                                    </svg>

                                    <span>
                                        Cambridge, United Kingdom
                                    </span>
                                </p>
                            </li>

                            <li>
                                <p class="flex items-center space-x-2">
                                    <svg
                                        class="h-6 w-6"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            fill="currentColor"
                                            d="M22 6C22 4.9 21.1 4 20 4H4C2.9 4 2 4.9 2 6V18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6M20 6L12 11L4 6H20M20 18H4V8L12 13L20 8V18Z"
                                        />
                                    </svg>

                                    <span>
                                        <a href="mailto:sutton.kieron99@gmail.com">sutton.kieron99@gmail.com</a>
                                    </span>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div>
                    <x-contact-form/>
                </div>
            </div>
        </div>
    </div>
@endsection
