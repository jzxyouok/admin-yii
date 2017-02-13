<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= Html::encode($this->title) ?></title>
    <meta charset="<?= Yii::$app->charset ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--<link href='http://fonts.useso.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>-->
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>
    <!--Header-part-->
    <div id="header">
        <h1><a href="dashboard.html">Matrix Admin</a></h1>
    </div>
    <!--close-Header-part-->
    <!--top-Header-menu-->
    <div id="user-nav" class="navbar navbar-inverse">
        <ul class="nav">
            <li><a><i class="icon icon-user"></i>&nbsp;<span class="text">氷落</span></a></li>
            
            <li class=""><a href="#"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
        </ul>
    </div>
    <!--close-top-Header-menu-->
    <!--sidebar-menu-->
    <div id="sidebar">
        <ul>
            <li class="active"><a href="index.html"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
        </ul>
    </div>
    <!--sidebar-menu-->
    <!--main-container-part-->
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="#" class="tip-bottom" data-original-title="Go to Home"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
        </div>
        <?= $content ?>
    </div>
    <!--end-main-container-part-->
    <!--Footer-part-->
    <div class="row-fluid">
        <div id="footer" class="span12"> 2017 &copy; 氷落 Admin</div>
    </div>
    <!--end-Footer-part-->
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>
