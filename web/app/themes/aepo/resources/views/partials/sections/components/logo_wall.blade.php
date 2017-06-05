    <div class="logo-wall">
      @while(have_rows('logos')) @php(the_row())
        <a href="{{ get_sub_field('link') }}" target="_blank" class="logo-wall__item">
          <img src="{{ get_sub_field('logo') }}" alt="" />
        </a>
      @endwhile
    </div>
