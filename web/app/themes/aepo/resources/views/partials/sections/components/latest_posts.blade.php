<div class="tile-list">
  @foreach(wp_get_recent_posts() as $post)
  <a href="{{ get_permalink($post['ID']) }}" class="tile">
    <div class="background-layer" style="background-image: url({{ get_the_post_thumbnail_url($post['ID']) }});"></div>
    <div class="tile__background"></div>
    <article class="tile__content">
      <h3 class="tile__title">{{ $post['post_title'] }}</h3>
      <div class="tile__time">{{ date_format( date_create($post['post_date']), 'd M Y') }}</div>
      <p class="tile__text">{{ str_limit($post['post_content'], $limit = 150, $end = '...') }}</p>
      <span class="tile__link">Read all</span>
    </article>
  </a>
  @endforeach
</div>
