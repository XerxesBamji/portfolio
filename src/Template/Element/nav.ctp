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
                    <li><a href="#" class="slideNav_link_item">Home</a></li>
        <li class="slideNav_dropdown_item">
          <a class="js__slideNav_dropdown_switch slideNav_link_item">About Us<span class="slideNav_icon"><i class="material-icons js__slideNav_dropdown_icon slideNav_right_icon"></i></span></a>
          <ul>
            <li><a href="#" class="slideNav_link_item">The Team</a></li>
            <li><a href="#" class="slideNav_link_item">Our Vision</a></li>
            <li><a href="#" class="slideNav_link_item">Our Mission</a></li>
          </ul>
        </li>
        <li class="slideNav_dropdown_item">
          <a class="js__slideNav_dropdown_switch slideNav_link_item">Our Services<span class="slideNav_icon"><i class="material-icons js__slideNav_dropdown_icon slideNav_right_icon"></i></span></a>
          <ul>
            <li><a href="#" class="slideNav_link_item">Service 1</a></li>
            <li class="slideNav_dropdown_item">
              <a class="js__slideNav_dropdown_switch slideNav_link_item">Our Services<span class="slideNav_icon"><i class="material-icons js__slideNav_dropdown_icon slideNav_right_icon"></i></span></a>
              <ul>
                <li><a href="#" class="slideNav_link_item">Service 1</a></li>
                <li><a href="#" class="slideNav_link_item">Service 2</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="#" class="slideNav_link_item">Privacy Policy</a></li>
        <li><a href="#" class="slideNav_link_item">Terms &amp; Conditions</a></li>
        <li><a href="#" class="slideNav_link_item">Contact Us</a></li>
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
