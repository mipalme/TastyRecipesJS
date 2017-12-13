$(document).ready(function()
{
    $(function(){
        $.ajax({                                      
            url: '../Includes/get_comments.php',                          
            data: "",                             
            dataType: 'json',                   
            success: function(data)        
            {
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
            } 
        }); 
    }); 
});