window.onload = function () {
    var oinputs = document.getElementsByTagName("input");
    var btn = document.getElementById("btn");
 
    btn.onclick = function () {
        //做個簡單的驗證，輸入內容不能為空
        var time = new Date();
        var ale = document.getElementById("alert");
        if ((!oinputs[0].value || !oinputs[1].value)) {
            alert("輸入內容不能為空");
        } else {
            // method = "get", url, data, success, error
            // alert(121);
 
            $ajax({
                method : "post",
                url : "register.php",
                data : {
                    username : oinputs[0].value,
                    password : oinputs[1].value,
                    create_time : time.getTime()//獲取到毫秒數
                },
                success : function(result){
                    var res = result;
                    // alert(res);
                    if(res.code == 3){
                        ale.className = "alert-success";
                        ale.innerHTML = res.message;
                    }else{
                        ale.className = "alert-warning";
                        ale.innerHTML = res.message;
                    }
                },
                error : function(msg){
                    console.log(msg);
                }
            });
        }
    }
}