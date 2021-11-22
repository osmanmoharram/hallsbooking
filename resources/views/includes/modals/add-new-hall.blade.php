<div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true"
    x-show="isOpen">

    <div class="flex items-end justify-center min-h-screen px-4 pb-20 text-center sm:block sm:p-0">

        <div x-show="isOpen" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
            class="fixed inset-0 bg-coolgray-900 bg-opacity-90 transition-opacity" aria-hidden="true">
        </div>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <div x-show="isOpen" x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-3xl sm:w-full">

            <div class="bg-white px-4 pt-5 pb-4 sm:p-14 sm:pt-12">
                <form method="POST" action="{{ route('register') }}" class="space-y-6" @click.away="isOpen = false">
					@csrf
		
					<div class="grid grid-cols-2 gap-x-6">
						<!-- Name -->
						<div class="col-span-1">
							<x-label for="name" :value="__('Name')" />
			
							<x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus/>
						</div>
	
						<!-- Location -->
						<div class="col-span-1">
							<x-label for="location" :value="__('Location')" />
			
							<x-input id="location" class="block mt-1 w-full" type="text" name="location" :value="old('location')" required />
						</div>
					</div>

					<div class="grid grid-cols-3 gap-x-6">
						<!-- Space -->
						<div class="col-span-1">
							<x-label for="space" :value="__('Space')" />
			
							<x-input id="space" class="block mt-1 w-full" type="text" name="space" :value="old('space')" required />
						</div>
	
						<!-- Capacity -->
						<div class="col-span-1">
							<x-label for="capacity" :value="__('Capacity')" />
			
							<x-input id="capacity" class="block mt-1 w-full" type="text" name="capacity" :value="old('capacity')" required />
						</div>

						<!-- For -->
						<div class="col-span-1">
							<x-label for="location" :value="__('Location')" />
			
							<x-input id="location" class="block mt-1 w-full" type="text" name="location" :value="old('location')" required />
						</div>
					</div>

					<!-- Price -->
					<div class="grid grid-cols-3 gap-x-6 items-center">
						<div class="col-span-1">
							<x-label for="price" :value="__('Price')" />
							<div class="relative flex items-center focus:ring-1 focus:border ">
								<x-input id="price" class="block mt-1 w-full" type="text" name="price" :value="old('price')" required />
							
								<span class="absolute right-px block mt-1 rounded-l-none rounded-md border-l border-gray-300 bg-gray-200 py-2 px-4 uppercase tracking-wider text-gray-400">
									{{ __('sar') }}
								</span>
							</div>
						</div>
					</div>

					<!-- Description -->
					<div class="py-32 border rounded-lg bg-gray-100 flex items-center justify-center">
						<Span class="text-gray-500">This area is reserved for photos</Span>
					</div>

					<!-- Description -->
					<div>
						<x-label for="description" :value="__('Description')" />
		
						<x-textarea id="description"
									class="block mt-1 w-full"
									type="text" name="description"
									:value="old('description')"
									required />
					</div>
		
					<div class="flex items-center justify-end mt-4">
						<x-button class="ml-4">
							{{ __('Add') }}
						</x-button>
					</div>
				</form>
            </div>
        </div>
    </div>
</div>
