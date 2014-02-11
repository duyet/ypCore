$("#download-button").click(function(){
  $("#form_email").fadeIn();
  $(this).fadeOut()
});
$("#email-button").click(function(){
	email = $("#email").val();
	if (email == '') return;
	$.ajax({
		url: site_path + '/index.php?code=Download/Addemail&email=' + email,
		dataType: 'json',
		beforeSend: function() {
			$("#email-button").addClass('disabled');
			$("#loading").show();
		},
		complete: function() {
			$("#email-button").removeClass('disabled');
			$("#loading").hide();
		},
		success: function(json) {
			if (json['status'] == 'success') {
				$("#form_email").hide();
				html = '<a href="'+ json['link'] +'" class="btn btn-primary btn-large">Click here to download</a>';
				$("#success").html(html).faceIn();
			} else {
				alert('Email was fail! Please try again!');
			}
		},
		error: function(xhr, ajaxOptions, thrownError) {
			//alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			html = xhr.responseText;
			$("#success").html(html).faceIn();
		}
	});
});