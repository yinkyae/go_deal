var img = ["default_img1","default_img2", "default_img3", "default_img4", "default_img5", "default_img6"];
var img_src =["img1", "img2", "img3", "img4", "img5", "img6"];
for (let index = 0; index < img.length; index++) {
    document.getElementById(img[index]).onchange = function (evt) {
        var tgt = evt.target || window.event.srcElement,
            files = tgt.files;
        
        // FileReader support
        if (FileReader && files && files.length) {
            var fr = new FileReader();
            fr.onload = function () {
                document.getElementById(img_src[index]).src = fr.result;
            }
            fr.readAsDataURL(files[0]);
        }
        
        // Not supported
        else {
            // fallback -- perhaps submit the input to an iframe and temporarily store
            // them on the server until the user's session ends.
        }
    }
    
    
}
