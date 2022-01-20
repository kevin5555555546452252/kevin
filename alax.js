/* 
    method
    url
    data
    success  數據下載成功以後執行的函數
    error    數據下載失敗以後執行的函數   
 */
    function $ajax({method = "get", url, data, success, error}){
        //1、創建ajax對象
        var xhr = null;
        try{
            xhr = new XMLHttpRequest();
        }catch(error){
            xhr = new ActiveXObject("Microsoft.XMLHTTP");
        }
     
        //判斷如果數據存在
        if(data){
            data = querystring(data);
        }
     
        if(method == "get" && data){
            url += "?" + data;
        }
     
        xhr.open(method, url, true);
     
        if(method == "get"){
            xhr.send();
        }else{
            //必須在send方法之前，去設置請求的格式
            xhr.setRequestHeader("content-type", "application/x-www-form-urlencoded");
            xhr.send(data);
        }
         //4、等待數據響應 
        xhr.onreadystatechange = function(){
            if(xhr.readyState == 4){
                //判斷本次下載的狀態碼都是多少
                if(xhr.status == 200){
                    /* 
                        如何去處理數據操作不確定
                        回調函數
                    */
                    if(success){
                        // alert(2);
                        success(xhr.responseText);
                    }
                }else{
                    if(error){
                        error("Error:" + xhr.status);
                    }
                }
            }
        }
    }
     
    function querystring(obj){
        var str = "";
        for(var attr in obj){
            str += attr + "=" + obj[attr] + "&";
        }
        return str.substring(0, str.length - 1);
    }