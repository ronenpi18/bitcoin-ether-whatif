<?php
require_once('includes/config.php');
require_once('includes/class/main.class.php');
require_once('includes/templates/header.php');
$main = New Main();
$faucets = $main->faucetList();
if(isset($_POST['month']) && isset($_POST['day']) && isset($_POST['year']) && isset($_POST['kind']) && !empty($_POST['kind']) && !empty($_POST['month']) && !empty($_POST['day']) && !empty($_POST['year']) ) {
    $date = htmlentities($_POST['year']) . '-' . htmlentities($_POST['month']) . '-' . htmlentities($_POST['day']);
    $timestamp = strtotime($date);
    if(htmlentities($_POST['kind']) == "bitcoin") {
        $data = json_decode(@file_get_contents('https://min-api.cryptocompare.com/data/pricehistorical?fsym=BTC&tsyms=USD&ts=' . $timestamp), 2);
        $current = json_decode(@file_get_contents('https://min-api.cryptocompare.com/data/pricehistorical?fsym=BTC&tsyms=USD'), 2)['BTC']['USD'];
        if ($data['BTC']['USD'] > 0) {
            $amt = htmlentities($_POST['amt']) / $data['BTC']['USD'];
        } else {
            $amt = '0';
        }
    }
    elseif(htmlentities($_POST['kind']) == "ether"){
        $data = json_decode(@file_get_contents('https://min-api.cryptocompare.com/data/pricehistorical?fsym=ETH&tsyms=USD&ts=' . $timestamp), 2);
        $current = json_decode(@file_get_contents('https://min-api.cryptocompare.com/data/pricehistorical?fsym=ETH&tsyms=USD'), 2)['ETH']['USD'];
        if($data['ETH']['USD'] > 0) {
            $amt = htmlentities($_POST['amt']) / $data['ETH']['USD'];
        } else {
            $amt = '0';
        }
    }

    if(!isset($data)) {
        header('Location: '.$site_config['website_url']);
    }
} else {
    header('Location: '.$site_config['website_url']);
}

/**
?>
<!--<div class="inner cover">-->
<!--    --><?php //if (new DateTime() < new DateTime($date)) { ?>
<!--        <h1 class="cover-heading">We can't predict the future price of BTC.... Try again</h1>-->
<!--        <p class="lead">-->
<!--            Unless you have a time machine we could use-->
<!--        </p>-->
<!--        <p class="lead">-->
<!--            <a href="--><?php //echo $site_config['website_url']; ?><!--" class="btn btn-lg btn-default btn-green" class="btn btn-info btn-lg">Try again</a>-->
<!--        </p>-->
<!--    --><?php // }
//
//
//    elseif(htmlentities($_POST['kind']) == "ether" || htmlentities($_POST['kind']) == "bitcoin"){
//        if(htmlentities($_POST['kind']) == "bitcoin"){
//            if($kind['BTC']['USD'] > 0 ) { ?>
<!--                <h1 class="cover-heading">--><?php //echo 'אם היית משקיע <span class="value">$' . number_format(htmlentities($_POST['amt']), 2) . '</span> בביטקוין ב ' . $date . '</br>ההשקעה שלך הייתה שוות ערך ל <span class="value">$' . number_format($amt * $current); ?><!--</span></h1>-->
<!--                <p class="lead">-->
<!--                    לא נורא, אתה עדיין יכול להתחיל להרוויח. </br>הירשמו עכשיו וקבלו הסבר מדויק למייל לקניה ומכירה של מטבעות וירטואליים-->
<!--                </p>-->
<!--                <p class="lead">-->
<!--                    <a href="https://goo.gl/DgD8Sj"><button class="btn btn-lg btn-default btn-green" class="btn btn-info btn-lg">הירשם עכשיו</button></a>-->
<!--                </p>-->
<!--            --><?php //}} elseif (htmlentities($_POST['kind']) == "ether" ){if($data['ETH']['USD'] > 0) { ?>
<!--    <h1 class="cover-heading">--><?php //echo 'אם היית משקיע <span class="value">$' . number_format(htmlentities($_POST['amt']), 2) . '</span> בביטקוין ב ' . $date . '</br>ההשקעה שלך הייתה שוות ערך ל <span class="value">$' . number_format($amt * $current); ?><!--</span></h1>-->
<!--    <p class="lead">-->
<!--        לא נורא, אתה עדיין יכול להתחיל להרוויח. </br>הירשמו עכשיו וקבלו הסבר מדויק למייל לקניה ומכירה של מטבעות וירטואליים-->
<!--    </p>-->
<!--    <p class="lead">-->
<!--        <a href="https://goo.gl/DgD8Sj"><button class="btn btn-lg btn-default btn-green" class="btn btn-info btn-lg">הירשם עכשיו</button></a>-->
<!--    </p>-->
<!--    --><?php //}} else { ?>
<!--    <h1 class="cover-heading">אין לנו אינפורמציה לתאריך זה. אנא נסו שנית.</h1>-->
<!--    <p class="lead">-->
<!--        <a href="--><?php //echo $site_config['website_url']; ?><!--" class="btn btn-lg btn-default btn-green" class="btn btn-info btn-lg">Try again</a>-->
<!--    </p>-->
<!--    --><?php //}}?>
<!--</div>-->
<?php
//require_once('includes/templates/footer.php');
//?>
**/
?>
<div class="inner cover">
    <?php if (new DateTime() < new DateTime($date)) { ?>
        <h1 class="cover-heading">We can't predict the future price of currency.... Try again</h1>
        <p class="lead">
            Unless you have a time machine we could use
        </p>
        <p class="lead">
            <a href="<?php echo $site_config['website_url']; ?>" class="btn btn-lg btn-default btn-green" class="btn btn-info btn-lg">Try again</a>
        </p>
    <?php  } elseif((htmlentities($_POST['kind']) == "ether" ) &&$data['ETH']['USD'] > 0) { ?>
        <h1 class="cover-heading"><?php echo 'אם היית משקיע <span class="value">$' . number_format(htmlentities($_POST['amt']), 2) . '</span> באיתריום ב ' . $date . '</br>ההשקעה שלך הייתה שוות ערך ל <span class="value">$' . number_format($amt * $current); ?></span></h1>
        <p class="lead">
            לא נורא, אתה עדיין יכול להתחיל להרוויח. </br>הירשמו עכשיו וקבלו הסבר מדויק למייל לקניה ומכירה של מטבעות וירטואליים
        </p>
        <p class="lead">
            <a href="https://goo.gl/DgD8Sj"><button class="btn btn-lg btn-default btn-green" class="btn btn-info btn-lg">הירשם עכשיו</button></a>
        </p>
    <?php }
    elseif((htmlentities($_POST['kind']) == "bitcoin" )&&$data['BTC']['USD'] > 0) { ?>
        <h1 class="cover-heading"><?php echo 'אם היית משקיע <span class="value">$' . number_format(htmlentities($_POST['amt']), 2) . '</span> בביטקוין ב ' . $date . '</br>ההשקעה שלך הייתה שוות ערך ל <span class="value">$' . number_format($amt * $current); ?></span></h1>
        <p class="lead">
            לא נורא, אתה עדיין יכול להתחיל להרוויח. </br>הירשמו עכשיו וקבלו הסבר מדויק למייל לקניה ומכירה של מטבעות וירטואליים
        </p>
        <p class="lead">
            <a href="https://goo.gl/DgD8Sj"><button class="btn btn-lg btn-default btn-green" class="btn btn-info btn-lg">הירשם עכשיו</button></a>
        </p>
    <?php }else { ?>
        <h1 class="cover-heading">אין לנו אינפורמציה לתאריך זה. אנא נסו שנית.</h1>
        <p class="lead">
            <a href="<?php echo $site_config['website_url']; ?>" class="btn btn-lg btn-default btn-green" class="btn btn-info btn-lg">Try again</a>
        </p>
    <?php } ?>
</div>
<?php
require_once('includes/templates/footer.php');
?>
