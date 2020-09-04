
    function safetyPasswordPattern(str) {

        var pass = str.value;
        var message = "";
        var color = "";
        var checkPoint = 0;


        if(pass.length) {


            if(pass.length < 8 || pass.length > 16) {
                message = ":: 최소 8자 이상, 최대 16자 이하 ::";
                color = "#A23E48";
            }


            else {


                var pattern1 = /[0-9]/;
                if(pattern1.test(pass) == false) {
                    checkPoint = checkPoint + 1;
                }


                var pattern2 = /[a-z]/;
                if(pattern2.test(pass) == false) {
                    checkPoint = checkPoint + 1;
                }


                var pattern3 = /[A-Z]/;
                if(pattern3.test(pass) == false) {
                    checkPoint = checkPoint + 1;
                }


                var pattern4 = /[~!@#$%^&*()_+|<>?:{}]/;
                if(pattern4.test(pass) == false) {
                    checkPoint = checkPoint + 1;
                }

                if(checkPoint >= 3) {
                    message = ":: 보안성이 취약한 비밀번호 ::";
                    color = "#A23E48";
                } else if(checkPoint == 2) {
                    message = ":: 보안성이 낮은 비밀번호 ::";
                    color = "#FF8C42";
                } else if(checkPoint == 1) {
                    message = ":: 보안성이 보통인 비밀번호 ::";
                    color = "#FF8C42";
                } else {
                    message = ":: 보안성이 강력한 비밀번호 ::";
                    color = "#0000CD";
                }
            }
        }

        else {
            message = ":: 비밀번호를 입력해 주세요 ::";
            color = "#000000";
        }

        document.getElementById("makyText").innerHTML = message;
        document.getElementById("makyText").style.color = color;
    }
