function toggleSidebar() {
    var sidebar = document.getElementById('sidebar');
    sidebar.style.width = sidebar.style.width === '200px' ? '0' : '200px';
    var links = document.querySelectorAll('#sidebar a');
    links.forEach(function(link) {
        link.style.display = link.style.display === 'block' ? 'none' : 'block';
    });
}

//function toggleContent() {
    //var container = document.getElementById('cbutton');
    //if (content.style.display === 'none') {
        //content.style.display = 'block';
    //} else {
        //content.style.display = 'none';
    //}
//}

function toggleContent() {
    var container = document.getElementById('cbutton');
    if (content.style.display === 'none') {
        content.style.display = 'block';
    } else {
        content.style.display = 'none';
    }
}

function iconSet() {
    
}