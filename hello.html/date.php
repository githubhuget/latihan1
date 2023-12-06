<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 4
        1000 hari ke depan dan 500 hari di masa lampau
    </title>
</head>

<body>
<h1>Daftar Tanggal untuk 1000 Hari ke Depan & 500 Hari di Masa lampau</h1>

<h2>1000 Hari ke Depan</h2>
<ul id="futureDateList"></ul>

<h2>500 Hari di Masa lampau</h2>
<ul id="pastDateList"></ul>

    <script>
    
    function getFutureDates() {
        var currentDate = new Date();
        var futureDateList = document.getElementById("futureDateList");

        for (var i = 1; i <= 1000; i++) {
        
            currentDate.setDate(currentDate.getDate() + 1);

            var listItem = document.createElement("li");
            listItem.textContent = formatDate(currentDate);
            futureDateList.appendChild(listItem);
        }
    }
    function getPastDates() {
        var currentDate = new Date();
        var pastDateList = document.getElementById("pastDateList");

        for (var i = 1; i <= 500; i++) {
           
            currentDate.setDate(currentDate.getDate() - 1);

           
            var listItem = document.createElement("li");
            listItem.textContent = formatDate(currentDate);
            pastDateList.appendChild(listItem);
        }
    }

    function formatDate(date) {
        var days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
        var months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

        var day = days[date.getDay()];
        var dayOfMonth = date.getDate();
        var month = months[date.getMonth()];
        var year = date.getFullYear();

        return day + ', ' + dayOfMonth + ' ' + month + ' ' + year;
    }

    getFutureDates();
    getPastDates();
</script>

    
</body>
</html>
