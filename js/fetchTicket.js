$('document').ready(function() {

  // fetch tickets
  $.post( './includes/customer/fetch_all_tickets.php',
  function(responsedata_fetch) {
        $('#All').html(responsedata_fetch);
        // console.log(responsedata_fetch);
        // var response  = $(".doj").text();
        // var temp = response.split(":");
        // var d = new Date(Date.now())
        // var month = d.getMonth()+1;
        // var today =d.getFullYear() + "-" + 0+month + "-" + d.getDate();
        //////getMonth() range is 0 to 11...convert it into MM format
        // for (i = 1; i < temp.length; i++) {
          // console.log(temp[1]);
          // if(temp[i]<today){
            // $('#past').html(responsedata_fetch);
          // }
          // else if(temp[i]>=today){
              // console.log("upcoming");
          // }
        // }
        // console.log(jQuery.type(temp[2]));
        // console.log(jQuery.type(today));
     }
  );

    // var a="2020-05-25"
    // var b="2020-05-29"
    // if(a>b)
    // console.log("a is L");
    // else {
    //   console.log("a is S");
    // }


// var test =$("#footer").text();
// console.log(test);

});
