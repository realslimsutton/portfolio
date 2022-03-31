<div>
    @if(session()->has('success-status'))
        <div class="flex p-4 mb-4 text-sm text-green-700 bg-green-100 border border-green-300 shadow rounded-md">
            <svg
                class="inline flex-shrink-0 mr-3 w-5 h-5"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                aria-hidden="true"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                ></path>
            </svg>

            <div>
                <span class="font-medium">Success!</span> {{session('success-status')}}
            </div>
        </div>
    @endif

    @if(session()->has('error-status'))
        <div class="flex p-4 mb-4 text-sm text-rose-700 bg-rose-100 border border-rose-300 shadow rounded-md">
            <svg
                class="inline flex-shrink-0 mr-3 w-5 h-5"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                aria-hidden="true"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                ></path>
            </svg>

            <div>
                <span class="font-medium">Failed!</span> {{session('error-status')}}
            </div>
        </div>
    @endif

    <form
        action="{{route('contact')}}"
        method="POST"
    >
        @csrf
        @honeypot

        <div class="space-y-5">
            <x-form.input
                name="name"
                placeholder="Name*"
            />

            <x-form.input
                name="email"
                type="email"
                placeholder="Email address*"
            />

            <x-form.input
                name="subject"
                placeholder="Subject*"
                autocomplete="off"
            />

            <x-form.textarea
                name="message"
                placeholder="Message*"
            />

            <div class="flex items-center justify-end">
                <button
                    type="submit"
                    class="flex items-center justify-center bg-white border-2 border-neutral-900 rounded-md py-2 px-4 font-medium text-neutral-900 transition-colors duration-200 hover:text-white hover:bg-black focus:text-white focus:bg-black"
                >
                    Send
                </button>
            </div>
        </div>
    </form>
</div>
