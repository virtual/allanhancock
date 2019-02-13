jQuery(document).ready(function() {
  $('body').on('click','.dropdown-toggle',function(e){
    e.preventDefault();
    e.stopPropagation();
    var _d=$(this).closest('.dropdown');
    if ((_d).hasClass('show')) {
      $(_d).removeClass('show')
    } else {
      $(_d).removeClass('show')
      _d.addClass('show');
    }    
  });

  // Accordion, highlight active header
    $('.collapse').on('shown.bs.collapse', function () {
        $(this).prev().addClass('active');
    });

    $('.collapse').on('hidden.bs.collapse', function () {
        $(this).prev().removeClass('active');
    });

  $(".header-actions .searchicon").click(function (event) {
    if (!($(this).hasClass('active'))) {
      $(this).addClass('active');
      event.preventDefault();
      $('.header-actions .searchbox input').show(); //noscript 
      $('.header-actions .searchbox input').focus();
      }
      else {
        if ($('.header-actions .searchbox input')[0].value === '') {
          // console.log('no text!')
          event.preventDefault();
          $('.header-actions .searchbox input').hide();
          $(this).removeClass('active');
        } else {
          // submit
        }
      }
  });

  // Smooth scroll to anchor
  $("a.scrollable").click(function (event) {
    event.preventDefault();
    var goToId = $(this).attr("href");
    if ($(goToId).length) { // If an anchor exists with this href
      $("html, body").animate({
        scrollTop: $($(this).attr("href")).offset().top - ahapp.scrollableOffset
      }, 500);
      $(goToId).focus(); 
    }  
  });

  document.onkeydown = function(evt) {
    e = evt || window.event;    
    if ((e.target).parentNode.classList.contains(('dropdown'))) {
      if (e.keyCode == 39 || e.keyCode == 40) {      
        (e.target).parentNode.classList.add('show');
      }
      if (e.keyCode == 37 || e.keyCode == 38) {   
        (e.target).parentNode.classList.remove('show');
      }
    } 
  };

  // When tabbing close the menu back up when tabbed out
  $(".dropdown>a").focus(function() {
    $('.dropdown.show').removeClass('show');
  });
}); // END FUNCTION READY
 
require('jquery-colorbox');

// Start the namespace
var ahapp = {
  colorBox: function(){
    $('.video-lightbox').colorbox({
      iframe:true, 
      width: "80%",
      height: "60%",
      maxWidth: "1000", 
      maxHeight: "750",
      transition: 'none',
      onOpen: function(){ 
        $("body").addClass('menu-open');
      },
      onClosed: function(){ 
        $("body").removeClass('menu-open');
      }
    });
    $('.lightbox').colorbox({
      maxWidth: "95%", 
      maxHeight: "100%",
      transition: 'none',
      rel: 'lightbox',
      onOpen: function(){ 
        $("body").addClass('menu-open');
      },
      onClosed: function(){ 
        $("body").removeClass('menu-open');
      }
    });
  },
  changeScrollableOffset: function(px) {
    this.scrollableOffset = px;
  }, // end mobileScrolltoTab
  scrollAccordion: function() {
  // For reference only; minified version in main.js
  var topScrollHeader = ($('header').height()) // height of header when first loaded
  var innerSectionHeight = 0
  var prevMoveTopOffset = 0
  var prevAccContent = 0
  var animateSpeed = 200
  var panel // active accordion panel
  var togglerHeight = 0

  function move(clickPos) {
    var newPt = clickPos - togglerHeight - 40
    if (clickPos > (topScrollHeader + innerSectionHeight)) { 
      newPt = newPt - innerSectionHeight
    }
    if ((prevMoveTopOffset) > clickPos - prevAccContent) {
      $('html,body').animate({
        scrollTop: newPt
      }, animateSpeed);
      prevMoveTopOffset = newPt
    } else {
      newPt = newPt - prevAccContent
      $('html,body').animate({
        scrollTop: newPt
      }, animateSpeed)
      prevMoveTopOffset = newPt
    }
  }
  },
   
  highlightActiveNav: function() {
    // Current Page Link Highlighting
	  $(".left-nav nav ul.nav a,.button-row a").each(function(index){
      var currentPage = ou_path.toLowerCase().replace(ou_index, '');
      var link = $(this).attr("href").toLowerCase().replace(ou_index, '');
      if (link == currentPage){
        $(this).parent('li').addClass("current");
      }
    });
  },
  navTabs: function () {
    $(document).ready(function () {
      $('.nav-link')
        .on('click', function (e) {
          // chg all siblings to false
          $(e.target).parent('li').siblings().find('a').attr('aria-selected', false);
          $(e.target).attr('aria-selected', true);
        });
    });
  },
  
  addBreadcrumbPosition: function() {
    // used for google structure data
    $('.breadcrumb li').each(function (index) {
      $(this).append('<meta property="position" content="' + (index+1) + '" />');
    });
  },
  runParallax: function() {
    $('.jarallax').jarallax({
      speed: 0.2
    });
  },
  isMobile: function () {
    return /iPad|iPhone|iPod|Android/.test(navigator.userAgent);
  }
};

ahapp.colorBox(); 
ahapp.highlightActiveNav();
ahapp.navTabs(); 
ahapp.addBreadcrumbPosition();
if (!(ahapp.isMobile())) { 
  ahapp.runParallax(); 
}

// Detect breakpoint ResponsiveBootstrapToolkit
var ResponsiveBootstrapToolkit = require('responsive-toolkit');
(function($, viewport){

  var visibilityDivs = {
      'xs': $('<div class="d-xs-block d-sm-none d-md-none d-lg-none d-xl-none"></div>'),
      'sm': $('<div class="d-none d-sm-block d-md-none d-lg-none d-xl-none"></div>'),
      'md': $('<div class="d-none d-md-block d-sm-none d-lg-none d-xl-none"></div>'),
      'lg': $('<div class="d-none d-lg-block d-sm-none d-md-none d-xl-none"></div>'),
      'xl': $('<div class="d-none d-xl-block d-sm-none d-md-none d-lg-none"></div>'),
  };

  viewport.use('custom', visibilityDivs);

  var showBreakpoint = function() {
      console.log('Current breakpoint: ', viewport.current());
  }

  // on resize
  // $(window).resize(
  //     viewport.changed(function() {
  //       // showBreakpoint();
  //     })
  // ).resize();

})(jQuery, ResponsiveBootstrapToolkit);

// TODO: For images uses arrow notation :\
// lazyLoadInit();

// For animations
require('./observables')