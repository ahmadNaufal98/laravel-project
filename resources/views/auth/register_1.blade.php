<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register')}}">
            @csrf

            <div>
                <x-jet-label for="name pet" value="{{ __('Name Pet') }}" />
                <x-jet-input id="name_pet" class="block mt-1 w-full" type="text" name="name_pet" :value="old('name_pet')" required autofocus autocomplete="name_pet" />
            </div>
            <div>
                <x-jet-label for="age" value="{{_('Age')}}"/>
                <x-jet-input id="age" class="block mt-1 w-full" type="text" name="age" :value="old('age')" required autofocus autocomplete="age"/>
            </div>
            <div class="flex items-center justify-end mt-4">
                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button><x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
