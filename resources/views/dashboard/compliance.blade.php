<x-dashboard-layout>
    <div class="flex">
        <div class="w-1/3 mr-4">
            <x-compliance-sidebox :active="false">
                Business Profile
            </x-compliance-sidebox>

            <x-compliance-sidebox :active="false">
                Contact
            </x-compliance-sidebox>

            <x-compliance-sidebox :active="false">
                Owner
            </x-compliance-sidebox>

            <x-compliance-sidebox :active="true">
                Account
            </x-compliance-sidebox>

        </div>

        <div class="w-2/3" x-data="{showBusiness:false, showContact:false, showOwner:false}">
            <div x-cloak x-show="showBusiness" class="bg-white flex p-8 flex-col rounded-[10px]">
                <div class="pb-6">
                    <p class="font-medium text-base text-black">Business Profile</p>
                </div>

                <div>
                    <div class="pb-4">
                        <x-input-label class="pb-2">
                            Business Name
                        </x-input-label>

                        <x-input class="w-full p-4 placeholder-gray-300" placeholder="Enter Business Name"/>
                    </div>

                    <div class="pb-4">
                        <x-input-label class="pb-2">
                            Description
                        </x-input-label>

                        <x-text-area class="w-full p-4 placeholder-gray-900" placeholder="Enter Business Name"/>
                    </div>

                    <div class="pb-4">
                        <x-input-label class="pb-2">
                            Staff Size
                        </x-input-label>


                        <x-select class="w-full p-4 placeholder-gray-300"/>
                    </div>

                    <div class="pb-4">
                        <x-input-label class="pb-2">
                            Industry
                        </x-input-label>

                        <x-select class="w-full p-4 placeholder-gray-300"/>
                    </div>

                    <div class="pb-4">
                        <x-input-label class="pb-2">
                            Category
                        </x-input-label>

                        <x-select class="w-full p-4 placeholder-gray-300"/>
                    </div>

                    <div class="pb-6">
                        <x-input-label class="pb-2">
                            Business Type
                        </x-input-label>

                        <x-select class="w-full p-4 placeholder-gray-300"/>
                    </div>

                    <div>
                        <button type="submit" class="text-white bg-primary-pink-500 rounded-md py-2 px-4 w-full">Save</button>
                    </div>
                </div>
            </div>

            <div x-cloak x-show="showContact">
                <div class="bg-white flex p-8 flex-col rounded-[10px] mb-8">
                    <div class="pb-6">
                        <p class="font-medium text-base text-black">Contact</p>
                    </div>

                    <div>
                        <div class="pb-4">
                            <x-input-label class="pb-2">
                                General Email
                            </x-input-label>

                            <x-input class="w-full p-4 placeholder-gray-300" placeholder="Enter Email Address"/>
                        </div>

                        <div class="pb-4">
                            <x-input-label class="pb-2">
                                Phone Number
                            </x-input-label>

                            <x-input class="w-full p-4 placeholder-gray-300" placeholder="Enter Phone Number"/>
                        </div>

                        <div>
                            <a class="cursor-pointer flex">
                                <x-svg.plus/>
                                <span class="text-primary-pink-500 text-sm"> Add Social Links</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-white flex p-8 flex-col rounded-[10px]">
                    <div class="pb-6">
                        <p class="font-medium text-base text-black">Office Address</p>
                    </div>

                    <div>
                        <div class="pb-4">
                            <x-input-label class="pb-2">
                                Country
                            </x-input-label>

                            <button class="flex text-gray-800 px-4 py-1 bg-nav-gray-50 rounded-full text-[14px] items-center">
                                <x-svg.nigeria/>
                                <span class="ml-2">
                                Nigeria
                            </span>
                            </button>
                        </div>

                        <div class="pb-4">
                            <x-input-label class="pb-2">
                                State
                            </x-input-label>

                            <x-select class="w-full p-4 placeholder-gray-300"/>
                        </div>

                        <div class="pb-4">
                            <x-input-label class="pb-2">
                                City
                            </x-input-label>

                            <x-select class="w-full p-4 placeholder-gray-300"/>
                        </div>

                        <div class="pb-4">
                            <x-input-label class="pb-2">
                                Street Address
                            </x-input-label>

                            <x-text-input class="w-full p-4 placeholder-gray-300" placeholder="Enter Business Name"/>
                        </div>

                        <div class="pb-6">
                            <x-input-label class="pb-2">
                                Complex or Building Number (Optional)
                            </x-input-label>

                            <x-text-input class="w-full p-4 placeholder-gray-300" placeholder="Complex or Building Number "/>
                        </div>

                        <div>
                            <button type="submit" class="text-white bg-primary-pink-500 rounded-md py-2 px-4 w-full">Save</button>
                        </div>
                    </div>
                </div>
            </div>

            <div x-cloak x-show="showOwner" class="bg-white flex p-8 flex-col rounded-[10px] mb-8">
                <div class="pb-6 flex justify-between">
                    <p class="font-medium text-base text-black">Owner's Profile</p>

                    <button class="flex text-gray-800 px-4 py-1 bg-nav-gray-50 rounded-full text-[14px] items-center">
                        <x-svg.nigeria/>
                        <span class="ml-2">
                            Nigeria
                        </span>
                    </button>

                </div>

                <div>
                    <div class="pb-4 flex flex-col md:flex-row">
                        <div class="md:w-1/2 md:mr-4">
                            <x-input-label class="pb-2">
                                First Name
                            </x-input-label>

                            <x-input class="w-full p-4 placeholder-gray-300" placeholder="Enter Email Address"/>
                        </div>

                        <div class="md:w-1/2">
                            <x-input-label class="pb-2">
                                Last Name
                            </x-input-label>

                            <x-input class="w-full p-4 placeholder-gray-300" placeholder="Enter Email Address"/>
                        </div>

                    </div>

                    <div class="pb-4">
                        <x-input-label class="pb-2">
                            Phone Number
                        </x-input-label>

                        <x-input class="w-full p-4 placeholder-gray-300" placeholder="Enter Phone Number"/>
                    </div>

                    <div class="pb-6">
                        <x-input-label class="pb-2">
                            Nationality
                        </x-input-label>

                        <x-select class="w-full p-4 placeholder-gray-300"/>
                    </div>

                    <div>
                        <button type="submit" class="text-white bg-primary-pink-500 rounded-md py-2 px-4 w-full">Save</button>
                    </div>
                </div>
            </div>

            <div class="bg-white flex p-8 flex-col rounded-[10px] mb-8">
                <div class="pb-6 flex justify-between">
                    <p class="font-medium text-base text-black">Personal Bank Account</p>

                    <button class="flex text-gray-800 px-4 py-1 bg-nav-gray-50 rounded-full text-[14px] items-center">
                        <x-svg.nigeria/>
                        <span class="ml-2">
                            NGN
                        </span>
                    </button>
                </div>

                <div>
                    <div class="pb-4">
                        <x-input-label class="pb-2">
                            Bank Name
                        </x-input-label>

                        <x-input class="w-full p-4 placeholder-gray-300" placeholder="Enter Business Name"/>
                    </div>

                    <div class="pb-4">
                        <x-input-label class="pb-2">
                            Account Number
                        </x-input-label>

                        <x-input class="w-full p-4 placeholder-gray-300" placeholder="Enter Business Name"/>
                    </div>

                    <div class="pb-6">
                        <x-input-label class="pb-2">
                            Account Name
                        </x-input-label>

                        <x-input class="w-full p-4 placeholder-gray-300" placeholder="Enter Business Name"/>

                        <x-helper-text>
                            To help us verify your account, the name on your bank account should match the name you provided as the owner of your business
                        </x-helper-text>
                    </div>

                    <div>
                        <button type="submit" class="text-white bg-primary-pink-500 rounded-md py-2 px-4 w-full">Save</button>
                    </div>
                </div>
            </div>


        </div>
    </div>
</x-dashboard-layout>