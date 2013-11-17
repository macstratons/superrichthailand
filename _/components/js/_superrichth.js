$(function() {
	$(".tip").tooltip();
});

$(function() {
	$('[data-toggle="tooltip"]').tooltip({'placement': 'top'});
});

/*
$(function() {
	$('[data-toggle="popover"]').popover({trigger: 'hover','placement': 'top'});
});
*/

$(function() {
	$('[data-toggle="popover"]').popover({ 
	    trigger: 'hover','placement': 'top',
	    html : true,
	    title: function() {
	      return $("#popover-head").html();
	    },
	    content: function() {
	      return $("#popover-content").html();
	    }
	});
});