<section id="contact" class="relative py-24 bg-gradient-to-br from-primary to-secondary text-white overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full -ml-48 -mt-48"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-white rounded-full -mr-48 -mb-48"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 relative z-10">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-10">
            <div class="md:w-1/2" data-aos="fade-right">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Your Trusted OEM Manufacturing Partner</h2>
                <p class="mb-8 text-white/80">Connect with us to discuss how our versatile manufacturing capabilities
                    can deliver custom solutions that meet your specific product needs and market requirements.</p>
                <div class="space-y-6">
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-envelope text-white"></i>
                        </div>
                        <div>
                            <p class="text-sm text-white/70">Email us at</p>
                            <p class="font-medium">contact@infinity-label.com</p>
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

            <div class="md:w-1/2 bg-white p-8 rounded-xl shadow-lg" data-aos="fade-left" x-data="contactForm">
                <h3 class="text-xl font-semibold text-primary mb-6">Send us a message</h3>
                <form @submit.prevent="submitForm">
                    <div class="mb-4">
                        <input type="text" id="name" name="name" placeholder="Your Name" x-model="form.name"
                            :class="{ 'border-red-500': errors.name }"
                            class="w-full px-4 py-3 rounded-lg border border-accent/50 focus:border-secondary focus:outline-none focus:ring-1 focus:ring-secondary/50 text-dark">
                        <div x-show="errors.name" class="text-red-500 text-sm mt-1" x-text="errors.name"></div>
                    </div>
                    <div class="mb-4">
                        <input type="email" id="email" name="email" placeholder="Your Email"
                            x-model="form.email" :class="{ 'border-red-500': errors.email }"
                            class="w-full px-4 py-3 rounded-lg border border-accent/50 focus:border-secondary focus:outline-none focus:ring-1 focus:ring-secondary/50 text-dark">
                        <div x-show="errors.email" class="text-red-500 text-sm mt-1" x-text="errors.email"></div>
                    </div>
                    <div class="mb-4">
                        <input type="text" id="subject" name="subject" placeholder="Subject" x-model="form.subject"
                            :class="{ 'border-red-500': errors.subject }"
                            class="w-full px-4 py-3 rounded-lg border border-accent/50 focus:border-secondary focus:outline-none focus:ring-1 focus:ring-secondary/50 text-dark">
                        <div x-show="errors.subject" class="text-red-500 text-sm mt-1" x-text="errors.subject"></div>
                    </div>
                    <div class="mb-6">
                        <textarea id="message" name="message" placeholder="Your Message" rows="4" x-model="form.message"
                            :class="{ 'border-red-500': errors.message }"
                            class="w-full px-4 py-3 rounded-lg border border-accent/50 focus:border-secondary focus:outline-none focus:ring-1 focus:ring-secondary/50 text-dark"></textarea>
                        <div x-show="errors.message" class="text-red-500 text-sm mt-1" x-text="errors.message"></div>
                    </div>
                    <button type="submit"
                        class="w-full bg-secondary hover:bg-primary text-white py-3 px-6 rounded-lg transition-colors focus:outline-none focus:ring-2 focus:ring-secondary/50 flex items-center justify-center"
                        :disabled="isSubmitting">
                        <span x-show="isSubmitting" class="inline-block mr-2">
                            <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                    stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor"
                                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                </path>
                            </svg>
                        </span>
                        Send via WhatsApp
                    </button>
                </form>

                <script>
                    document.addEventListener('alpine:init', () => {
                        Alpine.data('contactForm', () => ({
                            form: {
                                name: '',
                                email: '',
                                subject: '',
                                message: ''
                            },
                            errors: {
                                name: '',
                                email: '',
                                subject: '',
                                message: ''
                            },
                            isSubmitting: false,

                            validateForm() {
                                let isValid = true;
                                this.errors = {
                                    name: '',
                                    email: '',
                                    subject: '',
                                    message: ''
                                };

                                // Name validation
                                if (!this.form.name.trim()) {
                                    this.errors.name = 'Name is required';
                                    isValid = false;
                                }

                                // Email validation
                                if (!this.form.email.trim()) {
                                    this.errors.email = 'Email is required';
                                    isValid = false;
                                } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(this.form.email.trim())) {
                                    this.errors.email = 'Please enter a valid email address';
                                    isValid = false;
                                }

                                // Subject validation
                                if (!this.form.subject.trim()) {
                                    this.errors.subject = 'Subject is required';
                                    isValid = false;
                                }

                                // Message validation
                                if (!this.form.message.trim()) {
                                    this.errors.message = 'Message is required';
                                    isValid = false;
                                }

                                return isValid;
                            },

                            submitForm() {
                                if (!this.validateForm()) {
                                    return;
                                }

                                this.isSubmitting = true;

                                // Format message for WhatsApp in a more conversational style
                                const whatsappMessage =
                                    `Hello, my name is ${this.form.name} with email ${this.form.email}.\n\n` +
                                    `I want to talk about ${this.form.subject}.\n\n` +
                                    `${this.form.message}`;

                                // WhatsApp phone number from the contact section
                                const phoneNumber = '6282380898261';

                                // Create WhatsApp URL with encoded message
                                const whatsappUrl =
                                    `https://wa.me/${phoneNumber}?text=${encodeURIComponent(whatsappMessage)}`;

                                // Small delay for better UX
                                setTimeout(() => {
                                    // Open WhatsApp in new tab
                                    window.open(whatsappUrl, '_blank');

                                    // Reset form after successful submission
                                    this.form = {
                                        name: '',
                                        email: '',
                                        subject: '',
                                        message: ''
                                    };

                                    this.isSubmitting = false;
                                }, 500);
                            }
                        }));
                    });
                </script>
            </div>
        </div>
    </div>
</section>
