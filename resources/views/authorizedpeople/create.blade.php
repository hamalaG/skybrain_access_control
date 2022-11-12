<x-app-layout>
    <x-create-card>
        <x-slot name="title">
           Personnel Registration
        </x-slot>

        <form method="POST" action="{{ route('authorizedpeople.store') }}" enctype="multipart/form-data">
            @csrf

                 <!--First Name -->
                <div>
                    <x-input-label for="first_name" :value="__('First Name')" />

                    <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus />

                    <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                </div>

                <!-- Last Name -->
                <div class="mt-4">
                    <x-input-label for="last_name" :value="__('Last Name')" />

                    <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required />

                    <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                </div>

                <!-- Position -->
               <div class="mt-4">
                   <x-input-label for="position" :value="__('Position')" />

                   <x-text-input id="position" class="block mt-1 w-full" type="text" name="position" :value="old('position')" required autofocus />

                   <x-input-error :messages="$errors->get('position')" class="mt-2" />
               </div>

               <!-- Phone Number -->
               <div class="mt-4">
                   <x-input-label for="phone_number" :value="__('Phone Number')" />

                   <x-text-input id="phone_number" class="block mt-1 w-full" type="text" name="phone_number" :value="old('phone_number')" required />

                   <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
               </div>


                <!-- Email -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />

                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />

                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <!-- Image -->
                <div class="mt-4">
                    <x-input-label for="image" :value="__('Image')"> Select Image </x-input-label>

                    <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" :value="old('image')" required />

                    <x-input-error :messages="$errors->get('image')" class="mt-2" />
                </div>

            <div class="flex items-center justify-center mt-4">
                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </x-create-card>
</x-app-layout>
