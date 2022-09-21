
    <!-- BEGIN: Footer-->
    <footer class="page-footer footer footer-static footer-light navbar-shadow">
        <div class="footer-copyright">
          <div class="container">
            <span>COPYRIGHT © <?= date('Y') ?> <a href="https://soclose.co/" target="_blank"> SoClose, </a> All rights reserved.</span>
          </div>
        </div>
      </footer>
      <!-- END: Footer-->
  
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js" integrity="sha512-2RLMQRNr+D47nbLnsbEqtEmgKy67OSCpWJjJM394czt99xj3jJJJBQ43K7lJpfYAYtvekeyzqfZTx2mqoDh7vg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script src="{{ asset('dashboard/js/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/popper.js') }}"></script>
    <script src="{{ asset('dashboard/js/bootstrap.min.js') }}"></script>
    <!-- BEGIN VENDOR JS-->
    <script src="{{ asset('dashboard/js/vendors.min.js') }}"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGES  JS-->
    <script src="{{ asset('dashboard/js/plugins.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/search.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>


    <script>
      $(document).ready(function() {
      $('#datatables').DataTable();
      });
    </script>
  
  @yield('js')
  </body>
  </html>