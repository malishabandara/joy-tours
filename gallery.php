<?php include 'header.php'; ?>

<?php
// All 34 real gallery images with categories & titles
$gallery = [
  ["id"=>1,  "file"=>"1.jpg",  "cat"=>"Tours",        "title"=>"Scenic Tour Experience"],
  ["id"=>2,  "file"=>"2.jpg",  "cat"=>"Destinations",  "title"=>"Beautiful Destination"],
  ["id"=>3,  "file"=>"3.jpg",  "cat"=>"Fleet",         "title"=>"Premium Vehicle"],
  ["id"=>4,  "file"=>"4.jpg",  "cat"=>"Destinations",  "title"=>"Sri Lanka Landscapes"],
  ["id"=>5,  "file"=>"5.jpg",  "cat"=>"Tours",         "title"=>"Guided Day Tour"],
  ["id"=>6,  "file"=>"6.jpg",  "cat"=>"Destinations",  "title"=>"Coastal Hikkaduwa"],
  ["id"=>7,  "file"=>"7.jpg",  "cat"=>"Fleet",         "title"=>"Comfortable Ride"],
  ["id"=>8,  "file"=>"8.jpg",  "cat"=>"Destinations",  "title"=>"Tropical Paradise"],
  ["id"=>9,  "file"=>"9.jpg",  "cat"=>"Tours",         "title"=>"Adventure Trip"],
  ["id"=>10, "file"=>"10.jpg", "cat"=>"Fleet",         "title"=>"Our Taxi Fleet"],
  ["id"=>11, "file"=>"11.jpg", "cat"=>"Destinations",  "title"=>"Sri Lanka Beauty"],
  ["id"=>12, "file"=>"12.jpg", "cat"=>"Tours",         "title"=>"Happy Travellers"],
  ["id"=>13, "file"=>"13.jpg", "cat"=>"Tours",         "title"=>"Group Tour"],
  ["id"=>14, "file"=>"14.jpg", "cat"=>"Fleet",         "title"=>"Airport Transfer"],
  ["id"=>15, "file"=>"15.jpg", "cat"=>"Destinations",  "title"=>"Stunning Scenery"],
  ["id"=>16, "file"=>"16.jpg", "cat"=>"Tours",         "title"=>"Sightseeing Tour"],
  ["id"=>17, "file"=>"17.jpg", "cat"=>"Fleet",         "title"=>"Chauffeur Service"],
  ["id"=>18, "file"=>"18.jpg", "cat"=>"Destinations",  "title"=>"Island Getaway"],
  ["id"=>19, "file"=>"19.jpg", "cat"=>"Tours",         "title"=>"Cultural Experience"],
  ["id"=>20, "file"=>"20.jpg", "cat"=>"Destinations",  "title"=>"Beach Paradise"],
  ["id"=>21, "file"=>"21.jpg", "cat"=>"Tours",         "title"=>"Sunset Drive"],
  ["id"=>22, "file"=>"22.jpg", "cat"=>"Destinations",  "title"=>"Hikkaduwa Sunrise"],
  ["id"=>23, "file"=>"23.jpg", "cat"=>"Fleet",         "title"=>"Luxury Transport"],
  ["id"=>24, "file"=>"24.jpg", "cat"=>"Destinations",  "title"=>"Nature & Wildlife"],
  ["id"=>25, "file"=>"25.jpg", "cat"=>"Tours",         "title"=>"Private Tour"],
  ["id"=>26, "file"=>"26.jpg", "cat"=>"Fleet",         "title"=>"Van Transfer"],
  ["id"=>27, "file"=>"27.jpg", "cat"=>"Tours",         "title"=>"Day Trip"],
  ["id"=>28, "file"=>"28.jpg", "cat"=>"Fleet",         "title"=>"Sedan Service"],
  ["id"=>29, "file"=>"29.jpg", "cat"=>"Destinations",  "title"=>"Temple Visit"],
  ["id"=>30, "file"=>"30.jpg", "cat"=>"Tours",         "title"=>"Tourist Highlights"],
  ["id"=>31, "file"=>"31.jpg", "cat"=>"Destinations",  "title"=>"Galle Fort Area"],
  ["id"=>32, "file"=>"32.jpg", "cat"=>"Tours",         "title"=>"Family Tour"],
  ["id"=>33, "file"=>"33.jpg", "cat"=>"Fleet",         "title"=>"AC Comfort Ride"],
  ["id"=>34, "file"=>"34.jpg", "cat"=>"Destinations",  "title"=>"South Coast Views"],
];
$totalImages = count($gallery);
?>

<style>
  /* Masonry grid */
  .masonry-grid {
    columns: 1;
    column-gap: 1rem;
  }
  @media (min-width: 640px)  { .masonry-grid { columns: 2; } }
  @media (min-width: 1024px) { .masonry-grid { columns: 3; } }
  @media (min-width: 1280px) { .masonry-grid { columns: 4; } }

  .masonry-item {
    break-inside: avoid;
    margin-bottom: 1rem;
  }

  /* Lightbox */
  #lightbox {
    display: none;
    position: fixed;
    inset: 0;
    z-index: 9999;
    background: rgba(0,0,0,0.95);
    backdrop-filter: blur(8px);
    align-items: center;
    justify-content: center;
    flex-direction: column;
  }
  #lightbox.active { display: flex; }
  #lightbox img {
    max-width: 90vw;
    max-height: 80vh;
    object-fit: contain;
    border-radius: 12px;
    box-shadow: 0 25px 80px rgba(0,0,0,0.8);
    transition: opacity 0.2s ease;
  }

  /* Card hover */
  .gallery-card { cursor: pointer; }
  .gallery-card img {
    transition: transform 0.5s cubic-bezier(0.25,0.46,0.45,0.94), filter 0.3s ease;
  }
  .gallery-card:hover img {
    transform: scale(1.06);
    filter: brightness(1.08);
  }
  .gallery-card .overlay {
    opacity: 0;
    transition: opacity 0.3s ease;
  }
  .gallery-card:hover .overlay { opacity: 1; }

  /* Filter active */
  .filter-btn.active {
    background: linear-gradient(135deg, #fde047, #f59e0b);
    color: #09090b;
    box-shadow: 0 4px 20px rgba(253,224,71,0.15);
  }

  /* Count badge */
  .img-hidden { display: none !important; }

  /* Nav arrow buttons */
  .lb-nav {
    background: rgba(255,255,255,0.08);
    border: 1px solid rgba(255,255,255,0.12);
    border-radius: 50%;
    width: 48px; height: 48px;
    display: flex; align-items: center; justify-content: center;
    cursor: pointer;
    transition: background 0.2s, transform 0.2s;
    flex-shrink: 0;
  }
  .lb-nav:hover { background: rgba(253,224,71,0.15); transform: scale(1.1); }

  /* Stats bar pulse */
  @keyframes countUp { from { opacity:0; transform:translateY(8px); } to { opacity:1; transform:translateY(0); } }
  .stat-item { animation: countUp 0.6s ease forwards; }
</style>

<!-- Hero Section -->
<section class="relative overflow-hidden bg-zinc-950 py-24 md:py-32 border-b border-zinc-900">
  <div class="absolute inset-0 z-0">
    <img src="public/hero/gallery.jpg" alt="Gallery" class="w-full h-full object-cover opacity-80">
    <div class="absolute inset-0 bg-gradient-to-b from-zinc-950/60 via-zinc-950/40 to-zinc-950"></div>
  </div>
  <div class="absolute inset-0 pointer-events-none opacity-25 z-0">
    <div class="absolute top-1/2 left-1/4 -translate-y-1/2 w-80 h-80 rounded-full bg-gold-500 blur-[120px]"></div>
    <div class="absolute top-1/2 right-1/4 -translate-y-1/2 w-80 h-80 rounded-full bg-crimson-600 blur-[120px]"></div>
  </div>
  
  <div class="container mx-auto px-4 relative z-10 text-center">
    <div class="inline-flex items-center gap-2 bg-zinc-900/60 border border-zinc-800 rounded-full px-4 py-2 mb-6">
      <div class="w-2 h-2 rounded-full bg-gold-400 animate-pulse"></div>
      <span class="text-zinc-400 text-sm font-semibold tracking-wider uppercase">Live Photo Gallery</span>
    </div>
    <h1 class="text-4xl md:text-6xl font-black text-white mb-6 tracking-tight drop-shadow-2xl">
      Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-gold-400 via-amber-400 to-crimson-500">Tour Gallery</span>
    </h1>
    <div class="w-16 h-1 bg-gradient-to-r from-gold-400 to-crimson-600 mx-auto rounded-full mb-6"></div>
    <p class="text-lg text-zinc-300 max-w-2xl mx-auto leading-relaxed text-shadow-sm">
      Real moments from our tours across Sri Lanka — beautiful destinations, comfortable fleet, and happy travellers.
    </p>

    <!-- Quick Stats -->
    <div class="flex justify-center gap-8 mt-10">
      <div class="stat-item text-center">
        <div class="text-3xl font-black text-gold-400"><?= $totalImages ?></div>
        <div class="text-zinc-500 text-xs uppercase tracking-widest font-semibold mt-1">Photos</div>
      </div>
      <div class="w-px bg-zinc-800"></div>
      <div class="stat-item text-center" style="animation-delay:0.1s">
        <div class="text-3xl font-black text-gold-400">3</div>
        <div class="text-zinc-500 text-xs uppercase tracking-widest font-semibold mt-1">Categories</div>
      </div>
      <div class="w-px bg-zinc-800"></div>
      <div class="stat-item text-center" style="animation-delay:0.2s">
        <div class="text-3xl font-black text-gold-400">1K+</div>
        <div class="text-zinc-500 text-xs uppercase tracking-widest font-semibold mt-1">Happy Guests</div>
      </div>
    </div>
  </div>
</section>

<!-- Gallery Section -->
<section class="py-16 md:py-24 bg-zinc-950">
  <div class="container mx-auto px-4">

    <!-- Filter Bar -->
    <div class="flex flex-wrap justify-center gap-3 mb-12" id="filterBar">
      <button data-filter="All" class="filter-btn active px-6 py-2.5 rounded-xl font-extrabold text-sm uppercase tracking-wider transition-all duration-300 bg-zinc-900 text-zinc-300 border border-zinc-800">
        All <span class="ml-1.5 text-xs opacity-60" id="count-All">(<?= $totalImages ?>)</span>
      </button>
      <button data-filter="Destinations" class="filter-btn px-6 py-2.5 rounded-xl font-extrabold text-sm uppercase tracking-wider transition-all duration-300 bg-zinc-900 text-zinc-400 border border-zinc-800 hover:text-white hover:border-gold-500/30">
        <i data-lucide="map-pin" class="w-4 h-4 inline mr-1 -mt-0.5"></i> Destinations
        <span class="ml-1.5 text-xs opacity-60" id="count-Destinations"></span>
      </button>
      <button data-filter="Fleet" class="filter-btn px-6 py-2.5 rounded-xl font-extrabold text-sm uppercase tracking-wider transition-all duration-300 bg-zinc-900 text-zinc-400 border border-zinc-800 hover:text-white hover:border-gold-500/30">
        <i data-lucide="car" class="w-4 h-4 inline mr-1 -mt-0.5"></i> Fleet
        <span class="ml-1.5 text-xs opacity-60" id="count-Fleet"></span>
      </button>
      <button data-filter="Tours" class="filter-btn px-6 py-2.5 rounded-xl font-extrabold text-sm uppercase tracking-wider transition-all duration-300 bg-zinc-900 text-zinc-400 border border-zinc-800 hover:text-white hover:border-gold-500/30">
        <i data-lucide="users" class="w-4 h-4 inline mr-1 -mt-0.5"></i> Tours
        <span class="ml-1.5 text-xs opacity-60" id="count-Tours"></span>
      </button>
    </div>

    <!-- Visible count -->
    <p class="text-center text-zinc-600 text-sm mb-8" id="visibleCount">Showing all <strong class="text-zinc-400"><?= $totalImages ?></strong> photos</p>

    <!-- Masonry Grid -->
    <div class="masonry-grid" id="galleryGrid">
      <?php foreach ($gallery as $photo): ?>
      <div
        class="masonry-item gallery-card group"
        data-category="<?= $photo['cat'] ?>"
        data-src="public/gallery/<?= $photo['file'] ?>"
        data-title="<?= htmlspecialchars($photo['title']) ?>"
        data-id="<?= $photo['id'] ?>"
        onclick="openLightbox(<?= $photo['id'] - 1 ?>)"
      >
        <div class="relative overflow-hidden rounded-2xl bg-zinc-900 border border-zinc-800/60 hover:border-gold-500/30 transition-all duration-300 shadow-lg hover:shadow-2xl hover:shadow-black/60">
          <img
            src="public/gallery/<?= $photo['file'] ?>"
            alt="<?= htmlspecialchars($photo['title']) ?>"
            class="w-full h-auto block"
            loading="lazy"
          />
          <!-- Hover Overlay -->
          <div class="overlay absolute inset-0 bg-gradient-to-t from-zinc-950/90 via-zinc-950/30 to-transparent flex flex-col justify-end p-4">
            <div class="flex items-center justify-between">
              <div>
                <p class="text-white font-extrabold text-sm leading-tight"><?= htmlspecialchars($photo['title']) ?></p>
                <span class="text-gold-400 text-xs font-bold uppercase tracking-widest"><?= $photo['cat'] ?></span>
              </div>
              <div class="bg-white/10 backdrop-blur-md rounded-full w-9 h-9 flex items-center justify-center border border-white/20 flex-shrink-0">
                <i data-lucide="zoom-in" class="w-4 h-4 text-white"></i>
              </div>
            </div>
          </div>
          <!-- Category badge -->
          <div class="absolute top-3 left-3">
            <span class="bg-zinc-950/70 backdrop-blur-md text-gold-400 font-extrabold text-xs px-2.5 py-1 rounded-full border border-zinc-700/60 uppercase tracking-widest">
              <?= $photo['cat'] ?>
            </span>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- No results message -->
    <div id="noResults" class="hidden text-center py-20">
      <i data-lucide="image-off" class="w-12 h-12 text-zinc-700 mx-auto mb-4"></i>
      <p class="text-zinc-500 font-semibold">No photos in this category</p>
    </div>

  </div>
</section>

<!-- Lightbox Modal -->
<div id="lightbox" role="dialog" aria-modal="true" aria-label="Image lightbox">
  <!-- Close button -->
  <button onclick="closeLightbox()" class="absolute top-4 right-4 bg-zinc-900/80 border border-zinc-700 hover:border-crimson-500 rounded-full w-11 h-11 flex items-center justify-center transition-all duration-200 z-10">
    <i data-lucide="x" class="w-5 h-5 text-white"></i>
  </button>

  <!-- Image counter -->
  <div class="absolute top-4 left-1/2 -translate-x-1/2 bg-zinc-900/80 border border-zinc-700 rounded-full px-4 py-1.5 z-10">
    <span id="lbCounter" class="text-zinc-300 text-sm font-semibold"></span>
  </div>

  <!-- Nav + Image row -->
  <div class="flex items-center gap-4 w-full max-w-6xl px-4">
    <button onclick="prevImage()" class="lb-nav" aria-label="Previous image">
      <i data-lucide="chevron-left" class="w-6 h-6 text-white"></i>
    </button>

    <div class="flex-1 flex flex-col items-center">
      <img id="lbImage" src="" alt="" />
      <div class="mt-4 text-center">
        <p id="lbTitle" class="text-white font-extrabold text-lg"></p>
        <span id="lbCategory" class="text-gold-400 text-xs font-bold uppercase tracking-widest"></span>
      </div>
    </div>

    <button onclick="nextImage()" class="lb-nav" aria-label="Next image">
      <i data-lucide="chevron-right" class="w-6 h-6 text-white"></i>
    </button>
  </div>

  <!-- Thumbnail strip -->
  <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-1.5 overflow-x-auto max-w-[90vw] px-2 pb-1" id="lbThumbs"></div>
</div>

<!-- CTA Section -->
<section class="py-24 bg-zinc-950 border-t border-zinc-900 relative overflow-hidden">
  <div class="absolute inset-0 pointer-events-none opacity-15">
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 rounded-full bg-gradient-to-br from-crimson-600 to-gold-500 blur-[120px]"></div>
  </div>
  <div class="container mx-auto px-4 text-center relative z-10">
    <h2 class="text-3xl md:text-4xl font-black text-white mb-4 tracking-tight">
      Ready to Create <span class="text-transparent bg-clip-text bg-gradient-to-r from-gold-400 to-crimson-500">Your Memories?</span>
    </h2>
    <p class="text-zinc-400 mb-8 max-w-xl mx-auto leading-relaxed">
      Book your private tour with Dilshan and let us take you to the most beautiful spots Sri Lanka has to offer.
    </p>
    <div class="flex flex-col sm:flex-row justify-center gap-4">
      <a href="contact.php" class="bg-gradient-to-r from-gold-400 via-gold-500 to-amber-500 text-zinc-950 px-8 py-4 rounded-xl font-extrabold hover:shadow-xl hover:shadow-gold-500/20 hover:scale-105 transition-all duration-300 flex items-center justify-center gap-2">
        <i data-lucide="calendar-check" class="w-5 h-5"></i> Book a Tour
      </a>
      <a href="https://wa.me/94773300740" target="_blank" rel="noopener noreferrer" class="border-2 border-green-600 text-green-400 px-8 py-4 rounded-xl font-extrabold hover:bg-green-600/10 hover:scale-105 transition-all duration-300 flex items-center justify-center gap-2">
        <i data-lucide="message-circle" class="w-5 h-5"></i> WhatsApp Us
      </a>
    </div>
  </div>
</section>

<script>
// ─── Gallery Data (built from PHP) ───────────────────────────────────────────
const galleryData = <?php echo json_encode(array_values($gallery)); ?>;
let currentIndex = 0;
let filteredIndices = galleryData.map((_, i) => i); // All indices by default

// ─── Filter Logic ─────────────────────────────────────────────────────────────
const filterBtns = document.querySelectorAll('.filter-btn');
const allCards   = document.querySelectorAll('.gallery-card');
const noResults  = document.getElementById('noResults');
const visibleCount = document.getElementById('visibleCount');

// Count per category
const catCounts = {};
galleryData.forEach(p => { catCounts[p.cat] = (catCounts[p.cat] || 0) + 1; });
Object.keys(catCounts).forEach(cat => {
  const el = document.getElementById('count-' + cat);
  if (el) el.textContent = '(' + catCounts[cat] + ')';
});

filterBtns.forEach(btn => {
  btn.addEventListener('click', () => {
    const filter = btn.getAttribute('data-filter');

    // Update active button
    filterBtns.forEach(b => b.classList.remove('active'));
    btn.classList.add('active');

    // Filter cards
    let visible = 0;
    filteredIndices = [];
    allCards.forEach((card, i) => {
      const cat = card.getAttribute('data-category');
      const show = filter === 'All' || cat === filter;
      card.classList.toggle('img-hidden', !show);
      if (show) { visible++; filteredIndices.push(i); }
    });

    // Update count text
    const label = filter === 'All' ? 'all' : filter;
    visibleCount.innerHTML = `Showing <strong class="text-zinc-400">${visible}</strong> ${filter === 'All' ? '' : '<strong class="text-zinc-400">' + filter + '</strong>'} photos`;
    noResults.classList.toggle('hidden', visible > 0);
  });
});

// ─── Lightbox Logic ───────────────────────────────────────────────────────────
const lightbox  = document.getElementById('lightbox');
const lbImage   = document.getElementById('lbImage');
const lbTitle   = document.getElementById('lbTitle');
const lbCategory = document.getElementById('lbCategory');
const lbCounter = document.getElementById('lbCounter');
const lbThumbs  = document.getElementById('lbThumbs');

function buildThumbs() {
  lbThumbs.innerHTML = '';
  filteredIndices.forEach((gi, fi) => {
    const photo = galleryData[gi];
    const thumb = document.createElement('button');
    thumb.className = 'w-10 h-10 rounded-lg overflow-hidden border-2 flex-shrink-0 transition-all duration-200 ' +
      (fi === filteredIndices.indexOf(currentIndex) ? 'border-gold-400 opacity-100' : 'border-transparent opacity-50 hover:opacity-80');
    thumb.innerHTML = `<img src="public/gallery/${photo.file}" alt="" class="w-full h-full object-cover" />`;
    thumb.onclick = () => showImage(gi);
    lbThumbs.appendChild(thumb);
  });
}

function showImage(globalIndex) {
  currentIndex = globalIndex;
  const photo = galleryData[globalIndex];
  lbImage.style.opacity = '0';
  setTimeout(() => {
    lbImage.src = 'public/gallery/' + photo.file;
    lbImage.alt = photo.title;
    lbTitle.textContent = photo.title;
    lbCategory.textContent = photo.cat;
    lbImage.style.opacity = '1';
  }, 150);

  // Update counter
  const pos = filteredIndices.indexOf(globalIndex);
  lbCounter.textContent = (pos + 1) + ' / ' + filteredIndices.length;

  // Update thumb highlights
  buildThumbs();
}

function openLightbox(globalIndex) {
  // Make sure filteredIndices includes this index
  if (!filteredIndices.includes(globalIndex)) return;
  currentIndex = globalIndex;
  lightbox.classList.add('active');
  document.body.style.overflow = 'hidden';
  buildThumbs();
  showImage(globalIndex);
}

function closeLightbox() {
  lightbox.classList.remove('active');
  document.body.style.overflow = '';
}

function prevImage() {
  const pos = filteredIndices.indexOf(currentIndex);
  const prev = (pos - 1 + filteredIndices.length) % filteredIndices.length;
  showImage(filteredIndices[prev]);
}

function nextImage() {
  const pos = filteredIndices.indexOf(currentIndex);
  const next = (pos + 1) % filteredIndices.length;
  showImage(filteredIndices[next]);
}

// Keyboard navigation
document.addEventListener('keydown', e => {
  if (!lightbox.classList.contains('active')) return;
  if (e.key === 'Escape')      closeLightbox();
  if (e.key === 'ArrowLeft')   prevImage();
  if (e.key === 'ArrowRight')  nextImage();
});

// Click backdrop to close
lightbox.addEventListener('click', e => {
  if (e.target === lightbox) closeLightbox();
});

// Touch swipe on lightbox
let touchStartX = 0;
lightbox.addEventListener('touchstart', e => { touchStartX = e.touches[0].clientX; });
lightbox.addEventListener('touchend', e => {
  const dx = e.changedTouches[0].clientX - touchStartX;
  if (Math.abs(dx) > 50) { dx < 0 ? nextImage() : prevImage(); }
});
</script>

<?php include 'footer.php'; ?>
