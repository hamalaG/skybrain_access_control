<x-app-layout>
    <x-create-card>
        <x-slot name="title">
           edit: {{$authorizedperson->first_name}} {{$authorizedperson->last_name}}
        </x-slot>

        <form method="POST" action="{{ route('authorizedpeople.update',$authorizedperson->id) }}" enctype="multipart/form-data">
            @csrf
            @method('patch')
                 <!--First Name -->
                <div>
                    <x-input-label for="first_name" :value="__('First Name')" />

                    <input id="first_name" class="block mt-1 w-full" type="text" name="first_name" required autofocus value="{{$authorizedperson->first_name}}"/>

                    <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                </div>

                <!-- Last Name -->
                <div class="mt-4">
                    <x-input-label for="last_name" :value="__('Last Name')" />

                    <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" required autofocus value="{{$authorizedperson->last_name}}"/>
                    <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                </div>

                <!-- Position -->
               <div class="mt-4">
                   <x-input-label for="position" :value="__('Position')" />

                   <x-text-input id="position" class="block mt-1 w-full" type="text" name="position" required autofocus value="{{$authorizedperson->position}}"/>

                   <x-input-error :messages="$errors->get('position')" class="mt-2" />
               </div>

               <!-- Phone Number -->
               <div class="mt-4">
                   <x-input-label for="phone_number" :value="__('Phone Number')" />

                   <x-text-input id="phone_number" class="block mt-1 w-full" type="text" name="phone_number" autofocus value="{{ $authorizedperson->phone_number }}"/>

                   <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
               </div>


                <!-- Email -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />

                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ $authorizedperson->email }}" required autofocus />

                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Image -->
                <div class="mt-4">
                    <x-input-label for="image" :value="__('Image')"> Select Image </x-input-label>

                    <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" required />

                    <img
                        class="w-48 mr-6 mb-6"
                        src="{{$authorizedperson->image ? asset
                            ('storage/' . $authorizedperson->image) : asset('/images/no-image.png')}}"
                        alt=""
                    />

                    <x-input-error :messages="$errors->get('image')" class="mt-2" />
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
