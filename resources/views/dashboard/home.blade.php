<x-dashboard-layout>

    <div class="flex justify-between items-center">
        <div>
            <h2 class="font-semibold text-2xl">
                Welcome {{auth()->user()->name}}
            </h2>
            <p class="text-sm font-normal text-nav-gray-500">Your dashboard is ready</p>
        </div>

        <div>
            <x-button-primary class="inline-flex items-center">
                <span class="mr-1">
                    <x-svg.plus-circular/>
                </span>
                Add New Product
            </x-button-primary>
        </div>
    </div>

    <div class="my-8 flex">
        <x-home-details-box>
            Total Revenue

            @slot('figure')
                4,455
            @endslot
        </x-home-details-box>

        <x-home-details-box>
            Total Expenditure

            @slot('figure')
                500
            @endslot
        </x-home-details-box>

        <x-home-details-box>
            Net Loss

            @slot('figure')
                2,350
            @endslot
        </x-home-details-box>

        <x-home-details-box up="false">
            Outstanding Debt

            @slot('figure')
                10,455
            @endslot
        </x-home-details-box>

    </div>

    <div class="my-8 flex">
        <div class="w-2/3">
            <div class="mb-4">
                <div>
                    <h2 class="font-semibold text-2xl">
                        Credit / Debit Matrics
                    </h2>
                    <p class="text-sm font-normal text-nav-gray-500">
                        Top 10 customers that has been much active buying products
                    </p>
                </div>
            </div>

            <div class="flex">
                <div class="w-1/2 border mr-2 p-4 rounded-[10px] bg-white">
                    <p>
                        No of Debtors: 45
                    </p>

                    <p>
                        Total Due Debt
                    </p>

                    <div class="flex justify-between items-center mt-12">
                        <h2 class="text-2xl font-bold">
                            2,300
                        </h2>

                        <div class="font-medium text-xs inline-flex items-center bg-success-50 text-success-700 rounded-[10px] px-[4px]">
                        <span class="mr-1">
                            <x-svg.up-arrow/>
                        </span>

                            2.71%
                        </div>
                    </div>
                </div>
                <div class="w-1/2 border mr-2 p-4 rounded-[10px] bg-white">
                    <p>
                        No of Debtors: 45
                    </p>

                    <p>
                        Total Due Debt
                    </p>

                    <div class="flex justify-between items-center mt-12">
                        <h2 class="text-2xl font-bold">
                            2,300
                        </h2>

                        <div class="font-medium text-xs inline-flex items-center bg-success-50 text-success-700 rounded-[10px] px-[4px]">
                        <span class="mr-1">
                            <x-svg.up-arrow/>
                        </span>

                            2.71%
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-1/3">
            <div class="w-full border ml-6 p-4 rounded-[10px] bg-white">
                <p>
                    No of Debtors: 45
                </p>

                <p>
                    Total Due Debt
                </p>

                <div class="flex justify-between items-center mt-12">
                    <h2 class="text-2xl font-bold">
                        2,300
                    </h2>

                    <div class="font-medium text-xs inline-flex items-center bg-success-50 text-success-700 rounded-[10px] px-[4px]">
                        <span class="mr-1">
                            <x-svg.up-arrow/>
                        </span>

                        2.71%
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-dashboard-layout>