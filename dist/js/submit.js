$("#url-submit").submit(function(event){
event.preventDefault();
var link = $("#link-box").val();
		if( link == "")
		{
			$("#link-box").addClass("invalid");
			$("#link-box").next("label").attr("data-error","This field is required").addClass("active");
		}
		else
		{
			$("#link-box").addClass("valid");
			$("#link-box").next("label").attr("data-error", "");
		}
		if(link != ""){
		var submit = $("#url-submit").serialize();
			$.ajax({
			type: "POST",
			url: "function/play.php",
			data: submit,
			success: function(data){
				$("#src").attr("src",data);
				$("#player").load();
				$("#hide").wait(4000).removeAttr("hidden");
				$("#url-submit").trigger("reset");
				console.log(data);
				}
			});
		}
	});