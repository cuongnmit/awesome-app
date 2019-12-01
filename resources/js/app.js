$('document').ready(function () {
  $('.ui.sidebar').first()
    .sidebar({
      transition: 'overlay',
      mobileTransition: 'overlay',
    })
    .sidebar('attach events', '.bars.icon');
});
