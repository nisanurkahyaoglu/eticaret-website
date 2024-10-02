const productContainers = [...document.querySelectorAll('.product-container')] ;
const nextBtn = [...document.querySelectorAll('.next-button')] ;
const preBtn = [...document.querySelectorAll('.pre-button')] ;


productContainers.forEach((item,i) => {
    let containerDimension = item.getBoundingClientRect();
    let containerWidth = containerDimension.width/4.5 ;

    nextBtn[i].addEventListener('click' , () =>{
        item.scrollLeft += containerWidth ;
    })

    preBtn[i].addEventListener('click' , () =>{
        item.scrollLeft -= containerWidth ;
    })
    
})