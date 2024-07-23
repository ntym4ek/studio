(function ($) {
  Drupal.behaviors.sec_store = {
    attach: function (context, settings) {
      var timer;
      var delay = 1000; // задержка между окончанием ввода текста и отправкой запроса

      // текстовые поля формы с ajax обработчиком
      // триггерить с задержкой
      $('#cart-form input.form-text.ajax-processed').bind('input', function() {
        window.clearTimeout(timer);
        var el = this;
        timer = window.setTimeout(function() {
          $(el).trigger('text_change');
        }, delay);
      });

    }
  };
})(jQuery);
