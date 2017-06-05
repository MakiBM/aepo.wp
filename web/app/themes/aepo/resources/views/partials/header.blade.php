<header class="page-header js-page-header">
  <div class="background-layer -white"></div>
  <div class="horizontal-container">
    <nav class="primary-navigation">
      <a href="{{ home_url('/') }}" class="primary-navigation__branding">
        <img src="{{ get_template_directory_uri() }}/assets/images/LOGOTYPE.svg" alt="" />
      </a>
      <div class="primary-navigation__links">
        @foreach(wp_get_nav_menu_items('Header Menu') as $item)
          <a href="{{ $item->url }}" class="primary-navigation__link @if($item->object_id == $post->ID) -active @endif">
            {{ $item->title }}
          </a>
        @endforeach
      </div>
    </nav>
  </div>
</header>
<div class="page-header-spacer"></div>
