
<header class="fixed top-0 w-full z-50">
  <nav
    class="mx-auto flex max-w-[1440px] items-center justify-between px-5 py-6 md:px-8"
  >
    <a class="flex items-center" href="/">
      <img
        alt="LYFTER"
        class="h-5 md:h-6"
        src="{{ Vite::asset('resources/images/LYFTER_small.png') }}"
      />
    </a>

    <div class="hidden md:flex items-center gap-8 font-bold text-sm">
      <a class="header-nav-link text-black !no-underline" href="#">
        Lyfter Garage
      </a>
      <a class="header-nav-link text-black !no-underline" href="#">
        Lyfter Doorbell
      </a>
      <a
        class="site-button site-button--light flex items-center gap-2 rounded-full border border-pink-100 bg-white/50 px-6 py-2.5 text-black !no-underline"
        href="#"
      >
        <span>Support</span>
        <span class="material-symbols-outlined relative z-[1] text-base">chat_bubble</span>
      </a>
      <a
        class="site-button site-button--dark flex items-center gap-2 rounded-full bg-black px-7 py-3.5 text-sm font-bold text-white shadow-lg shadow-black/10 !no-underline"
        href="#"
      >
        <span>Download the app</span>
        <span class="material-symbols-outlined relative z-[1] text-base">download</span>
      </a>
    </div>
  </nav>
</header>
