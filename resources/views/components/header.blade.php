<nav class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-24 items-center">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="/" class="flex items-center">
                    <svg class="h-10 w-10 text-amber-600" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M13.5 3.5c0 .828.672 1.5 1.5 1.5s1.5-.672 1.5-1.5-.672-1.5-1.5-1.5-1.5.672-1.5 1.5zm7 3c0 .828.672 1.5 1.5 1.5s1.5-.672 1.5-1.5-.672-1.5-1.5-1.5-1.5.672-1.5 1.5zm-14 0c0 .828.672 1.5 1.5 1.5s1.5-.672 1.5-1.5-.672-1.5-1.5-1.5-1.5.672-1.5 1.5zm7 3c0 .828.672 1.5 1.5 1.5s1.5-.672 1.5-1.5-.672-1.5-1.5-1.5-1.5.672-1.5 1.5zm7 3c0 .828.672 1.5 1.5 1.5s1.5-.672 1.5-1.5-.672-1.5-1.5-1.5-1.5.672-1.5 1.5zm-14 0c0 .828.672 1.5 1.5 1.5s1.5-.672 1.5-1.5-.672-1.5-1.5-1.5-1.5.672-1.5 1.5zm7 3c0 .828.672 1.5 1.5 1.5s1.5-.672 1.5-1.5-.672-1.5-1.5-1.5-1.5.672-1.5 1.5z"/>
                    </svg>
                    <span class="ml-3 text-2xl font-bold text-amber-800">Aroglin Spice Farms</span>
                </a>
            </div>
            
            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-6"> <!-- Space between links -->
                <a href="/" class="text-amber-900 hover:text-amber-600 font-medium transition-colors duration-200 border-b-2 border-transparent hover:border-amber-500 pb-1">Home</a>
                <a href="#products" class="text-amber-900 hover:text-amber-600 font-medium transition-colors duration-200 border-b-2 border-transparent hover:border-amber-500 pb-1">Products</a>
                <a href="#about" class="text-amber-900 hover:text-amber-600 font-medium transition-colors duration-200 border-b-2 border-transparent hover:border-amber-500 pb-1">About</a>
                <a href="#contact" class="text-amber-900 hover:text-amber-600 font-medium transition-colors duration-200 border-b-2 border-transparent hover:border-amber-500 pb-1">Contact</a>
                <a href="#shop" class="px-4 py-2 bg-amber-600 text-white rounded-md hover:bg-amber-700 transition-colors duration-200 flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                    Shop
                </a>
            </div>
            
            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button type="button" class="text-amber-800 hover:text-amber-600 focus:outline-none" aria-controls="mobile-menu" aria-expanded="false">
                    <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Mobile menu -->
    <div class="md:hidden hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-2 sm:px-3 bg-amber-50">
            <a href="/" class="block px-3 py-2 rounded-md text-base font-medium text-amber-900 hover:bg-amber-100">Home</a>
            <a href="#products" class="block px-3 py-2 rounded-md text-base font-medium text-amber-900 hover:bg-amber-100">Products</a>
            <a href="#about" class="block px-3 py-2 rounded-md text-base font-medium text-amber-900 hover:bg-amber-100">About</a>
            <a href="#contact" class="block px-3 py-2 rounded-md text-base font-medium text-amber-900 hover:bg-amber-100">Contact</a>
            <a href="#shop" class="block px-3 py-2 rounded-md text-base font-medium text-white bg-amber-600 hover:bg-amber-700">Shop Now</a>
        </div>
    </div>
</nav>
