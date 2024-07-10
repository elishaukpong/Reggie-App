<x-dashboard-layout>
    <div class="py-12" x-data="{}">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-center pt-6">
            <h3 class="font-semibold text-xl">
                Welcome to Reggie
            </h3>

            <p class="text-base font-normal text-nav-gray-500 pt-1">
                Your Business is in Test Mode
            </p>
        </div>
    </div>

    <div class="py-16 flex flex-col md:flex-row text-center">

        <x-dashboard-details-box>

            @slot('icon')
                <x-svg-document />
            @endslot

            Submit compliance details to start managing your business

            @slot('footer')
                <x-button-primary link="{{ route('compliance') }}">
                    Activate Business
                </x-button-primary>
            @endslot
        </x-dashboard-details-box>

        <x-dashboard-details-box>

            @slot('icon')
                <x-svg-video/>
            @endslot

            Learn what Reggie <br> can do for you

            @slot('footer')
                <x-button-primary-outline id="start-tour">
                    Take a Tour
                </x-button-primary-outline>
            @endslot
        </x-dashboard-details-box>

        <x-dashboard-details-box>

            @slot('icon')
                <x-svg-support/>
            @endslot

            Find answers to questions you might have or get in touch

            @slot('footer')
                <x-button-primary-outline>
                    Contact Support
                </x-button-primary-outline>
            @endslot
        </x-dashboard-details-box>

    </div>

    @push('scripts')
        @vite(['resources/js/tour.js'])
    @endpush
</x-dashboard-layout>
