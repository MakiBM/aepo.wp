<footer class="page-footer">
  <div class="horizontal-container">
    <div class="page-footer__logo">
      <img src="{{ get_template_directory_uri() }}/assets/images/AEPO Logo - Footer.svg" alt="" />
    </div>
    <p class="page-footer__copy">
      All rights reserved, &copy;{{ date('Y') }} AEPO inc
    </p>

    <nav class="page-footer__nav">
      @foreach(wp_get_nav_menu_items('Footer Menu') as $item)
        <a href="{{ $item->url }}" class="page-footer__nav__link">{{ $item->title }}</a>
      @endforeach
    </nav>
  </div>
</footer>
