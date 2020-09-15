var ft;
var cookie = [];

$(document).ready(function() {
	$('#new').click(newItem);
	$("#ft_list div").click(deleteItem);
	ft = $("#ft_list");
	var split = document.cookie;
	if (split) {
		cookie = JSON.parse(split);
		cookie.forEach(function (e) {
			addItem(e);
		});
	}
});

$(window).unload(function () {
	var todo = ft.children();
	var newCookie = [];
	for (var i = 0; i < todo.length; i++) {
		newCookie.unshift(todo[i].innerHTML);
	}
	document.cookie = JSON.stringify(newCookie);
});

function newItem() {
	var li = prompt("Add TO DO list item here: ");
	if (li != null && li !== "") {
		addItem(li);
	}
}

function addItem(li) {
	ft.prepend($("<div>" + li + "</div>").click(deleteItem));
}

function deleteItem() {
	if (confirm("Do you really want to delete this?")) {
		this.remove();
	}
}

