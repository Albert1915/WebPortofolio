            // set delay 10s
            var delay = 10000;
             
            function loader() {
                setTimeout(function(){
                    $("#loading").hide();
                    $(".loader").hide();
                },delay);
            };