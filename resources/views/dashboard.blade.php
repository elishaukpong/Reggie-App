<x-dashboard-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-center pt-6">
            <h3 class="font-bold text-xl">
                Welcome to Reggie
            </h3>

            <p class="text-base font-normal text-nav-gray-500 pt-1">
                Your Business is in Test Mode
            </p>
        </div>
    </div>

    <div class="py-16 flex flex-col md:flex-row text-center">
        <div class="bg-white md:w-1/3 m-4 px-20 py-[50px] rounded-[10px]">
            <div class="flex justify-center">
                <span class="p-4 rounded-full bg-primary-pink-50">
                    <x-svg-document/>
                </span>
            </div>

            <div class="py-8">
                <p class="font-medium text-black text-sm">
                    Submit compliance details to start managing your business
                </p>
            </div>

            <div>
                <x-button-primary>
                    Activate Business
                </x-button-primary>
            </div>
        </div>

        <div class="bg-white md:w-1/3 m-4 px-20 py-[50px] rounded-[10px]">

            <div class="flex justify-center">
                <span class="p-4 rounded-full bg-primary-pink-50">
                    <x-svg-video/>
                </span>
            </div>

            <div class="py-8">
                <p class="font-medium text-black text-sm">
                    Learn what Reggie <br> can do for you
                </p>
            </div>

            <div>
                <x-button-primary-outline>
                    Take a Tour
                </x-button-primary-outline>
            </div>
        </div>

        <div class="bg-white md:w-1/3 m-4 px-20 py-[50px] rounded-[10px]">
            <div class="flex justify-center">
                <span class="p-4 rounded-full bg-primary-pink-50">
                    <x-svg-video/>
                </span>
            </div>

            <div class="py-8">
                <p class="font-medium text-black text-sm">
                    Find answers to questions you might have or get in touch
                </p>
            </div>

            <div>
                <x-button-primary-outline>
                    Contact Support
                </x-button-primary-outline>
            </div>
        </div>

    </div>
</x-dashboard-layout>
