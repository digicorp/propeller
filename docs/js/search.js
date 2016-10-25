

	
(function ($) {
  $(document).ready(function() {
    window.index = lunr(function () {
      this.field('title', {boost: 10});
      this.field('body');
      this.ref('href');
    });
    window.index.pipeline.reset();
	
	var urlBase = location.href.substring(0, location.href.lastIndexOf("/")+1)
	
    window.index.add({

      href: 'http://propeller.in/docs/accordion.php',
      title: 'accordion',
      body: 'accordion'
    });

    window.index.add({
      href: 'http://propeller.in/docs/alert.php',
      title: 'alert',
      body: 'alert'
    });

    window.index.add({
      href: 'http://propeller.in/docs/badge.php',
      title: 'badge',
      body: 'badge'
    });

    window.index.add({
      href: 'http://propeller.in/docs/button.php',
      title: 'button',
      body: 'button'
    });

    window.index.add({
      href: 'http://propeller.in/docs/card.php',
      title: 'card',
      body: 'card'
    });

    window.index.add({
      href: 'http://propeller.in/docs/checkbox.php',
      title: 'checkbox',
      body: 'checkbox'
    });

    window.index.add({
      href: 'http://propeller.in/docs/custom-scroll.php',
      title: 'custom scroll',
      body: 'custom scroll'
    });

    window.index.add({
      href: 'http://propeller.in/docs/data-table.php',
      title: 'data grid',
      body: 'data grid'
    });

    window.index.add({
      href: 'http://propeller.in/docs/datetimepicker.php',
      title: 'datepicker',
      body: 'datepicker'
    });

    window.index.add({
      href: 'http://propeller.in/docs/modal.php',
      title: 'dialogs',
      body: 'dialogs'
    });

    window.index.add({
      href: 'http://propeller.in/docs/dropdown.php',
      title: 'dropdown',
      body: 'dropdown'
    });

    window.index.add({
      href: 'http://propeller.in/docs/expandcollapse.php',
      title: 'expandcollapse',
      body: 'expandcollapse'
    });

    window.index.add({
      href: 'http://propeller.in/docs/expand-collapse.php',
      title: 'expand collapse',
      body: 'expand collapse'
    });

    window.index.add({
      href: 'http://propeller.in/docs/floating-button.php',
      title: 'floating button',
      body: 'floating button'
    });

    window.index.add({
      href: 'http://propeller.in/docs/form.php',
      title: 'form',
      body: 'form'
    });

    window.index.add({
      href: 'http://propeller.in/docs/getting-started.php',
      title: 'getting started',
      body: 'getting started'
    });

    window.index.add({
      href: 'http://propeller.in/docs/icons.php',
      title: 'icons',
      body: 'icons'
    });

    window.index.add({
      href: 'http://propeller.in/docs/list.php',
      title: 'lists',
      body: 'lists'
    });

    window.index.add({
      href: 'http://propeller.in/docs/menu.php',
      title: 'menu',
      body: 'menu'
    });

    window.index.add({
      href: 'http://propeller.in/docs/navbar.php',
      title: 'navbar',
      body: 'navbar'
    });

    window.index.add({
      href: 'http://propeller.in/docs/popover.php',
      title: 'popover',
      body: 'popover'
    });

    window.index.add({
      href: 'http://propeller.in/docs/progressbar.php',
      title: 'progressbar',
      body: 'progressbar'
    });

    window.index.add({
      href: 'http://propeller.in/docs/radio.php',
      title: 'radio',
      body: 'radio'
    });

    window.index.add({
      href: 'http://propeller.in/docs/range-slider.php',
      title: 'range slider',
      body: 'range slider'
    });

    window.index.add({
      href: 'http://propeller.in/docs/select2.php',
      title: 'select 2',
      body: 'select 2'
    });

    window.index.add({
      href: 'http://propeller.in/docs/shadow.php',
      title: 'shadow',
      body: 'shadow'
    });

    window.index.add({
      href: 'http://propeller.in/docs/sidebar.php',
      title: 'sidebar',
      body: 'sidebar'
    });

    window.index.add({
      href: 'http://propeller.in/docs/table.php',
      title: 'table',
      body: 'table'
    });

    window.index.add({
      href: 'http://propeller.in/docs/tab.php',
      title: 'tabs',
      body: 'tabs'
    });

    window.index.add({
      href: 'http://propeller.in/docs/textarea.php',
      title: 'textarea',
      body: 'textarea'
    });

    window.index.add({
      href: 'http://propeller.in/docs/tooltip.php',
      title: 'tooltip',
      body: 'tooltip'
    });

    window.index.add({
      href: 'http://propeller.in/docs/typography.php',
      title: 'typography',
      body: 'typography'
    });


    // icon click
    /*$('ul#nav-mobile li.search .search-wrapper i.material-icons').click(function() {
      if ($('.search-results .focused').length) {
        $('.search-results .focused').first()[0].click();
      } else if ($('.search-results').children().length) {
        $('.search-results').children().first()[0].click();
      }
    });*/

    var renderResults = function(results) {
      var resultsContainer = $('.search-results');
      resultsContainer.empty();
      Array.prototype.forEach.call(results, function(result) {
		  
        var resultDiv = $('<a href=' + result[1] + '>' + result[0].replace(".php","").replace("-"," ") + '</a>');
        resultsContainer.append(resultDiv);
      });
    };

    var debounce = function (fn) {
      var timeout;
      return function () {
        var args = Array.prototype.slice.call(arguments),
            ctx = this;

        clearTimeout(timeout);
        timeout = setTimeout(function () {
          fn.apply(ctx, args);
        }, 100);
      };
    };

    $('input#search').focus(function() { $(this).parent().addClass('focused'); });
    $('input#search').blur(function() {
      if (!$(this).val()) {
        $(this).parent().removeClass('focused');
      }
    });

    $('input#search').bind('keyup', debounce(function (e) {
      if ($(this).val() < 2) {
        renderResults([]);
        return;
      }

      if (e.which === 38 || e.which === 40 || e.keyCode === 13) return;

      var query = $(this).val();
      var results = window.index.search(query).slice(0, 6).map(function (result) {
        var href = result.ref.split('http://propeller.in/docs/')[1];
        return [href.charAt(0).toUpperCase() + href.slice(1), result.ref];
      });
      renderResults(results);
    }));


    $('input#search').bind('keydown', debounce(function (e) {
      // Escape.
      if (e.keyCode === 27) {
        $(this).val('');
        $(this).blur();
        renderResults([]);
        return;
      } else if (e.keyCode === 13) {
        // enter
        if ($('.search-results .focused').length) {
          $('.search-results .focused').first()[0].click();
        } else if ($('.search-results').children().length) {
          $('.search-results').children().first()[0].click();
        }
        return;
      }

      // Arrow keys.
      var focused;
      switch(e.which) {
        case 38: // up
          if ($('.search-results .focused').length) {
            focused = $('.search-results .focused');
            focused.removeClass('focused');
            focused.prev().addClass('focused');
          }
          break;

        case 40: // down
          if (!$('.search-results .focused').length) {
            focused = $('.search-results').children().first();
            focused.addClass('focused');
          } else {
            focused = $('.search-results .focused');
            if (focused.next().length) {
              focused.removeClass('focused');
              focused.next().addClass('focused');
            }
          }
          break;

        default: return; // exit this handler for other keys
      }
      e.preventDefault();
    }));



  });
}( jQuery ));