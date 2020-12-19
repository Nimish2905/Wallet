
var up = true;
var value = 15;
var increment = 1;
var ceiling = 0;

function PerformCalc() {
if (up == true && value <= ceiling) {
    value -= increment

    if (value == ceiling) {
    up = false;
    }
} else {
    up = false
    value -= increment;

    if (value == 0) {
        up = true;
    }
}

document.getElementById('counter').innerHTML = 'Redirecting in: ' + value + '<br />';
}
setInterval(PerformCalc, 1000);
