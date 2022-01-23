const { forEach } = require('lodash');

require('./bootstrap');

/* <button class="deleteComic btn">
    <i class="fas fa-trash-alt"></i>
</button>
<div class="allertWindow">
    
</div> */

let btn = document.querySelectorAll('.deleteComic');

let alertWindow = document.querySelectorAll('.allertWindow');

let btnNoComic = document.querySelectorAll('.btnNoComic');


btn.forEach((button, indexBTN) => {
    button.addEventListener('click', function() {
        
        alertWindow.forEach((window, indexW) => {

            if(indexBTN == indexW) {
                window.style.visibility = 'visible';
            }
            else {
                window.style.visibility = 'hidden';
            }
            
            btnNoComic.forEach((noBtn, indexNoBtn) => {

                noBtn.addEventListener('click', function() {

                    window.style.visibility = 'hidden';

                })
            })

        })
    })
})


