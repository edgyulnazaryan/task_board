
<style>
    .font-color{
        background: linear-gradient(to bottom,#2980b9,#2c3e50);
        -webkit-text-fill-color: transparent;
        background-clip: text;
        -webkit-background-clip: text;
    }
    .content
    {
        position: relative;
        left: 780px;
    }
    .content div{
        padding: 5px 0;
    }

    .timeDiv{
        position: relative;
    }

    #time{
        text-shadow: 0 0 55px #2980b9;
        font-size: 4.5rem;
    }

    #med{
        position:absolute;
        top: 15px;
        right: 0;
    }

    .dayDiv{
        display: flex;
    }

    .dayDiv span{
        font-size: 0.9rem;
        opacity: 0.4;
        margin:0 4px;
    }
</style>
<div class="content">
    <div class="timeDiv">
        <span class="font-color" id="time"></span>
        <span class="font-color" id="sec"></span>
        <span class="font-color" id="med"></span>
    </div>
    <div class="dayDiv">
        <span class="font-color day">SUN</span>
        <span class="font-color day">MON</span>
        <span class="font-color day">TUE</span>
        <span class="font-color day">WED</span>
        <span class="font-color day">THU</span>
        <span class="font-color day">FRI</span>
        <span class="font-color day">SAT</span>
    </div>
    <span class="font-color" id="full-date"></span>
</div>

<script>
    $(document).ready(function () {
        function currentTime() {
            var date = new Date();
            var day = date.getDay();
            var hour = date.getHours();
            var min = date.getMinutes();
            var sec = date.getSeconds();
            var month = date.getMonth();
            var currDate = date.getDate();
            var year = date.getFullYear();
            var monthName = [
                "January",
                "February",
                "March",
                "April",
                "May",
                "June",
                "July",
                "August",
                "September",
                "October",
                "November",
                "December",
            ];
            var showDay = $('.dayDiv span')
            var midDay= "AM"
            midDay = (hour>=12)? "PM":"AM";
            hour = (hour==0)?12:((hour<12)? hour:(hour-12));
            hour = updateTime(hour);
            min = updateTime(min);
            sec = updateTime(sec);
            currDate= updateTime(currDate);
            $("#time").html(`${hour}:${min}`);
            $("#sec").html(`${sec}`);
            $("#med").html(`${midDay}`);
            $("#full-date").html(`${monthName[month]} ${currDate} ${year}`);
            showDay.eq(day).css('opacity','1')
        }
        updateTime = function(x){
            if(x<10){
                return "0"+x
            }
            else{
                return x;
            }
        }
        setInterval(currentTime,1000);
    });
</script>

