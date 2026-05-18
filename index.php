<?php include 'header.php'; ?>

<!-- Hero Section -->
<section class="relative overflow-hidden bg-zinc-950 text-white py-24 md:py-36 border-b border-zinc-900">
  <div class="absolute inset-0 pointer-events-none opacity-20">
    <div class="absolute top-20 right-10 w-96 h-96 rounded-full bg-gradient-to-br from-gold-500 to-amber-600 blur-[150px]"></div>
    <div class="absolute bottom-0 left-20 w-[450px] h-[450px] rounded-full bg-gradient-to-br from-crimson-600 to-red-700 blur-[150px]"></div>
  </div>

  <div class="container mx-auto px-4 relative z-10">
    <div class="grid md:grid-cols-2 gap-16 items-center">
      
      <!-- Content Column -->
      <div>
        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-zinc-900 border border-zinc-800 mb-6 shadow-inner">
          <span class="w-2 h-2 rounded-full bg-gold-400 animate-ping"></span>
          <span class="text-xs font-bold text-gold-400 uppercase tracking-widest">Premium Tour & Taxi Service</span>
        </div>
        <h1 class="text-4xl md:text-6xl font-black mb-6 leading-tight tracking-tight text-white">
          Your Trusted <br/>
          <span class="text-transparent bg-clip-text bg-gradient-to-r from-gold-400 via-amber-500 to-gold-300">
            Taxi & Tour Partner
          </span> <br/>
          in Hikkaduwa
        </h1>
        <p class="text-lg text-zinc-300 mb-10 leading-relaxed max-w-xl">
          Experience the beauty of Sri Lanka in unmatched comfort and style. Safe, punctual, and highly professional transportation for discerning travelers.
        </p>
        <div class="flex flex-col sm:flex-row gap-4">
          <a
            href="taxi.php"
            class="bg-gradient-to-r from-gold-400 via-gold-500 to-amber-500 text-zinc-950 px-8 py-4 rounded-xl font-extrabold hover:shadow-xl hover:shadow-gold-500/20 hover:scale-105 active:scale-95 transition-all duration-300 flex items-center justify-center gap-2"
          >
            <span>Book Your Ride</span>
            <i data-lucide="arrow-right" class="w-5 h-5 stroke-[3]"></i>
          </a>
          <a
            href="tel:+94773300740"
            class="border-2 border-crimson-600 text-crimson-400 px-8 py-4 rounded-xl font-extrabold hover:bg-crimson-600/10 hover:border-crimson-500 hover:scale-105 active:scale-95 transition-all duration-300 flex items-center justify-center gap-2"
          >
            <i data-lucide="phone" class="w-5 h-5"></i>
            <span>Call Direct</span>
          </a>
        </div>
      </div>

      <!-- Right Logo Box Column -->
      <div class="hidden md:block">
        <div class="relative">
          <div class="absolute -inset-1.5 bg-gradient-to-r from-gold-500 to-crimson-600 rounded-3xl blur opacity-30 animate-tilt"></div>
          <div class="bg-zinc-900/60 backdrop-blur-md rounded-3xl p-8 border border-zinc-800/80 relative z-10 shadow-2xl shadow-black/80">
            <div class="aspect-square bg-gradient-to-br from-zinc-950 via-zinc-900 to-zinc-950 rounded-2xl flex items-center justify-center p-8 border border-zinc-800/50">
              <img 
                src="public/logo.png" 
                alt="Joy Tours Hikkaduwa Logo" 
                class="w-full h-full object-contain filter drop-shadow-[0_4px_20px_rgba(253,224,71,0.25)] hover:scale-102 transition-transform duration-500" 
              />
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Services Section -->
<section class="py-24 md:py-32 bg-zinc-950 relative border-b border-zinc-900">
  <div class="container mx-auto px-4">
    <div class="text-center mb-20">
      <h2 class="text-3xl md:text-5xl font-black text-white mb-4 tracking-tight">
        Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-gold-400 to-amber-500">Premium Services</span>
      </h2>
      <div class="w-16 h-1 bg-gradient-to-r from-gold-400 to-crimson-600 mx-auto rounded-full mb-4"></div>
      <p class="text-zinc-400 max-w-2xl mx-auto text-base">
        We offer a wide range of professional transportation and tour services tailored to ensure a memorable Sri Lankan experience.
      </p>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
      
      <!-- Airport Transfers -->
      <div class="bg-zinc-900/40 backdrop-blur border border-zinc-800 hover:border-gold-500/30 p-8 rounded-2xl hover:shadow-2xl hover:shadow-black/50 hover:translate-y-[-4px] transition-all duration-300 group">
        <div class="bg-gradient-to-br from-gold-400 to-crimson-600 p-4 rounded-xl w-fit mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg shadow-gold-500/10">
          <i data-lucide="car" class="w-6 h-6 text-white"></i>
        </div>
        <h3 class="font-extrabold text-white mb-3 text-xl group-hover:text-gold-400 transition-colors">
          Airport Transfers
        </h3>
        <p class="text-zinc-450 text-sm leading-relaxed">
          Reliable and comfortable airport pickup and drop-off services.
        </p>
      </div>

      <!-- City Tours -->
      <div class="bg-zinc-900/40 backdrop-blur border border-zinc-800 hover:border-gold-500/30 p-8 rounded-2xl hover:shadow-2xl hover:shadow-black/50 hover:translate-y-[-4px] transition-all duration-300 group">
        <div class="bg-gradient-to-br from-gold-400 to-crimson-600 p-4 rounded-xl w-fit mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg shadow-gold-500/10">
          <i data-lucide="map-pin" class="w-6 h-6 text-white"></i>
        </div>
        <h3 class="font-extrabold text-white mb-3 text-xl group-hover:text-gold-400 transition-colors">
          City Tours
        </h3>
        <p class="text-zinc-450 text-sm leading-relaxed">
          Explore Hikkaduwa with our experienced local guides.
        </p>
      </div>

      <!-- Group Bookings -->
      <div class="bg-zinc-900/40 backdrop-blur border border-zinc-800 hover:border-gold-500/30 p-8 rounded-2xl hover:shadow-2xl hover:shadow-black/50 hover:translate-y-[-4px] transition-all duration-300 group">
        <div class="bg-gradient-to-br from-gold-400 to-crimson-600 p-4 rounded-xl w-fit mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg shadow-gold-500/10">
          <i data-lucide="users" class="w-6 h-6 text-white"></i>
        </div>
        <h3 class="font-extrabold text-white mb-3 text-xl group-hover:text-gold-400 transition-colors">
          Group Bookings
        </h3>
        <p class="text-zinc-450 text-sm leading-relaxed">
          Perfect for families and tour groups of any size.
        </p>
      </div>

      <!-- Premium Comfort -->
      <div class="bg-zinc-900/40 backdrop-blur border border-zinc-800 hover:border-gold-500/30 p-8 rounded-2xl hover:shadow-2xl hover:shadow-black/50 hover:translate-y-[-4px] transition-all duration-300 group">
        <div class="bg-gradient-to-br from-gold-400 to-crimson-600 p-4 rounded-xl w-fit mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg shadow-gold-500/10">
          <i data-lucide="star" class="w-6 h-6 text-white"></i>
        </div>
        <h3 class="font-extrabold text-white mb-3 text-xl group-hover:text-gold-400 transition-colors">
          Premium Comfort
        </h3>
        <p class="text-zinc-450 text-sm leading-relaxed">
          Clean, well-maintained vehicles for your comfort.
        </p>
      </div>

    </div>
  </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-24 md:py-32 bg-zinc-950 relative border-b border-zinc-900">
  <div class="container mx-auto px-4">
    <div class="grid md:grid-cols-2 gap-16 items-center">
      
      <!-- Highlights list -->
      <div>
        <h2 class="text-3xl md:text-5xl font-black text-white mb-6 tracking-tight">
          Why Choose <br/>
          <span class="text-transparent bg-clip-text bg-gradient-to-r from-gold-400 via-amber-500 to-crimson-500">Joy Tours?</span>
        </h2>
        <div class="w-16 h-1 bg-gradient-to-r from-gold-400 to-crimson-600 rounded-full mb-8"></div>
        <ul class="space-y-5">
          <?php
          $points = [
            "Professional, fully licensed English-speaking drivers",
            "Meticulously clean, modern, air-conditioned fleet",
            "Transparent flat rates with absolutely no hidden charges",
            "24/7 round-the-clock availability & fast booking support",
            "Punctual airport arrivals & flexible custom-tailored itineraries",
            "Uncompromised passenger safety and child-seats available",
          ];
          foreach ($points as $point) {
              echo '
              <li class="flex items-start gap-4">
                <div class="bg-gradient-to-br from-gold-400 to-amber-500 text-zinc-950 font-black rounded-full w-6 h-6 flex items-center justify-center flex-shrink-0 mt-1 shadow-md shadow-gold-500/10 text-sm">
                  ✓
                </div>
                <span class="text-zinc-300 font-medium text-base">'.$point.'</span>
              </li>';
          }
          ?>
        </ul>
      </div>

      <!-- Right stats side cards -->
      <div class="bg-gradient-to-br from-zinc-900 to-zinc-950 p-8 rounded-3xl border border-zinc-800/80 shadow-2xl shadow-black/60 relative">
        <div class="absolute top-0 right-0 w-32 h-32 bg-gold-400/5 blur-3xl pointer-events-none"></div>
        <div class="space-y-6 relative z-10">
          <div class="bg-zinc-950/60 p-6 rounded-xl border border-zinc-850 hover:border-gold-500/20 transition-colors duration-300">
            <div class="text-4xl font-black text-transparent bg-clip-text bg-gradient-to-r from-gold-400 to-amber-400 mb-1">
              1,053+
            </div>
            <p class="text-zinc-450 text-sm font-semibold tracking-wide uppercase">Facebook Followers & Fans</p>
          </div>
          <div class="bg-zinc-950/60 p-6 rounded-xl border border-zinc-850 hover:border-crimson-500/20 transition-colors duration-300">
            <div class="text-4xl font-black text-transparent bg-clip-text bg-gradient-to-r from-crimson-500 to-red-400 mb-1">
              5.0 ★
            </div>
            <p class="text-zinc-450 text-sm font-semibold tracking-wide uppercase">Average Customer Rating</p>
          </div>
          <div class="bg-zinc-950/60 p-6 rounded-xl border border-zinc-850 hover:border-gold-500/20 transition-colors duration-300">
            <div class="text-4xl font-black text-transparent bg-clip-text bg-gradient-to-r from-gold-400 to-amber-400 mb-1">
              10+ Yrs
            </div>
            <p class="text-zinc-450 text-sm font-semibold tracking-wide uppercase">Of Professional Experience</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Testimonials Section -->
<section class="py-24 md:py-32 bg-zinc-950 border-b border-zinc-900">
  <div class="container mx-auto px-4">
    <div class="text-center mb-20">
      <h2 class="text-3xl md:text-5xl font-black text-white mb-4 tracking-tight">
        What Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-gold-400 to-amber-500">Clients Say</span>
      </h2>
      <div class="w-16 h-1 bg-gradient-to-r from-gold-400 to-crimson-600 mx-auto rounded-full mb-4"></div>
      <p class="text-zinc-450 max-w-2xl mx-auto text-base">
        Real reviews from international travelers who experienced our service in Hikkaduwa.
      </p>
    </div>

    <div class="grid md:grid-cols-3 gap-8">
      <?php
      $testimonials = [
        [
          "name" => "Sarah Johnson",
          "location" => "United Kingdom",
          "text" => "Dilshan was absolutely fantastic! He picked us up from the airport on time, helped with our luggage, and gave us brilliant tips about Hikkaduwa. Clean, air-conditioned car — couldn't have asked for more.",
          "rating" => 5
        ],
        [
          "name" => "Marco Rossi",
          "location" => "Italy",
          "text" => "Best taxi service in Sri Lanka, without a doubt! We used Joy Tours for 5 days straight — beach trips, Galle Fort, even a day to Ella. Dilshan was always on time and incredibly friendly.",
          "rating" => 5
        ],
        [
          "name" => "Emma Wilson",
          "location" => "Australia",
          "text" => "Booked through Facebook and it was seamless. Very quick to respond on WhatsApp. The car was spotlessly clean and Dilshan knew every great spot along the south coast. Highly recommend!",
          "rating" => 5
        ]
      ];

      foreach ($testimonials as $t) {
          echo '
          <div class="bg-zinc-900/40 backdrop-blur border border-zinc-800 hover:border-gold-500/20 p-8 rounded-2xl shadow-xl hover:shadow-black/50 hover:translate-y-[-4px] transition-all duration-300 flex flex-col justify-between">
            <div>
              <div class="flex items-center gap-1.5 mb-6 text-gold-400 text-lg">';
              for ($i = 0; $i < $t['rating']; $i++) {
                  echo '★';
              }
              echo '
              </div>
              <p class="text-zinc-300 mb-6 italic leading-relaxed">"'.$t['text'].'"</p>
            </div>
            <div class="border-t border-zinc-800/80 pt-5 mt-auto flex items-center justify-between">
              <div>
                <p class="font-extrabold text-white">'.$t['name'].'</p>
                <p class="text-xs text-gold-400/80 font-bold uppercase tracking-wider mt-0.5">'.$t['location'].'</p>
              </div>
              <div class="w-8 h-8 rounded-full bg-zinc-800 flex items-center justify-center text-zinc-400 text-xs font-bold uppercase">
                '.$t['name'][0].'
              </div>
            </div>
          </div>';
      }
      ?>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="py-24 md:py-36 bg-zinc-950 relative overflow-hidden">
  <div class="absolute inset-0 pointer-events-none opacity-20">
    <div class="absolute top-[-50px] right-[-50px] w-96 h-96 rounded-full bg-gold-400 blur-[150px]"></div>
    <div class="absolute bottom-[-50px] left-[-50px] w-96 h-96 rounded-full bg-crimson-600 blur-[150px]"></div>
  </div>
  <div class="container mx-auto px-4 text-center relative z-10">
    <h2 class="text-3xl md:text-6xl font-black mb-6 tracking-tight text-white leading-tight">
      Ready to Explore <br class="sm:hidden" />
      <span class="text-transparent bg-clip-text bg-gradient-to-r from-gold-400 via-amber-500 to-crimson-500">beautiful Sri Lanka?</span>
    </h2>
    <p class="text-lg text-zinc-300 mb-10 max-w-xl mx-auto leading-relaxed">
      Reserve your private chauffeur today and guarantee premium comfort and punctuality.
    </p>
    <div class="flex flex-col sm:flex-row justify-center gap-4 max-w-2xl mx-auto flex-wrap">
      <a
        href="contact.php"
        class="bg-gradient-to-r from-gold-400 via-gold-500 to-amber-500 text-zinc-950 px-8 py-4 rounded-xl font-extrabold hover:shadow-xl hover:shadow-gold-500/20 hover:scale-105 active:scale-95 transition-all duration-300 flex items-center justify-center gap-2"
      >
        Get in Touch
      </a>
      <a
        href="tel:+94773300740"
        class="border-2 border-crimson-600 text-crimson-400 px-8 py-4 rounded-xl font-extrabold hover:bg-crimson-600/10 hover:border-crimson-500 hover:scale-105 active:scale-95 transition-all duration-300 flex items-center justify-center gap-2"
      >
        <i data-lucide="phone" class="w-5 h-5"></i>
        <span>Call Direct</span>
      </a>
      <a
        href="https://www.facebook.com/people/Joy-tour-hikka/100049957276209/"
        target="_blank" rel="noopener noreferrer"
        class="border-2 border-zinc-700 text-zinc-300 px-8 py-4 rounded-xl font-extrabold hover:bg-zinc-800 hover:border-zinc-500 hover:text-white hover:scale-105 active:scale-95 transition-all duration-300 flex items-center justify-center gap-2"
      >
        <i data-lucide="facebook" class="w-5 h-5 text-blue-400"></i>
        <span>Follow on Facebook</span>
      </a>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
