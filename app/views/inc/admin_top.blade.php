@include('templates/dashboard')
@section('content')
  <div class="main_content col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
    @include('__partials/fetch')
    @include('__partials/breadcrumb')
    @include('__partials/loader')
    <div class="main cc">        