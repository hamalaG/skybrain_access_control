<x-app-layout>
    <x-create-card>
        <x-slot name="title">
           Vehicle Registration
        </x-slot>

        <form method="POST" action="{{ route('authorizedvehicles.update',$authorizedvehicle->id) }}">
            @csrf
            @method('patch')
                 <!--Plate Number -->
                <div>
                    <x-input-label for="plate_number" :value="__('Plate Number')" />

                    <x-text-input id="plate_number" class="block mt-1 w-full" type="text" name="plate_number" value="{{$authorizedvehicle->plate_number}}" required autofocus />

                    <x-input-error :messages="$errors->get('plate_number')" class="mt-2" />
                </div>

                <!-- Vehicle Type -->
                <div class="mt-4">
                    <x-input-label for="vehicle_type" :value="__('Vehicle Type')" />

                    <x-text-input id="vehicle_type" class="block mt-1 w-full" type="text" name="vehicle_type" value="{{$authorizedvehicle->vehicle_type}}" required />

                    <x-input-error :messages="$errors->get('vehicle_type')" class="mt-2" />
                </div>

                <!-- Model -->
               <div class="mt-4">
                   <x-input-label for="vehicle_model" :value="__('Vehicle Model')" />

                   <x-text-input id="vehicle_model" class="block mt-1 w-full" type="text" name="vehicle_model" value="{{$authorizedvehicle->vehicle_model}}" required autofocus />

                   <x-input-error :messages="$errors->get('vehicle_model')" class="mt-2" />
               </div>

               <!-- Vehicle Owner -->
               <div class="mt-4">
                   <x-input-label for="vehicle_owner" :value="__('Owner')" />

                   <x-text-input id="vehicle_owner" class="block mt-1 w-full" type="text" name="vehicle_owner" value="{{$authorizedvehicle->vehicle_owner}}" required />

                   <x-input-error :messages="$errors->get('vehicle_owner')" class="mt-2" />
               </div>

               <div class="flex items-center justify-between mt-4">
                <x-primary-button class="mx-4">
                    {{ __('SAVE CHANGES') }}
                </x-primary-button>
                <button onclick="history.back()" class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ">
                    CANCEL
                  </button>
            </div>
        </form>
    </x-create-card>
</x-app-layout>
