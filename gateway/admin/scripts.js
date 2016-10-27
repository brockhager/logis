 $(document).ready(function(event){
	 $('.element_submit').click(function(event){
		event.preventDefault();	
		document.getElementById('resultbox').style.display = "block";
		
		
      var e_value =  $('.e_value').val();
	  var e_description = $('.e_description').val();
	  var code_value = $('.code_value').val();
	  var code_description = $('.code_description').val();
	  var element_submit = $('.element_submit').val();
          // Check if username value set
        var dataString ={
		"e_value": e_value,
		"e_desc": e_description,
		"code_value": code_value,
		"code_desc": code_description,
		"element_submit": element_submit
		};
            // Process AJAX request
            $.ajax({
				type: 'post',
				 cache: false, 
				url: 'inputdata.php', 
				data: dataString, 
				success:
			function(html){
              // Append data into #results div
              $('#tyflowsubmitdiv').html(html);
           

					}
				
			});
		});	
	});

	
	function resultbox_hide(){
document.getElementById('resultbox').style.display = "none";

}