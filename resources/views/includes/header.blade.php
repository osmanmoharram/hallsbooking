<div class="flex items-center justify-between h-20">
    <!-- Page Heading -->
    <h1 class="text-4xl font-bold text-coolgray-700 uppercase tracking-wide">
        @yield('page-heading')
    </h1>

    <div class="flex items-center space-s-12">
        <div class="flex items-center space-s-3 pb-1">
            <a href="{{ '/en' . substr(request()->path(), 2) }}" class="block font-semibold text-sm text-gray-700 text-opacity-50 hover:text-opacity-70 hover:underline tranisition duration-150 ease-in-out">English</a>
            <div class="h-4 border border-coolgray-700 border-opacity-30"></div>
            <a href="{{ '/ar' . substr(request()->path(), 2) }}" class="block font-semibold text-sm text-gray-700 text-opacity-50 hover:text-opacity-70 hover:underline tranisition duration-150 ease-in-out">عربي</a>
        </div>

        <!-- Search, Notifications And User Profile -->
        <div class="flex items-center space-s-6">
            <a href="#" class="block text-gray-700 text-opacity-50 hover:text-opacity-70 tranisition duration-150 ease-in-out">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
					stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
						d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
				</svg>
            </a>

            <a href="#" class="block text-gray-700 text-opacity-50 hover:text-opacity-70 tranisition duration-150 ease-in-out">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
					stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
						d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
				</span>
            </a>

            <a href="#" class="block w-10 h-10 border-2 border-coolgray-50 ring-1 ring-coolgray-700 rounded-full overflow-hidden">
				<img src="https://images.unsplash.com/photo-1553998285-d99637ace719?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8bWFsZSUyMG1vZGVsfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60" alt="User">
            </a>
        </div>
    </div>
</div>
