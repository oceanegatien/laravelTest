<!DOCTYPE html>
<html>
    @include('includes.head')
  <body>
    @include('includes.header')

    <div class="row">
      <div class="col s12">
        @yield('table')

      </div>
    </div>

    @include('includes.footer')
