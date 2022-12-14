</main>
  <!--   Core JS Files   -->
  <script src="{{ asset('mod') }}/js/core/popper.min.js"></script>
  <script src="{{ asset('mod') }}/js/core/bootstrap.min.js"></script>
  <script src="{{ asset('mod') }}/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="{{ asset('mod') }}/js/plugins/smooth-scrollbar.min.js"></script>
  <!-- Kanban scripts -->
  <script src="{{ asset('mod') }}/js/plugins/dragula/dragula.min.js"></script>
  <script src="{{ asset('mod') }}/js/plugins/jkanban/jkanban.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('mod') }}/js/material-dashboard.min.js?v=3.0.1"></script>
</body>

</html>