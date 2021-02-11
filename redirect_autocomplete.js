$(document).ready(function () {
  $(".searchbox-inputbox").autocomplete({
    source: "search.php",
    minLength: 0,
  });
});

$("#submitbtn").click(function () {
  for (let index = 0; index < 3; index++) {
    if (
      document.getElementsByClassName("searchbox-inputbox")[index].value ==
      "naruto"
    ) {
      document.location.href =
        "http://localhost/complete/static/Naruto-wiki/naruto_uzumaki.php";
    }
    if (
      document.getElementsByClassName("searchbox-inputbox")[index].value ==
      "sakura"
    ) {
      document.location.href =
        "http://localhost/complete/static/Naruto-wiki/sakura_haruno.php";
    }
    if (
      document.getElementsByClassName("searchbox-inputbox")[index].value ==
      "sasuke"
    ) {
      document.location.href =
        "http://localhost/complete/static/Naruto-wiki/sasuke_uchiha.php";
    }
    if (
      document.getElementsByClassName("searchbox-inputbox")[index].value ==
      "itachi"
    ) {
      document.location.href =
        "http://localhost/complete/static/Naruto-wiki/itachi_uchiha.php";
    }
  }
});
