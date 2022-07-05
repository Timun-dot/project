
<footer class="footer nt-auto py-3 bg-dark">
    <div class="container text-center">
        <span class="text-muted">@Cryptocurrency(2022)</span>
    </div>
</footer>

<script src="https://widget.rss.app/v1/magazine.js" type="text/javascript" async></script>
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets/auth/js/scripts.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="{{ asset('assets/auth/demo/chart-area-demo.js') }}"></script>
<script src="{{ asset('assets/auth/demo/chart-bar-demo.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="{{ asset('assets/auth/js/datatables-simple-demo.js') }}}"></script>
<script>
    //Get the button
    var mybutton = document.getElementById("myBtn");
    
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};
    
    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }
    
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
    </script>

</body>
</html>