<section id="products" class="py-24 bg-accent/20 relative">
    <div class="absolute top-0 left-0 w-full h-20 bg-white" style="clip-path: polygon(0 0, 100% 0, 100% 100%, 0 0);"></div>
    <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12">
        <div class="text-center mb-16" data-aos="fade-up">
            <div class="inline-block mb-3 py-1 px-3 bg-accent/50 rounded-full">
                <span class="text-secondary font-semibold text-sm">What We Offer</span>
            </div>
            <h2 class="text-3xl font-bold text-primary">Our Products</h2>
            <p class="mt-4 max-w-2xl mx-auto text-dark/80">Discover our range of premium organic coconut products, crafted with care and expertise.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <x-product-card 
                title="Coconut Water"
                description="Refreshing, naturally sweet coconut water harvested from young green coconuts, packed with electrolytes and essential nutrients."
                image="{{asset('assets/images/products/Coconut Water.png')}}"
                :tags="['Organic', 'No Sugar']"
            />
            
            <x-product-card 
                title="Coconut Milk for Beverage"
                description="Smooth, creamy coconut milk perfect for smoothies, coffee, and as a dairy alternative in your favorite drinks."
                image="{{asset('assets/images/products/Coconut Milk for Beverage.png')}}"
                :tags="['Dairy-free', 'Vegan']"
                delay="100"
            />
            
            <x-product-card 
                title="Coconut Milk for Cooking"
                description="Rich, full-bodied coconut milk ideal for curries, soups, sauces, and desserts, bringing authentic flavor to your culinary creations."
                image="{{asset('assets/images/products/Coconut Milk for Cooking.png')}}"
                :tags="['Creamy', 'Natural']"
                delay="200"
            />
            
            <x-product-card 
                title="Coconut Flour"
                description="Gluten-free, high-fiber coconut flour, perfect for baking and cooking, offering a nutritious alternative to conventional flours."
                image="{{asset('assets/images/products/Coconut Flour.png')}}"
                :tags="['Gluten-free', 'High-fiber']"
            />
            
            <x-product-card 
                title="Coconut Desiccated"
                description="Finely grated, dried coconut meat, ideal for baking, cooking, and as a topping for desserts and breakfast dishes."
                image="{{asset('assets/images/products/Coconut Desiccated.png')}}"
                :tags="['Unsweetened', 'Versatile']"
                delay="100"
            />
            
            <x-product-card 
                title="Coconut Chips"
                description="Crunchy, lightly sweetened coconut chips, a perfect healthy snack option that's both satisfying and nutritious."
                image="{{asset('assets/images/products/Coconut Chips.png')}}"
                :tags="['Crunchy', 'Low Sugar']"
                delay="200"
            />
        </div>
    </div>
</section>
