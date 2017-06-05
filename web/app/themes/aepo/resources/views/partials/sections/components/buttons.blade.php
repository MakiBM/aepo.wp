<div class="btn-list">
  @while(have_rows('buttons')) @php(the_row())
    <a href="{{ get_sub_field('link') }}" class="btn -white">{{ get_sub_field('text') }}</a>
  @endwhile
</div>
