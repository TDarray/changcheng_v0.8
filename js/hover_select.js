function elems(id, cur) {
    var id = document.getElementById(id).getElementsByTagName("li");
    for (var i = 0; i < id.length; i++) {
        id[0].className = "cur";
        id[i].onmouseover = function () {
            this.className = "";
            for (var j = 0; j < id.length; j++) {
                if ((id[j].getAttribute("class") == cur) || (id[j].getAttribute("className") == cur)) {
                    id[j].className = "";
                    break;
                }
            }
            this.className = cur;
        }
    }
};
elems("Rankings10", "cur");
