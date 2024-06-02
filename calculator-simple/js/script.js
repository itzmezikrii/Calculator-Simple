var fnumb = document.getElementById("fnumb");
var snumb = document.getElementById("snumb");
var result = document.getElementById("result");

function add()
{
result.value = Number(fnumb.value) + Number(snumb.value);    
}
function substract()
{
result.value = Number(fnumb.value) - Number(snumb.value);    
}
function kali()
{
result.value = Number(fnumb.value) * Number(snumb.value);    
}
function divide()
{
result.value = Number(fnumb.value) / Number(snumb.value);    
}
function modulus()
{
result.value = Number(fnumb.value) % Number(snumb.value);    
}