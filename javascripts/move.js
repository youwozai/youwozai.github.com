//切换到相关页
function gopage(n) {
    var tag = document.getElementById("tabmenu").getElementsByTagName("a");
    var taglength = tag.length; 
    for (i = 1; i <= taglength; i++) {
        if (i == n) {
            document.getElementById("m" + i).className = "on";
            document.getElementById("c" + i).style.display = '';
            document.getElementById("m" + i).style.backgroundColor = "gray";
        } else {
            document.getElementById("m" + i).style.backgroundColor = "";
            document.getElementById("m" + i).className = "";
            document.getElementById("c" + i).style.display = 'none';

        }
    }
}