$(function() {
	$('.search-from').hide();

	$('.fa-search').on('click', function() {
		$('.search-from').toggle(1000);
	});
});