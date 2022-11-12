<x-app-layout>
    <x-create-card>
        <x-slot name="title">
           Vehicle Registration
        </x-slot>

            <div class="flex items-center justify-center">
                <p class="text-sm font-semibold text-gray-700 mr-3">Plate Number :</p>
                <h1 class="uppercase font-bold">{{$authorizedvehicle->plate_number}}</h1>
            </div>
            <div class="flex items-center justify-center">
                <p class="text-sm font-semibold text-gray-700 mr-3">Vehicle type :</p>
                <p class="text-gray-500">{{$authorizedvehicle->vehicle_type}}</p>
            </div>
            <div class="flex items-center justify-center">
                <p class="text-sm font-semibold text-gray-700 mr-3">Vehicle Owner :</p>
                <p class="text-gray-700">{{$authorizedvehicle->vehicle_owner}}</p>
            </div>
            <div class="flex items-center justify-center">
                <p class="text-sm font-semibold text-gray-700 mr-3">Vehicle Model :</p>
                <p class="text-gray-700">{{$authorizedvehicle->vehicle_model}}</p>
            </div>
            <div class="flex items-center justify-center mt-4">
                <x-primary-button onclick="history.back()">
                    CLOSE
                </x-primary-button>
            </div>

        </form>
    </x-create-card>
</x-app-layout>
