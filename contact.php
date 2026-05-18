<?php
$submitted = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // In a real app, you could process the email here
    $submitted = true;
}
include 'header.php';
?>

<!-- Hero Section -->
<section class="relative overflow-hidden bg-zinc-950 py-24 md:py-32 border-b border-zinc-900">
  <div class="absolute inset-0 z-0">
    <img src="public/hero/contact.jpg" alt="Contact Us" class="w-full h-full object-cover opacity-80">
    <div class="absolute inset-0 bg-gradient-to-b from-zinc-950/60 via-zinc-950/40 to-zinc-950"></div>
  </div>
  <div class="absolute inset-0 pointer-events-none opacity-20 z-0">
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 rounded-full bg-gradient-to-br from-crimson-600 to-gold-500 blur-[120px]"></div>
  </div>
  
  <div class="container mx-auto px-4 relative z-10 text-center">
    <h1 class="text-4xl md:text-6xl font-black text-white mb-6 tracking-tight drop-shadow-2xl">
      Contact <span class="text-transparent bg-clip-text bg-gradient-to-r from-gold-400 to-amber-500">Chauffeur</span>
    </h1>
    <div class="w-16 h-1 bg-gradient-to-r from-gold-400 to-crimson-600 mx-auto rounded-full mb-6"></div>
    <p class="text-lg text-zinc-300 max-w-2xl mx-auto leading-relaxed text-shadow-sm">
      Get in touch with K.A. Dilshan Harshapriya for premium private bookings, customized beach-hopping tours, or airport transit inquiries.
    </p>
  </div>
</section>

<!-- Contact Section Info Grid -->
<section class="py-24 md:py-32 bg-zinc-950 border-b border-zinc-900">
  <div class="container mx-auto px-4">
    
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
      
      <!-- Phone -->
      <div class="bg-zinc-900/30 border border-zinc-800 rounded-3xl p-8 hover:border-gold-500/20 hover:shadow-2xl hover:shadow-black/50 transition-all duration-300 text-center group">
        <div class="bg-gradient-to-br from-gold-400 to-crimson-600 p-4 rounded-2xl w-fit mx-auto mb-6 group-hover:scale-105 transition-transform shadow-lg shadow-gold-500/10">
          <i data-lucide="phone" class="w-8 h-8 text-white animate-pulse"></i>
        </div>
        <h3 class="font-extrabold text-white mb-3 text-lg">Direct Call</h3>
        <a href="tel:+94773300740" class="text-gold-400 hover:text-gold-300 font-extrabold text-lg tracking-wide transition-colors">
          +94 77 330 0740
        </a>
        <p class="text-zinc-450 text-xs mt-2 uppercase font-bold tracking-wider">Available 24 Hours / 7 Days</p>
      </div>

      <!-- WhatsApp -->
      <div class="bg-zinc-900/30 border border-zinc-800 rounded-3xl p-8 hover:border-green-500/20 hover:shadow-2xl hover:shadow-black/50 transition-all duration-300 text-center group">
        <div class="bg-gradient-to-br from-green-500 to-green-700 p-4 rounded-2xl w-fit mx-auto mb-6 group-hover:scale-105 transition-transform shadow-lg shadow-green-500/10">
          <i data-lucide="message-circle" class="w-8 h-8 text-white"></i>
        </div>
        <h3 class="font-extrabold text-white mb-3 text-lg">WhatsApp Chat</h3>
        <a href="https://wa.me/94773300740" target="_blank" rel="noopener noreferrer" class="text-green-400 hover:text-green-300 font-extrabold text-lg tracking-wide transition-colors">
          +94 77 330 0740
        </a>
        <p class="text-zinc-450 text-xs mt-2 uppercase font-bold tracking-wider">Instant Booking Response</p>
      </div>

      <!-- Email -->
      <div class="bg-zinc-900/30 border border-zinc-800 rounded-3xl p-8 hover:border-gold-500/20 hover:shadow-2xl hover:shadow-black/50 transition-all duration-300 text-center group">
        <div class="bg-gradient-to-br from-gold-400 to-crimson-600 p-4 rounded-2xl w-fit mx-auto mb-6 group-hover:scale-105 transition-transform shadow-lg shadow-gold-500/10">
          <i data-lucide="mail" class="w-8 h-8 text-white"></i>
        </div>
        <h3 class="font-extrabold text-white mb-3 text-lg">Send Email</h3>
        <a href="mailto:joytourshikkaduwa@gmail.com" class="text-gold-400 hover:text-gold-300 font-extrabold text-lg tracking-wide break-all transition-colors">
          joytourshikkaduwa@gmail.com
        </a>
        <p class="text-zinc-450 text-xs mt-2 uppercase font-bold tracking-wider">Response Within 12 Hours</p>
      </div>

      <!-- Location -->
      <div class="bg-zinc-900/30 border border-zinc-800 rounded-3xl p-8 hover:border-gold-500/20 hover:shadow-2xl hover:shadow-black/50 transition-all duration-300 text-center group">
        <div class="bg-gradient-to-br from-gold-400 to-crimson-600 p-4 rounded-2xl w-fit mx-auto mb-6 group-hover:scale-105 transition-transform shadow-lg shadow-gold-500/10">
          <i data-lucide="map-pin" class="w-8 h-8 text-white"></i>
        </div>
        <h3 class="font-extrabold text-white mb-3 text-lg">Base Location</h3>
        <p class="text-gold-400 font-extrabold text-lg tracking-wide">
          Hikkaduwa, Sri Lanka
        </p>
        <p class="text-zinc-450 text-xs mt-2 uppercase font-bold tracking-wider">South Western Coastal Base</p>
      </div>

    </div>

    <!-- Contact Form and Additional Info -->
    <div class="grid md:grid-cols-3 gap-12">
      
      <!-- Form Column -->
      <div class="md:col-span-2">
        <div class="bg-zinc-900/30 border border-zinc-800 rounded-3xl p-8 shadow-2xl">
          <h2 class="text-2xl font-black text-white mb-8 tracking-tight">
            Send us a Chauffeur Request
          </h2>

          <?php if ($submitted): ?>
            <div class="bg-emerald-950/40 border border-emerald-800/80 text-emerald-400 p-4 rounded-xl mb-8 font-semibold flex items-center gap-2">
              ✓ Chauffeur request sent successfully! Dilshan will respond on WhatsApp shortly.
            </div>
          <?php endif; ?>

          <form action="contact.php" method="POST" class="space-y-6">
            <div class="grid md:grid-cols-2 gap-6">
              <input
                type="text"
                name="name"
                placeholder="Your Full Name"
                required
                class="w-full px-4 py-3.5 bg-zinc-950 border border-zinc-850 rounded-xl text-white placeholder-zinc-550 focus:outline-none focus:border-gold-500 focus:ring-1 focus:ring-gold-500/25 transition-all text-sm"
              />
              <input
                type="email"
                name="email"
                placeholder="Your Email Address"
                required
                class="w-full px-4 py-3.5 bg-zinc-950 border border-zinc-850 rounded-xl text-white placeholder-zinc-550 focus:outline-none focus:border-gold-500 focus:ring-1 focus:ring-gold-500/25 transition-all text-sm"
              />
            </div>

            <input
              type="tel"
              name="phone"
              placeholder="Your Phone Number (WhatsApp Recommended)"
              class="w-full px-4 py-3.5 bg-zinc-950 border border-zinc-850 rounded-xl text-white placeholder-zinc-550 focus:outline-none focus:border-gold-500 focus:ring-1 focus:ring-gold-500/25 transition-all text-sm"
            />

            <input
              type="text"
              name="subject"
              placeholder="Subject (e.g. Airport Pickup / Day Tour)"
              required
              class="w-full px-4 py-3.5 bg-zinc-950 border border-zinc-850 rounded-xl text-white placeholder-zinc-550 focus:outline-none focus:border-gold-500 focus:ring-1 focus:ring-gold-500/25 transition-all text-sm"
            />

            <textarea
              name="message"
              placeholder="Detailed tour itinerary or pickup time, passenger count, luggage weight class details..."
              required
              rows="5"
              class="w-full px-4 py-3.5 bg-zinc-950 border border-zinc-850 rounded-xl text-white placeholder-zinc-550 focus:outline-none focus:border-gold-500 focus:ring-1 focus:ring-gold-500/25 transition-all text-sm resize-none"
            ></textarea>

            <button
              type="submit"
              class="w-full bg-gradient-to-r from-gold-400 via-gold-500 to-amber-500 text-zinc-950 py-4 rounded-xl font-extrabold hover:shadow-xl hover:shadow-gold-500/10 hover:scale-[1.01] active:scale-99 transition-all duration-300 text-sm uppercase tracking-wider"
            >
              Send Message
            </button>
          </form>
        </div>
      </div>

      <!-- Additional Info Column -->
      <div class="space-y-6">
        
        <!-- Owner Card -->
        <div class="bg-zinc-900/30 border border-zinc-800 p-6 rounded-2xl">
          <h3 class="font-extrabold text-white mb-4 text-base tracking-wide">Operator</h3>
          <p class="text-zinc-300 font-semibold text-lg">
            K.A. Dilshan Harshapriya
          </p>
          <p class="text-zinc-450 text-xs mt-2 leading-relaxed">
            Certified Tourism Transport & Tour Chauffeur Operator based in Hikkaduwa.
          </p>
        </div>

        <!-- Hours Card -->
        <div class="bg-zinc-900/30 border border-zinc-800 p-6 rounded-2xl">
          <div class="flex items-center gap-2.5 mb-4">
            <i data-lucide="clock" class="text-gold-400 w-5 h-5"></i>
            <h3 class="font-extrabold text-white text-base tracking-wide">Availability</h3>
          </div>
          <ul class="space-y-2 text-zinc-300 text-sm">
            <li class="flex justify-between font-medium">
              <span>Monday - Sunday</span>
              <span class="text-gold-400 font-bold">24 Hours / 7 Days</span>
            </li>
          </ul>
          <p class="text-zinc-450 text-xs mt-4 leading-relaxed">
            Available for booking pickups anytime. Express airport transfers and night tours.
          </p>
        </div>

        <!-- Social Media Card -->
        <div class="bg-zinc-900/30 border border-zinc-800 p-6 rounded-2xl">
          <h3 class="font-extrabold text-white mb-4 text-base tracking-wide">Follow Chauffeur</h3>
          <a href="https://www.facebook.com/people/Joy-tour-hikka/100049957276209/" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2 text-zinc-300 hover:text-blue-400 font-semibold transition-colors text-sm">
            <i data-lucide="facebook" class="text-blue-500 w-5 h-5"></i>
            <div>
              <span class="block">Joy Tour Hikka</span>
              <span class="text-zinc-500 text-xs">1,053 likes &middot; 97 talking &middot; 9 check-ins</span>
            </div>
          </a>
        </div>

      </div>

    </div>
  </div>
</section>

<!-- Map Section (Placeholder) -->
<section class="py-24 bg-zinc-950">
  <div class="container mx-auto px-4">
    <h2 class="text-2xl font-black text-white mb-6 tracking-tight">Base Location Map</h2>
    <div class="bg-zinc-900/20 border border-zinc-800 rounded-3xl aspect-video flex items-center justify-center p-4">
      <div class="text-center group">
        <i data-lucide="map-pin" class="text-crimson-600 mx-auto mb-3 w-12 h-12"></i>
        <p class="text-zinc-300 font-semibold text-base">
          Hikkaduwa, South Western Coast, Sri Lanka
        </p>
        <p class="text-zinc-500 text-xs mt-1 uppercase font-bold tracking-wider">
          Full island transit starting from Hikkaduwa Base
        </p>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
