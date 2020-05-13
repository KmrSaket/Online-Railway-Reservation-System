$('document').ready(function() {

    const queryString=window.location.search;
    const urlParams= new URLSearchParams(queryString);
    const source = urlParams.get('s');
    const destination = urlParams.get('d');


// sending data to backend to fetch train list and display all

      $.post( 'includes/customer/trains_fetch.php' ,
            { source: source, destination: destination },
            function(responsedata_fetch) {
                // alert(this.url);
               $('#response').html(responsedata_fetch);
               $('#searchQuery').html("Trains between " +  source + " and " +  destination);
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



});
