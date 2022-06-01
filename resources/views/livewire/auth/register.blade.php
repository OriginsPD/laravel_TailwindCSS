<x-form class="w-8/12" grid="2">

    <x-slot name="title">

        <h2 class="text-2xl italic font-extrabold
                       text-center pb-4 text-purple-700 uppercase">

            Join Us Today

        </h2>

        <hr class="pb-4"/>

    </x-slot>

    <x-input.label for="firstname" label="Enter First Name" class="text-purple-700">

        <x-input.text wire:model.lazy="user.firstname" type="text"
                      :error="$errors->first('user.firstname')"/>

    </x-input.label>

    <x-input.label for="lastname" label="Enter Last Name" class="text-purple-700">

        <x-input.text wire:model.lazy="user.lastname" type="text"
                      :error="$errors->first('user.lastname')"/>

    </x-input.label>


    <x-input.label for="email" colspan="col-span-2"  label="Email Address" class="text-purple-700">

        <x-input.text wire:model.lazy="user.email" type="email" placeholder="{ $this->user->email }"
                      :error="$errors->first('user.email')"/>

    </x-input.label>

    <x-input.label for="password" label="Enter Password" class="text-purple-700">

        <x-input.text wire:model.lazy="password" type="password"
                      :error="$errors->first('password')"/>

    </x-input.label>

    <x-input.label for="password_confirmation" label="Password Confirmation" class="text-purple-700">

        <x-input.text wire:model.lazy="password_confirmation" type="password"
                      :error="$errors->first('password_confirmation')"/>

    </x-input.label>

    <x-input.submit wire:click.prevent="userRegister" color="purple">

        Register Now

    </x-input.submit>

</x-form>




