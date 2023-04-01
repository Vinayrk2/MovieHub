// $(window).on("load",function(){

// });

$(document).ready(function(){
	$("#preloader").animate({
		"opacity":0
	},1000,"swing",function(){
		$("#preloader").css({"display":"none"})
	});


	$("#btnContainer a,#scrollDown a").on("click",function(){
	var hash;

		if (this.hash !== "") {
			hash = this.hash;
			event.preventDefault();

			$("html,body").animate({
				"scrollTop" : $(hash).offset().top 
			},"slow")
		}
	});

	$("#showProfileBtn").click(function(event){
		event.preventDefault();
		// console.log(this.hash)
		$(this.hash).css("display","initial");
	})

	$("#scrollDiv a").click(function(){
		if (this.hash != "") {
			var hash = this.hash;
			event.preventDefault();

			$("html,body").animate({
				"scrollTop" : $(hash).offset().top
			},"slow")
		}
	});

	$("#options").blur(function(){
		$("#options").hide("slow");
	})
});

	function editProfile(){
		$(".editable").removeAttr("disabled");
	}

	function closeProfile(){
		$("#profileDiv").css({"display":"none"})
	}

	function showOptions(){
		$("#options").show("slow");
	}
