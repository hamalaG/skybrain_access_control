<!-- Navigation Links -->
<div class="w-full flex flex-col gap-5 p-4 text-white">
    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
        {{ __('Dashboard') }}
    </x-nav-link>
    {{-- <x-nav-link :href="route('authorizedpeople.create')" :active="request()->routeIs('authorizedpeople.create')">
        {{ __('Register Personnel') }}
    </x-nav-link>
    <x-nav-link :href="route('authorizedvehicles.create')" :active="request()->routeIs('authorizedvehicles.create')">
        {{ __('Register Vehicles') }}
    </x-nav-link> --}}
    <x-nav-link :href="route('authorizedpeople.index')" :active="request()->routeIs('authorizedpeople.index')">
        {{ __('Personnel') }}
    </x-nav-link>
    <x-nav-link :href="route('authorizedvehicles.index')" :active="request()->routeIs('authorizedvehicles.index')">
        {{ __('Vehicles') }}
    </x-nav-link>
    <x-nav-link :href="route('recognizedperson.index')" :active="request()->routeIs('recognizedperson.index')">
        {{ __('Today\'s People') }}
    </x-nav-link>
    <x-nav-link :href="route('recognizedvehicle.index')" :active="request()->routeIs('recognizedvehicle.index')">
        {{ __('Today\'s Vehicles') }}
    </x-nav-link>
</div>
