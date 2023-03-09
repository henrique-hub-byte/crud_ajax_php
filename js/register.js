document.addEventListener("DOMContentLoaded", function () {
  displayData();
});

function displayData() {
  var displayData = "true";
  $.ajax({
    url: "./display.php",
    type: "post",
    data: {
      displaySend: displayData,
    },
    success: function (data, status) {
      $("#displayDataTable").html(data);
    },
  });
}

function adduser() {
  var nameAdd = $("#complete_name").val();
  var emailAdd = $("#complete_email").val();
  var mobileAdd = $("#complete_mobile").val();
  var placeAdd = $("#complete_place").val();
  $.ajax({
    url: "./insert.php",
    type: "post",
    data: {
      nameSend: nameAdd,
      emailSend: emailAdd,
      mobileSend: mobileAdd,
      placeSend: placeAdd,
    },
    success: function (data, status) {
      //function to display data
      //console.log(status);
      $("#completeModal").modal("hide");
      displayData();
    },
  });
}

function deleteUser(deleteid) {
  $.ajax({
    url: "./delete.php",
    type: "post",
    data: {
      deletesend: deleteid,
    },
    success: function (data, status) {
      displayData();
    },
  });
}

function updateUser(updateid) {
  $("#hiddendata").val(updateid);
  $.post("./update.php", { updateid: updateid }, function (data, status) {
    var userid = JSON.parse(data);
    $("#update_name").val(userid.username);
    $("#update_email").val(userid.email);
    $("#update_mobile").val(userid.mobile);
    $("#update_place").val(userid.place);
  });

  $("#updateModal").modal("show");
}

function updateDetails() {
  var update_name = $("#update_name").val();
  var update_email = $("#update_email").val();
  var update_mobile = $("#update_mobile").val();
  var update_place = $("#update_place").val();
  var hiddendata = $("#hiddendata").val();
  console.log(hiddendata);
  $.post(
    "./updateDetails.php",
    {
      update_name: update_name,
      update_email: update_email,
      update_mobile: update_mobile,
      update_place: update_place,
      hiddendata: hiddendata
    },
    function (data, status) {
      $("#updateModal").modal("hide");
      displayData();
    }
  );
}
