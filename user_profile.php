<?php
include "header.php";

?>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<div class="container" >



    <div class="bmd-layout-container bmd-drawer-f-b bmd-drawer-overlay">
        <header class="bmd-layout-header">
            <div class="navbar navbar-light bg-faded">
                <button class="navbar-toggler" type="button" data-toggle="drawer" data-target="#dw-p4">
                    <span class="sr-only">Toggle drawer</span>
                    <i class="material-icons">menu</i>
                </button>
                <ul class="nav navbar-nav">
                    <li class="nav-item">Title</li>
                </ul>
            </div>
        </header>
        <div id="dw-p4" class="bmd-layout-drawer bg-faded">
            <header>
                <a class="navbar-brand">Title</a>
            </header>
            <ul class="list-group">
                <a class="list-group-item">Link 1</a>
                <a class="list-group-item">Link 2</a>
                <a class="list-group-item">Link 3</a>
            </ul>
        </div>
        <main class="bmd-layout-content">
            <div class="container">
                <!-- main content -->
            </div>
        </main>
    </div>
</div>
<?php
include "halfFooter.php";

?>
