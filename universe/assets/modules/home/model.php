<?php
/////////////////////////////////////////////////////////////////////////////// TOOLS MODEL
?>
<script>
    var thismonth = '<?php
$currentMonth = date('F');
echo $currentMonth;
?>';
    var lastmonth = '<?php
$currentMonth = date('F');
echo Date('F', strtotime($currentMonth . " last month"));
?>';
    Morris.Line({
        element: 'visitas_mes_chart',
        data: [
<?php
$year = date('Y');
$lastyear = date('Y');
$month = date('m');
$lastmonth = date('m');
$lastmonth--;
if ($lastmonth == 0) {
    $lastyear--;
    $lastmonth = 12;
}
$today = date('d');

$i = 0;
$loop = array();
$loop[0] = '05';
$loop[1] = '10';
$loop[2] = '15';
$loop[3] = '20';
$loop[4] = '25';
$loop[5] = '30';

$thismonth_row = array();
$lastmonth_row = array();
while ($i < 6) {
    $thismonth_select = "SELECT count(tracking_page_name) FROM jas_track WHERE (tm BETWEEN '" . date('Y-m-01') . "' AND '" . date('Y-m-' . $loop[$i]) . "') AND tracking_page_name = 'jassa_home'";
    $thismonth_result = $link->query($thismonth_select) or die($link->error);
    $thismonth_row[$i] = $thismonth_result->fetch_array(MYSQLI_BOTH);


    $lastmonth_select = "SELECT count(tracking_page_name) FROM jas_track WHERE (tm BETWEEN '" . date($lastyear . '-' . $lastmonth . '-01') . "' AND '" . date($lastyear . '-' . $lastmonth . '-' . $loop[$i]) . "') AND tracking_page_name = 'jassa_home'";
    $lastmonth_result = $link->query($lastmonth_select) or die($link->error);
    $lastmonth_row[$i] = $lastmonth_result->fetch_array(MYSQLI_BOTH);


    echo "{y: '" . $year . "-" . $month . "-" . $loop[$i] . "', a: " . $thismonth_row[$i][0] . ", b: " . $lastmonth_row[$i][0] . "},";

    $i++;
}
?>
        ],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: [thismonth, lastmonth],
        resize: true,
        hideHover: true,
        xLabels: 'day',
        gridTextSize: '10px',
        lineColors: ['#3FBAE4', '#33414E'],
        gridLineColor: '#E5E5E5'
    });
    /* EMD Line dashboard chart */
    
    if($(".owl-carousel").length > 0){
                $(".owl-carousel").owlCarousel({mouseDrag: false, touchDrag: true, slideSpeed: 300, paginationSpeed: 400, singleItem: true, navigation: false,autoPlay: true});
            }
</script>
