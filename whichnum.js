<script src="https://code.createjs.com/createjs-2015.11.26.min.js"></script>
<script>

function numrender(var coordarr)
{
	var numshape = new createjs.Shape();
	numshape.graphics.beginFill("Crimson").drawRect(coordarr[0],coordarr[1],coordarr[2],coordarr[3]);
	numshape.graphics.beginFill("Crimson").drawRect(coordarr[4],coordarr[5],coordarr[6],coordarr[7]);
	numshape.graphics.beginFill("Crimson").drawRect(coordarr[8],coordarr[9],coordarr[10],coordarr[11]);
	return numshape;
}

function choose(var num)
{
	var arr={0,0,0,0,0,0,0,0,0,0,0,0};
switch(num)
{
	case 1: arr={0,0,40,40,0,0,0,0,0,0,0,0};
			break;
	case 2: arr={0,0,40,80,0,0,0,0,0,0,0,0};
			break;
	case 3: arr={0,0,40,80,40,40,80,80,0,0,0,0};
			break;
	case 4: arr={0,0,80,80,0,0,0,0,0,0,0,0};
			break;
	case 5: arr={40,0,80,40,0,40,80,120,0,0,0,0};
			break;
	case 6: arr={0,0,80,120,,0,0,0,0,0,0,0,0};
			break;
	case 7: arr={0,0,80,120,80,0,120,40,0,0,0,0};
			break;
	case 8: arr={0,0,160,80,0,0,0,0,0,0,0,0};
			break;
	case 9: arr={0,40,160,120,120,0,160,40,,0,0,0,0};
			break;
	case 10: arr={10,0,0,200,80,0,0,0,0,0,0,0};
			break;
	case 11: arr={0,0,40,40,0,40,200,120,0,0,0,0};
			break;
	case 12: arr={0,0,80,40,0,40,200,120,0,0,0,0};
			break;
	case 13: arr={0,0,40,40,0,40,80,80,0,80,200,160};
			break;
	case 14: arr={0,0,80,80,0,0,0,0,0,80,200,160};
			break;
	case 15: arr={0,0,80,80,80,40,120,80,0,80,200,160};
			break;
	case 16: arr={0,0,120,80,0,0,0,0,0,80,200,160};
			break;
	case 17: arr={0,0,120,80,120,40,160,80,0,80,200,160};
			break;
	case 18: arr={0,0,160,80,0,0,0,0,0,80,200,160};
			break;
	case 19: arr={0,0,160,80,160,40,200,80,0,80,200,160};
			break;	
	
}
return arr;
}

window.onload=function(){
var stage = new createjs.Stage("demoCanvas");
var testshape = numrender(choose(3));
testshape.x=400;
testshape.y=400;
stage.addChild(testshape);
stage.update();
}

</script>
  <body onload="init();">
    <canvas id="demoCanvas" width="500" height="200"></canvas>
  </body>
