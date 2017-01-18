$(document).ready( function() {
  var dropdown_elem = $('#dropdown_element');
  var dropdown_toggler = $('#dropdown_toggler');
  var dropdown_overlay = $('.dropdown-menu-overlay');
  var dropdown_hider = $('.dropdown-hider');
  var mouse_on_menu = false;
  var dropdown_height = $(window).height() - dropdown_elem.offset().top;
  var dropdown_link = $('.dropdown-menu-link');
  dropdown_elem.offset().top;
  var dropdown_menu_div = $('.dropdown-menu__scroll');
  var dropdown_filter_toggler = $('li.dropdown-filter__element a');
  var dropdown_filter_main = $('div.dropdown-filter__content');
  var dropdown_filter_checkbox = $('.dropdown-filter__content input');

  dropdown_menu_div.css({
    "height": dropdown_height - 40 + "px"
  });
  // Drop Down menu show
  dropdown_toggler.on('mouseover', function(){
    console.log("reveal menu");
    mouse_on_menu = false;
    dropdown_elem.css({
      'opacity': '1'
    });
    console.log(dropdown_elem);
    dropdown_elem.addClass('dropdown-menu--show');
    dropdown_elem.css({
      'height': dropdown_height + 'px'
    });
    dropdown_overlay.css({
      'display': 'block'
    });
  });

  // Drop Down menu variable set
  dropdown_elem.on('mouseenter', function(){
    mouse_on_menu = true;
  });
  // Drop down menu hide
  dropdown_overlay.on('mouseover', function() {
    if(mouse_on_menu == true) {
      dropdown_hide();
      mouse_on_menu == false;
    } else {
      mouse_on_menu = false;
      return;
    }
  });
  dropdown_hider.on('mouseover', function() {
    dropdown_elem.removeClass('dropdown-menu--show');
    dropdown_hide();
    console.log(dropdown_hider);
  });
$('.dropdown-content-div:first').css('display','block');
  // Link hover
  dropdown_link.on('mouseover', function() {
    dropdown_link.each(function(i, obj) {
      $(this).removeClass('active');
    });
    $('.dropdown-content-div').css({
      "display":'none'

    });
    $(this).addClass('active');
    var filter_content = $(this).parent().data('filter-content-on');
    $('#dropdown_element').find("[data-filter-content='" + filter_content + "']").css({
      'display':'block'
    });
    console.log(filter_content);
    console.log($('.dropdown-content-div').find("[data-filter-content='" + filter_content + "']"));
  });
  // Dropdown hider function
  function dropdown_hide() {
    dropdown_elem.removeClass('dropdown-menu--show');
    dropdown_overlay.css({
      'display': 'none'
    });
    dropdown_elem.css({
      'opacity': '0',
      'height': '0vh'
    });
  }
  // Filter toggle
  dropdown_filter_toggler.on('click', function(event){
    event.preventDefault();
    $(this).parent().parent().children().each(function(){
      $(this).removeClass('active');
    });
    dropdown_filter_main.children().css({
      "display": 'none'
    });
    $('#' + $(this).data('filtertab')).css({
      "display": 'block'
    });
    $(this).parent().addClass('active');
  });
  // Custom Scrollbar

  // Filter by checking checkbox
  dropdown_filter_checkbox.on('change',function(){
    var ids = [];
    var id = this.id;
    dropdown_filter_checkbox.each(function(){
      if(this.checked) {
        ids.push(this.id);
        return turn_on_filtered(ids);
      } else {
        return turn_on_filtered(ids);
      }
    });
    if(ids.length === 0) {
      $('.dropdown-menu-ul').find('a').css({
        "color":"#333"
      });
    }
  });
  // turn on filtered items
  function turn_on_filtered(ids) {
    $('.dropdown-menu-ul').find('a').css({
      "color":"#ccc"
    });
    $(ids).each(function(){
      $('.dropdown-menu-ul').find("[data-filter-type='" + this + "']").find('a').css({
        "color":"#333"
      });
    });

  }
  $(".content").mCustomScrollbar();
});
