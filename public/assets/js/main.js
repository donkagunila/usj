$(document).ready(function () {
	function showNotif() {
		$.notify({
			// options
			message: 'Hello World',
			title: 'Success',
			icon: "done",
		},{
			// settings
			type: 'success'
		});
	}

});