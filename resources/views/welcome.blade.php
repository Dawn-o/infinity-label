<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="CocoNature - Premium Organic Coconut Products Manufacturer">
    <title>CocoNature - Organic Coconut Products</title>
    <style>
        :root {
            --primary-green: #2C5F2D;
            --light-green: #97BC62;
            --brown: #5C4033;
            --beige: #F5F5DC;
            --cream: #FFFDD0;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: var(--beige);
            color: #333;
            line-height: 1.6;
        }

        header {
            background-color: var(--primary-green);
            padding: 20px 0;
            color: white;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
        }

        nav {
            background-color: var(--light-green);
            padding: 10px 0;
        }

        nav ul {
            display: flex;
            list-style: none;
            justify-content: center;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            text-decoration: none;
            color: white;
            font-weight: bold;
        }

        section {
            padding: 60px 0;
        }

        section.hero {
            background-color: var(--cream);
            text-align: center;
            padding: 80px 0;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 20px;
            color: var(--primary-green);
        }

        h2 {
            font-size: 28px;
            margin-bottom: 30px;
            color: var(--primary-green);
            text-align: center;
        }

        p {
            margin-bottom: 20px;
        }

        .products {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .product-card {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .product-card h3 {
            padding: 15px;
            background-color: var(--light-green);
            color: white;
        }

        .product-card p {
            padding: 15px;
        }

        .certifications {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 20px;
            margin-top: 40px;
        }

        .cert-item {
            background-color: white;
            border-radius: 8px;
            padding: 15px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .vision-mission {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .vm-card {
            background-color: white;
            border-radius: 8px;
            padding: 25px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .vm-card h3 {
            color: var(--primary-green);
            margin-bottom: 15px;
        }

        footer {
            background-color: var(--primary-green);
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: 40px;
        }

        @media (max-width: 768px) {
            nav ul {
                flex-direction: column;
                align-items: center;
            }

            nav ul li {
                margin: 5px 0;
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <div class="logo">CocoNature</div>
        </div>
    </header>

    <nav>
        <div class="container">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#history">History</a></li>
                <li><a href="#vision-mission">Vision & Mission</a></li>
                <li><a href="#products">Products</a></li>
                <li><a href="#certifications">Certifications</a></li>
            </ul>
        </div>
    </nav>

    <section id="home" class="hero">
        <div class="container">
            <h1>CocoNature</h1>
            <p>Premium Organic Coconut Products</p>
            <p>Nature's Goodness in Every Drop and Bite</p>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <h2>About Us</h2>
            <p>At CocoNature, we are dedicated to producing the highest quality coconut products using sustainable and
                organic farming practices. Our state-of-the-art manufacturing facility combines traditional wisdom with
                modern technology to preserve the natural goodness of coconuts.</p>
            <p>We work directly with local farmers to ensure fair trade practices and maintain the highest standards of
                quality from farm to table. Our commitment to sustainability extends throughout our supply chain, from
                responsible harvesting to eco-friendly packaging.</p>
            <p>With over two decades of experience in coconut processing, we've perfected our techniques to maximize
                nutrition, flavor, and purity in every product we offer.</p>
        </div>
    </section>

    <section id="history" style="background-color: var(--cream);">
        <div class="container">
            <h2>Our History</h2>
            <p>Founded in 2000 by a family of coconut farmers, CocoNature began as a small-scale operation focused on
                bringing traditional coconut products to local markets.</p>
            <p>By 2005, we expanded our operations to include international exports, recognizing the global demand for
                high-quality, organic coconut products.</p>
            <p>In 2010, we invested in cutting-edge processing technology that allowed us to maintain the nutritional
                integrity of our products while meeting international safety standards.</p>
            <p>Today, CocoNature is a leading manufacturer of premium coconut products, distributing to over 30
                countries worldwide while maintaining our core values of quality, sustainability, and integrity.</p>
        </div>
    </section>

    <section id="vision-mission">
        <div class="container">
            <h2>Vision & Mission</h2>
            <div class="vision-mission">
                <div class="vm-card">
                    <h3>Our Vision</h3>
                    <p>To be the world's most trusted provider of organic coconut products, known for exceptional
                        quality, innovation, and environmental stewardship.</p>
                </div>
                <div class="vm-card">
                    <h3>Our Mission</h3>
                    <p>We strive to deliver the purest coconut products while supporting sustainable agriculture,
                        empowering local communities, and promoting healthy living through nature's perfect food.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="products" style="background-color: var(--cream);">
        <div class="container">
            <h2>Our Products</h2>
            <div class="products">
                <div class="product-card">
                    <h3>Coconut Water</h3>
                    <p>Refreshing, naturally sweet coconut water harvested from young green coconuts, packed with
                        electrolytes and essential nutrients.</p>
                </div>
                <div class="product-card">
                    <h3>Coconut Milk for Beverage</h3>
                    <p>Smooth, creamy coconut milk perfect for smoothies, coffee, and as a dairy alternative in your
                        favorite drinks.</p>
                </div>
                <div class="product-card">
                    <h3>Coconut Milk for Cooking</h3>
                    <p>Rich, full-bodied coconut milk ideal for curries, soups, sauces, and desserts, bringing authentic
                        flavor to your culinary creations.</p>
                </div>
                <div class="product-card">
                    <h3>Coconut Flour</h3>
                    <p>Gluten-free, high-fiber coconut flour, perfect for baking and cooking, offering a nutritious
                        alternative to conventional flours.</p>
                </div>
                <div class="product-card">
                    <h3>Coconut Desiccated</h3>
                    <p>Finely grated, dried coconut meat, ideal for baking, cooking, and as a topping for desserts and
                        breakfast dishes.</p>
                </div>
                <div class="product-card">
                    <h3>Coconut Chips</h3>
                    <p>Crunchy, lightly sweetened coconut chips, a perfect healthy snack option that's both satisfying
                        and nutritious.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="certifications">
        <div class="container">
            <h2>Our Certifications</h2>
            <p>We pride ourselves on meeting and exceeding the highest industry standards. Our products are certified by
                leading regulatory bodies worldwide:</p>
            <div class="certifications">
                <div class="cert-item">ACO Certified Organic</div>
                <div class="cert-item">No Artificial Colors & Flavors</div>
                <div class="cert-item">USDA Organic</div>
                <div class="cert-item">Kosher</div>
                <div class="cert-item">Non GMO</div>
                <div class="cert-item">GMP</div>
                <div class="cert-item">HACCP</div>
                <div class="cert-item">Vegan</div>
                <div class="cert-item">BPA Free</div>
                <div class="cert-item">Halal</div>
                <div class="cert-item">FDA</div>
                <div class="cert-item">BRC</div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>© 2025 CocoNature. All Rights Reserved.</p>
        </div>
    </footer>
</body>

</html>
