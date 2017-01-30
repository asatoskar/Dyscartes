<script>

var x=5; //qid is stored in this variable
var getrequest=".php?qid="+x;

function reqListener()
{
console.log(this.responseText);
}
var connObj = new XMLHttpRequest();

connObj.onload=function()
{
//data is this.responseText
}
connObj.open("GET", ".php?qid=", true);
connObj.send();

</script>
