function lo(x)
{
	location.replace(x)
}
function op(x,y,url)
{
	$(x).fadeIn()
	if(y)
	$(y).fadeIn()
	if(y&&url)
	$(y).load(url)
}
function cl(x)
{
	$(x).fadeOut();
}

// 會員登入
function login() {
	$.post('./api/chk_acc.php', {
		acc: $("#acc").val()
	}, (res) => {
		if (parseInt(res) == 0) {
			alert("查無帳號")
		} else {
			$.post('./api/chk_pw.php', {
					acc: $("#acc").val(),
					pw: $("#pw").val()
				},
				(res) => {
					if (parseInt(res) == 1) {
						if ($("#acc").val() == 'admin') {
							location.href = 'back.php'
						} else {
							location.href = 'index.php'
						}
					} else {
						alert("密碼錯誤")
					}
				})
		}
	})
}

function del(table,id){
    $.post("./api/del.php",{table,id},()=>{
        location.reload();
    })
}