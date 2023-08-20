
// login & admin_login共用，帳密驗證碼確認
function login(table){
	let user={
		acc:$("#acc").val(),
		pw:$("#pw").val()
	}
	let ans=$("#ans").val();

	$.get("./api/ans.php",{ans},(res)=>{
		//檢查證驗證碼正確
		if(parseInt(res)){
			// 代入admin或user，以及其帳/密做檢查
			$.post("./api/login.php",{table,user},(res)=>{
				//若帳密正確，User導index、Admin導backend
				if(parseInt(res)){
					switch (table) {
						case "User":
							location.href="index.php";
							break;
						case "Admin":
							location.href="backend.php";
						break;
					
						default:
							break;
					}
				}else{
					alert("帳號或密碼錯誤")
				
				}
			})
		//檢查驗證碼錯誤
		}else{
			alert("對不起，您輸入的驗證碼有誤請您重新登入")
		}
	})
}




function login(table){
	let user={
		acc:$("#acc").val(),
		pw:$("#pw").val()
	}
	let ans=$("#ans").val();

	$.get("./api/ans.php",{ans},(res)=>{
		if(parseInt(res)){
			$.post("./api/login.php",{table,user},(res)=>{
				if(parseInt(res)){
					switch(table){
						case "User":
							location.href="index.php";
						break;
						case "Admin":
							location.href="backend.php";
						break;
					}
				}else{
					alert("帳號或密碼錯誤")
				}
			})
		}else{
			alert("對不起，您輸入的驗證碼有誤請您重新登入")
		}
	})
}