<x-app-layout>
    @section('page-title')
        {{ __('halls.index.title') }}
    @endsection

    @section('page-heading')
        <span class="text-4xl {{ app()->getLocale() === 'ar' ? 'font-tajawal' : 'font-karla' }} font-black leading-10 tracking-tight text-coolgray-800">
            {{ __('halls.index.heading') }}
        </span>
    @endsection

    <div x-data="{ isOpen: false }" class="mt-5">
        @include('includes.modals.new-hall')

        <!-- Modal trigger, Sort And Filter -->
        <div class="flex items-end justify-between">

            <!-- Modal Trigger -->
            <x-button type="button" @click="isOpen = ! isOpen;">Add New Hall</x-button>

            {{-- <div class="flex items-center pe-3 space-s-6">
                <!-- Sort -->
                <a href="#"
                    class="flex items-center space-s-2 text-gray-700 text-opacity-25 text-xs hover:text-opacity-40 tranisition duration-150 ease-in-out">
                    <span class="block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 4h13M3 8h9m-9 4h6m4 0l4-4m0 0l4 4m-4-4v12" />
                        </svg>
                    </span>
                    <span class="font-semibold">{{ __('halls.index.table.sort') }}</span>
                </a>

                <!-- Filter -->
                <a href="#"
                    class="flex items-center space-s-2 text-gray-700 text-opacity-25 text-xs hover:text-opacity-40 tranisition duration-150 ease-in-out">
                    <span class="block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                        </svg>
                    </span>
                    <span class="font-semibold">{{ __('halls.index.table.filter') }}</span>
                </a>
            </div> --}}
        </div>
    
        <!-- Table -->
        <div class="flex flex-col mt-5 ">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-white {{ app()->getLocale() === 'ar' ? 'font-tajawal' : 'font-cabin' }} font-semibold">
                                <tr>
                                    <th scope="col"
                                        class="ps-6 py-3 {{ app()->getLocale() === 'ar' ? 'text-right' : 'text-left' }} text-xs text-gray-500 uppercase tracking-wider">
                                        {{ __('halls.index.table.cols.name') }}
                                    </th>
                                    <th scope="col"
                                        class="ps-6 py-3 {{ app()->getLocale() === 'ar' ? 'text-right' : 'text-left' }} text-xs text-gray-500 uppercase tracking-wider">
                                        {{ __('halls.index.table.cols.location') }}
                                    </th>
                                    <th scope="col"
                                        class="ps-6 py-3 {{ app()->getLocale() === 'ar' ? 'text-right' : 'text-left' }} text-xs text-gray-500 uppercase tracking-wider">
                                        {{ __('halls.index.table.cols.capacity') }}
                                    </th>
                                    <th scope="col"
                                        class="ps-6 py-3 {{ app()->getLocale() === 'ar' ? 'text-right' : 'text-left' }} text-xs text-gray-500 uppercase tracking-wider">
                                        {{ __('halls.index.table.cols.space') }}
                                    </th>
                                    <th scope="col"
                                        class="ps-6 py-3 {{ app()->getLocale() === 'ar' ? 'text-right' : 'text-left' }} text-xs text-gray-500 uppercase tracking-wider">
                                        {{ __('halls.index.table.cols.price') }}
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 {{ app()->getLocale() === 'ar' ? 'font-tajawal' : 'font-montserrat' }}">
                                @foreach ($halls as $hall)
                                    <a id="hallId" href="#" class="hidden"></a>
                                    <tr class="hover:bg-coolgray-50 cursor-pointer" @click="document.getElementById('hallId').click();">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-sm text-gray-900">
                                                {{ $hall->name }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-sm text-gray-900">
                                                {{ $hall->location }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <span class="text-sm text-gray-900">
                                                {{ $hall->capacity }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <span class="text-sm text-gray-900">
                                                {{ $hall->space }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <span class="text-sm text-gray-900">
                                                {{ $hall->price }}
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
