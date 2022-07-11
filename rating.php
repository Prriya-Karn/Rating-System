<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>

    <style>
        body{
            background: lightpink;
        }
        .rate{
            text-align: center;
            font-size: 45px;
            font-family: cursive;
        }
        #res{
            color: grey;
            border: 5px solid black;
            margin-left: 40%;
            height: 42px;
            width: 20%;
            padding: 5px;
            text-align: center;
        }

        #a{
           margin-left: 37%;
           cursor: pointer;
           /*box-shadow: 5px 10px 5px 10px #888888;*/
           box-shadow: 10px 10px 20px 20px grey;
        }

        .content{
            margin-left: 40%;
        }
        .checked{
            font-size: 50px;
            margin: 4px;
            cursor: pointer;
        }
    </style>

	<body>
	<!--Rating website-->
<h1 class="rate">Rating System</h1>
	<br>
    <div id="a" style="width:400px; height:400px; border: 5px solid lightpink;">
<img src="https://picsum.photos/400/400/?random">
</div>
<br>



<div class="content">
    <span id = "demo" class="fa fa-star checked"></span>
    
    <span id="demo1" class="fa fa-star checked"></span>
    <span id="demo2" class="fa fa-star checked"></span>
    <span id="demo3" class="fa fa-star checked"></span>
    <span id="demo4" class="fa fa-star checked"></span>



</div>

<h1 id="res"></h1>
<br><br>



<script>
    var reference = document.querySelector('#demo');
   
    reference.addEventListener('mouseenter',()=>{
        var a = document.querySelector('#demo');
        a.style.color = "   #ff8c00";
        
       
        var b = document.querySelector('#res');
        b.innerHTML = "😥 Bad";
        
    })
    
      var reference = document.querySelector('#demo1');
   
    reference.addEventListener('mouseenter',()=>{
        var a = document.querySelector('#demo1');
        a.style.color = "   #ff8c00";
        
       
        var b = document.querySelector('#res');
        b.innerHTML = "🙂 Good";
        
    })
    
     var reference = document.querySelector('#demo2');
   
    reference.addEventListener('mouseenter',()=>{
        var a = document.querySelector('#demo2');
        a.style.color = "   #ff8c00";
        
       
        var b = document.querySelector('#res');
        b.innerHTML = "😍 Nice";
        
    })
    
     var reference = document.querySelector('#demo3');
   
    reference.addEventListener('mouseenter',()=>{
        var a = document.querySelector('#demo3');
        a.style.color = "   #ff8c00";
        
       
        var b = document.querySelector('#res');
        b.innerHTML = " 🤑 Excellent";
        
    })
    
     var reference = document.querySelector('#demo4');
   
    reference.addEventListener('mouseenter',()=>{
        var a = document.querySelector('#demo4');
        a.style.color = "   #ff8c00";
        
       
        var b = document.querySelector('#res');
        b.innerHTML = " 💕 Awesome";
        
    })

 
var reference = document.getElementById('a');
reference.onclick = function(){
    window.location.reload();
    
}



</script>





	</body>
	</html>