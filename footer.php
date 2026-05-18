  </main>

  <!-- Footer -->
  <footer class="bg-zinc-950 text-zinc-100 py-16 mt-20 border-t border-zinc-800/80">
    <div class="container mx-auto px-4">
      <div class="grid md:grid-cols-4 gap-8 mb-8">
        
        <!-- About Column -->
        <div>
          <div class="flex items-center gap-3 mb-4">
            <img 
              src="public/logo.png" 
              alt="Joy Tours Logo" 
              class="w-10 h-10 object-contain"
            />
            <div>
              <div class="font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-gold-400 to-amber-500">Joy Tours Taxi</div>
              <div class="text-xs text-crimson-500 font-bold uppercase tracking-wider">Hikkaduwa</div>
            </div>
          </div>
          <p class="text-zinc-450 text-sm leading-relaxed mb-4">
            Professional taxi and tour services for tourists in Hikkaduwa,
            Sri Lanka. Explore the island in comfort and style with our certified chauffeur.
          </p>
          <div class="flex items-center gap-2 bg-zinc-900/60 border border-zinc-800 rounded-lg px-3 py-2 w-fit">
            <i data-lucide="facebook" class="w-4 h-4 text-blue-400 flex-shrink-0"></i>
            <span class="text-zinc-400 text-xs font-semibold">1,053+ followers on Facebook</span>
          </div>
        </div>

        <!-- Quick Links Column -->
        <div>
          <h3 class="font-bold text-white mb-4 text-base tracking-wide relative after:absolute after:bottom-[-6px] after:left-0 after:w-8 after:h-[2px] after:bg-crimson-600">Quick Links</h3>
          <ul class="space-y-2 text-sm text-zinc-400 mt-2">
            <?php
            $navLinks = [
              "index.php" => "Home",
              "about.php" => "About Us",
              "taxi.php" => "Taxi Services",
              "packages.php" => "Packages & Services",
              "gallery.php" => "Gallery",
              "contact.php" => "Contact"
            ];
            foreach ($navLinks as $url => $label) {
                echo '<li><a href="' . $url . '" class="hover:text-gold-400 hover:translate-x-1 inline-block transition-all duration-200">' . $label . '</a></li>';
            }
            ?>
          </ul>
        </div>

        <!-- Contact Column -->
        <div>
          <h3 class="font-bold text-white mb-4 text-base tracking-wide relative after:absolute after:bottom-[-6px] after:left-0 after:w-8 after:h-[2px] after:bg-crimson-600">Contact</h3>
          <ul class="space-y-3 text-sm text-zinc-400 mt-2">
            <li class="flex items-center gap-2 group">
              <i data-lucide="phone" class="w-4 h-4 text-gold-400 group-hover:animate-bounce"></i>
              <a href="tel:+94773300740" class="hover:text-gold-400 transition-colors">
                +94 77 330 0740
              </a>
            </li>
            <li class="flex items-center gap-2 group">
              <i data-lucide="message-circle" class="w-4 h-4 text-green-400"></i>
              <a href="https://wa.me/94773300740" target="_blank" rel="noopener noreferrer" class="hover:text-green-400 transition-colors">
                WhatsApp Chat
              </a>
            </li>
            <li class="flex items-center gap-2 group">
              <i data-lucide="mail" class="w-4 h-4 text-gold-400"></i>
              <a
                href="mailto:joytourshikkaduwa@gmail.com"
                class="hover:text-gold-400 break-all transition-colors"
              >
                joytourshikkaduwa@gmail.com
              </a>
            </li>
            <li class="flex items-center gap-2 group">
              <i data-lucide="map-pin" class="w-4 h-4 text-crimson-400"></i>
              <span class="text-zinc-400">Hikkaduwa, Sri Lanka</span>
            </li>
          </ul>
        </div>

        <!-- Owner Column -->
        <div>
          <h3 class="font-bold text-white mb-4 text-base tracking-wide relative after:absolute after:bottom-[-6px] after:left-0 after:w-8 after:h-[2px] after:bg-crimson-600">Our Chauffeur</h3>
          <p class="text-zinc-300 text-sm font-semibold mt-2">K.A. Dilshan Harshapriya</p>
          <p class="text-zinc-450 text-xs mt-3 leading-relaxed">
            Certified tourism transport operator based in Hikkaduwa. Fully licensed, English-speaking, with 10+ years of professional experience.
          </p>
          <a
            href="https://www.facebook.com/people/Joy-tour-hikka/100049957276209/"
            target="_blank" rel="noopener noreferrer"
            class="inline-flex items-center gap-1.5 mt-4 text-xs text-blue-400 hover:text-blue-300 font-semibold transition-colors"
          >
            <i data-lucide="facebook" class="w-3.5 h-3.5"></i>
            Joy Tour Hikka on Facebook
          </a>
        </div>

      </div>

      <!-- Social & Copyright Row -->
      <div class="border-t border-gray-750 pt-8 flex flex-col md:flex-row justify-between items-center">
        <p class="text-gray-400 text-sm">
          © 2024 Joy Tours Taxi Hikkaduwa. All rights reserved.
        </p>
        <div class="flex items-center gap-4 mt-4 md:mt-0">
          <a
            href="https://www.facebook.com/people/Joy-tour-hikka/100049957276209/"
            target="_blank" rel="noopener noreferrer"
            class="flex items-center gap-2 text-blue-400 hover:text-blue-300 transition-colors font-semibold text-sm"
          >
            <i data-lucide="facebook" class="w-4 h-4"></i>
            Facebook
          </a>
          <a
            href="https://wa.me/94773300740"
            target="_blank" rel="noopener noreferrer"
            class="flex items-center gap-2 text-green-400 hover:text-green-300 transition-colors font-semibold text-sm"
          >
            <i data-lucide="message-circle" class="w-4 h-4"></i>
            WhatsApp
          </a>
        </div>
      </div>

    </div>
  </footer>

  <!-- Vanilla Drawer Trigger & Lucide Initialization Scripts -->
  <script>
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileDrawer = document.getElementById('mobileDrawer');
    const menuOpenIcon = document.getElementById('menuOpenIcon');
    const menuCloseIcon = document.getElementById('menuCloseIcon');

    if (mobileMenuBtn && mobileDrawer) {
      mobileMenuBtn.addEventListener('click', () => {
        const isHidden = mobileDrawer.classList.contains('hidden');
        if (isHidden) {
          mobileDrawer.classList.remove('hidden');
          menuOpenIcon.classList.add('hidden');
          menuCloseIcon.classList.remove('hidden');
        } else {
          mobileDrawer.classList.add('hidden');
          menuOpenIcon.classList.remove('hidden');
          menuCloseIcon.classList.add('hidden');
        }
      });
    }

    // Initialize Lucide Icons
    lucide.createIcons();
  </script>
</body>
</html>
