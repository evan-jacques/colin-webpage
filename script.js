document.getElementById("nav01").innerHTML =
	"<ul id='menu'>" +
	"<li><a href='index.php'>Home</a></li>" +
	"<li><a href='bio.php'>Blog</a></li>" +
	"</ul>";

var pic = new Array("https://i.imgur.com/SmO3nnQ.jpg","https://i.imgur.com/jKH7MjB.jpg","https://i.imgur.com/zhXrjuR.jpg", "https://i.imgur.com/KLUafgi.jpg","https://i.imgur.com/Xbz4DbV.png","https://i.imgur.com/IVCVWxr.png", "https://i.imgur.com/0Q2OFA9.png", "https://i.imgur.com/j9jR72u.jpg","https://i.imgur.com/2p9qnXT.png","https://i.imgur.com/rYb4TWs.jpg");
var pic_number = 0;
var pic_length  = pic.length - 1;

function change_image(num) {
	pic_number = pic_number + num;
	if (pic_number > pic_length){
		pic_number = 0;
	}
	if (pic_number < 0){
		pic_number = pic_length;
	}
	document.slideshow.src = pic[pic_number];
	return false;
}