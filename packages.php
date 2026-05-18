<?php include 'header.php'; ?>

<!-- Hero Section -->
<section class="relative overflow-hidden bg-zinc-950 py-24 md:py-32 border-b border-zinc-900">
  <div class="absolute inset-0 z-0">
    <img src="public/hero/packages.jpg" alt="Tour Packages" class="w-full h-full object-cover opacity-80">
    <div class="absolute inset-0 bg-gradient-to-b from-zinc-950/60 via-zinc-950/40 to-zinc-950"></div>
  </div>
  <div class="absolute inset-0 pointer-events-none opacity-20 z-0">
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 rounded-full bg-gradient-to-br from-crimson-600 to-gold-500 blur-[120px]"></div>
  </div>
  
  <div class="container mx-auto px-4 relative z-10 text-center">
    <div class="inline-flex items-center gap-2 bg-zinc-900/80 border border-zinc-800 rounded-full px-5 py-2.5 mb-8 backdrop-blur-md">
      <i data-lucide="compass" class="w-4 h-4 text-gold-400"></i>
      <span class="text-zinc-300 text-sm font-bold tracking-widest uppercase">Explore Sri Lanka</span>
    </div>
    <h1 class="text-4xl md:text-6xl lg:text-7xl font-black text-white mb-6 tracking-tight drop-shadow-2xl">
      Tour Packages & <br class="hidden md:block"/>
      <span class="text-transparent bg-clip-text bg-gradient-to-r from-gold-400 via-amber-400 to-crimson-500">Premium Services</span>
    </h1>
    <div class="w-24 h-1 bg-gradient-to-r from-gold-400 to-crimson-600 mx-auto rounded-full mb-8"></div>
    <p class="text-lg md:text-xl text-zinc-300 max-w-3xl mx-auto leading-relaxed font-medium text-shadow-sm">
      From complete island tours to thrilling day trips and seamless airport logistics. Discover our expertly crafted, fully customizable travel packages.
    </p>
  </div>
</section>

<!-- Signature Tour Packages Grid -->
<section class="py-24 bg-zinc-950 border-b border-zinc-900">
  <div class="container mx-auto px-4">
    
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      
      <?php
      $packages = [
        [
          "tag" => "Whole Package / Full Tour",
          "title" => "Ultimate Family Getaway",
          "duration" => "11 Nights / 12 Days",
          "summary" => "The complete Sri Lankan experience. Kandy, Ella, Yala Safari, and Southern Beaches. Perfect for families looking for history, wildlife, and pure beach bliss.",
          "image" => "public/gallery/15.jpg",
          "icon" => "map",
          "color" => "gold"
        ],
        [
          "tag" => "Round Trip",
          "title" => "Cultural Triangle & Coast",
          "duration" => "6 Days + Beach Stay",
          "summary" => "Action-packed cultural tour featuring Sigiriya Rock, Dambulla Caves, and the Kandy Temple, followed by a relaxing coastal drop-off.",
          "image" => "public/gallery/19.jpg",
          "icon" => "landmark",
          "color" => "crimson"
        ],
        [
          "tag" => "One Day Trip",
          "title" => "Yala & Ella Adventure",
          "duration" => "Single Day Tour",
          "summary" => "A thrilling cross-country day hitting viral highlights: Yala National Park safari, Nine Arch Bridge, Little Adam's Peak, and Ravana Zip Line.",
          "image" => "public/gallery/24.jpg",
          "icon" => "mountain",
          "color" => "green"
        ],
        [
          "tag" => "Safari Tour",
          "title" => "Unawatuna to Yala Safari",
          "duration" => "Up & Down Trip",
          "summary" => "Break away from the beach for a dedicated wildlife escape. Spot leopards and wild elephants with our rugged 4x4 jeep safari experience.",
          "image" => "public/gallery/9.jpg",
          "icon" => "camera",
          "color" => "amber"
        ],
        [
          "tag" => "Full Day Tour",
          "title" => "Galle Fort & Coast Excursion",
          "duration" => "8-10 Hours",
          "summary" => "Travel the beautiful southern coast. Explore historical Galle Fort, Turtle Hatcheries, Moonstone Mines, and enjoy a Lagoon Boat Safari.",
          "image" => "public/gallery/31.jpg",
          "icon" => "sun",
          "color" => "blue"
        ],
        [
          "tag" => "Hotel Jeep",
          "title" => "Hotel Safari Transfers",
          "duration" => "Flexible Timing",
          "summary" => "Direct, rugged jeep transfers from your hotel to nearby national parks and back. Experience true wildlife terrain safely.",
          "image" => "public/gallery/25.jpg",
          "icon" => "truck",
          "color" => "orange"
        ],
      ];

      foreach ($packages as $pkg) {
        // Tailwind color mapping for dynamic tags
        $colorClass = "";
        switch($pkg['color']) {
          case 'gold': $colorClass = "bg-gold-500/90 text-zinc-900"; break;
          case 'crimson': $colorClass = "bg-crimson-600/90 text-white"; break;
          case 'green': $colorClass = "bg-green-600/90 text-white"; break;
          case 'amber': $colorClass = "bg-amber-600/90 text-white"; break;
          case 'blue': $colorClass = "bg-blue-600/90 text-white"; break;
          case 'orange': $colorClass = "bg-orange-600/90 text-white"; break;
        }

        echo '
        <div class="group relative rounded-[2rem] overflow-hidden bg-zinc-900 border border-zinc-800 hover:border-gold-500/40 hover:shadow-2xl hover:shadow-black/60 transition-all duration-500 flex flex-col h-full">
          <!-- Image Header -->
          <div class="h-64 relative overflow-hidden">
            <img src="'.$pkg['image'].'" alt="'.$pkg['title'].'" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 group-hover:brightness-110" loading="lazy">
            <div class="absolute inset-0 bg-gradient-to-t from-zinc-950 via-zinc-950/20 to-transparent"></div>
            
            <!-- Tag Badge -->
            <div class="absolute top-5 left-5 '.$colorClass.' font-extrabold text-xs uppercase tracking-wider px-3.5 py-1.5 rounded-full shadow-lg backdrop-blur-md">
              '.$pkg['tag'].'
            </div>
          </div>

          <!-- Content -->
          <div class="p-8 pt-6 flex-1 flex flex-col relative z-10 bg-zinc-950/90 backdrop-blur-md">
            <div class="flex items-center gap-2 text-gold-400 font-bold text-xs uppercase tracking-widest mb-3">
              <i data-lucide="clock" class="w-3.5 h-3.5"></i> '.$pkg['duration'].'
            </div>
            
            <h3 class="text-2xl font-black text-white mb-3 leading-tight group-hover:text-gold-400 transition-colors">
              '.$pkg['title'].'
            </h3>
            
            <p class="text-zinc-400 text-sm leading-relaxed mb-8 flex-1">
              '.$pkg['summary'].'
            </p>
            
            <a href="contact.php" class="inline-flex items-center justify-between w-full bg-zinc-900 hover:bg-gold-500 hover:text-zinc-950 text-white border border-zinc-800 hover:border-gold-500 px-5 py-3.5 rounded-xl font-bold transition-all duration-300 mt-auto">
              <span>Inquire Package</span>
              <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
            </a>
          </div>
        </div>';
      }
      ?>
      
    </div>
  </div>
</section>

<!-- Dedicated Airport Service Banner -->
<section class="py-20 relative overflow-hidden border-b border-zinc-900">
  <div class="absolute inset-0 z-0">
    <img src="public/gallery/14.jpg" alt="Airport Transfer Fleet" class="w-full h-full object-cover opacity-30 blur-[2px]" />
    <div class="absolute inset-0 bg-gradient-to-r from-zinc-950 via-zinc-950/95 to-zinc-950/60"></div>
  </div>
  
  <div class="container mx-auto px-4 relative z-10">
    <div class="max-w-3xl">
      <div class="inline-block bg-crimson-600/20 border border-crimson-500/30 text-crimson-400 font-black text-xs uppercase tracking-widest px-3 py-1 rounded-full mb-6">
        Airport Pickup & Drop
      </div>
      <h2 class="text-4xl md:text-5xl font-black text-white mb-6 leading-tight">
        Reliable <span class="text-gold-400">Airport Logistics</span>
      </h2>
      <p class="text-zinc-300 text-lg leading-relaxed mb-8">
        Available 24/7 from Bandaranaike International Airport (CMB) directly to your hotel anywhere in Sri Lanka. All-inclusive pricing covering fuel, tolls, and parking — absolutely no hidden surprises.
      </p>
      <div class="flex flex-wrap gap-4">
        <a href="https://wa.me/94773300740" target="_blank" rel="noopener noreferrer" class="bg-green-600 hover:bg-green-500 text-white px-8 py-3.5 rounded-xl font-extrabold transition-all flex items-center gap-2 shadow-lg shadow-green-900/20">
          <i data-lucide="message-circle" class="w-5 h-5"></i> Book Transfer on WhatsApp
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Why Book With Us (Summarized) -->
<section class="py-24 bg-zinc-950">
  <div class="container mx-auto px-4 text-center">
    <h2 class="text-3xl font-black text-white mb-12">
      <i data-lucide="lightbulb" class="inline w-8 h-8 text-gold-400 mr-2 -mt-1"></i>
      Why Book with Joy Tours LK?
    </h2>
    
    <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
      <div class="bg-zinc-900/30 border border-zinc-800 p-8 rounded-3xl hover:border-gold-500/30 transition-colors">
        <i data-lucide="map" class="w-10 h-10 text-gold-400 mx-auto mb-4"></i>
        <h3 class="text-lg font-extrabold text-white mb-2">Local Expertise</h3>
        <p class="text-zinc-400 text-sm leading-relaxed">Perfectly balanced itineraries mixing history, wildlife, and beach relaxation.</p>
      </div>
      <div class="bg-zinc-900/30 border border-zinc-800 p-8 rounded-3xl hover:border-gold-500/30 transition-colors">
        <i data-lucide="shield-check" class="w-10 h-10 text-crimson-500 mx-auto mb-4"></i>
        <h3 class="text-lg font-extrabold text-white mb-2">Safety & Comfort</h3>
        <p class="text-zinc-400 text-sm leading-relaxed">Private, modern A/C vehicles with highly experienced, English-speaking drivers.</p>
      </div>
      <div class="bg-zinc-900/30 border border-zinc-800 p-8 rounded-3xl hover:border-gold-500/30 transition-colors">
        <i data-lucide="handshake" class="w-10 h-10 text-blue-400 mx-auto mb-4"></i>
        <h3 class="text-lg font-extrabold text-white mb-2">Seamless Experience</h3>
        <p class="text-zinc-400 text-sm leading-relaxed">We handle entry tickets, safari jeeps, and trains while you make the memories.</p>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
