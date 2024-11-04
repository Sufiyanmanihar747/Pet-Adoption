@extends('layouts.app')

@section('content')
    <article>
        {{-- POP NOTIFICATION --}}

        {{-- <div class="notification-toast" data-toast="">

      <button class="toast-close-btn" data-toast-close="">
        <ion-icon name="close-outline" role="img" class="md hydrated" aria-label="close outline"></ion-icon>
      </button>
      <div class="toast-detail">
        <p class="toast-message">
          Someone in new just bought
        </p>
        <p class="toast-title">
          Rose Gold Earrings
        </p>
        <p class="toast-meta">
          <time datetime="PT2M">2 Minutes</time> ago
        </p>
      </div>
    </div> --}}

        {{-- CARESOLE --}}

        {{-- @include('layouts.caresole') --}}


        @include('layouts.hero')

        {{-- CATEGORY --}}

        @include('layouts.category')

        @include('layouts.love')

        @include('layouts.show')

        @include('layouts.horizontalscroll')


        {{-- SPECIES --}}

        {{-- @include('layouts.species') --}}

        <!--- #thought-->

        {{-- @include('layouts.products') --}}

        {{-- HORIZONTAL --}}


        {{-- SUBSCRIBE --}}

        {{-- @include('layouts.subscribe') --}}

    </article>

    {{-- FOOTER --}}

    @include('layouts.footer')
@endsection
