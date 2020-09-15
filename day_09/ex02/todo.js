var ft;
var cookie = [];

window.onload = function () {
	document.querySelector("#new").addEventListener('click', newItem);
	ft = document.querySelector("#ft_list");
	var split = document.cookie;
	if (split) {
		cookie = JSON.parse(split);
		cookie.forEach(function (e) {
			addItem(e);
		});
	}
}

window.onunload = function () {
	var todo = ft.children;
	var newCookie = [];
	for (var i = 0; i < todo.length; i++) {
		newCookie.unshift(todo[i].innerHTML);
	}
	document.cookie = JSON.stringify(newCookie);
};

function newItem() {
	var li = prompt("Add TO DO list item here: ");
	if (li != null && li !== "") {
		addItem(li);
	}
}

function addItem(li) {
	var newElement = document.createElement("div");
	newElement.append(li);
	newElement.addEventListener('click', deleteItem);
	ft.insertBefore(newElement, ft.firstChild);
}

function deleteItem() {
	if (confirm("Do you really want to delete this?")) {
		this.parentNode.removeChild(this);
	}

}

