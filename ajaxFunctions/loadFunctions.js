function calendar(str){
    console.log("Imprimiendo Calendario");
    $('#datetimepicker1').datetimepicker();
}
function LoadtableReport(str) {
    if (str.length == 0) { 
        document.getElementById("Information").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("Information").innerHTML = xmlhttp.responseText;
            }
        };
        //init();
        xmlhttp.open("GET", "tableReport.php?Str1=" + str, true);
        xmlhttp.send();
    }
}

function AddNewBusinessData(str) {
    if (str.length == 0) { 
        document.getElementById("myholder").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("myholder").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "AddBusinessData.php?Str1=" + str, true);
        xmlhttp.send();
    }
}


function AddNewUser(str) {
    if (str.length == 0) { 
        document.getElementById("myholder").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("myholder").innerHTML = xmlhttp.responseText;
            }
        };
        console.log("llamando codigo PHP");
        xmlhttp.open("GET", "AddUser.php?Str1=" + str, true);
        xmlhttp.send();
    }
}

function AddNewSystemForm(str) {
    if (str.length == 0) { 
        document.getElementById("myholder").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("myholder").innerHTML = xmlhttp.responseText;
            }
        };
        console.log("llamando codigo PHP");
        xmlhttp.open("GET", "AddNewSystem.php?Str1=" + str, true);
        xmlhttp.send();
    }
}

function LoadlogIn(str) {
    if (str.length == 0) { 
        document.getElementById("myholder").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("myholder").innerHTML = xmlhttp.responseText;
            }
        };
        console.log("llamando codigo PHP");
        xmlhttp.open("GET", "logIn.php?Str1=" + str, true);
        xmlhttp.send();
    }
}

function LoadMenu(str) {
    console.log("Funcion llamar menu");
    if (str.length == 0) { 
        document.getElementById("menu").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("menu").innerHTML = xmlhttp.responseText;
            }
        };
        console.log("llamando codigo PHP_____________");
        xmlhttp.open("GET", "loadMenu.php?Str1=" + str, true);
        xmlhttp.send();
    }
    //LoadToolsMenu(1);
}

function LoadToolsMenu(str) {
    if (str.length == 0) { 
        document.getElementById("Tools").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("Tools").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "toolsMenu.php?Str1=" + str, true);
        xmlhttp.send();
    }
}


function LoadAuxiliarProperties(str) {
    if (str.length == 0) { 
        document.getElementById("Properties").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("Properties").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "AuxiliarProperties.php?Str1=" + str, true);
        xmlhttp.send();
    }
}