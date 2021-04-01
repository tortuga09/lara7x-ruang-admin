<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>
        @php
        $copyYear = 2021;
        $curYear = date('Y');
        @endphp
        &copy; {{ $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '') }} {{ config('app.name') }}
         - Theme by <b><a href="https://indrijunanda.gitlab.io/" target="_blank">RuangAdmin</a></b>
      </span>
    </div>
  </div>
</footer>
