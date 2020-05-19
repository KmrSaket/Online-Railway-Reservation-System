$('document').ready(function() {

    var tnum;
    var tname;
    const queryString=window.location.search;
    const urlParams= new URLSearchParams(queryString);
    const source = urlParams.get('s');
    const destination = urlParams.get('d');
    const date = urlParams.get('date');
    var d = new Date(date);
    var dayIndex =d.getDay();

// sending data to backend to fetch train list and display all

      $.post( 'includes/customer/trains_fetch.php' ,
            { source: source, destination: destination, dayIndex : dayIndex },
            function(responsedata_fetch) {
                // alert(this.url);
               $('#response').html(responsedata_fetch);
               $('#searchQuery').html("Trains between " +  source + " and " +  destination);
               $('button[name="book"]').click(function() {
                 var currentCard=$(this).closest("span");
                 tnum=currentCard.find("h5").text().trim().substring(0,5);
                 tname=currentCard.find("h5").text().trim().substring(8,);

                 // sending data to ticket form and ask user to fill details

                       $.post( 'includes/customer/fill_ticket.php' ,
                             { source: source, destination: destination, date : date, train_no : tnum, train_name : tname },
                             function(responsedata_fetch) {
                                 // alert(this.url);
                                 $('#searchQuery').html("Please fill the form!");
                                 $('#response').html(responsedata_fetch);
                                // $('button[name="book"]').click(function() {
                                //   var currentCard=$(this).closest("span");
                                //   var tnum=currentCard.find("h5").text().trim().substring(0,5);
                                //   var tname=currentCard.find("h5").text().trim().substring(8,);
                                //   console.log(tnum);
                                //   console.log(tname);
                                // });
                               }
                         );

               });
              }
        );









        // code to read selected table row cell data (values).
        // $('.book').click(function(){
         // get the current card
         // var currentRow=$(this).closest("span");
         //get values of card
         // var tno=currentRow.find("h5").text().trim();
         // console.log("ll");
         // console.log(tno);
       // });

       // console.log(date);

});
