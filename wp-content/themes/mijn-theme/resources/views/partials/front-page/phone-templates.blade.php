@php
  $sections = [
      ['theme' => 'blue', 'reverse' => false, 'loop' => 'resources/images/phone-templates/loop-line.png'],
      ['theme' => 'pink', 'reverse' => true, 'loop' => 'resources/images/phone-templates/loop-line2.png'],
      ['theme' => 'blue', 'reverse' => false, 'loop' => 'resources/images/phone-templates/loop-line.png'],
      ['theme' => 'pink', 'reverse' => true, 'loop' => 'resources/images/phone-templates/loop-line2.png'],
  ];
@endphp

@foreach ($sections as $section)
  <section class="phone-templates-section bg-white px-6 py-20 md:px-8 lg:py-24">
    <div class="mx-auto max-w-[1360px]">
      <div @class([
        'phone-templates',
        'phone-templates--reverse' => $section['reverse'],
        'phone-templates--pink' => $section['theme'] === 'pink',
        'phone-templates--blue' => $section['theme'] === 'blue',
      ])>
        <div class="phone-templates-copy">
          <div class="phone-templates-badge">
            <span class="mr-2 h-2.5 w-2.5 rounded-full bg-[#63d8c8]"></span>
            <span class="text-[0.95rem] font-semibold text-[#111111]">Label</span>
          </div>

          <h2 class="phone-templates-title">
            This is a large title
          </h2>

          <p class="phone-templates-description">
            Lorem ipsum dolor sit amet consectetur. Diam vel at eget tristique a mattis tempor urna convallis. Cursus duis dignissim in lorem at amet. Vitae auctor leo nunc faucibus quis sagittis volutpat rutrum. Est posuere imperdiet scelerisque arcu quis bibendum mi.
          </p>

          <div class="phone-templates-actions">
            <a class="site-button site-button--mint phone-templates-button" href="#">
              <span>Button</span>
              <span aria-hidden="true" class="phone-templates-button-icon">
                <img alt="" src="{{ Vite::asset('resources/images/icons/huisje_slot.png') }}">
              </span>
            </a>
            <a class="site-button site-button--dark phone-templates-button" href="#">
              <span>Button</span>
              <span aria-hidden="true" class="phone-templates-button-icon">
                <img alt="" src="{{ Vite::asset('resources/images/icons/huisje_slot.png') }}">
              </span>
            </a>
          </div>
        </div>

        <div class="phone-templates-visual-wrap">
          <div class="phone-templates-bg-shape" aria-hidden="true"></div>
          <img
            alt=""
            aria-hidden="true"
            class="phone-templates-loop"
            src="{{ Vite::asset($section['loop']) }}"
          />

          <img
            alt="Garage app interface on iPhone"
            class="phone-templates-phone"
            src="{{ Vite::asset('resources/images/phone-templates/iphone-15-pro.png') }}"
          />
        </div>
      </div>
    </div>
  </section>
@endforeach
