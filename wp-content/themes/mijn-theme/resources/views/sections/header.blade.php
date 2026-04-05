
<header class="fixed top-0 w-full z-50">
  <nav
    class="mx-auto flex max-w-[1440px] items-center justify-center px-4 py-6 md:justify-between md:px-8"
  >
    <a class="flex items-center" href="/">
      <img
        alt="LYFTER"
        class="h-5"
        src="{{ Vite::asset('resources/images/LYFTER_small.png') }}"
      />
    </a>

    <div class="hidden md:flex items-center gap-10 font-bold text-sm">
      <a class="text-black transition-opacity hover:opacity-70 !no-underline" href="#">
        Lyfter Garage
      </a>
      <a class="text-black transition-opacity hover:opacity-70 !no-underline" href="#">
        Lyfter Doorbell
      </a>
      <button
        class="flex items-center gap-2 rounded-full border border-pink-100 bg-white/50 px-6 py-2.5 text-black transition-colors hover:bg-white"
      >
        Support
        <span class="material-symbols-outlined text-base">chat_bubble</span>
      </button>
      <button
        class="flex items-center gap-2 rounded-full bg-black px-7 py-3.5 text-sm font-bold text-white shadow-lg shadow-black/10 transition-opacity hover:opacity-90"
      >
        Download the app
        <span class="material-symbols-outlined text-base">download</span>
      </button>
    </div>
  </nav>
</header>
