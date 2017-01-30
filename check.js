var stage = new createjs.Stage("demoCanvas");
var testshape = numrender(choose(3));
testshape.x=0;
testshape.y=0;
stage.addChild(testshape);
stage.update();
}
var parent = document.getElementById("dispQuestion");

if(number)
{
var newcanvas = document.createElement("canvas");
newcanvas.id = "num"+counter;
parent.appendChild(newcanvas);
var stage = new createjs.Stage(newcanvas.id);
var testshape = numrender(choose(3));
testshape.x=0;
testshape.y=0;
stage.addChild(testshape);
stage.update();
}
else
print
