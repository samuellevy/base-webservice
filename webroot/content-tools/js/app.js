// Initialize our editor
var editor = ContentTools.EditorApp.get();
editor.init('*[data-editable]', 'data-name');

var content = document.getElementById('content');

console.log(editor);
// Listen for saved events
editor._ignition._domConfirm.addEventListener('click', function (ev) {
	//alert(content.outerHTML);
	sendContent(1, content.innerHTML);
});

function sendContent(id, content){
	$.ajax({
		method: "POST",
		url: "../update",
		data: { id: "1", content: content }
	})
	.done(function( msg ) {
		alert( "Data Saved: " + msg );
	});
}