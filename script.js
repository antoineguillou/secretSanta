(function($){
	function reloadWindow(){
		$.ajax({
		   url: 'list.php',
		   dataType: 'html',
		   success: function(result){
		   		$('.windows').empty().append(result);

		   		$('a').on('mouseup touch', function(e){
					reloadWindow();
				});
		   },
		   alert: function(result){
		   		alert('pas ok');
		   }
		});
	}
	reloadWindow();
})(jQuery);