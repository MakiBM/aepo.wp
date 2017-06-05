<section class="content-section {{ get_sub_field('background') }}">
  <div class="horizontal-container">
    @if(get_sub_field('title'))
      <h2 class="content-section__title">{{ get_sub_field('title') }}</h2>
    @endif

    @if(get_sub_field('lead_text'))
      <p class="content-section__lead">{{ get_sub_field('lead_text') }}</p>
    @endif

    @while(have_rows('components')) @php(the_row())
      <?php $component = 'partials.sections.components.' . get_row_layout(); ?>
      @include($component)
    @endwhile
  </div>
</section>
