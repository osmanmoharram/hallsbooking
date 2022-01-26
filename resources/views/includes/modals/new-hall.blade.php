<div class="fixed z-10 inset-0 overflow-y-auto"
	aria-labelledby="modal-title"
	role="dialog"
	aria-modal="true"
	x-show="isOpen">

    <div class="flex items-end justify-center min-h-screen px-4 pb-20 text-center sm:block sm:p-0">

        <div x-show="isOpen"
			x-transition:enter="ease-out duration-300"
			x-transition:enter-start="opacity-0"
			x-transition:enter-end="opacity-100"
			x-transition:leave="ease-in duration-200"
			x-transition:leave-start="opacity-100"
			x-transition:leave-end="opacity-0"
			class="fixed inset-0 bg-coolgray-900 bg-opacity-90 transition-opacity"
			aria-hidden="true">
        </div>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <div x-show="isOpen"
			x-transition:enter="ease-out duration-300"
			x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
			x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
			x-transition:leave="ease-in duration-200"
			x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
			x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
			class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-3xl sm:w-full">

            <div class="bg-white sm:p-8">
                <form method="POST" action="{{ route('halls.store', app()->getLocale()) }}"
					class="space-y-6"
					enctype="multipart/form-data">
					
					@csrf
		
					<div class="grid grid-cols-3 gap-x-6">
						<!-- Name -->
						<div class="col-span-1">
							<x-label for="name" :value="__('Name')" />
			
							<x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
						</div>
	
						<!-- Location -->
						<div class="col-span-1">
							<x-label for="location" :value="__('Location')" />
			
							<x-input id="location" class="block mt-1 w-full" type="text" name="location" :value="old('location')" required />
						</div>


						<!-- For -->
						<div x-data="{ visible: false }" class="col-span-1">
							<x-label for="for" :value="__('For')" />

							<div class="mt-1 relative">
								<button type="button"
									@click="event.preventDefault(); visible = ! visible;"
									class="relative cursor-pointer w-full bg-white border rounded-md shadow-sm pl-3 pr-10 py-2 text-left focus:outline-none border-gray-300 focus:border-coolgray-300 focus:ring-4 focus:ring-coolgray-400 focus:ring-opacity-30 transition duration-150 ease-in-out sm:text-sm" aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
									
									<span id="selectedValue" class="flex items-center">
										<div class="flex items-center">
											<span class="font-normal ml-3 block truncate text-gray-400">
												{{ __('Who is this hall for?') }}
											</span>
										</div>
									</span>

									<span class="ml-3 text-coolgray-400 absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
										<svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
											<path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
										</svg>
									</span>
								</button>

								<ul x-show="visible"
									@click.away="visible = false"
									x-transition:leave="transition ease-in duration-100"
									x-transition:leave-start="opacity-100"
									x-transition:leave-end="opacity-0"
									class="absolute z-10 mt-1 w-full bg-white shadow-lg max-h-56 rounded-md py-1 text-base ring-1 ring-black ring-opacity-5 overflow-auto focus:outline-none sm:text-sm"
									tabindex="-1"
									role="listbox"
									aria-labelledby="listbox-label"
									aria-activedescendant="listbox-option-3">

									<!-- Men -->
									<li class="option hover:bg-coolgray-100 text-gray-800 cursor-pointer select-none relative py-2 pl-3 pr-9"
										id="listbox-option-1"
										role="option" @click="visible = false">

										<div class="gender flex items-center">
											<span>
												<i class="fas fa-male"></i>
											</span>
											
											<label class="font-normal ml-5 block cursor-pointer truncate">
												{{ __('Men') }}
												<input type="radio" class="hidden" name="gender" value="men">
											</label>
										</div>

										<span class="checkmark hidden text-coolgray-400 absolute inset-y-0 right-0 items-center pr-4">
											<svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
												<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
											</svg>
										</span>
									</li>

									<li class="option hover:bg-coolgray-100 text-gray-800 cursor-pointer select-none relative py-2 pl-3 pr-9"
										id="listbox-option-2"
										role="option" @click="visible = false">

										<div class="flex items-center">
											<span>
												<i class="fas fa-female"></i>
											</span>
											
											<label class="font-normal ml-5 cursor-pointer block truncate">
												{{ __('Women') }}
												<input type="radio" class="hidden" name="gender" value="women">
											</label>
										</div>

										<span class="checkmark hidden text-gray-400 absolute inset-y-0 right-0 items-center pr-4">
											<!-- Heroicon name: solid/check -->
											<svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
												<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
											</svg>
										</span>
									</li>

									<!-- Men And Women -->
									<li class="option hover:bg-coolgray-100 text-gray-800 cursor-pointer select-none relative py-2 pl-3 pr-9"
										id="listbox-option-3"
										role="option" @click="visible = false">

										<div class="flex items-center">
											<span>
												<i class="fas fa-male"></i>
												<i class="fas fa-female"></i>
											</span>
											
											<label class="font-normal ml-3 block cursor-pointer truncate">
												{{ __('Men And Women') }}
												<input type="radio" class="hidden" name="gender" value="men and women">
											</label>
										</div>

										<span class="checkmark hidden text-gray-400 absolute inset-y-0 right-0 items-center pr-4">
											<!-- Heroicon name: solid/check -->
											<svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
												<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
											</svg>
										</span>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="grid grid-cols-3 gap-x-6">
						<!-- Width -->
						<div class="col-span-1">
							<x-label for="width" :value="__('Width')" />

							<div class="relative flex items-center focus:ring-1 focus:border ">
								<x-input id="width" class="block mt-1 w-full" type="text" name="width" :value="old('width')" required />
							
								<span class="block absolute right-px rounded-l-none rounded-md border-l border-gray-300 bg-gray-100 mt-1 py-3 px-2 font-semibold tracking-widest text-xs text-gray-400">
									{{ __('Meters') }}
								</span>
							</div>
						</div>

						<!-- Length -->
						<div class="col-span-1">
							<x-label for="length" :value="__('Length')" />
			
							<div class="relative flex items-center focus:ring-1 focus:border ">
								<x-input id="length" class="block mt-1 w-full" type="text" name="length" :value="old('length')" required />
							
								<span class="block absolute right-px rounded-l-none rounded-md border-l border-gray-300 bg-gray-100 mt-1 py-3 px-2 font-semibold tracking-widest text-xs text-gray-400">
									{{ __('Meters') }}
								</span>
							</div>
						</div>
	
						<!-- Capacity -->
						<div class="col-span-1">
							<x-label for="capacity" :value="__('Capacity')" />
			
							<x-input id="capacity"
								class="block mt-1 w-full"
								type="text"
								name="capacity"
								:value="old('capacity')"
								required />
						</div>
					</div>

					<!-- Renting Fees -->
					<div class="grid grid-cols-3 gap-x-6 items-center">
						<div class="col-span-1">
							<x-label for="fees" :value="__('Renting Fees')" />
							<div class="relative flex items-center focus:ring-1 focus:border ">
								<x-input id="fees" class="block mt-1 w-full" type="text" name="fees" :value="old('fees')" required />
							
								<span class="block absolute right-px rounded-l-none rounded-md border-l border-gray-300 bg-gray-100 mt-1 py-3 px-4 font-semibold uppercase tracking-widest text-xs text-gray-400">
									{{ __('sar') }}
								</span>
							</div>
						</div>
					</div>

					<!-- Photos -->
					<div>
						<div id="upload-container" class="h-56 border-2 border-dashed border-coolgray-300 rounded-lg bg-gray-100 flex flex-col items-center justify-center text-coolgray-400">
							<span>
								<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
								</svg>
							</span>
							<div id="upload-text" class="flex">
								<label for="photos" class="relative cursor-pointer rounded-md font-medium text-coolgray-800 focus:outline-none hover:underline">
									<span>Upload a file</span>
									<input type="file" id="photos" name="photos[]" class="sr-only" accept="images/*" multiple onchange="preview(this.files)">
								</label>
								<p class="pl-1">or drag and drop</p>
							</div>
						</div>
						<div id="preview-container" class="grid grid-cols-4 gap-6 h-56 border-2 border-dashed border-coolgray-300 rounded-lg bg-gray-100 p-8 overflow-y-auto text-coolgray-500"></div>
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
						<button type="button" 
								@click = "isOpen = false"
								class="inline-flex items-center justify-center w-32 py-3 bg-coolgray-100 rounded-md font-semibold text-xs text-coolgray-500 uppercase tracking-widest hover:bg-coolgray-200 focus:outline-none disabled:opacity-25 transition ease-in-out duration-150">Cancel</button>

						<x-button class="ml-4">
							{{ __('Add') }}
						</x-button>
					</div>
				</form>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script src="{{ asset('js/upload.js') }}"></script>
    <script src="{{ asset('js/select-menu.js') }}"></script>
@endpush