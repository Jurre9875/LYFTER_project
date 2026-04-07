<section class="relative -mt-24 overflow-hidden bg-[rgba(255,51,102,0.1)] pt-24">
  <img
    alt=""
    aria-hidden="true"
    class="hero-line"
    src="{{ Vite::asset('resources/images/home/Vector 1.png') }}"
  />

  <div class="relative z-[1] mx-auto max-w-[1440px] px-8 pb-24 pt-10">
    <div class="grid items-center gap-6 [grid-template-columns:minmax(0,0.9fr)_minmax(0,1.1fr)]">
      <div class="relative z-[2] max-w-[34rem] pt-11">
        <span class="inline-flex items-center gap-[0.55rem] rounded-full bg-white px-4 py-[0.7rem] text-[0.95rem] font-bold text-[#111111] shadow-[0_10px_24px_rgba(17,17,17,0.12)]">
          <span class="h-[0.7rem] w-[0.7rem] shrink-0 rounded-full bg-[#18d7c3]"></span>
          Lyfter garage
        </span>

        <h1 class="mt-6 max-w-[10ch] text-[clamp(3.3rem,8vw,6.1rem)] leading-[0.9] font-black tracking-[-0.06em] text-[#060606]">
          Everyday
          <br>
          Convenience
        </h1>

        <p class="mt-6 max-w-[31rem] text-[1.05rem] leading-[1.7] font-semibold text-[rgba(17,17,17,0.9)]">
          At Lyfter, we make smart devices to automate your home.
          <span class="text-[rgba(17,17,17,0.68)]">Convenient, secure and customizable.</span>
        </p>

        <div class="mt-8 flex flex-wrap gap-4">
          <a class="inline-flex items-center justify-center gap-[0.7rem] rounded-full bg-[#18d7c3] px-6 py-4 text-base font-extrabold text-white shadow-[0_14px_30px_rgba(24,215,195,0.24)] !no-underline" href="#">
            Buy Lyfter garage
            <span class="material-symbols-outlined text-[20px]">north_east</span>
          </a>
          <a class="inline-flex items-center justify-center gap-[0.7rem] rounded-full bg-[#060606] px-6 py-4 text-base font-extrabold text-white shadow-[0_14px_30px_rgba(6,6,6,0.22)] !no-underline" href="#">
            Download the app
            <span class="material-symbols-outlined text-[20px]">download</span>
          </a>
        </div>
      </div>

      <div class="scene">
        <div class="scene-house-wrap">
          <img
            alt="House with connected garage"
            class="scene-house"
            src="{{ Vite::asset('resources/images/home/garage.png') }}"
          />
        </div>

        <img
          alt="Lyfter Garage app shown on iPhone"
          class="scene-phone"
          src="{{ Vite::asset('resources/images/home/iphone-mockup.png') }}"
        />

        <img
          alt="Lyfter Garage app shown on Apple Watch"
          class="scene-watch"
          src="{{ Vite::asset('resources/images/home/Apple Watch Ultra.png') }}"
        />
      </div>
    </div>
  </div>
</section>
