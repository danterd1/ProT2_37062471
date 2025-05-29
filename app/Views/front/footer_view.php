<!-- FOOTER -->
<footer class="container">
  <div class="row border-top py-5">
    <div class="col-auto">
      <h3>danterd.com</h3>
      <a href="principal" class="btn btn-link">Acerca de</a>
      <a href="#quienes" class="btn btn-link">Contacto</a>
      <a href="https://www.instagram.com/" class="btn btn-link" target="_blank" rel="noopener noreferrer">Instagram</a>
      <a href="https://www.facebook.com/" class="btn btn-link" target="_blank" rel="noopener noreferrer">Facebook</a>
      <a href="https://www.twitter.com/" class="btn btn-link" target="_blank" rel="noopener noreferrer">Twitter</a>
    </div>
    <div class="text-center w-100 mt-3">
      <small>&copy; <span id="year"></span> danterd.com. Todos los derechos reservados.</small>
    </div>
  </div>
</footer>

<script>
  document.getElementById('year').textContent = new Date().getFullYear();
</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>



<script src="assets/js/vendor/smooth-scroll.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
