<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @livewireStyles
</head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"
    integrity="sha512-BdHyGtczsUoFcEma+MfXc71KJLv/cd+sUsUaYYf2mXpfG/PtBjNXsPo78+rxWjscxUYN2Qr2+DbeGGiJx81ifg=="
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function tab(evt, tabName) {
        var i, tablinks;
        var x = document.getElementsByClassName("tab-name");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
    }
    function tabb(evt, tabName) {
        var i, tablinks;
        var x = document.getElementsByClassName("tab_name");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tab-links");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
    }
    function toggleContainers() {
        var container1 = document.getElementById("container1");
        var container2 = document.getElementById("container2");

        if (container1.style.display === "none") {
            container1.style.display = "block";
            container2.style.display = "none";
        } else {
            container1.style.display = "none";
            container2.style.display = "block";
        }
    }
    document.addEventListener("DOMContentLoaded", function () {
        var tabNavItems = document.querySelectorAll(".tab_nav li");
        tabNavItems.forEach(function (item) {
            item.addEventListener("click", function () {
                var tab = this.getAttribute("data-tab");
                tabNavItems.forEach(function (navItem) {
                    navItem.classList.remove('show');
                });
                this.classList.add('show');
                var contentDivs = document.querySelectorAll('.contents > div');
                contentDivs.forEach(function (contentDiv) {
                    contentDiv.classList.remove('show');
                });
                var tabContent = document.querySelector('.contents > div#' + tab);
                if (tabContent) {
                    tabContent.classList.add('show');
                }
            });
        });
    });
    document.addEventListener("DOMContentLoaded", function () {
        var tabNavItems = document.querySelectorAll(".tab_card li div");

        tabNavItems.forEach(function (item) {
            item.addEventListener("click", function () {
                var tab = this.getAttribute("data-tab");
                tabNavItems.forEach(function (navItem) {
                    navItem.classList.remove('open');
                });
                this.classList.add('open');
                var contentDivs = document.querySelectorAll('.content > div');
                contentDivs.forEach(function (contentDiv) {
                    contentDiv.classList.remove('open');
                });
                var tabContent = document.querySelector('.content > div#' + tab);
                if (tabContent) {
                    tabContent.classList.add('open');
                }
            });
        });
    });
    function increaseValue() {
        var value = parseInt(document.getElementById('number').value, 10);
        value = isNaN(value) ? 0 : value;
        value++;
        document.getElementById('number').value = value;
    }

    function decreaseValue() {
        var value = parseInt(document.getElementById('number').value, 10);
        value = isNaN(value) ? 0 : value;
        value < 1 ? value = 1 : '';
        value--;
        document.getElementById('number').value = value;
    }
    function increaseValues() {
        var value = parseInt(document.getElementById('numbers').value, 10);
        value = isNaN(value) ? 0 : value;
        value++;
        document.getElementById('numbers').value = value;
    }

    function decreaseValues() {
        var value = parseInt(document.getElementById('numbers').value, 10);
        value = isNaN(value) ? 0 : value;
        value < 1 ? value = 1 : '';
        value--;
        document.getElementById('numbers').value = value;
    }
</script>

<body>
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    @livewireScripts
</body>

</html>