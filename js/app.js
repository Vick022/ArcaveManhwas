const arrows = document.querySelectorAll(".arrow");
const booklists = document.querySelectorAll(".book-list");

arrows.forEach((arrow,i)=>{
    
    const itemNumber=booklists[i].querySelectorAll("img").length;
    let clickCounter =0;
    arrow.addEventListener("click",()=>{
        const ratio = Math.floor(window.innerWidth/270);
        clickCounter++;
        if(itemNumber - (3 + clickCounter) + (4-ratio) >= 0){
        booklists[i].style.transform = `translateX(${booklists[i].computedStyleMap().get("transform")[0].x.value-300}px)`;
    } else {
        booklists[i].style.transform = "translateX(0)";
        clickCounter = 0;
    }
    });

    
    //console.log(booklists[i].querySelectorAll("img").length)
    //console.log(Math.floor(window.innerWidth/270));
});











// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
  
        form.classList.add('was-validated')
      }, false)
    })
  })()