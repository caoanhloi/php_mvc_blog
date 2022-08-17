$(document).ready(function() {
	$("#addAccount, #editAccount, #login, #addCategory, #editCategory, #addPost, #editPost").validate({
		rules: {
			"fullname": {
				required: true,
			},
			"email": {
				required: true,
			},
			"password": {
				required: true,
				minlength: 6
			},"name": {
				required: true,
			},"tittle": {
				required: true,
			},"content": {
				required: true,
			}
		},
		messages: {
			"fullname": {
				required: "Bắt buộc nhập fullname"
			},
			"email": {
				required: "Bắt buộc nhập email"
			},
			"password": {
				required: "Bắt buộc nhập password",
				minlength: "Hãy nhập ít nhất 6 ký tự"
			},
			"name": {
				required: "Bắt buộc nhập name"
			},
			"tittle": {
				required: "Bắt buộc nhập tittle"
			},
			"content": {
				required: "Bắt buộc nhập content"
			}
		}
	});
});
