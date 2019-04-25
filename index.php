<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <script >
        var today = new Date();
        console.log("Day month - "+today.getDate());
        console.log("Month - "+(today.getMonth()+1));
        console.log("Privious year - "+(today.getFullYear()-1));
        var days_in_this_month = 32 - new Date(today.getFullYear(), today.getMonth(), 32).getDate();
        console.log("Amount of days in this month - "+days_in_this_month);
        var day_of_week = today.getDay();
        var day_of_week_name = "";
        switch(day_of_week){
            case 1: day_of_week_name = "Monday"; break;
            case 2: day_of_week_name = "Tuesday"; break;
            case 3: day_of_week_name = "Wednesday"; break;
            case 4: day_of_week_name = "Thursday"; break;
            case 5: day_of_week_name = "Friday"; break;
            case 6: day_of_week_name = "Saturday"; break;
            case 0: day_of_week_name = "Sunday"; break;
        }
        console.log("Day of week - "+day_of_week);
        console.log("Name day of week - "+day_of_week_name);
        //var newDate = new Date(1998, 9, 1);
        today.setDate(1);
        today.setFullYear(1998);
        today.setMonth(9);
        var days_in_next_month = 32 - new Date(today.getFullYear(), today.getMonth()+1, 32).getDate();
        console.log("Amount of days in next month - " + days_in_next_month);
        var days_in_prev_month = 32 - new Date(today.getFullYear(), today.getMonth()-1, 32).getDate();
        console.log("Amount of days in previous month - " + days_in_prev_month);
        var month = today.getMonth();
        var name_month = "";
        switch(month){
            case 0: name_month = "January"; break;
            case 1: name_month = "February"; break;
            case 2: name_month = "March"; break;
            case 3: name_month = "April"; break;
            case 4: name_month = "May"; break;
            case 5: name_month = "June"; break;
            case 6: name_month = "July"; break;
            case 7: name_month = "August"; break;
            case 8: name_month = "September"; break;
            case 9: name_month = "October"; break;
            case 10: name_month = "November"; break;
            case 11: name_month = "December"; break;
        }
        console.log("Name of month - " + name_month);
        var days_in_new_month = 32 - new Date(today.getFullYear(), today.getMonth(), 32).getDate();
        var weeks = Math.floor(days_in_new_month/7);
        var left_days = days_in_new_month-(weeks*7);
        console.log("Weeks in month - " + weeks + " and left days " + left_days);

    </script>
</body>
</html>
