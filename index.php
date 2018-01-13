<?php
require_once('includes/config.php');
require_once('includes/class/main.class.php');
require_once('includes/templates/header.php');
$main = New Main();
$faucets = $main->faucetList();
$days = range(01, 31);
$years = range(2016, date("Y"));
$months = array(
    '01' => 'ינואר',
    '02' => 'פברואר',
    '03' => 'מרץ',
    '04' => 'אפריל',
    '05' => 'מאי',
    '06' => 'יוני',
    '07' => 'יולי',
    '08' => 'אוגוסט',
    '09' => 'ספטמבר',
    '10' => 'אוקטובר',
    '11' => 'נובמבר',
    '12' => 'דצמבר'
);

$kind = array(
        'bitcoin'=>'ביטקוין',
        'ether' => 'איתריום'
)
?>
<div class="inner cover">
    <form class="form-inline" method="POST" action="find.php">
        <h1 class="cover-heading main">כמה הייתי מרוויח, אם הייתי משקיע <input type="text" class="form-control input-lg form-amt" name="amt" value="100" />$ דולר אמריקאי במטבע <select name="kind" class="form-control input-lg">
                <?php
                foreach($kind as $k => $v) {
                    echo '<option value="' . $k . '">' . $v . '</option>';
                }
                ?>
            </select> ב
            <select name="day" class="form-control input-lg">
                <?php
                foreach($days as $day) {
                    (strlen($day) <= 1) ? $day = '0' . $day : $day = $day;
                    echo '<option value="' . $day . '">' . $day . '</option>';
                }
                ?>
            </select>

            <select name="month" class="form-control input-lg">
                <?php
                foreach($months as $k => $v) {
                    echo '<option value="' . $k . '">' . $v . '</option>';
                }
                ?>
            </select>
            <select name="year" class="form-control input-lg">
                <?php
                foreach($years as $year) {
                    echo '<option value="' . $year . '">' . $year . '</option>';
                }
                ?>
            </select>
        </h1>
        <p class="lead">
            <button style="direction: rtl;" type="submit" class="btn btn-lg btn-default btn-green">גלה כמה היית מרוויח</button>
        </p>
    </form>
</div>
<?php
require_once('includes/templates/footer.php');
?>

