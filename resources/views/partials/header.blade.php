<header class="header">
  <div class="container header__container">
    <div class="header__logo">
      <a class="logo" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}

      </a>
    </div>
    <div class="header__menu">
      <nav class="nav-primary">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif
      </nav>
    </div>
    <div class="header__contacts">
      <a href="tel:88123456790"class="header__contacts-tel">8 (812) 345 67 90</a>
      <button type="button" class="header__contacts-call">Заказать звонок</button>
    </div>
  </div>
</header>
