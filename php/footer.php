</section>

<section id="footer" class="pos-rel">
  <div class="row">
    <div class="col-md-6  left-text">
      <p>For any tech support follow: </p>
      <p>web: <a href="https://julian-sky.tk/"> www.julian-sky.tk</a></p>
    </div>
    <div class="col-md-6  footer-details">
      <p>(C) 2020 by Julian Okonsky</p>
    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/85608ad0f1.js" crossorigin="anonymous"></script>

<?php
$url = $_SERVER['REQUEST_URI'];
if ($url == "Vesta/index.html") : ?> <script type="text/javascript" src="js/scroll.js"></script>
<?php endif; ?>


<script type="text/javascript" src="js/flux.js" charset="utf-8"></script>
      
      <script type="text/javascript" charset="utf-8">
          $(function(){
              if(!flux.browser.supportsTransitions)
                  alert("Flux Slider requires a browser that supports CSS3 transitions");
                  
              window.f = new flux.slider('#slider', {
                  pagination: false,
                  controls: false,
                  transitions: ['explode', 'tiles3d', 'bars3d', 'cube', 'turn'],
                  autoplay: false
              });
              
              $('.transitions').click(function(event){
                  event.preventDefault();
                  window.f.next($(event.target).data('transition'), $(event.target).data('params'));
              });
          });
      </script>
</body>

</html>