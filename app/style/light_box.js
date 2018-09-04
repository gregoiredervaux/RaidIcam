function display(link) {
	var media = new video();
	overlay = document.getElementByClassName('overlay');
	media.src = link.href;
	overlay.appendChild(media);
	overlay.style.display = 'block';
}

var links=document.getElementsByClassName('light_box');
linksLen=links.length;
for(var i =0; i<linksLen; i++)
{
	 links[i].addEventListener('click', function(e) {
        e.preventDefault(); // On bloque la redirection
        // On appelle notre fonction pour afficher les images/video
        // currentTarget est utilisé pour cibler le lien et non l'image/video
        display(e.currentTarget);
    });
}

