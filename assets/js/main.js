// Sign In Form
$(document).ready(function(){
		var form = $('#sign-in-form');

		$('#login').click(function(){

			$.ajax({
				url: form.attr("action"),
				type: 'post',
				data: $("#sign-in-form").serialize(),
				success:function(data){  
                //alert(data);
				$('#result').html(""+data+"");
            	} 
			});

		});

	// Sign In Form End

	// Fetch Live Class
	
	 function fetch_data()  
	    {  
	        $.ajax({  
	            url:"page/select-class.php",  
	            method:"POST",  
	            success:function(data){  
					$('#live_data').html(data);  
	            }  
	        });  
	    }  
	    fetch_data();  

	    // Edit-Class

	    	function edit_data(class_id, text, column_name)  
		    {  
		        $.ajax({  
		            url:"page/edit-class.php",  
		            method:"POST",  
		            data:{class_id:class_id, text:text, column_name:column_name},  
		            dataType:"text",  
		            success:function(data){  
		                //alert(data);
						$('#result').html("<div class='alert alert-success'>"+data+"</div>");
						window.setTimeout(function() {
					    $(".alert").fadeTo(500, 0).slideUp(500, function(){
					        $(this).remove(); 
					    });
					}, 4000);
		            }  
		        });  
		    }  
		    $(document).on('blur', '.name', function(){  
		        var class_id = $(this).data("id1");  
		        var name = $(this).text();  
		        edit_data(class_id, name, "name");  
		    });  
		    $(document).on('blur', '.info', function(){  
		        var class_id = $(this).data("id2");  
		        var info = $(this).text();  
		        edit_data(class_id,info, "info");  
		    }); 

		    // Add New Class
		      $(document).on('click', '#btn_add', function(){  
		        var name = $('#name').text();  
		        var info = $('#info').text();  
		        if(name == '')  
		        {  
		            alert("Please Enter Class");  
		            return false;  
		        }  
		        if(info == '')  
		        {  
		            alert("Please Enter Remark");  
		            return false;  
		        }  
		        $.ajax({  
		            url:"page/insert-class.php",  
		            method:"POST",  
		            data:{name:name, info:info},  
		            dataType:"text",  
		            success:function(data)  
		            {  
		                alert(data);  
		                fetch_data();  
		            }  
		        })  
		    });

		      // Delete Class


	    $(document).on('click', '.btn_delete', function(){  
	        var class_id=$(this).data("id3");  
	        if(confirm("Are you sure you want to delete this?"))  
	        {  
	            $.ajax({  
	                url:"page/delete-class.php",  
	                method:"POST",  
	                data:{class_id:class_id},  
	                dataType:"text",  
	                success:function(data){  
	                    alert(data);  
	                    fetch_data();  
	                }  
	            });  
	        }  
	    });  



});




//Accept Only Numbers
function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
    	alert("Enter Numbers only");
        return false;
    }
    return true;
}

//Accept Number only end

//Accept Characters Only
function alphaOnly(evt) {
       evt = (evt) ? evt : event;
       var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
          ((evt.which) ? evt.which : 0));
       if (charCode > 33 && (charCode < 65 || charCode > 90) &&
          (charCode < 97 || charCode > 122)) {
          alert("Enter Letters Only.");
          return false;
       }
       return true;
     }

// Autofill after roll no.
function autochange(datavalue){

        var student_id=document.getElementById('roll').value;
        
        
        $.ajax({
                url: "page/fee-user.php", 
                type: "POST",
                data: {student_id: student_id},  
                success: function(result){
                    $('#autofill').html(result);
                }
        })
}