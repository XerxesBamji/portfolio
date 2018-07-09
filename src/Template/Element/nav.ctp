<header class="your-header">
    <div class="container">
        <nav id="your-menu" class="text-right your-menu">
            <span class="js__slideNav_open_btn material-icons cursor open-btn">menu</span>
              <div class="js__slideNav_menu slideNav__menu_wrap js__slideNav_menu_open">
                <div class="slideNav_top_buttons">
                  <span class="js__slideNav_close_btn slideNav_top_icon cursor">
                    <i class="material-icons slideNav_close_icon"></i>
                  </span>
                </div>
                <ul class="js__slideNav_ul slideNav_ul">
                    <li><a href="home" class="slideNav_link_item home-link"><span class="lnr lnr-home"></span><span class="home-text text-uppercase">Home</span></a></li>
                    <li><a href="about" class="slideNav_link_item user-link"><span class="lnr lnr-user"></span><span class="user-text text-uppercase">About</span></a></li>
                    <li><a href="skills" class="slideNav_link_item skill-link"><span class="lnr lnr-cog"></span><span class="skill-text text-uppercase">Skills</span></a></li>
                    <li><a href="my-work" class="slideNav_link_item folio-link"><span class="lnr lnr-eye"></span><span class="folio-text text-uppercase">My Work</span></a></li>
                    <li><a href="contact" class="slideNav_link_item contact-link"><span class="lnr lnr-envelope"></span><span class="contact-text text-uppercase">Contact</span></a></li>
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
