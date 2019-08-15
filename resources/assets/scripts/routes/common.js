export default {
  init() {
    // JavaScript to be fired on all pages
    
    //mobile menu open on click button hamburger

    let $hamburgerBtn = $('.header__hamburger-btn');
    let $headerMenu = $('.header__menu');
    let $headerContacts = $('.header__contacts');
    let $headerlogo = $('.header__logo');
    let body = $('body');
    
    if($hamburgerBtn){
      $hamburgerBtn.on('click', function () {
        $(this).parent().toggleClass('header__hamburger--active');
        $headerMenu.toggleClass('header__menu--open');
        // $headerContacts.toggleClass('header__contacts--active');
        if(!$headerContacts.hasClass('header__contacts--active')){
          setTimeout(function(){
            $headerContacts.addClass('header__contacts--active');
            $headerlogo.addClass('header__logo--hide');
          }, 1000);
        }else{
          $headerContacts.removeClass('header__contacts--active');
          $headerlogo.removeClass('header__logo--hide');
        }
        body.toggleClass('offscroll');
      })
    }

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
