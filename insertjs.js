liff.init(
    {
      liffId: "1655985273-dPXMVrbZ",
    },
    () => {
      if (liff.isLoggedIn()) {
        // runApp();
      } else {
        liff.login();
      }
    },
    (err) => console.error(err.code, error.message)
  );
function SubForm() {
  
  // $("#submit").click(function () {
    liff.init(
      {
        liffId: "1655985273-dPXMVrbZ",
      },
      liff
        .getProfile()
        .then((profile) => {
          id = profile.userId;
          check(id);
        })
        .catch((err) => {
          console.log("error", err);
        })
    );
  // });
}
function check(id) {
    var first_name = $("#myform").find('input[name="first_name"]').val();
    var last_name = $("#myform").find('input[name="last_name"]').val();
    var gender = $("#myform").find('input[type="raido"]').val();
    var phone = $("#myform").find('input[name="phone"]').val();
    var birthday =$("#myform").find('input[name="birthday"]').val();
    console.log(id);
    console.log(first_name);
    console.log(last_name);
    console.log(gender);
    console.log(phone);
    console.log(birthday);
  
    if (
        first_name == null ||
        last_name == null ||
        gender == null ||
        phone == "" ||
        birthday == "" 
    ) {
      swal({
        title: "ข้อมูลไม่ครบครับ",
        text: "กรุณาลองอีกครั้ง",
        icon: "error",
        button: "Submit",
      });
    } else {
      swal({
        title: "เช็คความถูกต้องด้วยครับ",
        text:
          "ชื่อ : " +
          first_name +
          " นามสกุล " +
          last_name +
          "\n วันเกิด : " +
          birthday +
          "\n เบอร์โทรศัพท์ : " +
          phone +
          "\n เพศ : " +
          gender ,
        icon: "warning",
        buttons: {
          cancel: "แก้ไข",
          Yes: true,
        },
    }).then((value) => {
      switch (value) {
        case "Yes":
          insert(id);
          break;
        default:
          break;
      }
    });
  }
}
  function insert(id) {
    var id = id;
  
    var first_name = $("#myform").find('input[name="first_name"]').val();
    var last_name = $("#myform").find('input[name="last_name"]').val();
    var gender = $("#myform").find('input[name="gender"]').val();
    var phone = $("#myform").find('input[name="phone"]').val();
    var birthday =$("#myform").find('input[name="birthday"]').val();
    // console.log(first_name);
    // console.log(last_name);
    // console.log(gender);
    // console.log(phone);
    // console.log(birthday);
  
    $.ajax({
      url: "regisemp.php",
      type: "POST",
      data: {
        line_id : id,
        first_name : first_name,
        last_name : last_name,
        gender : gender,
        phone : phone,
        birthday : birthday,
        
      },
  
      success: function (result) {
        if (result == 0) {
          swal({
            title: "บันทึกข้อมูลสำเร็จ",
            text: "ขอบคุณที่เป็นสมาชิกกับเรา",
            icon: "success",
            button: "OK!",
          }).then((value) => {
            // liff login
            window.location.assign("https://liff.line.me/1655985273-GQER4NMK");
          });
        } else if (result == 1) {
          swal({
            title: "บันทึกข้อมูลผิดพลาด",
            text: "กรุณาลองใหม่อีกครั้ง",
            icon: "error",
            button: "OK!",
          });
        } 
      },
    });
  }