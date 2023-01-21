$(document).ready(function () {
    var trigger = $('#link a'),
      container = $('#page-content');

    trigger.on('click', function () {
      var $this = $(this),
        target = $this.data('target');
  
    container.load(target);
    return false;
  });
});
