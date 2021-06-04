$(document).ready(function () {
  $.ajax({
    url: "Test.php",
    type: "post",
    data: {
      brand: $("#brand").val(),
    },
    beforeSend: function () {
      $(".loading").show();
    },
    complete: function () {
      $(".loading").hide();
    },
    success: function (data) {
      $("#list-data").html(data);
    },
  });
  //   console.log($("#brand").val());
  //   console.log($("#tyre_1").val());
  //   console.log($("#tyre_2").val());
  //   console.log($("#tyre_3").val());

  $("#brand").change(function () {
    $.ajax({
      url: "Test.php",
      type: "post",
      data: {
        tyre_1: $("#tyre_1").val(),
        tyre_1: $("#tyre_2").val(),
        tyre_1: $("#tyre_3").val(),
        brand: $("#brand").val(),
      },
      beforeSend: function () {
        $(".loading").show();
      },
      complete: function () {
        $(".loading").hide();
      },
      success: function (data) {
        $("#list-data").html(data);
      },
    });
    console.log($("#brand").val());
    console.log($("#tyre_1").val());
    console.log($("#tyre_2").val());
    console.log($("#tyre_3").val());
  });

  $("#tyre_1").change(function () {
    $.ajax({
      url: "Test.php",
      type: "post",
      data: {
        tyre_1: $("#tyre_1").val(),
        tyre_2: $("#tyre_2").val(),
        tyre_3: $("#tyre_3").val(),
        brand: $("#brand").val(),
      },
      beforeSend: function () {
        $(".loading").show();
      },
      complete: function () {
        $(".loading").hide();
      },
      success: function (data) {
        $("#list-data").html(data);
      },
    });
    console.log($("#brand").val());
    console.log($("#tyre_1").val());
    console.log($("#tyre_2").val());
    console.log($("#tyre_3").val());
  });

  $("#tyre_2").change(function () {
    $.ajax({
      url: "Test.php",
      type: "post",
      data: {
        tyre_1: $("#tyre_1").val(),
        tyre_2: $("#tyre_2").val(),
        tyre_3: $("#tyre_3").val(),
        brand: $("#brand").val(),
      },
      beforeSend: function () {
        $(".loading").show();
      },
      complete: function () {
        $(".loading").hide();
      },
      success: function (data) {
        $("#list-data").html(data);
      },
    });
    console.log($("#brand").val());
    console.log($("#tyre_1").val());
    console.log($("#tyre_2").val());
    console.log($("#tyre_3").val());
  });

  $("#tyre_3").change(function () {
    $.ajax({
      url: "Test.php",
      type: "post",
      data: {
        tyre_1: $("#tyre_1").val(),
        tyre_2: $("#tyre_2").val(),
        tyre_3: $("#tyre_3").val(),
        brand: $("#brand").val(),
      },
      beforeSend: function () {
        $(".loading").show();
      },
      complete: function () {
        $(".loading").hide();
      },
      success: function (data) {
        $("#list-data").html(data);
      },
    });
    console.log($("#brand").val());
    console.log($("#tyre_1").val());
    console.log($("#tyre_2").val());
    console.log($("#tyre_3").val());
  });
});

// $(function () {
//   $("#Reset").click(function () {
//     // console.log($("#brand").val());

//     $('#tyre_1').each(function () {
//       if (this.defaultSelected) {
//           this.selected = true;
//           return false;
//       }
//   });

//     $.ajax({
//       url: "Test.php",
//       type: "post",
//       data: {
//         reset: "reset",
//       },
//       beforeSend: function () {
//         $(".loading").show();
//       },
//       complete: function () {
//         $(".loading").hide();
//       },
//       success: function (data) {
//         $("#list-data").html(data);
//       },
//     });
//   });
//   $("#searchform").on("keyup keypress", function (e) {
//     var code = e.keycode || e.which;
//     if (code == 13) {
//       $("#btnSearch").click();
//       return false;
//     }
//   });
// });
