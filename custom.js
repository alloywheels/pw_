 
	
	$('#cam').click(function(){
		$.ajax({
    type: "GET",
    url: "tt_importer.php",
    data: "foo=boo"
});
	console.log('dsdsd');	
	$('.inside').html('');
	$('.inside').html('UPLOADING TT STOCK TO DATABASE');
	});
	
	$('#ebay').click(function(){
		$.ajax({
    type: "GET",
    url: "csvcolumncutter.php",
    data: "foo=boo"
});
	$('#ebay').html('');
	$('#ebay').html('<i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">call_received</i>procesing');
	
	$('#inside').html('Loading...WAIT!!!');	

	setTimeout(function(){
		
	$('#ebay').html('');
	$('#ebay').html('<i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">call_received</i>eBay upload');
	
	
	
	$('#inside').html('edit first column');	
	},50000);
	
	$('#ebay').click(function(){
		
	$.ajax({
    type: "GET",
    url: "ebimport.php",
    data: "foo=boo"
});	
		$('#inside').text('');	
		$('#inside').text('Loading...WAIT!!!');	
	});
	
	});
		
	
