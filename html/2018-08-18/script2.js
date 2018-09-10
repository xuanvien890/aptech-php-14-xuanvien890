function tatbat(){
    Var img = document.getElementById('js-img');
    console.log(img.src.includes('pic_bulbon.gif'));
    if (img.src.includes('pic_bulbon.gif')){
        img.src='pic_bulbon.gif';
            }
            else if(img.src.includes('pic_bulboff.gif')){
                img.src='pic_bulboff.gif';
            }
        }