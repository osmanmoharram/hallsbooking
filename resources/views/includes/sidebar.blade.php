<div class="h-screen col-span-2 px-2 bg-coolgray-800 flex flex-col overflow-y-auto">
    <div class="flex items-center space-s-4 ps-10 h-20">
        <!-- Logo -->
        <a href="#">
			<x-application-logo />
        </a>

        <span class="text-xl font-black text-coolgray-200 text-opacity-40 tracking-wide">
            Dashboard
        </span>
    </div>

    <div class="text-coolgray-200 text-opacity-40 divide-coolgray-100">
        <ul>
            <h3 class="text-xs text-coolgray-50 text-opacity-20">{{ __('dashboard.lists.titles.general') }}</h3>

            <!-- Dashboard -->
            <li>
                <a href="#" class="flex items-center justify-between hover:bg-gray-200 hover:bg-opacity-20 ps-9 pe-9 py-3 rounded-lg focus:ouline-none hover:text-coolgray-400 transition duration-150 ease-in-out">
                    <div class="flex items-center space-s-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 13v-1m4 1v-3m4 3V8M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                        </svg>
                        <span class="block text-sm">{{ __('dashboard.lists.items.dashboard') }}</span>
                    </div>

                    <div class="{{ request()->route()->named('dashboard') ? 'block' : 'hidden'}} h-2 w-2 rounded-full bg-coolgray-400"></div>
                </a>
            </li>

            <!-- Halls -->
            <li>
                <a href="{{ route('halls.index', app()->getLocale()) }}" class="flex items-center justify-between hover:bg-gray-200 hover:bg-opacity-20 ps-9 pe-9 py-3 rounded-lg focus:ouline-none hover:text-coolgray-400 transition duration-150 ease-in-out">
                    <div class="flex items-center space-s-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        <span class="block text-sm">{{ __('dashboard.lists.items.halls') }}</span>
                    </div>

                    <div class="{{ request()->route()->named('halls.index') ? 'block' : 'hidden'}} h-2 w-2 rounded-full bg-coolgray-400"></div>
                </a>
            </li>

            <!-- Bookings -->
            <li>
                <a href="#" class="flex items-center justify-between hover:bg-gray-200 hover:bg-opacity-20 ps-9 pe-9 py-3 rounded-lg focus:ouline-none hover:text-coolgray-400 transition duration-150 ease-in-out">
                    <div class="flex items-center space-s-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
    
                        <span class="block text-sm">{{ __('dashboard.lists.items.bookings') }}</span>
                    </div>

                    <div class="{{ request()->route()->named('bookings.index') ? 'block' : 'hidden'}} h-2 w-2 rounded-full bg-coolgray-400"></div>
                </a>
            </li>

            <!-- Inspections -->
            <li>
                <a href="#" class="flex items-center justify-between hover:bg-gray-200 hover:bg-opacity-20 ps-9 pe-9 py-3 rounded-lg focus:ouline-none hover:text-coolgray-400 transition duration-150 ease-in-out">
                    <div class="flex items-center space-s-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                        <span class="block text-sm">{{ __('dashboard.lists.items.inspections') }}</span>
                    </div>

                    <div class="{{ request()->route()->named('inspections.index') ? 'block' : 'hidden'}} h-2 w-2 rounded-full bg-coolgray-400"></div>
                </a>
            </li>

            <!-- Offers -->
            <li>
                <a href="{{ route('offers.index', app()->getLocale()) }}" class="flex items-center justify-between hover:bg-gray-200 hover:bg-opacity-20 ps-9 pe-9 py-3 rounded-lg focus:ouline-none hover:text-coolgray-400 transition duration-150 ease-in-out">
                    <div class="flex items-center space-s-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                        </svg>
                        <span class="block text-sm">{{ __('dashboard.lists.items.offers') }}</span>
                    </div>

                    <div class="{{ request()->route()->named('offers.index') ? 'block' : 'hidden'}} h-2 w-2 rounded-full bg-coolgray-400"></div>
                </a>
            </li>

            <!-- Options -->
            <li>
                <a href="{{ route('options.index', app()->getLocale()) }}" class="flex items-center justify-between hover:bg-gray-200 hover:bg-opacity-20 ps-9 pe-9 py-3 rounded-lg focus:ouline-none hover:text-coolgray-400 transition duration-150 ease-in-out">
                    <div class="flex items-center space-s-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                        </svg>
                        <span class="block text-sm">{{ __('dashboard.lists.items.options') }}</span>
                    </div>

                    <div class="{{ request()->route()->named('options.index') ? 'block' : 'hidden'}} h-2 w-2 rounded-full bg-coolgray-400"></div>
                </a>
            </li>

            <!-- Occasions -->
            <li>
                <a href="#" class="flex items-center justify-between hover:bg-gray-200 hover:bg-opacity-20 ps-9 pe-9 py-3 rounded-lg focus:ouline-none hover:text-coolgray-400 transition duration-150 ease-in-out">
                    <div class="flex items-center space-s-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                        </svg>
                        <span class="block text-sm">{{ __('dashboard.lists.items.occasions') }}</span>
                    </div>

                    <div class="{{ request()->route()->named('occasions.index') ? 'block' : 'hidden'}} h-2 w-2 rounded-full bg-coolgray-400"></div>
                </a>
            </li>
        </ul>

        <ul>
            <h3 class="text-xs text-coolgray-50 text-opacity-20">{{ __('dashboard.lists.titles.legal') }}</h3>

            <!-- Contracts -->
            <li>
                <a href="#" class="flex items-center justify-between hover:bg-gray-200 hover:bg-opacity-20 ps-9 pe-9 py-3 rounded-lg focus:ouline-none hover:text-coolgray-400 transition duration-150 ease-in-out">
                    <div class="flex items-center space-s-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        <span class="block text-sm">{{ __('dashboard.lists.items.contracts') }}</span>
                    </div>

                    <div class="{{ request()->route()->named('contracts.index') ? 'block' : 'hidden'}} h-2 w-2 rounded-full bg-coolgray-400"></div>
                </a>
            </li>

            <!-- Invoices -->
            <li>
                <a href="#" class="flex items-center justify-between hover:bg-gray-200 hover:bg-opacity-20 ps-9 pe-9 py-3 rounded-lg focus:ouline-none hover:text-coolgray-400 transition duration-150 ease-in-out">
                    <div class="flex items-center space-s-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2zM10 8.5a.5.5 0 11-1 0 .5.5 0 011 0zm5 5a.5.5 0 11-1 0 .5.5 0 011 0z" />
                        </svg>
                        <span class="block text-sm">{{ __('dashboard.lists.items.invoices') }}</span>
                    </div>

                    <div class="{{ request()->route()->named('invoices.index') ? 'block' : 'hidden'}} h-2 w-2 rounded-full bg-coolgray-400"></div>
                </a>
            </li>

            <!-- Terms -->
            <li>
                <a href="#" class="flex items-center justify-between hover:bg-gray-200 hover:bg-opacity-20 ps-9 pe-9 py-3 rounded-lg focus:ouline-none hover:text-coolgray-400 transition duration-150 ease-in-out">
                    <div class="flex items-center space-s-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                        </svg>
                        <span class="block text-sm">{{ __('dashboard.lists.items.terms') }}</span>
                    </div>

                    <div class="{{ request()->route()->named('terms.index') ? 'block' : 'hidden'}} h-2 w-2 rounded-full bg-coolgray-400"></div>
                </a>
            </li>
        </ul>

        <ul>
            <h3 class="text-xs text-coolgray-50 text-opacity-20">{{ __('dashboard.lists.titles.system') }}</h3>

            <!-- Customers -->
            <li>
                <a href="{{ route('customers.index', app()->getLocale()) }}" class="flex items-center justify-between hover:bg-gray-200 hover:bg-opacity-20 ps-9 pe-9 py-3 rounded-lg focus:ouline-none hover:text-coolgray-400 transition duration-150 ease-in-out">
                    <div class="flex items-center space-s-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="block text-sm">{{ __('dashboard.lists.items.customers') }}</span>
                    </div>

                    <div class="{{ request()->route()->named('customers.index') ? 'block' : 'hidden'}} h-2 w-2 rounded-full bg-coolgray-400"></div>
                </a>
            </li>

            <!-- Employees -->
            <li>
                <a href="#" class="flex items-center justify-between hover:bg-gray-200 hover:bg-opacity-20 ps-9 pe-9 py-3 rounded-lg focus:ouline-none hover:text-coolgray-400 transition duration-150 ease-in-out">
                    <div class="flex items-center space-s-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <span class="block text-sm">{{ __('dashboard.lists.items.employees') }}</span>
                    </div>

                    <div class="{{ request()->route()->named('employees.index') ? 'block' : 'hidden'}} h-2 w-2 rounded-full bg-coolgray-400"></div>
                </a>
            </li>
        </ul>
    </div>
</div>
