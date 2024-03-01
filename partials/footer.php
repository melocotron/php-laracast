</div>

<div id="myElem">
    <p>HOla</p>
</div>

</body>
<script>
    function show_hide_me() {
        let el = document.getElementById('myElem');

        let myDate = new Date();
        let hours = myDate.getHours();
        let startTime = 11;
        let endTime = 13
        let rangeTimeValid = hours >= startTime && hours <= endTime

        console.log(`🚀 ~ show_hide_me ~ hours:`, hours)
        if (rangeTimeValid) {
            el.style.display = '';
            // alert('entre rango')
        } else {
            el.style.display = 'none';
            // alert('No entre rango')
        }
    }

    show_hide_me();
</script>

</html>