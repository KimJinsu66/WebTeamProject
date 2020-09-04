

			function isSame() {
				if(document.getElementById('pw').value!='' && document.getElementById('pwCheck').value!='') {
					if(document.getElementById('pw').value==document.getElementById('pwCheck').value) {
						document.getElementById('same').innerHTML='비밀번호가 일치합니다.';
						document.getElementById('same').style.color='blue';
					}
					else {
						document.getElementById('same').innerHTML='비밀번호가 일치하지 않습니다.';
						document.getElementById('same').style.color='red';
					}
				}
			}
