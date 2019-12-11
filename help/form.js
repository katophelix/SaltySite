



$(function()
{  
    function after_form_submitted(data) 
    {
     
        
        if(data.result == 'success')
        {
            $('form#reused_form').hide();
            $('#success_message').show();
            $('#error_message').hide();
        }
        else
        {
            $('#error_message').append('<ul></ul>');

            jQuery.each(data.errors,function(key,val)
            {
                $('#error_message ul').append('<li>'+key+':'+val+'</li>');
            });
            $('#success_message').hide();
            $('#error_message').show();

            //reverse the response on the button
            $('button[type="button"]', $form).each(function()
            {
                $btn = $(this);
                label = $btn.prop('orig_label');
                if(label)
                {
                    $btn.prop('type','submit' ); 
                    $btn.text(label);
                    $btn.prop('orig_label','');
                }
            });
            
        }//else
    }

	$('#reused_form').submit(function(e)
      {
        e.preventDefault();

        $form = $(this);
        //show some response on the button
        $('button[type="submit"]', $form).each(function()
        {
            $btn = $(this);
            $btn.prop('type','button' ); 
            $btn.prop('orig_label',$btn.text());
            $btn.text('Sending ...');
        });
        

                    var formdata = new FormData(this);
            $.ajax({
                type: "POST",
                url: 'handler.php',
                data: formdata,
                success: after_form_submitted,
                dataType: 'json' ,
                processData: false,
                contentType: false,
                cache: false        
            });
        
      });	

    });
      function submit_form() {    
        // Check Fields
        var complete = true;
        var error_color = '#FFD9D9';
        var fields = ['name','location','message'];
        var row = '';
        var i;
        for(i=0; i < fields.length; ++i) {
            var field = fields[i];
            $('#'+field).css('backgroundColor', 'inherit');
            var value = $('#'+field).val();       
            // Validate Field
            if(!value) {
                if(field != 'message') {
                    $('#'+field).css('backgroundColor', error_color);
                    var complete = false;
                }
                } else {            
                // Sheet Data
                row += '"'+value+'",';
            }
        }
       
        // Submission
        if(complete) {		
            // Clean Row
            row = row.slice(0, -1);		
            // Config
            var gs_sid = '1npq-m4cBd20c7-Vf7G6r5ix0fcUe71afuB3pM7SAiPg'; // Enter your Google Sheet ID here
            var gs_clid = '699097836020-ukl0hht2sg9e7al4ns968e49h66hii92.apps.googleusercontent.com'; // Enter your API Client ID here
            var gs_clis = 'YiiA9tg7YEpLHoanyCSiSOAE'; // Enter your API Client Secret here
            var gs_rtok = '1//0fpq9lRNYaVXHCgYIARAAGA8SNwF-L9IrDlimBeqyoaFHybYhQ3N1mPH-v2DXo-hsiOt1oxZ4HHKCnTEC6isibO0uLOEIj2elrmQ'; // Enter your OAuth Refresh Token here
            var gs_atok = false;
            var gs_url = 'https://sheets.googleapis.com/v4/spreadsheets/'+gs_sid+'/values/A1:append?includeValuesInResponse=false&insertDataOption=INSERT_ROWS&responseDateTimeRenderOption=SERIAL_NUMBER&responseValueRenderOption=FORMATTED_VALUE&valueInputOption=USER_ENTERED';
            var gs_body = '{"majorDimension":"ROWS", "values":[['+row+']]}';        
             // HTTP Request Token Refresh
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'https://www.googleapis.com/oauth2/v4/token?client_id='+gs_clid+'&client_secret='+gs_clis+'&refresh_token='+gs_rtok+'&grant_type=refresh_token');
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {            
                var response = JSON.parse(xhr.responseText);
                var gs_atok = response.access_token;            
                // HTTP Request Append Data
                if(gs_atok) {
                    var xxhr = new XMLHttpRequest();
                    xxhr.open('POST', gs_url);
                    xxhr.setRequestHeader('Content-length', gs_body.length);
                    xxhr.setRequestHeader('Content-type', 'application/json');
                    xxhr.setRequestHeader('Authorization', 'OAuth ' + gs_atok );
                    xxhr.onload = function() {
                        if(xxhr.status == 200) {
                            // Success
                            $('#message').html('<p>Row Added to Sheet | <a href="http://snydergroupinc.com/tutorials/tutorial-google-sheets-api.php">Add Another &raquo;</a></p><p>Response:<br/>'+xxhr.responseText+'</p>');
                            } else {
                            // Fail
                            $('#message').html('<p>Row Not Added</p><p>Response:<br/>'+xxhr.responseText+'</p>');
                        }
                    };
                    xxhr.send(gs_body);
                }            
            };
            xhr.send();
        }
    }


