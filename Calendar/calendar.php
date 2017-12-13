<!DOCTYPE html>
<html>
    <head>
        <title>Tasty Recipes - Kalender</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../reset.css">
        <link rel="stylesheet" type="text/css" href="../style.css">
        <link rel="stylesheet" type="text/css" href="calendar_style.css">
        <link href='https://fonts.googleapis.com/css?family=Atma' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Alef' rel='stylesheet'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
        <?php
            include_once '../Includes/logo_and_meny.php';
        ?> 
        
        <div id="calendar">
            <div class="month"> 
                <ul>
                    <li>
                        Månadens rätter
                    </li>
                </ul>
            </div>

            <ul class="weekdays">
                <li>Må</li>
                <li>Ti</li>
                <li>On</li>
                <li>To</li>
                <li>Fr</li>
                <li>Lö</li>
                <li>Sö</li>
            </ul>

            <ul class="days"> 
                <li>1</li>
                <li>2</li>
                <li>3</li>
                <li>4<a href="../Meatballs_recipe/meatballs_recipe.php"><img id="meatballsPictureCalendar" src="../Meatballs_recipe/meatballs.jpg" alt="Meatballs"></a></li>
                <li>5</li>
                <li>6</li>
                <li>7</li>
                <li>8</li>
                <li>9</li>
                <li>10</li>
                <li>11</li>
                <li>12</li>
                <li>13</li>
                <li>14</li>
                <li>15</li>
                <li>16</li>
                <li>17<a href="../Pancakes_recipe/pancakes_recipe.php"><img id="pancakesPictureCalendar" src="../Pancakes_recipe/pancakes.jpg" alt="Pancakes"></a></li>
                <li>18</li>
                <li>19</li>
                <li>20</li>
                <li>21</li>
                <li>22</li>
                <li>23</li>
                <li>24</li>
                <li>25</li>
                <li>26</li>
                <li>27</li>
                <li>28</li>
                <li>29</li>
                <li>30</li>
                <li class="nextMonth">1</li>
                <li class="nextMonth">2</li>
                <li class="nextMonth">3</li>
                <li class="nextMonth">4</li>
                <li class="nextMonth">5</li>
            </ul>
        </div>
    </body>
</html>
