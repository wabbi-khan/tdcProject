// ======
$(document).ready(function () {
  var current_fs, next_fs, previous_fs; //fieldsets
  var opacity;
  var current = 1;
  var steps = $("fieldset").length;

  setProgressBar(current);

  $(".next").click(function () {
    current_fs = $(this).parent();
    next_fs = $(this).parent().next();

    // ? Validation =======
    if (current === 1) {
      var email = $("#email").val().trim();
      var uname = $("#uname").val().trim();
      var pwd = $("#pwd").val().trim();
      var cpwd = $("#cpwd").val().trim();

      if (email === "") {
        alert("Please enter Email!");
        return false;
      } else if (uname === "") {
        alert("Please enter Username!");
        return false;
      } else if (pwd === "") {
        alert("Please enter Password!");
        return false;
      } else if (cpwd === "") {
        alert("Please enter Confirm Password!");
        return false;
      }
    } else if (current === 2) {
      var fname = $("#fname").val().trim();
      var lname = $("#lname").val().trim();
      var gender = $("#gender").val();
      var date = $("#date").val().trim();

      if (fname === "") {
        alert("Please enter First Name!");
        return false;
      } else if (lname === "") {
        alert("Please enter Lastname!");
        return false;
      } else if (gender === null || gender === "") {
        alert("Please select gender!");
        return false;
      } else if (date === "") {
        alert("Please enter date!");
        return false;
      }
    } else if (current === 3) {
      var phoneno = $("#phoneno").val().trim();
      var address = $("#address").val().trim();
      var city = $("#city").val().trim();
      var state = $("#state").val();
      var zipcode = $("#zipcode").val().trim();

      if (phoneno === "") {
        alert("Please enter Phone no!");
        return false;
      } else if (address === "") {
        alert("Please enter address!");
        return false;
      } else if (city === "") {
        alert("Please enter city!");
        return false;
      } else if (state === null || state === "") {
        alert("Please select state!");
        return false;
      } else if (zipcode === "") {
        alert("Please enter zipCode!");
        return false;
      }
    }

    // ===
    //Add Class Active
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
    //show the next fieldset
    next_fs.show();
    //hide the current fieldset with style
    current_fs.animate(
      { opacity: 0 },
      {
        step: function (now) {
          // for making fielset appear animation
          opacity = 1 - now;

          current_fs.css({
            display: "none",
            position: "relative",
          });
          next_fs.css({ opacity: opacity });
        },
        duration: 500,
      }
    );
    setProgressBar(++current);
  });

  $(".previous").click(function () {
    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();

    //Remove class active
    $("#progressbar li")
      .eq($("fieldset").index(current_fs))
      .removeClass("active");

    //show the previous fieldset
    previous_fs.show();

    //hide the current fieldset with style
    current_fs.animate(
      { opacity: 0 },
      {
        step: function (now) {
          // for making fielset appear animation
          opacity = 1 - now;

          current_fs.css({
            display: "none",
            position: "relative",
          });
          previous_fs.css({ opacity: opacity });
        },
        duration: 500,
      }
    );
    setProgressBar(--current);
  });

  function setProgressBar(curStep) {
    var percent = parseFloat(100 / steps) * curStep;
    percent = percent.toFixed();
    $(".progress-bar").css("width", percent + "%");
  }

  $(".submit").click(function () {
    return false;
  });
});
