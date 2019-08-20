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
            <div class="begin__bg bg"></div>
            <div class="container begin__container">
              <h1 class="begin__title">
                <div class="begin__title-top">Ремонт и обслуживание</div>
                <div class="begin__title-bottom">Винных шкафов и винотек</div>
              </h1>
              <p class="begin__desc">Мы работаем круглосуточно. По всей Москве и Московской области.
  Доверьте свою технику профессионалам! </p>
              <button type="button" class="begin__btn button">
                Вызвать мастера
              </button>
            </div>
          </section>
          <section class="advantage">
            <div class="container advantage__container">
              <div class="advantage__col advantage__col-desc">
                <div class="advantage__col-container">
                  <h2 class="advantage__title title">
                    Почему мы?
                  </h2>
                  <div class="advantage__row">
                    <div class="advantage__image">
                      <img src="@asset('images/work.png')" alt="Гарантия на работу">
                    </div>
                    <div class="advantage__content">
                      <h3 class="advantage__content-title subtitle">
                        Гарантия на работу
                      </h3>
                      <p class="advantage__content-text text">
                        Мы гарантируем качество предоставляемых услуг в течении 6-12 месяцев (зависит от типа и состояния ремонтируемой техники).
                      </p>
                    </div>
                  </div>
                  <div class="advantage__row">
                    <div class="advantage__image">
                      <img src="@asset('images/parts.png')" alt="Гарантия на запасные части">
                    </div>
                    <div class="advantage__content">
                      <h3 class="advantage__content-title subtitle">
                        Гарантия на запасные части
                      </h3>
                      <p class="advantage__content-text text">
                        Используем оригинальные запасные части от завода-изготовителя. Гарантируем подлинность и бесперебойную работу в течении 6-12 месяцев.
                      </p>
                    </div>
                  </div>
                  <div class="advantage__row">
                    <div class="advantage__image">
                      <img src="@asset('images/price.png')" alt="Гарантия цены">
                    </div>
                    <div class="advantage__content">
                      <h3 class="advantage__content-title subtitle">
                        Гарантия цены
                      </h3>
                      <p class="advantage__content-text text">
                        Не меняем цены в процессе. Сообщаем точную стоимость сразу после диагностики оборудования. Никаких дополнительных сборов!
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="advantage__col advantage__col-form">
                <form action="" method="post" class="form">
                  <div class="form__container">
                    <div class="form__header">
                      <h3 class="form__header-title subtitle">
                        Хотите узнать причину поломки?
                      </h3>
                      <p class="form__header-text text">
                        Закажите бесплатную диагностику!
                      </p>
                    </div>
                    <div class="form__row">
                      <label class="form__label">
                        <input name="name" type="text" class="form__input" placeholder="Ваше имя">
                      </label>
                    </div>
                    <div class="form__row">
                      <label class="form__label">
                        <input name="phone" type="text" class="form__input" placeholder="Телефонный номер">
                      </label>
                    </div>
                    <div class="form__row">
                      <label class="form__label">
                        <textarea rows="3" name="message" class="form__input" placeholder="Сообщение"></textarea>
                      </label>
                    </div>
                    <div class="form__row">
                      <label class="form__label">
                        <input type="submit" class="form__input form__btn button" value="Заказать диагностику">
                      </label>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </section>
          <section class="services">
            <div class="services__container container">
              <h2 class="services__title title">
                Основные неисправности и стоимость работ
              </h2>
              <div class="services__table">
                <div class="services__table-header">
                  <div class="services__row">
                    <div class="services__row-name">
                      Неисправность холодильника
                    </div>
                    <div class="services__row-price">
                      Стоимость ремонта
                    </div>
                  </div>
                </div>
                <div class="services__table-body">
                  <div class="services__row">
                    <div class="services__row-name">Выезд мастера на объект</div>
                    <div class="services__row-price">0 руб.</div>
                  </div>
                  <div class="services__row">
                    <div class="services__row-name">Диагностика холодильника при последующем ремонте</div>
                    <div class="services__row-price">0 руб.</div>
                  </div>
                  <div class="services__row">
                    <div class="services__row-name">Стоимость выезда мастера за пределы КАД</div>
                    <div class="services__row-price">от 150 руб.</div>
                  </div>
                  <div class="services__row">
                    <div class="services__row-name">Стоимость вызова мастера и диагностика холодильника</div>
                    <div class="services__row-price">500 руб.</div>
                  </div>
                  <div class="services__row">
                    <div class="services__row-name">Засор слива воды в холодильнике</div>
                    <div class="services__row-price">от 1150 руб.</div>
                  </div>
                  <div class="services__row">
                    <div class="services__row-name">Устранение утечки хладагента</div>
                    <div class="services__row-price">от 1600 руб.</div>
                  </div>
                  <div class="services__row">
                    <div class="services__row-name">Заправка холодильника фреоном</div>
                    <div class="services__row-price">от 2500 руб.</div>
                  </div>
                  <div class="services__row">
                    <div class="services__row-name">Устранение засора капилярной трубки или ее замена</div>
                    <div class="services__row-price">от 1700 руб.</div>
                  </div>
                  <div class="services__row">
                    <div class="services__row-name">Установка или ремонт испарителя</div>
                    <div class="services__row-price">от 3200 руб.</div>
                  </div>
                  <div class="services__row">
                    <div class="services__row-name">Замена сенсорных датчиков</div>
                    <div class="services__row-price">от 3800 руб.</div>
                  </div>
                  <div class="services__row">
                    <div class="services__row-name">Ремонт электронных плат</div>
                    <div class="services__row-price">от 2250 руб.</div>
                  </div>
                  <div class="services__row">
                    <div class="services__row-name">Замена вентилятора</div>
                    <div class="services__row-price">от 1200 руб.</div>
                  </div>
                </div>
              </div>
              <div class="services__order">
                <button type="button" class="services__order-btn button">Вызвать мастера</button>
              </div>
            </div>
          </section>
          <section class="reviews">
            <div class="reviews__bg bg"></div>
            <div class="reviews__container container">
              <h2 class="reviews__title title">Отзывы наших клиентов</h2>
              <ul class="reviews__list">
                <li class="reviews__item">
                  <p class="reviews__text text">
                    Понадобилась срочная уборка, так как собирались приехать родственники. Нашел в поисковике фирму, позвонил. Ответили сразу. Сначала сказали, что не могут выслать бригаду, потом попросили повисеть на линии, сказали, что приедут. Приехали за полчаса, хотя были пробки, судя по Яндекс.Картам. Быстро все убрали: протерли пыль, отмыли фасады шкафа, пропылесосили, пятно с ковра удалили, помыли полы. Справились за 1,5 часа. Работой и в целом отношением сотрудников доволен, но вот собранный мусор они не забрали с собой, а в мусорное ведро положили.
                  </p>
                  <div class="reviews__author subtitle">Оксана Николаевна</div>
                </li>
              </ul>
              <div class="reviews__dots">
                <button type="button" class="reviews__dot text">01</button>
                <button type="button" class="reviews__dot text">02</button>
                <button type="button" class="reviews__dot reviews__dot--active text">03</button>
                <button type="button" class="reviews__dot text">04</button>
                <button type="button" class="reviews__dot text">05</button>
              </div>
            </div>
          </section>
          <section class="brands">
            <div class="brands__container container">
              <h2 class="brands__title title">Бренды, с которыми мы работаем</h2>
              <ul class="brands__list">
                <li class="brands__item">
                  <picture class="brands__picture">
                    <source media="(-webkit-min-device-pixel-ratio: 1.5) and (min-resolution: 144dpi)" 
                            srcset="@asset('images/coldvine@2x.png')">
                    <img src="@asset('images/coldvine.png')" alt="">
                  </picture>
                </li>
                <li class="brands__item">
                  <picture class="brands__picture">
                    <source media="(-webkit-min-device-pixel-ratio: 1.5) and (min-resolution: 144dpi)" 
                            srcset="@asset('images/coldvine@2x.png')">
                    <img src="@asset('images/coldvine.png')" alt="">
                  </picture>
                </li>
                <li class="brands__item">
                  <picture class="brands__picture">
                    <source media="(-webkit-min-device-pixel-ratio: 1.5) and (min-resolution: 144dpi)" 
                            srcset="@asset('images/coldvine@2x.png')">
                    <img src="@asset('images/coldvine.png')" alt="">
                  </picture>
                </li>
                <li class="brands__item">
                  <picture class="brands__picture">
                    <source media="(-webkit-min-device-pixel-ratio: 1.5) and (min-resolution: 144dpi)" 
                            srcset="@asset('images/coldvine@2x.png')">
                    <img src="@asset('images/coldvine.png')" alt="">
                  </picture>
                </li>
                <li class="brands__item">
                  <picture class="brands__picture">
                    <source media="(-webkit-min-device-pixel-ratio: 1.5) and (min-resolution: 144dpi)" 
                            srcset="@asset('images/coldvine@2x.png')">
                    <img src="@asset('images/coldvine.png')" alt="">
                  </picture>
                </li>
                <li class="brands__item">
                  <picture class="brands__picture">
                    <source media="(-webkit-min-device-pixel-ratio: 1.5) and (min-resolution: 144dpi)" 
                            srcset="@asset('images/coldvine@2x.png')">
                    <img src="@asset('images/coldvine.png')" alt="">
                  </picture>
                </li>
                <li class="brands__item">
                  <picture class="brands__picture">
                    <source media="(-webkit-min-device-pixel-ratio: 1.5) and (min-resolution: 144dpi)" 
                            srcset="@asset('images/coldvine@2x.png')">
                    <img src="@asset('images/coldvine.png')" alt="">
                  </picture>
                </li>
                <li class="brands__item">
                  <picture class="brands__picture">
                    <source media="(-webkit-min-device-pixel-ratio: 1.5) and (min-resolution: 144dpi)" 
                            srcset="@asset('images/coldvine@2x.png')">
                    <img src="@asset('images/coldvine.png')" alt="">
                  </picture>
                </li>
                <li class="brands__item">
                  <picture class="brands__picture">
                    <source media="(-webkit-min-device-pixel-ratio: 1.5) and (min-resolution: 144dpi)" 
                            srcset="@asset('images/coldvine@2x.png')">
                    <img src="@asset('images/coldvine.png')" alt="">
                  </picture>
                </li>
                <li class="brands__item">
                  <picture class="brands__picture">
                    <source media="(-webkit-min-device-pixel-ratio: 1.5) and (min-resolution: 144dpi)" 
                            srcset="@asset('images/coldvine@2x.png')">
                    <img src="@asset('images/coldvine.png')" alt="">
                  </picture>
                </li>
                <li class="brands__item">
                  <picture class="brands__picture">
                    <source media="(-webkit-min-device-pixel-ratio: 1.5) and (min-resolution: 144dpi)" 
                            srcset="@asset('images/coldvine@2x.png')">
                    <img src="@asset('images/coldvine.png')" alt="">
                  </picture>
                </li>
                <li class="brands__item">
                  <picture class="brands__picture">
                    <source media="(-webkit-min-device-pixel-ratio: 1.5) and (min-resolution: 144dpi)" 
                            srcset="@asset('images/coldvine@2x.png')">
                    <img src="@asset('images/coldvine.png')" alt="">
                  </picture>
                </li>
                <li class="brands__item">
                  <picture class="brands__picture">
                    <source media="(-webkit-min-device-pixel-ratio: 1.5) and (min-resolution: 144dpi)" 
                            srcset="@asset('images/coldvine@2x.png')">
                    <img src="@asset('images/coldvine.png')" alt="">
                  </picture>
                </li>
                <li class="brands__item">
                  <picture class="brands__picture">
                    <source media="(-webkit-min-device-pixel-ratio: 1.5) and (min-resolution: 144dpi)" 
                            srcset="@asset('images/coldvine@2x.png')">
                    <img src="@asset('images/coldvine.png')" alt="">
                  </picture>
                </li>
                <li class="brands__item">
                  <picture class="brands__picture">
                    <source media="(-webkit-min-device-pixel-ratio: 1.5) and (min-resolution: 144dpi)" 
                            srcset="@asset('images/coldvine@2x.png')">
                    <img src="@asset('images/coldvine.png')" alt="">
                  </picture>
                </li>
                <li class="brands__item">
                  <picture class="brands__picture">
                    <source media="(-webkit-min-device-pixel-ratio: 1.5) and (min-resolution: 144dpi)" 
                            srcset="@asset('images/coldvine@2x.png')">
                    <img src="@asset('images/coldvine.png')" alt="">
                  </picture>
                </li>
              </ul>
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
