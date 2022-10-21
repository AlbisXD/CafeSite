<footer>

  <div class="copyright">
    <p>© Cafe-Site</p>
  </div>
</footer>
<?php wp_footer(); ?>




<!-- ハンーガメニュー -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/hamburger.js"></script>

<!-- スライドショー -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $(".regular").slick({
      dots: true,
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1

    });
  });
  
</script>
</body>

</html>