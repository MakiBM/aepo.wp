@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @while(have_rows('page_sections')) @php(the_row())
      <?php $section = 'partials.sections.' . get_row_layout(); ?>
      @include($section)
    @endwhile
  @endwhile
@endsection
