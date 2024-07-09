<x-dashboard-layout>
    <div class="flex">
        <div class="w-1/3 mr-4">
            <x-compliance-sidebox :active="true">
                Business Profile
            </x-compliance-sidebox>

            <x-compliance-sidebox>
                Contact
            </x-compliance-sidebox>

            <x-compliance-sidebox>
                Owner
            </x-compliance-sidebox>

            <x-compliance-sidebox>
                Account
            </x-compliance-sidebox>

        </div>

        <div class="w-2/3">
            <div class="bg-white flex p-8 flex-col">
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

                    <div class="pb-4">
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
        </div>
    </div>
</x-dashboard-layout>