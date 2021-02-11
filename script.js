/*var data = [
        {
          value: "naruto",
          url: "Naruto_Uzumaki.html",
        },
        { value: "sakura", url: "sakura_haruno.html" },
        { value: "sasuke", url: "sasuke_uchiha.html" },
        { value: "itachi", url: "itachi_uchiha.html" },
      ];*/

var base_url = window.location.origin;
var selectedOption;
$(function () {
  $("#search").autocomplete({
    source: "search.php",
    focus: function (event, ui) {
      // prevent autocomplete from updating the textbox
      event.preventDefault();
      // manually update the textbox
      $(this).val(ui.item.value);
    },
    select: function (event, ui) {
      // prevent autocomplete from updating the textbox
      event.preventDefault();
      // manually update the textbox and hidden field
      $(this).val(ui.item.value);

      selectedOption = ui.item;
    },
  });
});

$.ui.autocomplete.filter = function (array, term) {
  var matcher = new RegExp("^" + $.ui.autocomplete.escapeRegex(term), "i");
  return $.grep(array, function (value) {
    return matcher.test(value.label || value.value || value);
  });
};

$("#submitbtn").on("click", function () {
  window.location.href = selectedOption.url;
});
