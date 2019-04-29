
function check(){
c=['KENT CLARK','BRUCE WAYNE','DIANA','BARRY ALLEN','STEVE ROGERS','TONY STARK']
e=['superman','batman','wonderwoman','flash','cap','ironman']
const l= new Array();
i=0;
j=0;
k=0;
while (i<6){
  d=document.getElementById(e[i]).value;
  b=d.toUpperCase();

  if (c[i]==b){
  j=j+1;
  }
  else {
    k=k+1;
    l[k]=i+1;

  }
  i=i+1;
}
text1="the no of correct answers is "+j+" .";
document.getElementById('t1').innerHTML=text1;

text2="the no of wrong answers is "+k+" .";
document.getElementById('t2').innerHTML=text2;

if (k>0){
text3='the question no '+l+' is wrong';
document.getElementById('t3').innerHTML=text3;
}


}
