function loadFileIntoElement(filename, elementId) {
    elmnt = document.getElementById(elementId);
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4) {
            if (this.status == 200) {
                elmnt.innerHTML = this.responseText;
            }
        }
    }
    xhttp.open("GET", filename, true);
    xhttp.send();
}

function getTopBarAndMenuAndFooter() {
    // loadFileIntoElement("htto://localhost:88/harwellsaints/flattened/topbar.html", "topbar");
    // loadFileIntoElement("http://localhost:88/harwellsaints/flattened/menu.html", "menu");
    loadFileIntoElement("https://parbuthnott.github.io/harwellsaints/menu.html", "menu");
    // loadFileIntoElement("htto://localhost:88/harwellsaints/flattened/footer.html", "footer");
    var options = {year: 'numeric', month: 'long', day: 'numeric'};
    var today = new Date();
    document.getElementById("date").innerHTML = today.toLocaleDateString("en-US", options);
}

function MM_swapImgRestore() {
    var i, x, a = document.MM_sr;
    for (i = 0; a && i < a.length && (x = a[i]) && x.oSrc; i++) x.src = x.oSrc;
}

function MM_preloadImages() { //v3.0
    var d = document;
    if (d.images) {
        if (!d.MM_p) d.MM_p = [];
        var i, j = d.MM_p.length, a = MM_preloadImages.arguments;
        for (i = 0; i < a.length; i++) {
            if (a[i].indexOf("#") !== 0) {
                d.MM_p[j] = new Image;
                d.MM_p[j++].src = a[i];
            }
        }
    }
}

function MM_findObj(n, d) { //v4.01
    var p, i, x;
    if (!d) d = document;
    if ((p = n.indexOf("?")) > 0 && parent.frames.length) {
        d = parent.frames[n.substring(p + 1)].document;
        n = n.substring(0, p);
    }
    if (!(x = d[n]) && d.all) x = d.all[n];
    for (i = 0; !x && i < d.forms.length; i++) x = d.forms[i][n];
    for (i = 0; !x && d.layers && i < d.layers.length; i++) x = MM_findObj(n, d.layers[i].document);
    if (!x && d.getElementById) x = d.getElementById(n);
    return x;
}

function MM_swapImage() { //v3.0
    var i, j = 0, x, a = MM_swapImage.arguments;
    document.MM_sr = [];
    for (i = 0; i < (a.length - 2); i += 3) {
        if ((x = MM_findObj(a[i])) != null) {
            document.MM_sr[j++] = x;
            if (!x.oSrc) x.oSrc = x.src;
            x.src = a[i + 2];
        }
    }
}
