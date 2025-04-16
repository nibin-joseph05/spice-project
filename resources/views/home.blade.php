<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Discover authentic Kerala spices at {{ config('app.name') }} - your local spice shop offering premium quality products.">
    <title>{{ config('app.name') }} - Premium Kerala Spices</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        .font-playfair {
            font-family: 'Playfair Display', serif;
        }
        .font-poppins {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-amber-50 font-poppins text-amber-900">
    
    <x-header />

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-r from-amber-700 to-amber-600 text-white overflow-hidden" 
         style="background-image: url('https://images.unsplash.com/photo-1574586595103-6775e147e412?q=80&w=1925&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); background-size: cover; background-position: center;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32">
        <div class="relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold font-playfair mb-6">
                <span class="block">Authentic Kerala Spices</span>
                <span class="block text-amber-200">Direct to Your Kitchen</span>
            </h1>
            <p class="text-lg md:text-xl max-w-3xl mx-auto mb-8">
                Experience the rich flavors of Kerala with our premium, hand-picked spices sourced directly from local farms.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#products" class="px-8 py-3 border-2 border-white text-white font-semibold rounded-md hover:bg-white hover:text-amber-700 transition-colors duration-200">
                    Shop Our Spices
                </a>
                <a href="#about" class="px-8 py-3 border-2 border-white text-white font-semibold rounded-md hover:bg-white hover:text-amber-700 transition-colors duration-200">
                    Learn More
                </a>
            </div>
        </div>
        <div class="absolute top-0 right-0 bottom-0 left-0 opacity-10">
            <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <pattern id="spice-pattern" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                    <circle cx="10" cy="10" r="2" fill="currentColor"></circle>
                </pattern>
                <rect x="0" y="0" width="100" height="100" fill="url(#spice-pattern)"></rect>
            </svg>
        </div>
    </div>
</section>


    <!-- Featured Products -->
    <section class="py-16 bg-white" id="products">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="inline-block px-3 py-1 text-sm font-semibold text-amber-700 bg-amber-100 rounded-full mb-4">Our Selection</span>
                <h2 class="text-3xl md:text-4xl font-bold font-playfair text-amber-900 mb-4">Premium Spice Collection</h2>
                <p class="max-w-2xl mx-auto text-lg text-amber-700">Hand-selected for quality, freshness, and authentic flavor.</p>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Product 1 -->
                <div class="bg-amber-50 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="h-48 bg-amber-200 flex items-center justify-center">
                        <img src="https://t3.ftcdn.net/jpg/08/98/28/66/360_F_898286678_h9QwQlrJF0rd0f9jEheO5kt9BMHbDvb3.jpg" alt="Cardamom" class="h-40 w-40 object-contain">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Cardamom</h3>
                        <p class="text-amber-700 mb-4">The "Queen of Spices" with a sweet, floral flavor.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-lg font-bold">₹450/kg</span>
                            <button class="px-4 py-2 bg-amber-600 text-white rounded hover:bg-amber-700 transition-colors">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Product 2 -->
                <div class="bg-amber-50 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="h-48 bg-amber-200 flex items-center justify-center">
                        <img src="https://t3.ftcdn.net/jpg/03/06/99/40/360_F_306994019_4d2AZQY7ur8JWg6xIREU2I0YNUbd76a2.jpg" alt="Black Pepper" class="h-40 w-40 object-contain">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Black Pepper</h3>
                        <p class="text-amber-700 mb-4">The "King of Spices" with bold, pungent flavor.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-lg font-bold">₹350/kg</span>
                            <button class="px-4 py-2 bg-amber-600 text-white rounded hover:bg-amber-700 transition-colors">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Product 3 -->
                <div class="bg-amber-50 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="h-48 bg-amber-200 flex items-center justify-center">
                        <img src="https://t3.ftcdn.net/jpg/02/12/84/78/360_F_212847847_o4fXT2BF7CTwqVly0mvGL4UEgGGgpibU.jpg" alt="Turmeric" class="h-40 w-40 object-contain">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Turmeric</h3>
                        <p class="text-amber-700 mb-4">Vibrant yellow with earthy, slightly bitter flavor.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-lg font-bold">₹250/kg</span>
                            <button class="px-4 py-2 bg-amber-600 text-white rounded hover:bg-amber-700 transition-colors">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Product 4 -->
                <div class="bg-amber-50 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="h-48 bg-amber-200 flex items-center justify-center">
                        <img src="https://media.istockphoto.com/id/1134101282/photo/cinnamon-sticks-on-white.jpg?s=612x612&w=0&k=20&c=kRJ8H48luI4NQv4tjHup3MQyjVUI6vezCioODI_MkCM=" alt="Cinnamon" class="h-40 w-40 object-contain">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Cinnamon</h3>
                        <p class="text-amber-700 mb-4">Sweet and woody with warm, comforting notes.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-lg font-bold">₹300/kg</span>
                            <button class="px-4 py-2 bg-amber-600 text-white rounded hover:bg-amber-700 transition-colors">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="#" class="inline-block px-8 py-3 border-2 border-amber-600 text-amber-700 font-semibold rounded-md hover:bg-amber-600 hover:text-white transition-colors duration-200">
                    View All Products
                </a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-16 bg-amber-100" id="about">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:flex items-center gap-12">
                <div class="lg:w-1/2 mb-12 lg:mb-0">
                    <img src="https://media.istockphoto.com/id/516957666/photo/cardamom-plantation.jpg?s=612x612&w=0&k=20&c=UQr-8d70KfTwCBgzUZxXdVcprPyeQUbT0c7EsgX2jFQ=" alt="Our Spice Farm" class="rounded-lg shadow-xl w-full">
                </div>
                <div class="lg:w-1/2">
                    <span class="inline-block px-3 py-1 text-sm font-semibold text-amber-700 bg-amber-50 rounded-full mb-4">Our Story</span>
                    <h2 class="text-3xl md:text-4xl font-bold font-playfair text-amber-900 mb-6">Traditional Spices, Modern Quality</h2>
                    <p class="text-lg text-amber-800 mb-6">
                        Founded in 2010, {{ config('app.name') }} brings generations of spice expertise to your kitchen. We work directly with farmers in Kerala to source the freshest, highest quality spices while ensuring fair trade practices.
                    </p>
                    <div class="space-y-4">
                        <div class="flex">
                            <svg class="h-6 w-6 text-amber-600 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-amber-800">Direct from Kerala farms with no middlemen</span>
                        </div>
                        <div class="flex">
                            <svg class="h-6 w-6 text-amber-600 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-amber-800">100% natural with no additives or preservatives</span>
                        </div>
                        <div class="flex">
                            <svg class="h-6 w-6 text-amber-600 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-amber-800">Traditional sun-drying methods for maximum flavor</span>
                        </div>
                        <div class="flex">
                            <svg class="h-6 w-6 text-amber-600 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-amber-800">Vacuum-sealed packaging for long-lasting freshness</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="inline-block px-3 py-1 text-sm font-semibold text-amber-700 bg-amber-100 rounded-full mb-4">Customer Love</span>
                <h2 class="text-3xl md:text-4xl font-bold font-playfair text-amber-900 mb-4">What Our Customers Say</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-amber-50 p-8 rounded-lg shadow-sm">
                    <div class="flex items-center mb-4">
                        <div class="h-12 w-12 rounded-full bg-amber-200 flex items-center justify-center text-amber-800 font-bold mr-4">
                            <img src="https://c.ndtvimg.com/2024-06/4fkrodmo_hh_120x90_10_June_24.jpg?downsize=263:315" alt="Ananya S." class="h-12 w-12 rounded-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-bold">Ananya S.</h4>
                            <div class="flex text-amber-500">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <p class="text-amber-800">"The cardamom from {{ config('app.name') }} transformed my chai. The aroma is incredible and the flavor is so much richer than store-bought spices. I'll never go back!"</p>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-amber-50 p-8 rounded-lg shadow-sm">
                    <div class="flex items-center mb-4">
                        <div class="h-12 w-12 rounded-full bg-amber-200 flex items-center justify-center text-amber-800 font-bold mr-4">
                            <img src="https://i.pinimg.com/736x/cc/d1/42/ccd142cf87f768d93034884b390fba64.jpg" alt="Rahul K." class="h-12 w-12 rounded-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-bold">Rahul K.</h4>
                            <div class="flex text-amber-500">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <p class="text-amber-800">"As a restaurant owner, quality spices are essential. {{ config('app.name') }} consistently delivers premium products that make our dishes stand out. Their black pepper is unmatched!"</p>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-amber-50 p-8 rounded-lg shadow-sm">
                    <div class="flex items-center mb-4">
                        <div class="h-12 w-12 rounded-full bg-amber-200 flex items-center justify-center text-amber-800 font-bold mr-4">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRphH-vBgFgJBvrsvUcSVhduktyJP8isF18SQ&s" alt="Priya M." class="h-12 w-12 rounded-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-bold">Priya M.</h4>
                            <div class="flex text-amber-500">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <p class="text-amber-800">"The spices from {{ config('app.name') }} are truly amazing. The flavor and quality are unmatched, and I use them in all of my recipes!"</p>
                </div>
            </div>

        </div>
    </section>

    <!-- Newsletter -->
    <section class="py-16 bg-amber-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold font-playfair mb-4">Join Our Spice Community</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Sign up for recipes, special offers, and spice tips delivered to your inbox.</p>
            
            <form class="max-w-md mx-auto flex flex-col sm:flex-row gap-2">
                <input type="email" placeholder="Your email address" class="flex-grow px-4 py-3 rounded-md text-amber-900 focus:outline-none focus:ring-2 focus:ring-amber-300">
                <button type="submit" class="px-6 py-3 bg-amber-900 text-white rounded-md hover:bg-amber-800 transition-colors font-semibold">
                    Subscribe
                </button>
            </form>
            
            <p class="mt-4 text-sm text-amber-200">We respect your privacy. Unsubscribe at any time.</p>
        </div>
    </section>

    <x-footer />

    <script>
        // Mobile menu toggle
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.querySelector('[aria-controls="mobile-menu"]');
            const mobileMenu = document.getElementById('mobile-menu');
            
            mobileMenuButton.addEventListener('click', function() {
                const expanded = this.getAttribute('aria-expanded') === 'true';
                this.setAttribute('aria-expanded', !expanded);
                mobileMenu.classList.toggle('hidden');
            });
        });
    </script>
</body>
</html>