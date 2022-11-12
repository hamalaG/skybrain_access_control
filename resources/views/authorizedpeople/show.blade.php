<x-app-layout>
    <div class="w-3/4 lg:w-1/2 mx-auto rounded-md bg-white shadow-lg m-20 p-10 text-center">
            <img
            class="w-48 lg:w-1/4 bg-blue-600 mx-auto rounded-lg mb-4 border-gray-800" alt="avatar"
            src="{{$authorizedperson->image ? asset
                ('storage/' . $authorizedperson->image) : asset('/images/no-image.png')}}"
            alt=""
            />
            <h1 class="text-3xl">{{$authorizedperson->first_name}} {{$authorizedperson->last_name}}</h1>
            <p class="text-gray-500 pb-4">{{$authorizedperson->position}}</p>
            <div class="flex items-center justify-center">
                <p class="text-sm font-semibold text-gray-700 mr-3">Phone Number :</p>
                <p class="text-gray-700">{{ $authorizedperson->phone_number }}</p>
            </div>
            <div class="flex items-center justify-center">
                <p class="text-sm font-semibold text-gray-700 mr-3">Email :</p>
                <p class="text-gray-700">{{ $authorizedperson->email}}</p>
            </div>
            <div class="flex items-center justify-center mt-4">
                <x-primary-button onclick="history.back()">
                    CLOSE
                </x-primary-button>
            </div>
    </div>
</x-app-layout>
