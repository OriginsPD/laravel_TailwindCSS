<div>


  <form>

    <div class="p-5 space-y-3 bg-cool-gray-100">

      <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-3 md:gap-6">
          <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
              <h3 class="text-2xl font-extrabold italic leading-6 text-cool-gray-400"> Rental Form @json($book['pickup_location']) </h3>
              <p class="mt-1 text-sm text-cool-gray-600">
                This information will be will let Us know when Pick up and Drop off will be and time.</p>
            </div>
          </div>
          <div class="mt-5 md:mt-0 md:col-span-2">

            <div class="shadow overflow-hidden sm:rounded-md">
              <div class="px-4 py-5 bg-white sm:p-6">
                <div class="grid grid-cols-6 gap-6">

                  <div class="col-span-6 sm:col-span-3">

                    <label for="pick-location" class="block text-sm font-medium text-gray-700">Pick Up Location</label>

                    {{-- <select type="text" wire:model.lazy="book.pickup_location"
                      class="mt-1 focus:ring-indigo-500 form-select focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                      <option value="" disabled selected> Select Parish </option>

                      @foreach ( $parishes as $value => $label )

                      <option value="{{ $value }}" wire:key="pickup-{{ $label }}"> {{ $label }} </option>

                      @endforeach

                    </select> --}}

                    <x-input.select wire:model.lazy="book.pickup_location" :error="$errors->first('book.pick_location')" >

                      @foreach ( $parishes as $value => $label )
                      
                      <option value="{{ $value }}" wire:key="pickup-{{ $label }}"> {{ $label }} </option>
                      
                      @endforeach

                      <option value="foo">foo</option>

                    </x-input.select>



                  </div>

                  <div class="col-span-6 sm:col-span-3">

                    <label for="drop-location" class="block text-sm font-medium text-gray-700">Drop Off Location</label>
                    {{-- <select type="text" wire:model.lazy=""
                      class="mt-1 focus:ring-indigo-500 form-select focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                      <option value="" disabled selected> Select Parish </option>

                      @foreach ( $parishes as $value => $label )

                      <option value="{{ $value }}" wire:key="pickup-{{ $label }}"> {{ $label }} </option>

                      @endforeach

                    </select> --}}

                    <x-input.select wire:model.lazy="book.dropoff_location" :error="$errors->first('book.dropoff_location')">
                    
                      @foreach ( $parishes as $value => $label )
                    
                      <option value="{{ $value }}" wire:key="pickup-{{ $label }}"> {{ $label }} </option>
                    
                      @endforeach
                    
                      <option value="foo">foo</option>
                    
                    </x-input.select>

                  </div>

                  <div class="col-span-6 sm:col-span-3">

                    <label for="pick-up" class="block text-sm font-medium text-gray-700">Pick Up Date</label>
                    <input type="date" wire:model.lazy=""
                      class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                  </div>

                  <div class="col-span-6 sm:col-span-3">

                    <label for="drop-off" class="block text-sm font-medium text-gray-700">Drop Off Date</label>
                    <input type="date" wire:model.lazy=""
                      class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                  </div>

                  <div class="col-span-6">

                    <div class="relative rounded-lg block md:flex items-center bg-gray-100 " style="min-height: 19rem;">
                      <div
                        class="relative w-full md:w-2/5 h-full overflow-hidden rounded-t-lg md:rounded-t-none md:rounded-l-lg"
                        style="min-height: 19rem;">
                        <img class="absolute inset-0 w-full h-full object-cover object-center"
                          src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/2019-honda-civic-sedan-1558453497.jpg?crop=1xw:0.9997727789138833xh;center,top&resize=980:*"
                          alt="">
                        <div class="absolute inset-0 w-full h-full bg-purple-700 opacity-75"></div>

                        <div
                          class="absolute container inset-0 w-full h-full flex items-center justify-center fill-current text-white font-semibold text-3xl">
                          {{ $product->name }}
                        </div>

                      </div>
                      <div class="w-full md:w-3/5 h-full flex items-center bg-gray-100 rounded-lg">
                        <div class="p-12 md:pr-24 md:pl-16 md:py-12">
                          <p class="text-gray-600">

                            {{ $product->feature }}

                            .</p>
                          <a class="flex bottom-0 justify-end items-baseline mt-3  text-indigo-600 hover:text-indigo-900 focus:text-indigo-900"
                            href="">
                            <span> View Details </span>
                            <span class="text-xs ml-1">&#x279c;</span>
                          </a>
                        </div>
                        <svg class="hidden md:block absolute inset-y-0 h-full w-24 fill-current text-gray-100 -ml-12"
                          viewBox="0 0 100 100" preserveAspectRatio="none">
                          <polygon points="50,0 100,0 50,100 0,100" />
                        </svg>
                      </div>


                    </div>

                  </div>

                </div>
              </div>

            </div>

          </div>
        </div>
      </div>


      {{-- Addon Listing Begins --}}

      <div class="space-y-4">

        <div class="py-4 text-center font-semibold text-4xl text-cool-gray-400"> Reservation Add-On

          @json($addonList)

        </div>

        <div>
          <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($Addons as $Addon )
            <li class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
              <div class="w-full flex items-center justify-between p-6 space-x-6">
                <div class="flex-1 text-ellipsis truncate ">
                  <div class="flex items-center space-x-3">
                    <h3 class="text-gray-900 text-sm font-medium truncate">{{ $Addon->name }}</h3>
                    <span
                      class="flex-shrink-0 inline-block px-2 py-0.5 text-green-800 text-xs font-medium bg-green-100 rounded-full">
                      Price: $ {{ $Addon->price_for_human }} / Per Day </span>
                  </div>
                  {{-- <p class="mt-1 text-gray-500 text-sm truncate overflow-hidden ">{{ $Addon->description }}</p>
                  --}}
                </div>
              </div>
              <div class="bottom-0">
                <div class="-mt-px flex divide-x divide-gray-200">
                  <div class="w-0 flex-1 flex">
                    <a href="#" wire:click.prevent='addonInfo({{ $Addon->id }})'
                      class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
                      <!-- Heroicon name: solid/mail -->
                      <x-icon.info />
                      <span class="ml-3">More Info</span>
                    </a>
                  </div>
                  <div class="-ml-px w-0 flex-1 flex ">
                    {{-- <div type="button" wire:model.prevent='addonList' value="{{ $Addon->id }}"
                      wire:key="addon-{{ $Addon->id }}"
                      class="relative w-0 bg-green-500 flex-1 inline-flex items-center justify-center cursor-pointer py-4 text-sm text-white font-medium border border-transparent rounded-br-lg hover:text-white">
                      <!-- Heroicon name: solid/phone -->
                      <x-icon.add />
                      <span class="ml-3">Add</span>
                      <div /> --}}
                      <input type="checkbox" wire:model="addonList" value="{{ $Addon->id }}"
                        class="relative appearance-none form-checkbox w-full h-full bg-green-500 checked:bg-red-500 cursor-pointer ">
                      {{-- @unless ($addonList)
                      <div
                        class="relative flex space-x-3 item-center justify-center -ml-48 mt-4 font-semibold text-white border border-red-500 w-full text-center">
                        <x-icon.add />
                        <div> Add </div>
                      </div>
                      @endunless --}}
                    </div>
                  </div>
                </div>
            </li>
            @endforeach
            <!-- More people... -->
          </ul>


        </div>

        <div>{{ $Addons->links() }}</div>

        <div class="px-4 py-3 bg-gray-50 flex justify-between text-right sm:px-6">

          <a href="{{ route('index') }}"
            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
            Cancel
          </a>

          <button
            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Save
          </button>

        </div>

      </div>




    </div>

  </form>

  <x-modal.info :itemName="$addonDetails['name']" :description="$addonDetails['description']" />

</div>