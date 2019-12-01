$('document').ready(function () {
  $('.ui.sidebar').first()
    .sidebar({
      transition: 'overlay',
      mobileTransition: 'overlay',
    })
    .sidebar('attach events', '.bars.icon');

  $('.range__link').click(function () {
    $(this).closest('.range').find('.range__link').removeClass('active');
    $(this).addClass('active');
  });

  $('.add-transaction-btn').click(function () {
    $('.add-transaction-modal').modal('show');
  });

  $('.combobox.multiple').closest('.field').find('select.dropdown').first()
    .dropdown();

  $('.save-transaction-btn').click(function (e) {
    e.preventDefault();
    $('.add-transaction-form').submit();
  });
});
