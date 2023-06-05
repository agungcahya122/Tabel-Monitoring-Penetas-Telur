<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  	
  	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<title>Monitoring Suhu Penetas Telur</title>

<style type="text/css">
	
	<style type="text/css">
    .p1{
        font-family: serif;
        margin-left: 30px;
        font-size: 60px;
        color: #444;
    }

	/*JAM DIGITAL*/

	.kotak {
		float: left;
		width: 126px;
		height: 90px;
		background-color: #189fff;
	}

	.jam-digital p {
		color: #fff;
		font-size: 60px;
		text-align: center;
		font-family: sans-serif;
		margin-top: 10px;
	}

	.jam-digital {
		overflow: hidden;
		width: 378px;
		border: 5px solid #efefef ;
		margin-left: 280px;
		margin-top: 80px;
		float: none;
	}

	.body {
		background: #fcfeff;
	}

	/*TABEL 2*/

	#tabel2{
    font-family: sans-serif;
    	color: #444;
        border-collapse: collapse;
        border: 4px solid #bababa;
        width: 300px;
        float: left;
        margin-top: 100px;
    	margin-left: 80px;
     }

    #tabel2 tr th{
        background: #35a9db;
        color: #fff;
        font-weight: normal;
        font-size: 50px; 
    }

    #tabel2, th, td{
        padding: 8px 20px;
        text-align: center;
    }

    #tabel2 td{
        	font-size: 55px;
        	background-color: #ffffff;
    }

    #tabel2 tr:nth-child(even){
            background: #86dcec;
    }	

    /*TABEL 3*/

    #tabel3{
   		font-family: sans-serif;
        color: #444;
        border-collapse: collapse;
        border: 4px solid #bababa;
        width: 300px;
        float: right;
        margin-right: 80px;
        margin-top: 100px; 
    }

    #tabel3 tr th{
        background: #35a9db;
        color: #fff;
        font-weight: normal;
        font-size: 50px; 
    }

    #tabel3, th, td{
        padding: 8px 20px;
        text-align: center;
    }

    #tabel3 td{
        font-size: 55px;
        background-color: #ffffff;
    }

    #tabel3 tr:nth-child(even){
    	background: #86dcec;
    }	

    /*TABEL 4*/

    #tabel4{
   		font-family: sans-serif;
        color: #444;
        border-collapse: collapse;
        border: 4px solid #bababa;
        width: 300px;
        float: left;
        margin-left: 80px;
        margin-top: 100px; 
    }

    #tabel4 tr th{
        background: #35a9db;
        color: #fff;
        font-weight: normal;
        font-size: 50px; 
    }

    #tabel4, th, td{
        padding: 8px 20px;
        text-align: center;
    }

    #tabel4 td{
        font-size: 55px;
        background-color: #ffffff;
    }

    #tabel4 tr:nth-child(even){
    	background: #86dcec;
    }

    /*TABEL 5*/

    #tabel5{
   		font-family: sans-serif;
        color: #444;
        border-collapse: collapse;
        border: 4px solid #bababa;
        width: 300px;
        float: right;
        margin-right: 80px;
        margin-top: 100px; 
    }

    #tabel5 tr th{
        background: #35a9db;
        color: #fff;
        font-weight: normal;
        font-size: 50px; 
    }

    #tabel5, th, td{
        padding: 8px 20px;
        text-align: center;
    }

    #tabel5 td{
        font-size: 55px;
        background-color: #ffffff;
    }

    #tabel5 tr:nth-child(even){
    	background: #86dcec;
    }

    /*TABEL 6*/

    #tabel6{
   		font-family: sans-serif;
        color: #444;
        border-collapse: collapse;
        border: 4px solid #bababa;
        width: 300px;
        float: left;
        margin-left: 80px;
        margin-top: 100px; 
    }

    #tabel6 tr th{
        background: #35a9db;
        color: #fff;
        font-weight: normal;
        font-size: 50px; 
    }

    #tabel6, th, td{
        padding: 8px 20px;
        text-align: center;
    }

    #tabel6 td{
        font-size: 55px;
        background-color: #ffffff;
    }

    #tabel6 tr:nth-child(even){
    	background: #86dcec;
    }

    /*TABEL 7*/

    #tabel7{
   		font-family: sans-serif;
        color: #444;
        border-collapse: collapse;
        border: 4px solid #bababa;
        width: 300px;
        float: right;
        margin-right: 80px;
        margin-top: 100px; 
    }

    #tabel7 tr th{
        background: #35a9db;
        color: #fff;
        font-weight: normal;
        font-size: 50px; 
    }

    #tabel7, th, td{
        padding: 8px 20px;
        text-align: center;
    }

    #tabel7 td{
        font-size: 55px;
        background-color: #ffffff;
    }

    #tabel7 tr:nth-child(even){
    	background: #86dcec;
    }

    /*TABEL 8*/

    #tabel8{
   		font-family: sans-serif;
        color: #444;
        border-collapse: collapse;
        border: 4px solid #bababa;
        width: 300px;
        float: left;
        margin-left: 80px;
        margin-top: 100px; 
    }

    #tabel8 tr th{
        background: #35a9db;
        color: #fff;
        font-weight: normal;
        font-size: 50px; 
    }

    #tabel8, th, td{
        padding: 8px 20px;
        text-align: center;
    }

    #tabel8 td{
        font-size: 55px;
        background-color: #ffffff;
    }

    #tabel8tr:nth-child(even){
    	background: #86dcec;
    }

    /*TABEL 9*/

    #tabel9{
   		font-family: sans-serif;
        color: #444;
        border-collapse: collapse;
        border: 4px solid #bababa;
        width: 300px;
        float: right;
        margin-right: 80px;
        margin-top: 100px; 
    }

    #tabel9 tr th{
        background: #35a9db;
        color: #fff;
        font-weight: normal;
        font-size: 50px; 
    }

    #tabel9, th, td{
        padding: 8px 20px;
        text-align: center;
    }

    #tabel9 td{
        font-size: 55px;
        background-color: #ffffff;
    }

    #tabel9 tr:nth-child(even){
    	background: #86dcec;
    }

    .clearfix1::after {
  		content: "";
  		clear: both;
  		display: table;
	}

	.clearfix2::after {
  		content: "";
  		clear: both;
  		display: table;
	}

	.clearfix3::after {
  		content: "";
  		clear: both;
  		display: table;
	}

	.clearfix4::after {
  		content: "";
  		clear: both;
  		display: table;
	}

    .p1{
        font-family: serif;
        margin-left: 90px;
        font-size: 60px;
        color: #35a9db;
    }

</style>
</head>

<body class="body">
	<p1 class="p1">MONITORING REALTIME</p1>

	<div class="jam-digital">
		<div class="kotak">
			<p id = "jam"></p>
		</div>
		<div class="kotak">
			<p id = "menit"></p>
		</div>
		<div class="kotak">	
			<p id = "detik"></p>	
		</div>
	</div>

<div class="clearfix1">
	<table id= "tabel2">
    	<thead>
            <tr>
                <th>Lux 1</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td id ="lux1"></td>       
            </tr> 
        </tbody>
    </table>

	 <table id= "tabel3">
        <thead>
            <tr>
                <th>Lux 2</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td id ="lux2"></td>       
            </tr> 
        </tbody>
    </table>
 </div>

<div class="clearfix2">
     <table id= "tabel4">
        <thead>
            <tr>
                <th>Suhu Array</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td id ="array"></td>       
            </tr> 
        </tbody>
    </table>

    <table id= "tabel5">
        <thead>
            <tr>
                <th>Incubator</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td id ="incub"></td>       
            </tr> 
        </tbody>
    </table>
</div>

<div class="clearfix3">
    <table id= "tabel6">
        <thead>
            <tr>
                <th>Proximity 1</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td id ="prox1"></td>       
            </tr> 
        </tbody>
    </table>

    <table id= "tabel7">
        <thead>
            <tr>
                <th>Proximity 2</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td id ="prox2"></td>       
            </tr> 
        </tbody>
    </table>
</div>

<div class="clearfix4">
    <table id= "tabel8">
        <thead>
            <tr>
                <th>Blower</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td id ="blower"></td>       
            </tr> 
        </tbody>
    </table>

    <table id= "tabel9">
        <thead>
            <tr>
                <th>Arus</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td id ="arus"></td>       
            </tr> 
        </tbody>
    </table>
</div>

	<script>
		window.setTimeout("waktu()", 1000);
	function waktu() {
		var waktu = new Date();
		setTimeout("waktu()", 1000);
		document.getElementById("jam").innerHTML = waktu.getHours();
		document.getElementById("menit").innerHTML = waktu.getMinutes();
		document.getElementById("detik").innerHTML = waktu.getSeconds();
	}
	</script>

	<script>
		$(function(){
			setInterval(lux1,1000);
		});

		function lux1(){
			$.ajax({
				url:'lux1.php',
				success: function(data){
				$('#lux1').html(data);
				},
			})
		}
	</script>

	<script>
		$(function(){
			setInterval(lux2,1000);
		});

		function lux2(){
			$.ajax({
				url:'lux2.php',
				success: function(data){
				$('#lux2').html(data);
				},
			})
		}
	</script>

	<script>
		$(function(){
			setInterval(array,1000);
		});

		function array(){
			$.ajax({
				url:'array.php',
				success: function(data){
				$('#array').html(data);
				},
			})
		}
	</script>

	<script>
		$(function(){
			setInterval(incub,1000);
		});

		function incub(){
			$.ajax({
				url:'incub.php',
				success: function(data){
				$('#incub').html(data);
				},
			})
		}
	</script>

	<script>
		$(function(){
			setInterval(prox1,1000);
		});

		function prox1(){
			$.ajax({
				url:'prox1.php',
				success: function(data){
				$('#prox1').html(data);
				},
			})
		}
	</script>

	<script>
		$(function(){
			setInterval(prox2,1000);
		});

		function prox2(){
			$.ajax({
				url:'prox2.php',
				success: function(data){
				$('#prox2').html(data);
				},
			})
		}
	</script>

	<script>
		$(function(){
			setInterval(blower,1000);
		});

		function blower(){
			$.ajax({
				url:'blower.php',
				success: function(data){
				$('#blower').html(data);
				},
			})
		}
	</script>

	<script>
		$(function(){
			setInterval(arus,1000);
		});

		function arus(){
			$.ajax({
				url:'arus.php',
				success: function(data){
				$('#arus').html(data);
				},
			})
		}
	</script>

	</table>	
	</div>

 	

</body>
</html>