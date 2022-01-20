window.onload = function () {
    var oinputs = document.getElementsByTagName("input");
    var btn = document.getElementById("btn");
 
    btn.onclick = function () {
        //做個簡單的驗證，輸入內容不能為空
        var time = new Date();
        var ale = document.getElementById("alert");
        if ((!oinputs[0].value || !oinputs[1].value)) {
            alert("输入内容不能为空");
        } else {
 
            $ajax({
                method : "post",
                url : "login.php",
                data : {
                    username : oinputs[0].value,
                    password : oinputs[1].value
                     
                },
                success : function(result){
                    var res = result;
                    if(res.code == 2){
                        ale.className = "alert-success";
                        ale.innerHTML = res.message;
                        ale.style.display = "block";
                    }else{
                        ale.className = "alert-warning";
                        ale.innerHTML = res.message;
                        ale.style.display = "block";
                    }
                },
                error : function(msg){
                    console.log(msg);
                }
            });
        }
    }
}