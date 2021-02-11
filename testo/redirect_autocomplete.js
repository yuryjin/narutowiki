$(document).ready(function () {
  $(".searchbox-inputbox").autocomplete({
    source: "search.php",
    minLength: 0,
  });
});

/*
      var pages = [
        {id: 1, value: "naruto", url: "https://naruto.fandom.com/ru/wiki/%D0%9D%D0%B0%D1%80%D1%83%D1%82%D0%BE_%D0%A3%D0%B7%D1%83%D0%BC%D0%B0%D0%BA%D0%B8"},
        {id: 2, value: "sakura", url: "http://localhost/static-tests/testo/sakura.php"},
        {id: 3, value: "sasuke", url: "https://naruto.fandom.com/ru/wiki/%D0%A1%D0%B0%D1%81%D0%BA%D0%B5_%D0%A3%D1%87%D0%B8%D1%85%D0%B0"},
        {id: 4, value: "itachi", url: "https://naruto.fandom.com/ru/wiki/%D0%98%D1%82%D0%B0%D1%87%D0%B8_%D0%A3%D1%87%D0%B8%D1%85%D0%B0"}
      ]
      */
//var pages2 = ["naruto", "sakura", "sasuke", "itachi"]
$("#target").click(function () {
  //alert("Handler for .click() called.");
  /*
        if (document.getElementById("tags").value == "naruto") {
          document.location.href =
            "https://naruto.fandom.com/ru/wiki/%D0%9D%D0%B0%D1%80%D1%83%D1%82%D0%BE_%D0%A3%D0%B7%D1%83%D0%BC%D0%B0%D0%BA%D0%B8";
        }
        if (document.getElementById("tags").value == "sakura") {
          document.location.href =
            "http://localhost/static-tests/testo/sakura.php";
        }
        if (document.getElementById("tags").value == "sasuke") {
          document.location.href =
            "https://naruto.fandom.com/ru/wiki/%D0%A1%D0%B0%D1%81%D0%BA%D0%B5_%D0%A3%D1%87%D0%B8%D1%85%D0%B0";
        }
        if (document.getElementById("tags").value == "itachi") {
          document.location.href =
            "https://naruto.fandom.com/ru/wiki/%D0%98%D1%82%D0%B0%D1%87%D0%B8_%D0%A3%D1%87%D0%B8%D1%85%D0%B0";
        }
        */
  for (let index = 0; index < 3; index++) {
    if (
      document.getElementsByClassName("searchbox-inputbox")[index].value ==
      "naruto"
    ) {
      document.location.href = "http://localhost/static-tests/testo/naruto.php";
    }
    if (
      document.getElementsByClassName("searchbox-inputbox")[index].value ==
      "sakura"
    ) {
      document.location.href = "http://localhost/static-tests/testo/sakura.php";
    }
    if (
      document.getElementsByClassName("searchbox-inputbox")[index].value ==
      "sasuke"
    ) {
      document.location.href = "http://localhost/static-tests/testo/sasuke.php";
    }
    if (
      document.getElementsByClassName("searchbox-inputbox")[index].value ==
      "itachi"
    ) {
      document.location.href = "http://localhost/static-tests/testo/itachi.php";
    }
  }
});
