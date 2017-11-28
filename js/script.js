(function($){
	function reloadWindow(){
		$.ajax({
		   url: 'list.php',
		   dataType: 'html',
		   success: function(result){
		   		$('.windows').empty().append(result);
		   },
		   alert: function(result){
		   		console.log(result);
		   }
		});
	}
	reloadWindow();

  $('a').on('mouseup touch', function(e){
    reloadWindow();
  });
})(jQuery);
