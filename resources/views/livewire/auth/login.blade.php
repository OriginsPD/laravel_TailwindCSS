<x-form class="w-8/12" grid="1">

    <x-slot name="title">

        <h2 class="text-2xl italic font-extrabold
                       text-center pb-4 text-purple-700 uppercase">

            Welcome Back

        </h2>

        <hr class="pb-4"/>

    </x-slot>

    <x-input.label for="email" label="Email Address" class="text-purple-700">

        <x-input.text wire:model.lazy="user.email" type="email"
                      :error="$errors->first('user.email')"/>

    </x-input.label>

    <x-input.label for="password" label="Enter Password">

        <x-input.text wire:model.lazy="password" type="password"
                      :error="$errors->first('password')"/>

    </x-input.label>

    <x-input.submit wire:click.prevent="authUser" color="purple">

        Login

    </x-input.submit>

</x-form>


