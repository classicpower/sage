<header class="header">
  <div class="container header__container">
    <div class="header__logo">
      <a class="header__logo-link" href="{{ home_url('/') }}">
        <div class="header__logo-name">{{ get_bloginfo('name', 'display') }}</div>
        <div class="header__logo-desc">{{ get_bloginfo('description', 'display') }}</div>
      </a>
    </div>
    <div class="header__hamburger">
      <button type="button" class="header__hamburger-btn">
        <span class="header__hamburger-bar"></span>
      </button>
    </div>
    <div class="header__menu">
      <nav class="header__menu-nav">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif
      </nav>
    </div>
    <div class="header__contacts">
      <a href="tel:88123456790"class="header__contacts-tel">8 (812) 345 67 90</a>
      <button type="button" class="btn header__contacts-btn">Заказать звонок</button>
    </div>
  </div>
</header>
