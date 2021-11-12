<div @click.prevent="isSlide = false"
    class="bg-gray-300 h-screen flex  justify-center inset-0">

    <x-alerts alpName="isAlert" status="0" message="Just Testing the length it may reach"/>


    <x-table>

        <x-slot name="headerBtn">

            <x-table.button.top>
                Search
            </x-table.button.top>

        </x-slot>

        <x-slot name="head">

            <x-table.head>Username</x-table.head>

            <x-table.head>Email</x-table.head>

            <x-table.head> Date Joined </x-table.head>

            <x-table.head></x-table.head>

        </x-slot>

    </x-table>

</div>
