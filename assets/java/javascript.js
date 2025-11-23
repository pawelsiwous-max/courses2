var one  = "Моя первая переменная!";
// alert(one);
console.log(one);
// document.getElementById('trow').innerHTML = one;
$('#trow').text(one);
$('#trow').fadeOut("slow");

// $('.myclass').text(one);

document.getElementsByClassName("myclass")[0].innerHTML = one;