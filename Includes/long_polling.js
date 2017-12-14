$(document).ready(function ()
{   
    $(function getComments(){
        $.ajax({                                      
            url: '../Includes/getRecentComment.php',                          
            data: "",                             
            dataType: 'json',                   
            success: function(data)        
            {
                $('.comments').html(" ");
                for(var i = 0; i < data.length; i++)
                {
                  var user = data[i].username;              
                  var message = data[i].comment; 
                  var commentid = data[i].commentid;
                  var canDelete = data[i].canDelete;
                  if(canDelete)
                  {
                    $('.comments').append("<p>"+user+": "+message+"<button onclick=remove("+commentid+")>Delete</button></p>"); 
                  }
                  else
                  {
                    $('.comments').append("<p>"+user+": "+message+"</p>"); 
                  }
                  
                }
                getComments();
            } 
        }); 
    });
    getComments();
});