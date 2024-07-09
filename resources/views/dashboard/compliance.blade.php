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
            <div class="bg-white flex p-8 text-black flex-col">
                <div class="pb-6">
                    <p class="font-medium text-base">Business Profile</p>
                </div>

                <div>
                    <x-input-label class="pb-2">
                        Business Name
                    </x-input-label>

                    <x-input class="w-full"/>
                </div>

            </div>
        </div>
    </div>
</x-dashboard-layout>