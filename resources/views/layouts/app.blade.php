<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    <div class="wrap" role="document">
      <div class="content">
        <main class="main">
          <!-- @yield('content') -->
          <section class="begin">
            <div class="begin__bg"></div>
            <div class="container begin__container">
              <h1 class="title begin__title">
                <div class="begin__title-top">Ремонт и обслуживание</div>
                <div class="begin__title-bottom">Винных шкафов и винотек</div>
              </h1>
              <p class="begin__desc">Мы работаем круглосуточно. По всей Москве и Московской области.
  Доверьте свою технику профессионалам! </p>
              <button type="button" class="begin__btn">
                Вызвать мастера
              </button>
            </div>
          </section>
        </main>
        @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif
      </div>
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
