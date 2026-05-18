<?php include 'header.php'; ?>

<!-- Hero Section -->
<section class="relative overflow-hidden bg-zinc-950 py-24 md:py-32 border-b border-zinc-900">
  <div class="absolute inset-0 z-0">
    <img src="public/hero/taxi.jpg" alt="Taxi Services" class="w-full h-full object-cover opacity-80">
    <div class="absolute inset-0 bg-gradient-to-b from-zinc-950/60 via-zinc-950/40 to-zinc-950"></div>
  </div>
  <div class="absolute inset-0 pointer-events-none opacity-20 z-0">
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 rounded-full bg-gradient-to-br from-crimson-600 to-gold-500 blur-[120px]"></div>
  </div>
  
  <div class="container mx-auto px-4 relative z-10 text-center">
    <h1 class="text-4xl md:text-6xl font-black text-white mb-6 tracking-tight drop-shadow-2xl">
      Taxi Services & <span class="text-transparent bg-clip-text bg-gradient-to-r from-gold-400 to-amber-500">Our Fleet</span>
    </h1>
    <div class="w-16 h-1 bg-gradient-to-r from-gold-400 to-crimson-600 mx-auto rounded-full mb-6"></div>
    <p class="text-lg text-zinc-300 max-w-2xl mx-auto leading-relaxed text-shadow-sm">
      Professional, comfortable, and highly reliable transportation options for all your travel needs across Sri Lanka. Experience our meticulously maintained fleet.
    </p>
  </div>
</section>

<!-- Our Premium Fleet Section (Categorized) -->
<section class="py-24 md:py-32 bg-zinc-950 border-b border-zinc-900">
  <div class="container mx-auto px-4">
    <div class="text-center mb-20">
      <h2 class="text-3xl md:text-5xl font-black text-white mb-4 tracking-tight">
        Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-gold-400 to-amber-500">Premium Fleet</span>
      </h2>
      <div class="w-16 h-1 bg-gradient-to-r from-gold-400 to-crimson-600 mx-auto rounded-full mb-4"></div>
      <p class="text-zinc-450 max-w-2xl mx-auto text-base">
        Browse our diverse range of vehicles tailored for individual travelers, couples, families, and large groups.
      </p>
    </div>

    <?php
    // We group the available images from public/taxi into categories.
    // (Names assigned based on typical fleet distributions)
    $fleetCategories = [
      "Luxury Sedans & Cars" => [
        "capacity" => "up to 4 Passengers",
        "ideal" => "Individual travelers, couples, business transit",
        "features" => ["A/C Comfort", "Leather Seats", "Smooth Ride", "Ample Trunk Space"],
        "images" => [
          "WhatsApp Image 2026-05-15 at 15.06.20.jpeg",
          "WhatsApp Image 2026-05-15 at 15.06.23 (1).jpeg",
          "WhatsApp Image 2026-05-15 at 15.06.24.jpeg",
          "WhatsApp Image 2026-05-15 at 15.06.26.jpeg",
          "WhatsApp Image 2026-05-15 at 15.06.29.jpeg",
          "WhatsApp Image 2026-05-15 at 15.06.31.jpeg"
        ]
      ],
      "Premium Passenger Vans" => [
        "capacity" => "6 to 8 Passengers",
        "ideal" => "Family groups, friends, airport transfers with extra luggage",
        "features" => ["Dual A/C", "Spacious Interior", "Reclining Seats", "High Roof Options"],
        "images" => [
          "WhatsApp Image 2026-05-15 at 15.06.23 (2).jpeg",
          "WhatsApp Image 2026-05-15 at 15.06.24 (1).jpeg",
          "WhatsApp Image 2026-05-15 at 15.06.25 (1).jpeg",
          "WhatsApp Image 2026-05-15 at 15.06.27 (1).jpeg",
          "WhatsApp Image 2026-05-15 at 15.06.28.jpeg",
          "WhatsApp Image 2026-05-15 at 15.06.32.jpeg",
          "WhatsApp Image 2026-05-15 at 15.06.34.jpeg"
        ]
      ],
      "SUVs & Specialized Vehicles" => [
        "capacity" => "4 to 7 Passengers",
        "ideal" => "Luxury travel, off-road destinations, VIP transit",
        "features" => ["Premium Audio", "High Ground Clearance", "VIP Comfort", "Maximum Safety"],
        "images" => [
          "WhatsApp Image 2026-05-15 at 15.06.25.jpeg",
          "WhatsApp Image 2026-05-15 at 15.06.26 (1).jpeg",
          "WhatsApp Image 2026-05-15 at 15.06.27.jpeg",
          "WhatsApp Image 2026-05-15 at 15.06.30.jpeg",
          "WhatsApp Image 2026-05-15 at 15.06.33.jpeg"
        ]
      ]
    ];
    ?>

    <div class="space-y-24">
      <?php foreach ($fleetCategories as $catName => $catDetails): ?>
      <div class="bg-zinc-900/20 border border-zinc-800/80 rounded-[2rem] overflow-hidden shadow-2xl">
        
        <!-- Category Header -->
        <div class="bg-gradient-to-r from-zinc-900 to-zinc-950 p-8 md:p-12 border-b border-zinc-800 flex flex-col md:flex-row md:items-center justify-between gap-6">
          <div>
            <h3 class="text-3xl md:text-4xl font-black text-white mb-2"><?= $catName ?></h3>
            <p class="text-gold-400 font-extrabold uppercase tracking-widest text-sm mb-4">
              <i data-lucide="users" class="w-4 h-4 inline mr-1 -mt-0.5"></i> <?= $catDetails['capacity'] ?>
            </p>
            <p class="text-zinc-400 text-sm"><strong class="text-zinc-300">Ideal for:</strong> <?= $catDetails['ideal'] ?></p>
          </div>
          <div class="grid grid-cols-2 gap-3 flex-shrink-0">
            <?php foreach ($catDetails['features'] as $f): ?>
            <div class="flex items-center gap-2 text-zinc-300 text-sm font-semibold bg-zinc-900/80 px-3 py-1.5 rounded-lg border border-zinc-800/50">
              <div class="w-1.5 h-1.5 bg-crimson-500 rounded-full flex-shrink-0"></div>
              <?= $f ?>
            </div>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- Category Image Grid -->
        <div class="p-6 md:p-8">
          <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <?php foreach ($catDetails['images'] as $img): ?>
            <div class="aspect-[4/3] rounded-xl overflow-hidden group border border-zinc-800 relative bg-zinc-950 cursor-pointer">
              <img 
                src="public/taxi/<?= rawurlencode($img) ?>" 
                alt="<?= $catName ?>" 
                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 group-hover:brightness-110"
                loading="lazy"
              >
              <div class="absolute inset-0 bg-gradient-to-t from-zinc-950/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>

      </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<!-- Packages Section (No Prices) -->
<section class="py-24 md:py-32 bg-zinc-950 border-b border-zinc-900 relative">
  <div class="absolute right-0 top-1/4 w-72 h-72 bg-crimson-900/10 blur-[100px] pointer-events-none"></div>
  <div class="container mx-auto px-4 relative z-10">
    <div class="text-center mb-20">
      <h2 class="text-3xl md:text-5xl font-black text-white mb-4 tracking-tight">
        Taxi <span class="text-transparent bg-clip-text bg-gradient-to-r from-gold-400 to-amber-500">Service Packages</span>
      </h2>
      <div class="w-16 h-1 bg-gradient-to-r from-gold-400 to-crimson-600 mx-auto rounded-full mb-4"></div>
      <p class="text-zinc-450 max-w-2xl mx-auto text-base">
        Comprehensive private transportation solutions designed around your itinerary. Choose a package and contact us to arrange your custom booking.
      </p>
    </div>

    <div class="grid md:grid-cols-3 gap-8">
      <?php
      $packages = [
        [
          "icon" => "plane-takeoff",
          "title" => "Airport Transfers",
          "description" => "Hassle-free, premium airport pickup and drop-off direct from Colombo International Airport (BIA). We monitor your flight for precise timing.",
        ],
        [
          "icon" => "map",
          "title" => "City & Coastal Tours",
          "description" => "Explore Hikkaduwa, Galle Fort, and other historical coastal highlights with experienced drivers acting as your local guide.",
        ],
        [
          "icon" => "building",
          "title" => "Hotel & Resort Pickups",
          "description" => "Direct passenger transfers from your resort, guest house, or villa to any beach, restaurant, or inland tourist attraction.",
        ],
        [
          "icon" => "mountain-snow",
          "title" => "Long Distance Trips",
          "description" => "Safe express highway trips to Ella, Kandy, Sigiriya, Mirissa, and national parks in ultimate comfort.",
        ],
        [
          "icon" => "users",
          "title" => "Group Travel Packages",
          "description" => "Perfect for larger tourist groups, families, and beach outings in our comfortable, spacious high-roof passenger vans.",
        ],
        [
          "icon" => "clock",
          "title" => "Custom Hourly / Daily Rental",
          "description" => "Rent a dedicated car and private driver for custom beach-hopping, shopping trips, or multi-day cross-country itineraries.",
        ],
      ];

      foreach ($packages as $pkg) {
          echo '
          <div class="bg-zinc-900/40 backdrop-blur border border-zinc-800 hover:border-gold-500/30 p-8 rounded-2xl hover:shadow-2xl hover:shadow-gold-500/5 hover:-translate-y-1 transition-all duration-300 flex flex-col group">
            <div class="bg-gradient-to-br from-gold-400/10 to-crimson-600/10 border border-gold-500/20 w-14 h-14 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-gold-500/20 transition-all duration-300">
              <i data-lucide="'.$pkg['icon'].'" class="w-6 h-6 text-gold-400"></i>
            </div>
            <h3 class="font-extrabold text-white mb-3 text-xl group-hover:text-gold-400 transition-colors">
              '.$pkg['title'].'
            </h3>
            <p class="text-zinc-450 text-sm leading-relaxed mb-6 flex-grow">'.$pkg['description'].'</p>
            
            <a href="contact.php" class="inline-flex items-center gap-2 text-sm font-bold text-zinc-300 hover:text-white transition-colors mt-auto border-t border-zinc-800/80 pt-5">
              <span>Inquire Now</span>
              <i data-lucide="arrow-right" class="w-4 h-4 text-crimson-500 group-hover:translate-x-1 transition-transform"></i>
            </a>
          </div>';
      }
      ?>
    </div>
  </div>
</section>

<!-- Why Choose Our Taxis -->
<section class="py-24 md:py-32 bg-zinc-950 border-b border-zinc-900">
  <div class="container mx-auto px-4">
    <div class="text-center mb-20">
      <h2 class="text-3xl md:text-5xl font-black text-white mb-4 tracking-tight">
        Why Choose <span class="text-transparent bg-clip-text bg-gradient-to-r from-gold-400 to-amber-500">Our Fleet?</span>
      </h2>
      <div class="w-16 h-1 bg-gradient-to-r from-gold-400 to-crimson-600 mx-auto rounded-full mb-4"></div>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
      <?php
      $features = [
        [
          "icon" => "shield-check",
          "title" => "Meticulously Serviced",
          "description" => "All vehicles go through comprehensive safety and hygiene checks before every passenger tour.",
        ],
        [
          "icon" => "wind",
          "title" => "Premium Air Conditioning",
          "description" => "Relax in cool comfort and escape the tropical Sri Lankan heat on long travel hours.",
        ],
        [
          "icon" => "smile",
          "title" => "Immaculate Interiors",
          "description" => "We guarantee spotless, odor-free interiors with plush, comfortable seating for long rides.",
        ],
        [
          "icon" => "user-check",
          "title" => "Experienced Local Drivers",
          "description" => "Extremely courteous, English-speaking operators with unparalleled local route insights.",
        ],
        [
          "icon" => "map-pin",
          "title" => "Advanced GPS Navigation",
          "description" => "Latest mapping navigation helps avoid traffic bottlenecks, ensuring exact punctuality.",
        ],
        [
          "icon" => "headphones",
          "title" => "24/7 Booking Support",
          "description" => "Instant WhatsApp support and operator updates, always available for seamless coordination.",
        ],
      ];

      foreach ($features as $f) {
          echo '
          <div class="flex gap-5 group">
            <div class="bg-gradient-to-br from-gold-400 to-crimson-600 p-4 rounded-xl w-fit h-fit flex-shrink-0 shadow-lg shadow-gold-500/5 group-hover:scale-105 transition-transform duration-300">
              <i data-lucide="'.$f['icon'].'" class="w-6 h-6 text-white"></i>
            </div>
            <div>
              <h3 class="font-extrabold text-white mb-2 text-lg group-hover:text-gold-400 transition-colors">
                '.$f['title'].'
              </h3>
              <p class="text-zinc-400 text-sm leading-relaxed">'.$f['description'].'</p>
            </div>
          </div>';
      }
      ?>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="py-24 md:py-32 bg-zinc-950 relative overflow-hidden">
  <div class="absolute inset-0 pointer-events-none opacity-20">
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 rounded-full bg-gradient-to-br from-crimson-600 to-gold-500 blur-[120px]"></div>
  </div>
  
  <div class="container mx-auto px-4 text-center relative z-10">
    <h2 class="text-3xl md:text-5xl font-black text-white mb-6 tracking-tight">
      Ready to <span class="text-transparent bg-clip-text bg-gradient-to-r from-gold-400 via-amber-500 to-crimson-500">Book Your Transport?</span>
    </h2>
    <p class="text-lg text-zinc-300 mb-10 max-w-2xl mx-auto leading-relaxed">
      Contact us via WhatsApp for the fastest response, or reach out to secure your vehicle class and itinerary in Hikkaduwa.
    </p>
    <div class="flex flex-col sm:flex-row justify-center gap-4 max-w-md mx-auto">
      <a
        href="contact.php"
        class="bg-gradient-to-r from-gold-400 via-gold-500 to-amber-500 text-zinc-950 px-8 py-4 rounded-xl font-extrabold hover:shadow-xl hover:shadow-gold-500/20 hover:scale-105 active:scale-95 transition-all duration-300 flex items-center justify-center gap-2"
      >
        Contact Us
      </a>
      <a
        href="https://wa.me/94773300740" target="_blank" rel="noopener noreferrer"
        class="border-2 border-green-600 text-green-400 px-8 py-4 rounded-xl font-extrabold hover:bg-green-600/10 hover:border-green-500 hover:scale-105 active:scale-95 transition-all duration-300 flex items-center justify-center gap-2"
      >
        <i data-lucide="message-circle" class="w-5 h-5"></i>
        <span>WhatsApp Booking</span>
      </a>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
