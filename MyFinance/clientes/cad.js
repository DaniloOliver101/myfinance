            $("#login").submit(function(event){
            event.preventDefault();
            var post_url=  $(this).attr("action");
            var request_method = $(this).attr("method");
            var form_data = $(this).serialize();

            $.post(post_url, form_data, function(response){
                if(response=="1"){
                window.location="../home2/home.php"
                }
              else{
                $("#senha").val("");
                $("#resultado").show();
                }

              })
          });
   