$("#navPartenaire").click(function (e) {
    e.preventDefault();
    $("html, body").animate({
        scrollTop: $('#partners').offset().top - 100
    }, 2000);
});

$("#navActivites").click(function (e) {
    console.log('okk1')
    e.preventDefault();
    console.log('okk2')
    $("html, body").animate({
        scrollTop: $('#sectionActivites').offset().top - 100
    }, 2000);

});
var images
window.onload = function () {


    images = document.getElementById('images')
    images.addEventListener('change', listefichiers, false)
    var selectMedia = document.getElementById('selectMedia')
    selectMedia.addEventListener('click', ouvredialogue, false)

};

function ouvredialogue(e){
    e.preventDefault()
    console.log('loll')
    images.click()
}

function listefichiers(e) {
    console.log('image')
    var liste = e.target.files
    for(var i=0, nb=liste.length; i<nb; i++){
        var image = liste[i]
        if(image.type.indexOf('image') > -1){

            var reader = new FileReader()
            reader.onload = function(e) {
                // console.log(e)
                var imageSection = document.getElementById('imageSection')
                imageSection.style.backgroundImage = 'url('+e.target.result+')'
                imageSection.style.backgroundSize= 'cover'
                imageSection.style.display = 'block'
    
            }
            reader.readAsDataURL(image)
        }else{
            alert("ce ,'est pas une image")
        }
    }
}
