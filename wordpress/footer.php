
<script
    src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
    crossorigin="anonymous"
  ></script>
<script>

 
  window.addEventListener("DOMContentLoaded", () => {
      $(".toggle-menu").click(function() {
      $(this).toggleClass("open");
      $(".menu").toggleClass("open");
    });
  });
  </script>
  </body>
  </html>