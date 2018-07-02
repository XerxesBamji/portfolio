<header class="your-header">
    <div class="container">
        <nav id="your-menu" class="text-right your-menu">
            <span class="js__slideNav_open_btn material-icons cursor open-btn">menu</span>

            <div class="js__slideNav_menu slideNav__menu_wrap">
      <div class="slideNav_top_buttons">
        <span class="js__slideNav_close_btn slideNav_top_icon cursor">
          <i class="material-icons slideNav_close_icon"></i>
        </span>
      </div>
      <ul class="js__slideNav_ul slideNav_ul">
          <li><a href="#" class="slideNav_link_item"><span class="lnr lnr-home"></span></a></li>
          <li><a href="#" class="slideNav_link_item"><span class="lnr lnr-user"></span></a></li>
          <li><a href="#" class="slideNav_link_item"><span class="lnr lnr-cog"></span></a></li>
          <li><a href="#" class="slideNav_link_item"><span class="lnr lnr-eye"></span></a></li>
          <li><a href="#" class="slideNav_link_item"><span class="lnr lnr-envelope"></span></a></li>
                </ul>
            </div>
        </nav>

    </div>
</header>

<!-- Load Plugin -->
<?= $this->Html->script('jquery.slideNav.min.js') ?>

  <!-- Initialise Plugin -->
<script>
$(function() {
  $("#your-menu").slideNav();
});
</script>
