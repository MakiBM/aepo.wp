<ul class="icon-box-list">
  @while(have_rows('items')) @php(the_row())
    <li class="icon-box-list__item">
      <div class="icon-box">
        <div class="icon-box__media">
          <img src="{{ get_sub_field('icon') }}">
        </div>
        <p class="icon-box__content">
          {!! get_sub_field('description') !!}
        </p>
      </div>
    </li>
  @endwhile
</ul>
