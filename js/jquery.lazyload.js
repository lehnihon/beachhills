(function($) {
  $.fn.lazy = function(threshold) {
    var $w = $(window),
        th = threshold || 0,
        retina = window.devicePixelRatio > 1,
        attrib = retina? "data-src-retina" : "data-src",
        images = this,
        loaded,
        inview,
        source;

    this.one("lazy", function() {
      source = this.getAttribute(attrib);
      source = source || this.getAttribute("data-src");
      if (source) this.setAttribute("src", source);
    });

    function lazy() {
      inview = images.filter(function() {
        var $e = $(this),
            wt = $w.scrollTop(),
            wb = wt + $w.height(),
            et = $e.offset().top,
            eb = et + $e.height();

        return eb >= wt - th && et <= wb + th;
      });

      loaded = inview.trigger("lazy");
      images = images.not(loaded);
    }

    $w.scroll(lazy);
    $w.resize(lazy);

    lazy();

    return this;

  };
})(jQuery);

