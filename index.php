<!doctype html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Пример когнитивного фильтра</title>
    <script src="node_modules/chart.js/dist/Chart.bundle.js"></script>
    <script src="node_modules/chart.js/samples/utils.js"></script>
    <script src="node_modules/hammerjs/hammer.min.js"></script>
    <script src="node_modules/chartjs-plugin-zoom/chartjs-plugin-zoom.min.js"></script>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <link href="style.css" rel="stylesheet">
</head>

<body>


<div style="width:60%">
    <canvas id="canvas"></canvas>
</div>

<div id="container">

    <div>
        <div id="spectra" >
            <br><b><label for="element">Элемент:</label></b>
            <input type="text" size="15" id="element" value="H">
            <input type='button' id='new_atom' value='OK' onclick="updateChart(1,0,0)">
        </div>
    </div>

    <br><button id="resetZoom">Reset Zoom</button>

    <div id="scale">
        <div class="radio_buttons">
            <div>
                <input type="radio" name="option" id="eUp"  checked />
                <label for="eUp">Eup</label>
            </div>
            <div>
                <input type="radio" name="option" id="eUp_eD"/>
                <label for="eUp_eD">Eup - Ed</label>
            </div>
        </div>

        <div id ="myForm">
            <input type="radio" name="myRadios"  value="1" checked/>[1/см]
            <input type="radio" name="myRadios"  value="2" />[эВ]
        </div>
    </div>

    <div class='toolbar'>
        <div class="range">
            <div id='min_container'>
                <b>Минимум (&#8491;)</b><br>
                <input type='text' id='min' value='0'>
            </div>
            <div id='max_container'>
                <b>Максимум (&#8491;)</b><br>
                <input type='text' id='max' value='0'>
            </div>
            <div class='top_div'>
                <br>
                <input type='button' id='filter' value='OK' class="bluebtn" onclick="show_selected()">
            </div>
            <div class='visible_container'>
                <input type='button' id='visible' value='Видимый спектр' class='bluebtn' onclick="show_visible()"><span style="width: 20px"></span>
                <input type='button' id='all' value='Весь спектр' class='bluebtn' onclick="show_all()">
            </div>
        </div>
    </div>

</div>

<div id="canvas-holder" style="width: 300px;">
    <div id="chartjs-tooltip">
        <table></table>
    </div>
</div>


<script src="spectr.js"></script>

</body>
</html>