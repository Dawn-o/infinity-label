<section id="contact" class="relative py-24 bg-gradient-to-br from-primary to-secondary text-white overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full -ml-48 -mt-48"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-white rounded-full -mr-48 -mb-48"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 relative z-10">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-10">
            <div class="md:w-1/2" data-aos="fade-right">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Your Trusted OEM Manufacturing Partner</h2>
                <p class="mb-8 text-white/80">Connect with us to discuss how our versatile manufacturing capabilities can deliver custom solutions that meet your specific product needs and market requirements.</p>
                <div class="space-y-6">
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-envelope text-white"></i>
                        </div>
                        <div>
                            <p class="text-sm text-white/70">Email us at</p>
                            <p class="font-medium">contact@yownbrand.com</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-phone text-white"></i>
                        </div>
                        <div>
                            <p class="text-sm text-white/70">Call us at</p>
                            <p class="font-medium">+62 823-8089-8261</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="md:w-1/2 bg-white p-8 rounded-xl shadow-lg" data-aos="fade-left">
                <h3 class="text-xl font-semibold text-primary mb-6">Send us a message</h3>
                <form id="contact-form">
                    <div class="mb-4">
                        <input type="text" id="name" name="name" placeholder="Your Name" class="w-full px-4 py-3 rounded-lg border border-accent/50 focus:border-secondary focus:outline-none focus:ring-1 focus:ring-secondary/50 text-dark">
                    </div>
                    <div class="mb-4">
                        <input type="email" id="email" name="email" placeholder="Your Email" class="w-full px-4 py-3 rounded-lg border border-accent/50 focus:border-secondary focus:outline-none focus:ring-1 focus:ring-secondary/50 text-dark">
                    </div>
                    <div class="mb-4">
                        <input type="text" id="subject" name="subject" placeholder="Subject" class="w-full px-4 py-3 rounded-lg border border-accent/50 focus:border-secondary focus:outline-none focus:ring-1 focus:ring-secondary/50 text-dark">
                    </div>
                    <div class="mb-6">
                        <textarea id="message" name="message" placeholder="Your Message" rows="4" class="w-full px-4 py-3 rounded-lg border border-accent/50 focus:border-secondary focus:outline-none focus:ring-1 focus:ring-secondary/50 text-dark"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-secondary hover:bg-primary text-white py-3 px-6 rounded-lg transition-colors focus:outline-none focus:ring-2 focus:ring-secondary/50">
                        Send via WhatsApp
                    </button>
                </form>
                
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const contactForm = document.getElementById('contact-form');
                        
                        contactForm.addEventListener('submit', function(e) {
                            e.preventDefault();
                            
                            // Get form values
                            const name = document.getElementById('name').value.trim();
                            const email = document.getElementById('email').value.trim();
                            const subject = document.getElementById('subject').value.trim();
                            const message = document.getElementById('message').value.trim();
                            
                            // Validation
                            if (!name || !email || !subject || !message) {
                                alert('Please fill all the fields');
                                return;
                            }
                            
                            // Format message for WhatsApp in a more conversational style
                            const whatsappMessage = 
                                `Hello, my name is ${name} with email ${email}.\n\n` +
                                `I want to talk about ${subject}.\n\n` +
                                `${message}`;
                            
                            // WhatsApp phone number from the contact section
                            const phoneNumber = '6282380898261';
                            
                            // Create WhatsApp URL with encoded message
                            const whatsappUrl = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(whatsappMessage)}`;
                            
                            // Open WhatsApp in new tab
                            window.open(whatsappUrl, '_blank');
                        });
                    });
                </script>
            </div>
        </div>
    </div>
</section>
