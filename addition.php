<html>
<head>
<script>

function numrender(coordarr)
{
	var numshape = new createjs.Shape();
	numshape.graphics.beginFill("Crimson").drawRect(coordarr[0],coordarr[1],coordarr[2],coordarr[3]);
	numshape.graphics.beginFill("Crimson").drawRect(coordarr[4],coordarr[5],coordarr[6],coordarr[7]);
	numshape.graphics.beginFill("Crimson").drawRect(coordarr[8],coordarr[9],coordarr[10],coordarr[11]);
	return numshape;
}

function choose(num)
{
var arr=new Array();
switch(num)
{
	case 1: arr=[0,0,40,40,0,0,0,0,0,0,0,0];
			break;
	case 2: arr=[0,0,40,80,0,0,0,0,0,0,0,0];
			break;
	case 3: arr=[0,0,40,80,40,40,80,80,0,0,0,0];
			break;
	case 4: arr=[0,0,80,80,0,0,0,0,0,0,0,0];
			break;
	case 5: arr=[40,0,80,40,0,40,80,120,0,0,0,0];
			break;
	case 6: arr=[0,0,80,120,,0,0,0,0,0,0,0,0];
			break;
	case 7: arr=[0,0,80,120,80,0,120,40,0,0,0,0];
			break;
	case 8: arr=[0,0,160,80,0,0,0,0,0,0,0,0];
			break;
	case 9: arr=[0,40,160,120,120,0,160,40,,0,0,0,0];
			break;
	case 10: arr=[10,0,0,200,80,0,0,0,0,0,0,0];
			break;
	case 11: arr=[0,0,40,40,0,40,200,120,0,0,0,0];
			break;
	case 12: arr=[0,0,80,40,0,40,200,120,0,0,0,0];
			break;
	case 13: arr=[0,0,40,40,0,40,80,80,0,80,200,160];
			break;
	case 14: arr=[0,0,80,80,0,0,0,0,0,80,200,160];
			break;
	case 15: arr=[0,0,80,80,80,40,120,80,0,80,200,160];
			break;
	case 16: arr=[0,0,120,80,0,0,0,0,0,80,200,160];
			break;
	case 17: arr=[0,0,120,80,120,40,160,80,0,80,200,160];
			break;
	case 18: arr=[0,0,160,80,0,0,0,0,0,80,200,160];
			break;
	case 19: arr=[0,0,160,80,160,40,200,80,0,80,200,160];
			break;	
	default: window.alert("Switch case error!");
}

return arr;
}

window.onload=function(){
var parent = document.getElementById("dispCalc");
	var newcanvas;
	var stage;
	var shape;
	var spantext;
	var counter=0;
	var i=0;	
var a=456;
var b=345;
var diga=0;
var digb=0;
var digsum=0;
var carry=0;


while(a!=0||b!=0)
{
counter++;
diga=a%10;
//display digit of A
newcanvas = document.createElement("canvas");
newcanvas.id = "numa"+counter;
parent.appendChild(newcanvas);
stage = new createjs.Stage("numa"+counter);
shape = numrender(choose(diga));
shape.x=0;
shape.y=0;
stage.addChild(shape);
stage.update();

//display digit of B
digb=b%10;
newcanvas = document.createElement("canvas");
newcanvas.id = "numb"+counter;
parent.appendChild(newcanvas);
stage = new createjs.Stage("numb"+counter);
shape = numrender(choose(digb));
shape.x=0;
shape.y=0;
stage.addChild(shape);
stage.update();


digsum=diga+digb+carry;

//display sum of digits
newcanvas = document.createElement("canvas");
newcanvas.id = "numsum"+counter;
parent.appendChild(newcanvas);
stage = new createjs.Stage("numsum"+counter);
shape = numrender(choose(digsum));
shape.x=0;
shape.y=0;
stage.addChild(shape);
stage.update();

//reset carry
carry=0;


if(digsum>=10)
{
digsum=digsum-10;

//animate carry
createjs.Tween.get(shape {loop: false})
          .to({alpha: 0.0, x: -200, y: -200, scaleX: 0.1,scaleY: 0.1}, 1000, createjs.Ease.getPowInOut(2))
          
        createjs.Ticker.setFPS(60);
        createjs.Ticker.addEventListener("tick", stage);
		
//display new digsum		
newcanvas = document.createElement("canvas");
newcanvas.id = "numsum"+counter;
parent.appendChild(newcanvas);
stage = new createjs.Stage("numsum"+counter);
shape = numrender(choose(digsum));
shape.x=0;
shape.y=0;
stage.addChild(shape);
stage.update();

carry=1;

a=a/10;
b=b/10;

}





	
	


</script>
</head>
  <body>
    <div id="dispCalc"></div>
  </body>
  </html>
