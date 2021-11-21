<x-app-layout>
    @section('page-title')
        {{ __('options.index.title') }}
    @endsection

    @section('page-heading')
        {{ __('options.index.heading') }}
    @endsection

    <!-- Table -->
    <div class="">
        <!-- Table Heading, Sort And Filter -->
        <div class="flex items-center justify-end px-2 py-2">
            <!-- Sort And Filter -->
            <div class="flex items-center pe-3 space-s-6">
                <a href="#"
                    class="flex items-center space-s-2 text-gray-700 text-opacity-25 text-xs hover:text-opacity-40 tranisition duration-150 ease-in-out">
                    <span class="block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 4h13M3 8h9m-9 4h6m4 0l4-4m0 0l4 4m-4-4v12" />
                        </svg>
                    </span>
                    <span class="font-semibold">{{ __('options.index.table.sort') }}</span>
                </a>
                <a href="#"
                    class="flex items-center space-s-2 text-gray-700 text-opacity-25 text-xs hover:text-opacity-40 tranisition duration-150 ease-in-out">
                    <span class="block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                        </svg>
                    </span>
                    <span class="font-semibold">{{ __('options.index.table.filter') }}</span>
                </a>
            </div>
        </div>

        <!-- Table Content -->
        <div class="flex flex-col mt-1">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{ __('options.index.table.cols.name') }}
                                    </th>

                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                            </svg>
                                        </span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($options as $option)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-sm text-gray-900">
                                                {{ $option->description }}
                                            </span>
                                        </td>
                                        
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="#"
                                                class="text-gray-400 hover:text-gray-700 tranisition duration-150 ease-in-out">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                                </svg>
                                            </a>
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
