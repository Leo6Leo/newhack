// Initialize your app
var myApp = new Framework7({
	material: true,
	swipePanel: 'left'
});

// Export selectors engine
var $$ = Dom7;

// Add view
var mainView = myApp.addView('.view-main', {
    dynamicNavbar: true
});

// Show/hide preloader for remote ajax loaded pages
// Probably should be removed on a production/local app
$$(document).on('ajaxStart', function (e) {
    myApp.showIndicator();
});
$$(document).on('ajaxComplete', function () {
    myApp.hideIndicator();
});

$$(document).on('pageInit', function (e) {
	$(".swipebox").swipebox();
	$(".videocontainer").fitVids();
	
	var page = e.detail.page;
	if (page.name === 'login') {
		myApp.params.swipePanel = false;
	} else if(page.name === 'register') {
		myApp.params.swipePanel = false;
	} else if(page.name === 'remember') {
		myApp.params.swipePanel = false;
	} else {
		myApp.params.swipePanel = 'left';
	}
	// Action Sheet to Share Posts
	$('.share-post').on('click', function () {

		var buttons = [
			{
				text: '<span class="text-thiny">Share this post with your friends</span>',
				label: true
			},
			{
				text: '<span class="text-small share-post-icon share-post-facebook"><i class="flaticon-facebook"></i> Share on Facebook</span>',
			},
			{
				text: '<span class="text-small share-post-icon share-post-twitter"><i class="flaticon-twitter"></i> Share on Twitter</span>',
			},
			{
				text: '<span class="text-small share-post-icon share-post-whatsapp"><i class="flaticon-whatsapp"></i> Share on Whatsapp</span>',
			},
			{
				text: '<span class="text-small">Cancel</span>',
				color: 'red'
			},
		];
		myApp.actions(buttons);
	});
});