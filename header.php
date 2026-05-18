<?php
$current_page = basename($_SERVER['PHP_SELF']);
if ($current_page === '' || $current_page === 'index') {
    $current_page = 'index.php';
}
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Joy Tours Taxi Hikkaduwa - Luxury Chauffeur & Tourist Transportation Sri Lanka</title>
  
  <!-- SEO Meta Tags -->
  <meta name="description" content="Professional tourism transport and tour operator in Hikkaduwa, Sri Lanka. Experience the beauty of Sri Lanka in unmatched comfort and style.">
  <meta name="keywords" content="Joy Tours Hikkaduwa, Hikkaduwa Taxi, Colombo Airport Transfer, Sri Lanka Tour Chauffeur, Dilshan Harshapriya">
  
  <!-- Google Font: Inter -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&display=swap" rel="stylesheet">
  
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  
  <!-- Lucide Icons CDN -->
  <script src="https://unpkg.com/lucide@latest"></script>
  
  <!-- Custom Color Scheme Setup -->
  <script>
    tailwind.config = {
      theme: {
        container: {
          center: true,
          padding: "2rem",
          screens: {
            "2xl": "1400px",
          },
        },
        extend: {
          fontFamily: {
            sans: ['Inter', 'system-ui', 'sans-serif'],
          },
          colors: {
            gold: {
              50: "#fffef0",
              100: "#fffce0",
              200: "#fff9c1",
              300: "#fff5a3",
              400: "#ffef85",
              500: "#fde047",
              600: "#eab308",
              700: "#ca8a04",
              800: "#a16207",
              900: "#854d0e",
            },
            crimson: {
              50: "#fff5f5",
              100: "#ffe5e5",
              200: "#ffcccc",
              300: "#ff9999",
              400: "#ff6666",
              500: "#ee4444",
              600: "#dc2626",
              700: "#b91c1c",
              800: "#991b1b",
              900: "#7f1d1d",
            },
            warm: {
              50: "#09090b",
              100: "#18181b",
              200: "#27272a",
              300: "#3f3f46",
              400: "#fde047",
              500: "#f59e0b",
              600: "#dc2626",
              700: "#d4d4d8",
              800: "#f4f4f5",
              900: "#fbbf24",
            }
          }
        }
      }
    }
  </script>
  
  <!-- Custom CSS for Scrollbars -->
  <style>
    body {
      background-color: #09090b;
      color: #f4f4f5;
    }
    /* Custom Scrollbar */
    ::-webkit-scrollbar {
      width: 8px;
    }
    ::-webkit-scrollbar-track {
      background: #09090b;
    }
    ::-webkit-scrollbar-thumb {
      background: #1c1c1f;
      border-radius: 4px;
    }
    ::-webkit-scrollbar-thumb:hover {
      background: #fde047;
    }
  </style>
</head>
<body class="flex flex-col min-h-screen bg-zinc-950 text-zinc-100">

  <!-- Header -->
  <header class="bg-zinc-950/80 backdrop-blur-md border-b border-zinc-800/80 sticky top-0 z-50 shadow-lg shadow-black/20">
    <div class="container mx-auto px-4 py-3">
      <div class="flex items-center justify-between">
        
        <!-- Logo -->
        <a href="index.php" class="flex items-center gap-3 shrink-0 group">
          <div class="relative">
            <div class="absolute inset-0 bg-gold-400/20 blur-md rounded-full group-hover:bg-gold-400/30 transition-all"></div>
            <img 
              src="public/logo.png" 
              alt="Joy Tours Hikkaduwa Logo" 
              class="w-12 h-12 object-contain relative z-10 group-hover:scale-105 transition-transform duration-300"
            />
          </div>
          <div class="hidden sm:block">
            <div class="font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-gold-400 via-gold-500 to-amber-500 text-xl tracking-wide leading-tight group-hover:from-gold-300 group-hover:to-amber-400 transition-all duration-300">
              Joy Tours
            </div>
            <div class="text-xs font-bold text-crimson-500 uppercase tracking-widest leading-none mt-0.5">
              Taxi Hikkaduwa
            </div>
          </div>
        </a>

        <!-- Desktop Navigation -->
        <nav class="hidden md:flex items-center gap-8">
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
            $is_active = ($current_page === $url);
            if ($is_active) {
              echo '<a href="' . $url . '" class="text-gold-400 font-semibold tracking-wide transition-all duration-300 text-sm relative after:absolute after:bottom-[-4px] after:left-0 after:w-full after:h-[2px] after:bg-gold-500">' . $label . '</a>';
            } else {
              echo '<a href="' . $url . '" class="text-zinc-300 hover:text-gold-400 font-semibold tracking-wide transition-all duration-300 text-sm relative after:absolute after:bottom-[-4px] after:left-0 after:w-0 after:h-[2px] after:bg-gold-500 hover:after:w-full after:transition-all">' . $label . '</a>';
            }
          }
          ?>
        </nav>

        <!-- Contact Button -->
        <div class="hidden sm:flex items-center gap-2">
          <a
            href="tel:+94773300740"
            class="bg-gradient-to-r from-crimson-600 to-crimson-700 hover:from-crimson-500 hover:to-crimson-600 text-white px-5 py-2.5 rounded-xl transition-all duration-300 font-bold text-sm flex items-center gap-2 shadow-lg shadow-crimson-900/30 hover:shadow-crimson-500/20 hover:scale-105 active:scale-95"
          >
            <i data-lucide="phone" class="w-4 h-4 animate-pulse"></i>
            <span>+94 77 330 0740</span>
          </a>
        </div>

        <!-- Mobile Menu Button -->
        <button
          id="mobileMenuBtn"
          class="md:hidden p-2 text-zinc-300 hover:text-gold-400 transition-colors"
        >
          <i data-lucide="menu" id="menuOpenIcon" class="w-6 h-6"></i>
          <i data-lucide="x" id="menuCloseIcon" class="w-6 h-6 hidden"></i>
        </button>
      </div>

      <!-- Mobile Navigation Drawer -->
      <nav id="mobileDrawer" class="hidden md:hidden mt-3 pt-3 border-t border-zinc-800/80 flex flex-col gap-2">
        <?php
        foreach ($navLinks as $url => $label) {
          $is_active = ($current_page === $url);
          if ($is_active) {
            echo '<a href="' . $url . '" class="text-gold-400 bg-zinc-900/55 px-3 py-2.5 rounded-lg font-semibold">' . $label . '</a>';
          } else {
            echo '<a href="' . $url . '" class="text-zinc-300 hover:text-gold-400 hover:bg-zinc-900/50 px-3 py-2.5 rounded-lg font-semibold transition-all duration-255">' . $label . '</a>';
          }
        }
        ?>
        <a
          href="tel:+94773300740"
          class="mt-2 bg-gradient-to-r from-crimson-600 to-crimson-700 text-white text-center py-3 rounded-lg font-bold flex items-center justify-center gap-2"
        >
          <i data-lucide="phone" class="w-4 h-4"></i>
          <span>Call Us: +94 77 330 0740</span>
        </a>
      </nav>
    </div>
  </header>

  <!-- Main Content Wrapper -->
  <main class="flex-1">
