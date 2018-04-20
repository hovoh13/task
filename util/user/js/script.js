$(document).ready(function(){
	var activeClock;
	var activUserTemplate = _.template('<div class="card img-fluid col-lg-2  " style="width:150px"><img class="card-img-top" src="util/img/<%= img %>" alt="" style="width:100%"><div class="card-img-overlay"><h4 class="card-title"><%= name+" "+lastname %></h4></div></div>');
	var userProfil = _.template('<div class="card img-fluid " style="width:500px"><img class="card-img-top" src="util/img/<%= img %>" alt="" style="width:100%"><div class="card-body"><h4 class="card-title"><%= name+" "+lastname %></h4></div></div>');
		$(".users_body").hide();
	$(".alert").hide();
	$("#logon").submit(function(){
		$.ajax({
			url: "index.php/user_ajax/logon",
			type: "POST",
			data: $('#logon').serialize(),
			success: function(result){
				var obj=JSON.parse(result);
				if(obj.error!=null){
					console.log("no user");
					$(".alert").show();
					$("#logon").hide();
					setTimeout(function (){
						$(".alert").hide();
						$("#logon").show();
					},2000);
				}
				else
				{
				$("#logon").hide();
				var profile=userProfil(obj)
				$("#users").html(profile);
				$(".users_body").show();
				activeClock=setInterval(activ,5000);
			}
				

        
    }});
		
		return false;
	})
	$(".logout").click(function(){
		clearInterval(activeClock);
		$.ajax({
			url: "index.php/user_ajax/logout",
			type: "POST",
			success: function(result){
				//var obj=JSON.parse(result);
				console.log("logout");
				}
			})
		$(".users_body").hide();
		$("#logon").trigger('reset').show();
	})
	function activ (){
		$.ajax({
			url: "index.php/user_ajax/allActiv",
			type: "POST",
			data: {"all": true},
			success: function(result){
				var obj=JSON.parse(result);
				//console.log(obj);
				var activ_users="";
				_.each(obj,function (user){
					console.log(user);
					activ_users+=activUserTemplate(user);
				})
				
				$("#activ_users").html(activ_users);
			}
		})
	};
	
  


});