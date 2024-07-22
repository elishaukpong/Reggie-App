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
        <div class="w-3/4">
            <div class="mb-4">
                <h2 class="font-semibold text-2xl">
                    Credit / Debit Metrics
                </h2>
                <p class="text-sm font-normal text-nav-gray-500">
                    Top 10 customers that has been much active buying products
                </p>
            </div>

            <div class="flex">
                <div class="w-1/2 border mr-2 p-4 rounded-[10px] bg-white">
                    <div class="inline-flex rounded-[10px] p-[6.67px] text-primary-pink-500 border items-center">
                        <x-svg.pane-stack/>
                    </div>
                    <p class="text-xs text-nav-gray-100 mt-2">
                        No of Debtors: <span class="text-primary-pink-600">45</span>
                    </p>

                    <div class="mt-10">
                        <p class="text-base font-normal text-nav-gray-700">
                            Total Due Debit
                        </p>

                        <div class="flex justify-between items-center">
                            <h2 class="text-2xl font-bold">
                                23,300
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

                <div class="w-1/2 border mr-2 p-4 rounded-[10px] bg-white">
                    <div class="inline-flex rounded-[10px] p-[6.67px] text-primary-pink-500 border items-center">
                        <x-svg.building-block/>
                    </div>
                    <p class="text-xs text-nav-gray-100 mt-2">
                        No of Creditors: <span class="text-primary-pink-600">45</span>
                    </p>

                    <div class="mt-10">
                        <p class="text-base font-normal text-nav-gray-700">
                            Total Due Credit
                        </p>

                        <div class="flex justify-between items-center">
                            <h2 class="text-2xl font-bold">
                                52,000
                            </h2>

                            <div class="font-medium text-xs inline-flex items-center bg-error-50 text-error-700 rounded-[10px] px-[4px]">
                                <span class="mr-1">
                                    <x-svg.down-arrow/>
                                </span>

                                2.71%
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-8">
                <div class="mb-4">
                    <h2 class="font-semibold text-2xl">
                        Top Customers
                    </h2>
                    <p class="text-sm font-normal text-nav-gray-500">
                        Top 10 customers that has been much active buying products
                    </p>
                </div>

                <div class="my-4">
                    <table class="min-w-full rounded-md bg-white">
                        <thead>
                            <tr>
                                <th class="p-4 border-b-1 border-gray-300 bg-nav-gray-50 text-left text-xs font-medium leading-4 text-nav-gray-700 tracking-wider rounded-tl-md ">Name</th>
                                <th class="p-4 border-b-1 border-gray-300 bg-nav-gray-50 text-left text-xs font-medium leading-4 text-nav-gray-700 tracking-wider">Amount Spent</th>
                                <th class="p-4 border-b-1 border-gray-300 bg-nav-gray-50 text-left text-xs font-medium leading-4 text-nav-gray-700 tracking-wider">Total Transactions</th>
                                <th class="p-4 border-b-1 border-gray-300 bg-nav-gray-50 text-left text-xs font-medium leading-4 text-nav-gray-700 tracking-wider rounded-tr-md ">Debt Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="p-4 border-b border-gray-300">
                                <p class="text-sm font-medium">John Doe</p>
                                <p class="text-sm font-normal">john@doe.com</p>
                            </td>
                            <td class="p-4 border-b border-gray-300 text-sm font-normal">$100</td>
                            <td class="p-4 border-b border-gray-300 text-sm font-normal">$100</td>
                            <td class="p-4 border-b border-gray-300">
                                <div class="font-medium text-xs inline-flex items-center bg-error-50 text-error-700 rounded-[10px] px-2 py-1">
                                    Debtor
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="p-4 border-b border-gray-300">
                                <p class="text-sm font-medium">Jane Doe</p>
                                <p class="text-sm font-normal">jane@doe.com</p>
                            </td>
                            <td class="p-4 border-b border-gray-300 text-sm font-normal">$200</td>
                            <td class="p-4 border-b border-gray-300 text-sm font-normal">$200</td>
                            <td class="p-4 border-b border-gray-300">
                                <div class="font-medium text-xs inline-flex items-center bg-success-50 text-success-700 rounded-[10px] px-2 py-1">
                                    Debt free
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="p-4 border-b border-gray-300">
                                <p class="text-sm font-medium">Jane Doe</p>
                                <p class="text-sm font-normal">jane@doe.com</p>
                            </td>
                            <td class="p-4 border-b border-gray-300 text-sm font-normal">$200</td>
                            <td class="p-4 border-b border-gray-300 text-sm font-normal">$200</td>
                            <td class="p-4 border-b border-gray-300">
                                <div class="font-medium text-xs inline-flex items-center bg-success-50 text-success-700 rounded-[10px] px-2 py-1">
                                    Debt free
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="p-4 border-b border-gray-300">
                                <p class="text-sm font-medium">Jane Doe</p>
                                <p class="text-sm font-normal">jane@doe.com</p>
                            </td>
                            <td class="p-4 border-b border-gray-300 text-sm font-normal">$200</td>
                            <td class="p-4 border-b border-gray-300 text-sm font-normal">$200</td>
                            <td class="p-4 border-b border-gray-300">
                                <div class="font-medium text-xs inline-flex items-center bg-success-50 text-success-700 rounded-[10px] px-2 py-1">
                                    Debt free
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <div class="w-1/4 ml-6">
            <div class="w-full p-4 border rounded-[10px] bg-white mb-4">
                <p class="font-medium text-sm text-nav-gray-600 mb-4">
                    Total Sales
                </p>

                <div class="flex">
                    <p class="font-semibold text-2xl">
                        ₦3,020,000
                    </p>

                    <p class="text-sm font-medium text-nav-gray-500 ml-2 mt-1">
                        Worth of product
                    </p>
                </div>

                <select name="" id="" class="border border-gray-300 rounded-md text-sm my-4">
                    <option>Withdraw</option>
                    <option>Purchase</option>
                    <option>Refund</option>
                </select>

                <div class="flex justify-center mb-8">
                    <svg width="150" height="150" viewBox="0 0 196 196" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="98" cy="98" r="98" fill="#FCD2C2"/>
                        <path d="M98 0C118.696 2.46792e-07 138.86 6.55179 155.603 18.7163C172.346 30.8809 184.808 48.0337 191.204 67.7163L98 98L98 0Z" fill="#CC400C"/>
                        <path d="M191.204 67.7163C196.789 84.9052 197.511 103.304 193.292 120.878C189.073 138.452 180.076 154.517 167.296 167.296C154.517 180.076 138.452 189.073 120.878 193.292C103.304 197.511 84.9052 196.789 67.7164 191.204L98 98L191.204 67.7163Z" fill="#FF3360"/>
                        <path d="M67.7163 191.204C48.0337 184.808 30.8809 172.346 18.7163 155.603L98 98L67.7163 191.204Z" fill="#FF7896"/>
                        <path d="M18.7163 155.603C4.0652 135.437 -2.3513 110.447 0.772761 85.7173L98 98L18.7163 155.603Z" fill="#F77A4A"/>
                    </svg>
                </div>

                <div class="flex justify-between text-sm my-4">
                    <p class="text-nav-gray-500 font-normal">Rice</p>
                    <p class="font-bold">₦121,799</p>
                </div>
                <div class="flex justify-between text-sm my-4">
                    <p class="text-nav-gray-500 font-normal">Beans</p>
                    <p class="font-bold">₦121,799</p>
                </div>
                <div class="flex justify-between text-sm my-4">
                    <p class="text-nav-gray-500 font-normal">Garri</p>
                    <p class="font-bold">₦121,799</p>
                </div>
                <div class="flex justify-between text-sm my-4">
                    <p class="text-nav-gray-500 font-normal">Cake</p>
                    <p class="font-bold">₦121,799</p>
                </div>
                <div class="flex justify-between text-sm my-4">
                    <p class="text-nav-gray-500 font-normal">Handbag</p>
                    <p class="font-bold">₦121,799</p>
                </div>
            </div>

            <div class="w-full p-4 border rounded-[10px] bg-white">
                <p class="font-medium text-sm text-nav-gray-600 mb-4">
                    Top Expenses
                </p>

                <div class="flex justify-between">
                    <p class="font-semibold text-2xl">
                        ₦3,020,000
                    </p>

                    <select name="" id="" class="border border-gray-300 rounded-md text-sm">
                        <option>This Week</option>
                    </select>
                </div>

                <div class="flex justify-between text-sm my-4">
                    <p class="text-nav-gray-500 font-normal">Fuel</p>
                    <p class="font-bold">₦121,799</p>
                </div>
                <div class="flex justify-between text-sm my-4">
                    <p class="text-nav-gray-500 font-normal">Bottle Water</p>
                    <p class="font-bold">₦121,799</p>
                </div>
                <div class="flex justify-between text-sm my-4">
                    <p class="text-nav-gray-500 font-normal">Water Melon</p>
                    <p class="font-bold">₦121,799</p>
                </div>
                <div class="flex justify-between text-sm my-4">
                    <p class="text-nav-gray-500 font-normal">Bin Bag</p>
                    <p class="font-bold">₦121,799</p>
                </div>
            </div>
        </div>
    </div>

    <div class="my-8">
        <div class="mt-8">
            <div class="mb-4 flex justify-between items-center">
                <div>
                    <h2 class="font-semibold text-2xl">
                        Transaction History
                    </h2>
                    <p class="text-sm font-normal text-nav-gray-500">
                        Top 10 customers that has been much active buying products
                    </p>
                </div>

                <div>
                    <select name="" id="" class="border border-gray-300 rounded-md text-sm">
                        <option>Withdraw</option>
                        <option>Purchase</option>
                        <option>Refund</option>
                    </select>
                </div>

            </div>

            <div class="my-4">
                <table class="min-w-full rounded-md bg-white">
                    <thead>
                    <tr>
                        <th class="p-4 border-b-1 border-gray-300 bg-nav-gray-50 text-left text-xs font-medium leading-4 text-nav-gray-700 tracking-wider rounded-tl-md ">Item</th>
                        <th class="p-4 border-b-1 border-gray-300 bg-nav-gray-50 text-left text-xs font-medium leading-4 text-nav-gray-700 tracking-wider">Amount</th>
                        <th class="p-4 border-b-1 border-gray-300 bg-nav-gray-50 text-left text-xs font-medium leading-4 text-nav-gray-700 tracking-wider">Payment Method</th>
                        <th class="p-4 border-b-1 border-gray-300 bg-nav-gray-50 text-left text-xs font-medium leading-4 text-nav-gray-700 tracking-wider rounded-tr-md ">Date Created</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="p-4 border-b border-gray-300" >
                            <p class="text-sm font-medium">John Doe</p>
                        </td>
                        <td class="p-4 border-b border-gray-300 text-sm font-normal">$100</td>
                        <td class="p-4 border-b border-gray-300 text-sm font-normal">POS</td>
                        <td class="p-4 border-b border-gray-300 text-sm font-normal">
                            Apr 12, 2023 | 09:32AM
                        </td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="p-4 border-b border-gray-300" >
                            <p class="text-sm font-medium">Jane Doe</p>
                        </td>
                        <td class="p-4 border-b border-gray-300 text-sm font-normal">$200</td>
                        <td class="p-4 border-b border-gray-300 text-sm font-normal">ATM</td>
                        <td class="p-4 border-b border-gray-300 text-sm font-normal">
                            Apr 12, 2023 | 09:32AM
                        </td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="p-4 border-b border-gray-300" >
                            <p class="text-sm font-medium">Jane Doe</p>
                        </td>
                        <td class="p-4 border-b border-gray-300 text-sm font-normal">$200</td>
                        <td class="p-4 border-b border-gray-300 text-sm font-normal">CASH</td>
                        <td class="p-4 border-b border-gray-300 text-sm font-normal">
                            Apr 12, 2023 | 09:32AM
                        </td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="p-4 border-b border-gray-300" >
                            <p class="text-sm font-medium">Jane Doe</p>
                        </td>
                        <td class="p-4 border-b border-gray-300 text-sm font-normal">$200</td>
                        <td class="p-4 border-b border-gray-300 text-sm font-normal">TRANSFER</td>
                        <td class="p-4 border-b border-gray-300 text-sm font-normal">
                            Apr 12, 2023 | 09:32AM
                        </td>
                    </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-dashboard-layout>