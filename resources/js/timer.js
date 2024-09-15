const sendDataToLaravel = async () => {

    const response = await fetch('http://localhost:8000/api/close-finished-pomodoros', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        }
    });

    const result = await response.json();
    console.log(result);
};


function startCountdown(start, end, demo) {
    var countDownStartDate = new Date(start + ' UTC').getTime();
    var countDownEndDate = new Date(end + '+02:00').getTime();
    
    var x = setInterval(function() {
        var now = new Date().getTime();
        var distance = countDownEndDate - now;
        
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
        document.getElementById(demo).innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
        
        if (distance < 0) {
            clearInterval(x);
            document.getElementById(demo).innerHTML = "EXPIRED";
            setTimeout(() => {
                sendDataToLaravel();
                console.log("Waited for 5 seconds");
            }, 5000);
        }
    }, 1000);
}


window.startCountdown = startCountdown;