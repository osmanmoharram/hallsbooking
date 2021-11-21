<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body class="bg-coolgray-200 font-sans antialiased min-h-screen overflow-hidden grid grid-cols-12">

    <!-- Sidebar -->
    <div class="h-screen col-span-2 bg-coolgray-900 flex flex-col">
        <div class="inline-flex items-center space-x-4 mt-12 pl-10">
            <!-- Logo -->

            <span class="text-3xl font-black text-coolgray-200 text-opacity-40 tracking-wide">Dashboard</span>
        </div>

        <div class="text-coolgray-200 text-opacity-40 divide-y divide-coolgray-100 divide-opacity-10">
            <ul class="pt-10 pb-5">
                <li
                    class="flex items-center space-x-6 hover:bg-coolgray-200 hover:bg-opacity-20 hover:text-coolgray-400  pl-9 py-3 cursor-pointer border-l-4 border-transparent hover:border-coolgray-400 tranisition duration-150 ease-in-out">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span class="block">Overview</span>
                </li>

                <li
                    class="flex items-center space-x-6 bg-coolgray-200 bg-opacity-20 pl-9 py-3 cursor-pointer text-coolgray-400 border-l-4  border-transparent border-coolgray-400 transition-alltransition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                    </svg>
                    <span class="block">Tags</span>
                </li>

                <li
                    class="flex items-center space-x-6 hover:bg-coolgray-200 hover:bg-opacity-20 pl-9 py-3 cursor-pointer hover:text-coolgray-400 border-l-4  border-transparent hover:border-coolgray-400 transition-alltransition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                    </svg>
                    <span class="block">Ideas</span>
                </li>

                <li
                    class="flex items-center space-x-6 hover:bg-coolgray-200 hover:bg-opacity-20 pl-9 py-3 cursor-pointer hover:text-coolgray-400 border-l-4  border-transparent hover:border-coolgray-400 transition-alltransition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    <span class="block">Contacts</span>
                </li>
            </ul>

            <ul class="pt-5 pb-10">
                <li
                    class="flex items-center space-x-6 hover:bg-coolgray-200 hover:bg-opacity-20 pl-9 py-3 cursor-pointer hover:text-coolgray-400 border-l-4  border-transparent hover:border-coolgray-400 transition-alltransition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <span class="block">Settings</span>
                </li>

                <li
                    class="flex items-center space-x-6 hover:bg-coolgray-200 hover:bg-opacity-20 pl-9 py-3 cursor-pointer hover:text-coolgray-400 border-l-4  border-transparent hover:border-coolgray-400 transition-alltransition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span class="block">Calender</span>
                </li>
            </ul>
        </div>
    </div>

    <!-- Content -->
    <div class="col-span-10 px-8">
        <!-- Header -->
        <div class="flex items-center justify-between py-4">
            <!-- Page Heading -->
            <h1 class="text-lg text-coolgray-700 font-semibold tracking-wide">Overview</h1>

            <div class="flex items-center justify-between">
                <!-- Search And Notifications -->
                <div class="flex items-center pr-3 space-x-6">
                    <a href="#"
                        class="text-gray-700 text-opacity-25 hover:text-opacity-40 tranisition duration-150 ease-in-out">
                        <span class="block">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </span>
                    </a>
                    <a href="#"
                        class="text-gray-700 text-opacity-25 hover:text-opacity-40 tranisition duration-150 ease-in-out">
                        <span class="block">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </span>
                    </a>
                </div>

                <!-- border -->
                <div class="h-6 border"></div>

                <!-- User Name and Image -->
                <div class="pl-3">
                    <a href="#" class="flex items-center space-x-3">
                        <span
                            class="block text-gray-700 text-opacity-25 hover:text-opacity-40 font-semibold tranisition duration-150 ease-in-out text-sm">Osman
                            Moharram</span>
                        <span
                            class="block w-10 h-10 border-2 border-coolgray-50 ring-1 ring-coolgray-700 rounded-full overflow-hidden">
                            <img class=""
                                src="https://images.unsplash.com/photo-1553998285-d99637ace719?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8bWFsZSUyMG1vZGVsfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60"
                                alt="User">
                        </span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Table -->
        <div class="mt-12">

            <!-- Table Heading, Sort And Filter -->
            <div class="flex items-center justify-between px-2 py-2">
                <h2 class="text-coolgray-700 text-opacity-70 font-semibold tracking-wide">All Resources</h2>

                <!-- Sort And Filter -->
                <div class="flex items-center pr-3 space-x-6">
                    <a href="#"
                        class="flex items-center space-x-2 text-gray-700 text-opacity-25 text-xs hover:text-opacity-40 tranisition duration-150 ease-in-out">
                        <span class="block">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 4h13M3 8h9m-9 4h6m4 0l4-4m0 0l4 4m-4-4v12" />
                            </svg>
                        </span>
                        <span class="font-semibold">Sort</span>
                    </a>
                    <a href="#"
                        class="flex items-center space-x-2 text-gray-700 text-opacity-25 text-xs hover:text-opacity-40 tranisition duration-150 ease-in-out">
                        <span class="block">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                            </svg>
                        </span>
                        <span class="font-semibold">Filter</span>
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
                                            Name
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Title
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Status
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Role
                                        </th>
                                        <th scope="col" class="relative px-6 py-3">
                                            <span class="sr-only">More Actions</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded-full"
                                                        src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60"
                                                        alt="">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        Jane Cooper
                                                    </div>
                                                    <div class="text-sm text-gray-500">
                                                        jane.cooper@example.com
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">Regional Paradigm Technician</div>
                                            <div class="text-sm text-gray-500">Optimization</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                Active
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            Admin
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="#" class="text-gray-400 hover:text-gray-700 tranisition duration-150 ease-in-out">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>

                                    <!-- More people... -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</html>
