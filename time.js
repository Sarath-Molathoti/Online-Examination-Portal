<script type="text/javascript">

		var s=59;
		var m=1;
		
		function func1(){
			document.getElementById("timer").innerHTML = m + " : " + s;
			s--;
		}
		function func2(){
			s = 59;
			document.getElementById("timer").innerHTML = m + " : " + s;
			m--;
		}
		var x = setInterval('func1()',1000);
		var y = setInterval('func2()',60000);
		function xx(){
			clearInterval(x);
			clearInterval(y);
		}
		setTimeout('xx()',120000);
		

	</script>