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
            <a class="phone-templates-button phone-templates-button--mint" href="#">
              <span>Button</span>
              <span aria-hidden="true" class="phone-templates-button-icon">
                <svg fill="none" viewBox="0 0 26 21" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1.25 9.9375L13 1.25L24.75 9.9375V18.8125C24.75 19.4341 24.5031 20.0302 24.0636 20.4698C23.624 20.9093 23.0279 21.1562 22.4062 21.1562H3.59375C2.97215 21.1562 2.37601 20.9093 1.93646 20.4698C1.49693 20.0302 1.25 19.4341 1.25 18.8125V9.9375Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                  <path d="M8.875 21.1562V11.9062H17.125V21.1562" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                  <path d="M10.625 6.34375H15.375" stroke="currentColor" stroke-linecap="round" stroke-width="2"/>
                </svg>
              </span>
            </a>
            <a class="phone-templates-button phone-templates-button--dark" href="#">
              <span>Button</span>
              <span aria-hidden="true" class="phone-templates-button-icon">
                <svg fill="none" viewBox="0 0 26 21" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1.25 9.9375L13 1.25L24.75 9.9375V18.8125C24.75 19.4341 24.5031 20.0302 24.0636 20.4698C23.624 20.9093 23.0279 21.1562 22.4062 21.1562H3.59375C2.97215 21.1562 2.37601 20.9093 1.93646 20.4698C1.49693 20.0302 1.25 19.4341 1.25 18.8125V9.9375Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                  <path d="M8.875 21.1562V11.9062H17.125V21.1562" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                  <path d="M10.625 6.34375H15.375" stroke="currentColor" stroke-linecap="round" stroke-width="2"/>
                </svg>
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
