$(function () {
    $('.name, .intro').textillate({
      in: {
        effect: 'rollIn',
        delayScale: 1,
        delay: 150,
      }
  });
})

$( ".home-link span.lnr" ).mouseover(
  function() {
    $(".home-link span.home-text").css("display", "block");
    $(".home-link span.lnr").css("display", "none");
  }
);

$( ".home-link span.home-text" ).mouseleave(
  function() {
    $(".home-link span.home-text").css("display", "none");
    $(".home-link span.lnr").css("display", "block");
  }
);

$( ".user-link span.user-text" ).mouseleave(
  function() {
    $(".user-link span.user-text").css("display", "none");
    $(".user-link span.lnr").css("display", "block");
  }
);

$( ".user-link span.lnr" ).mouseover(
  function() {
    $(".user-link span.user-text").css("display", "block");
    $(".user-link span.lnr").css("display", "none");
  }
);

$( ".skill-link span.skill-text" ).mouseleave(
  function() {
    $(".skill-link span.skill-text").css("display", "none");
    $(".skill-link span.lnr").css("display", "block");
  }
);

$( ".skill-link span.lnr" ).mouseover(
  function() {
    $(".skill-link span.skill-text").css("display", "block");
    $(".skill-link span.lnr").css("display", "none");
  }
);

$( ".folio-link span.folio-text" ).mouseleave(
  function() {
    $(".folio-link span.folio-text").css("display", "none");
    $(".folio-link span.lnr").css("display", "block");
  }
);

$( ".folio-link span.lnr" ).mouseover(
  function() {
    $(".folio-link span.folio-text").css("display", "block");
    $(".folio-link span.lnr").css("display", "none");
  }
);

$( ".contact-link span.contact-text" ).mouseleave(
  function() {
    $(".contact-link span.contact-text").css("display", "none");
    $(".contact-link span.lnr").css("display", "block");
  }
);

$( ".contact-link span.lnr" ).mouseover(
  function() {
    $(".contact-link span.contact-text").css("display", "block");
    $(".contact-link span.lnr").css("display", "none");
  }
);

if ( $(".homepage-section").length ) {
  $(".home-link").addClass("active ");
} else {
  $(".home-link").removeClass("active ");
};

if ( $(".about-section").length ) {
  $(".user-link").addClass("active ");
} else {
  $(".user-link").removeClass("active ");
};

if ( $(".skills-section").length ) {
  $(".skill-link").addClass("active ");
} else {
  $(".skill-link").removeClass("active ");
};

if ( $(".mywork-section").length ) {
  $(".folio-link").addClass("active ");
} else {
  $(".folio-link").removeClass("active ");
};

if ( $(".contact-section").length ) {
  $(".contact-link").addClass("active ");
} else {
  $(".contact-link").removeClass("active ");
};
