<nav>
    <div class="nav-wrapper">
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <a href="#" class="brand-logo">Logo</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li>
                <div class="row">
                    <div class="col s2"><i class="material-icons">date_range</i></div>
                    <div class="col s10" id="tanggal"></div>
                </div>
            </li>
            <li>
                <div class="row" style="width: 140px;">
                    <div class="col s2"><i class="material-icons">access_time</i></div>
                    <div class="col s10"><text id="jam"></text></div>
                </div>
            </li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">JavaScript</a></li>
        </ul>
    </div>
</nav>

<script>
    var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
    var date = new Date();
    var day = date.getDate();
    var month = date.getMonth();
    var thisDay = date.getDay(),
        thisDay = myDays[thisDay];
    var yy = date.getYear();
    var year = (yy < 1000) ? yy + 1900 : yy;
    document.getElementById('tanggal').innerHTML = thisDay + ', ' + day + ' ' + months[month] + ' ' + year;


    function startTime() {
        var today = new Date(),
            curr_hour = today.getHours(),
            curr_min = today.getMinutes(),
            curr_sec = today.getSeconds();
        curr_hour = checkTime(curr_hour);
        curr_min = checkTime(curr_min);
        curr_sec = checkTime(curr_sec);
        console.log(curr_hour + ":" + curr_min + ":" + curr_sec)
        $('#jam').text(curr_hour + ":" + curr_min + ":" + curr_sec)
    }

    function checkTime(i) {
        if (i < 10) {
            i = "0" + i;
        }
        return i;
    }
    setInterval(startTime, 1000);

    $(document).ready(function() {
        $('.sidenav').sidenav();
    });

</script>
