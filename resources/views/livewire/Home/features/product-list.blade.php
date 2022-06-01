<div>

    <div class="p-4 pb-16">

        <div class="flex-row justify-between pb-8 item-between ">

            <div >
                <div>
                    <h3 class="text-3xl font-semibold text-gray-600"> Vehicle Listing  </h3>
                </div>
            </div>



            <div class="flex-1 space-y-2 ">

                <div class="flex justify-between items-center right-0 space-x-4 ">

                    <div class="justify-between items-center font-semibold text-right text-cool-gray-500 p-3 ">

                        <button wire:click="$toggle('isSearch')" class="cursor-pointer hover:underline"> {{
                            $isSearch ? 'Hide' : '' }} Advance Search.. </button>

                    </div>

                    <div class="flex justify-end items-end relative right-0 w-1/2 p-3">

                        <x-input.label label="Sort Page" class="" for="filter.sortpage">
                            <select wire:model="filter.perPage" class="form-select w-full">
                                <option value="" disabled selected> Select View </option>
                                @foreach (App\Models\Vehicle::STATUS as $value => $label)
                                <option value="{{ $value }}">{{ $label }}</option>
                                @endforeach
                            </select>
                        </x-input.label>

                    </div>
                </div>

                <div>
                    @if($isSearch)
                    <div class="relative w-full flex p-4 rounded shadow-inner bg-stone-400">
                        <div class="w-1/2 pr-2 space-y-4">
                            <x-input.label label="Minimum Price Range (W)" for="filter.weekly-min-price">
                                <x-input.text type="number" wire:model.debounce="filter.weekly-min-price"
                                    placeholder="Min Weekly Fee $" />
                            </x-input.label>
                            <x-input.label label="Maximum Price Range (W)" for="filter.weekly-max-price">
                                <x-input.text type="number" wire:model.debounce="filter.weekly-max-price"
                                    placeholder="Min Weekly Fee $" />
                            </x-input.label>
                        </div>
                        <div class="w-1/2 pr-2 space-y-4">
                            <x-input.label label="Maximum Price Range (D)" for="filter.daily-max-price">
                                <x-input.text type="number" wire:model.debounce="filter.daily-max-price"
                                    placeholder="Max Weekly Fee $" />
                            </x-input.label>
                            <x-input.label label="Minimun Price Range (D)" for="filter.daily-min-price">
                                <x-input.text type="number" wire:model.debounce="filter.daily-min-price"
                                    placeholder="Min Weekly Fee $" />
                            </x-input.label>
                            <div class="py-5">
                                <button wire:click="resetFilters" class="absolute right-0 bottom-0 p-4">Reset Filters
                                </button>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>

            </div>

        </div>

        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">

            @forelse($Products as $Product)

            <div class="w-full max-w-sm mx-auto overflow-hidden rounded-md shadow-md">

                <div class="relative top-0 left-0 flex justify-start text-left ">

                    <div class="bg-{{ $Product->status_color }}-500 px-10 py-3 text-left font-semibold text-white italic "
                        style="clip-path: polygon(100% 0%, 66% 50%, 100% 100%, 0 100%, 0% 50%, 0 0);">

                        <span class="flex items-start justify-start text-left -ml-1/3"> {{ $Product->status_name }}
                        </span>

                    </div>

                </div>

                <div class="flex items-end justify-end w-full h-56 bg-cover"
                    style="background-image: url('https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/2019-honda-civic-sedan-1558453497.jpg?crop=1xw:0.9997727789138833xh;center,top&resize=980:*')">
                </div>
                <div class="py-3 bg-purple-700">

                    <h3 class="pb-3 pl-4 italic font-semibold text-white"> {{ $Product->name }} </h3>

                    <div class="flex justify-between px-3 space-x-2">

                        <button wire:click.prevent="startBooking({{ $Product->id }})"
                            class="items-center justify-center px-4 py-2 bg-white rounded">

                            <span class="font-medium text-purple-700"> Book Now </span>

                        </button>

                        <div class="flex justify-end">

                            <div class="flex text-white font-medium text-sm Pspace-x-1">

                                <span class=""> Weekly: {{ $Product->week_fee_for_human }} </span>

                                <span class=""> / </span>

                                <span class=""> Daily: {{ $Product->daily_fee_for_human }} </span>

                            </div>

                        </div>

                    </div>
                </div>
            </div>

            @empty

            @endforelse

        </div>

        <div class="p-6">

            {{ $Products->links() }}

        </div>

    </div>

</div>