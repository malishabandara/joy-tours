<?php include 'header.php'; ?>

<!-- Hero Section -->
<section class="relative overflow-hidden bg-zinc-950 text-white py-24 md:py-36 border-b border-zinc-900">
  <div class="absolute inset-0 z-0">
    <img src="public/1.jpg" alt="Joy Tours Sri Lanka" class="w-full h-full object-cover opacity-90">
    <div class="absolute inset-0 bg-gradient-to-b from-zinc-950/40 via-zinc-950/30 to-zinc-950"></div>
  </div>
  <div class="absolute inset-0 pointer-events-none opacity-20 z-0">
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
      <div class="hidden md:flex items-center justify-center">
        <img 
          src="public/logo.png" 
          alt="Joy Tours Hikkaduwa Logo" 
          class="w-full max-w-[450px] object-contain filter drop-shadow-[0_8px_30px_rgba(253,224,71,0.3)] hover:scale-105 transition-transform duration-500" 
        />
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
      <a href="taxi.php" class="relative group bg-zinc-900/50 backdrop-blur-sm border border-zinc-800 p-8 rounded-[2rem] overflow-hidden hover:border-gold-500/40 transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_20px_40px_-15px_rgba(253,224,71,0.15)] flex flex-col h-full cursor-pointer">
        <div class="absolute inset-0 bg-gradient-to-br from-gold-500/5 via-transparent to-crimson-600/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-gold-400 to-crimson-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>

        <div class="relative z-10 bg-zinc-950 border border-zinc-800 p-4 rounded-2xl w-16 h-16 flex items-center justify-center mb-8 group-hover:bg-gradient-to-br group-hover:from-gold-400 group-hover:to-amber-500 group-hover:border-transparent transition-all duration-500 shadow-lg group-hover:shadow-gold-500/20 group-hover:-translate-y-1">
          <i data-lucide="plane-takeoff" class="w-7 h-7 text-gold-400 group-hover:text-zinc-950 transition-colors duration-500"></i>
        </div>

        <div class="relative z-10 flex-1 flex flex-col">
          <h3 class="font-black text-white mb-3 text-xl group-hover:text-gold-400 transition-colors duration-300">
            Airport Transfers
          </h3>
          <p class="text-zinc-400 text-sm leading-relaxed mb-6 flex-1 group-hover:text-zinc-300 transition-colors duration-300">
            Reliable and comfortable airport pickup and drop-off services for a seamless, stress-free start or end to your journey.
          </p>
          <div class="flex items-center gap-2 text-gold-500 font-extrabold text-xs uppercase tracking-widest group-hover:gap-3 transition-all duration-300">
            <span>Explore Options</span>
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </div>
        </div>

        <i data-lucide="plane-takeoff" class="absolute -bottom-4 -right-4 w-32 h-32 text-zinc-100/5 group-hover:text-gold-500/10 transition-colors duration-500 pointer-events-none transform -rotate-12 group-hover:scale-110"></i>
      </a>

      <!-- City Tours -->
      <a href="packages.php" class="relative group bg-zinc-900/50 backdrop-blur-sm border border-zinc-800 p-8 rounded-[2rem] overflow-hidden hover:border-gold-500/40 transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_20px_40px_-15px_rgba(253,224,71,0.15)] flex flex-col h-full cursor-pointer">
        <div class="absolute inset-0 bg-gradient-to-br from-gold-500/5 via-transparent to-crimson-600/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-gold-400 to-crimson-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>

        <div class="relative z-10 bg-zinc-950 border border-zinc-800 p-4 rounded-2xl w-16 h-16 flex items-center justify-center mb-8 group-hover:bg-gradient-to-br group-hover:from-gold-400 group-hover:to-amber-500 group-hover:border-transparent transition-all duration-500 shadow-lg group-hover:shadow-gold-500/20 group-hover:-translate-y-1">
          <i data-lucide="map-pinned" class="w-7 h-7 text-gold-400 group-hover:text-zinc-950 transition-colors duration-500"></i>
        </div>

        <div class="relative z-10 flex-1 flex flex-col">
          <h3 class="font-black text-white mb-3 text-xl group-hover:text-gold-400 transition-colors duration-300">
            City Tours
          </h3>
          <p class="text-zinc-400 text-sm leading-relaxed mb-6 flex-1 group-hover:text-zinc-300 transition-colors duration-300">
            Explore Hikkaduwa, Galle Fort, and breathtaking local highlights with our highly experienced and knowledgeable local guides.
          </p>
          <div class="flex items-center gap-2 text-gold-500 font-extrabold text-xs uppercase tracking-widest group-hover:gap-3 transition-all duration-300">
            <span>View Packages</span>
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </div>
        </div>

        <i data-lucide="map-pinned" class="absolute -bottom-4 -right-4 w-32 h-32 text-zinc-100/5 group-hover:text-gold-500/10 transition-colors duration-500 pointer-events-none transform rotate-12 group-hover:scale-110"></i>
      </a>

      <!-- Group Bookings -->
      <a href="taxi.php" class="relative group bg-zinc-900/50 backdrop-blur-sm border border-zinc-800 p-8 rounded-[2rem] overflow-hidden hover:border-gold-500/40 transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_20px_40px_-15px_rgba(253,224,71,0.15)] flex flex-col h-full cursor-pointer">
        <div class="absolute inset-0 bg-gradient-to-br from-gold-500/5 via-transparent to-crimson-600/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-gold-400 to-crimson-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>

        <div class="relative z-10 bg-zinc-950 border border-zinc-800 p-4 rounded-2xl w-16 h-16 flex items-center justify-center mb-8 group-hover:bg-gradient-to-br group-hover:from-gold-400 group-hover:to-amber-500 group-hover:border-transparent transition-all duration-500 shadow-lg group-hover:shadow-gold-500/20 group-hover:-translate-y-1">
          <i data-lucide="users" class="w-7 h-7 text-gold-400 group-hover:text-zinc-950 transition-colors duration-500"></i>
        </div>

        <div class="relative z-10 flex-1 flex flex-col">
          <h3 class="font-black text-white mb-3 text-xl group-hover:text-gold-400 transition-colors duration-300">
            Group Bookings
          </h3>
          <p class="text-zinc-400 text-sm leading-relaxed mb-6 flex-1 group-hover:text-zinc-300 transition-colors duration-300">
            Perfect for families, friends, and tour groups of any size. Spacious vans offering comfort for everyone traveling together.
          </p>
          <div class="flex items-center gap-2 text-gold-500 font-extrabold text-xs uppercase tracking-widest group-hover:gap-3 transition-all duration-300">
            <span>Discover Fleet</span>
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </div>
        </div>

        <i data-lucide="users" class="absolute -bottom-4 -right-4 w-32 h-32 text-zinc-100/5 group-hover:text-gold-500/10 transition-colors duration-500 pointer-events-none transform -rotate-12 group-hover:scale-110"></i>
      </a>

      <!-- Premium Comfort -->
      <a href="about.php" class="relative group bg-zinc-900/50 backdrop-blur-sm border border-zinc-800 p-8 rounded-[2rem] overflow-hidden hover:border-gold-500/40 transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_20px_40px_-15px_rgba(253,224,71,0.15)] flex flex-col h-full cursor-pointer">
        <div class="absolute inset-0 bg-gradient-to-br from-gold-500/5 via-transparent to-crimson-600/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-gold-400 to-crimson-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>

        <div class="relative z-10 bg-zinc-950 border border-zinc-800 p-4 rounded-2xl w-16 h-16 flex items-center justify-center mb-8 group-hover:bg-gradient-to-br group-hover:from-gold-400 group-hover:to-amber-500 group-hover:border-transparent transition-all duration-500 shadow-lg group-hover:shadow-gold-500/20 group-hover:-translate-y-1">
          <i data-lucide="gem" class="w-7 h-7 text-gold-400 group-hover:text-zinc-950 transition-colors duration-500"></i>
        </div>

        <div class="relative z-10 flex-1 flex flex-col">
          <h3 class="font-black text-white mb-3 text-xl group-hover:text-gold-400 transition-colors duration-300">
            Premium Comfort
          </h3>
          <p class="text-zinc-400 text-sm leading-relaxed mb-6 flex-1 group-hover:text-zinc-300 transition-colors duration-300">
            Exceptionally clean, well-maintained, and fully air-conditioned vehicles ensuring maximum relaxation on every journey.
          </p>
          <div class="flex items-center gap-2 text-gold-500 font-extrabold text-xs uppercase tracking-widest group-hover:gap-3 transition-all duration-300">
            <span>Learn More</span>
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </div>
        </div>

        <i data-lucide="gem" class="absolute -bottom-4 -right-4 w-32 h-32 text-zinc-100/5 group-hover:text-gold-500/10 transition-colors duration-500 pointer-events-none transform rotate-12 group-hover:scale-110"></i>
      </a>

    </div>
  </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-24 md:py-32 bg-zinc-950 relative border-b border-zinc-900 overflow-hidden">
  <div class="absolute inset-0 z-0">
    <img src="public/2.jpg" alt="Premium Service" class="w-full h-full object-cover opacity-80">
    <div class="absolute inset-0 bg-gradient-to-b from-zinc-950/80 via-zinc-950/40 to-zinc-950"></div>
  </div>
  
  <div class="container mx-auto px-4 relative z-10">
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
      <div class="grid grid-cols-1 gap-6 relative">
        <!-- Decorative Glow -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-gold-500/20 blur-[100px] pointer-events-none rounded-full"></div>
        
        <!-- Stat 1 -->
        <div class="relative group bg-zinc-900/60 backdrop-blur-xl border border-zinc-800/80 p-6 rounded-[2rem] hover:border-blue-500/50 hover:shadow-[0_0_40px_-10px_rgba(59,130,246,0.3)] hover:-translate-y-1 transition-all duration-500 flex items-center gap-6 overflow-hidden">
          <div class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
          <div class="bg-zinc-950 border border-zinc-800 p-4 rounded-2xl group-hover:scale-110 group-hover:border-blue-500/50 group-hover:bg-blue-500/10 transition-all duration-500 flex-shrink-0 shadow-lg relative z-10">
            <i data-lucide="facebook" class="w-8 h-8 text-blue-500"></i>
          </div>
          <div class="relative z-10">
            <div class="text-4xl font-black text-white group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-blue-400 group-hover:to-blue-200 transition-all duration-300">
              1,053+
            </div>
            <p class="text-zinc-400 text-sm font-bold tracking-widest uppercase mt-1">Followers & Fans</p>
          </div>
        </div>

        <!-- Stat 2 -->
        <div class="relative group bg-zinc-900/60 backdrop-blur-xl border border-zinc-800/80 p-6 rounded-[2rem] hover:border-gold-500/50 hover:shadow-[0_0_40px_-10px_rgba(253,224,71,0.3)] hover:-translate-y-1 transition-all duration-500 flex items-center gap-6 overflow-hidden md:ml-8">
          <div class="absolute inset-0 bg-gradient-to-r from-gold-500/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
          <div class="bg-zinc-950 border border-zinc-800 p-4 rounded-2xl group-hover:scale-110 group-hover:border-gold-500/50 group-hover:bg-gold-500/10 transition-all duration-500 flex-shrink-0 shadow-lg relative z-10">
            <i data-lucide="star" class="w-8 h-8 text-gold-400 fill-gold-400"></i>
          </div>
          <div class="relative z-10">
            <div class="text-4xl font-black text-white group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-gold-400 group-hover:to-amber-300 transition-all duration-300">
              5.0 ★
            </div>
            <p class="text-zinc-400 text-sm font-bold tracking-widest uppercase mt-1">Average Rating</p>
          </div>
        </div>

        <!-- Stat 3 -->
        <div class="relative group bg-zinc-900/60 backdrop-blur-xl border border-zinc-800/80 p-6 rounded-[2rem] hover:border-crimson-500/50 hover:shadow-[0_0_40px_-10px_rgba(225,29,72,0.3)] hover:-translate-y-1 transition-all duration-500 flex items-center gap-6 overflow-hidden">
          <div class="absolute inset-0 bg-gradient-to-r from-crimson-500/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
          <div class="bg-zinc-950 border border-zinc-800 p-4 rounded-2xl group-hover:scale-110 group-hover:border-crimson-500/50 group-hover:bg-crimson-500/10 transition-all duration-500 flex-shrink-0 shadow-lg relative z-10">
            <i data-lucide="award" class="w-8 h-8 text-crimson-500"></i>
          </div>
          <div class="relative z-10">
            <div class="text-4xl font-black text-white group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-crimson-400 group-hover:to-red-300 transition-all duration-300">
              10+ Yrs
            </div>
            <p class="text-zinc-400 text-sm font-bold tracking-widest uppercase mt-1">Professional Experience</p>
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
          <div class="relative group bg-zinc-950 border border-zinc-800 p-8 rounded-[2rem] hover:border-gold-500/40 hover:shadow-[0_20px_40px_-15px_rgba(253,224,71,0.1)] hover:-translate-y-2 transition-all duration-500 flex flex-col justify-between overflow-hidden">
            <!-- Background Glow -->
            <div class="absolute top-0 right-0 w-32 h-32 bg-gold-500/5 blur-3xl rounded-full pointer-events-none group-hover:bg-gold-500/10 transition-colors duration-500"></div>
            
            <div class="relative z-10">
              <i data-lucide="quote" class="w-10 h-10 text-zinc-800 mb-6 group-hover:text-gold-500/30 transition-colors duration-500"></i>
              <div class="flex items-center gap-1 mb-6">';
              for ($i = 0; $i < $t['rating']; $i++) {
                  echo '<i data-lucide="star" class="w-4 h-4 text-gold-400 fill-gold-400"></i>';
              }
              echo '
              </div>
              <p class="text-zinc-300 text-base leading-relaxed mb-8 italic">"'.$t['text'].'"</p>
            </div>
            
            <div class="relative z-10 mt-auto flex items-center gap-4 bg-zinc-900/50 p-4 rounded-2xl border border-zinc-800/80 group-hover:border-gold-500/20 transition-colors duration-500">
              <div class="w-12 h-12 rounded-full bg-gradient-to-br from-gold-400 to-crimson-600 flex items-center justify-center text-zinc-950 font-black text-lg shadow-lg">
                '.$t['name'][0].'
              </div>
              <div>
                <p class="font-black text-white text-sm">'.$t['name'].'</p>
                <div class="flex items-center gap-1.5 mt-1">
                  <i data-lucide="map-pin" class="w-3 h-3 text-gold-500"></i>
                  <p class="text-xs text-zinc-400 font-bold uppercase tracking-wider">'.$t['location'].'</p>
                </div>
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
  <div class="absolute inset-0 z-0">
    <img src="public/3.jpg" alt="Explore Sri Lanka" class="w-full h-full object-cover opacity-80">
    <div class="absolute inset-0 bg-gradient-to-b from-zinc-950/80 via-zinc-950/40 to-zinc-950/80"></div>
  </div>
  <div class="absolute inset-0 pointer-events-none opacity-20 z-0">
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
