//menu
document.querySelector('#header__icon').onclick = (e)=>{
   e.preventDefault();                              document.querySelector('body').classList.toggle('with--sidebar');
   
 }
  document.querySelector('#site-cache').onclick = ()=>{
 document.querySelector('body').classList.remove('with--sidebar');
  }
  
  //header
  window.addEventListener('scroll', function() {
   if (pageYOffset > 100 ) {
     document.querySelector('.header').classList.add('header__active')
   } else { document.querySelector('.header').classList.remove('header__active')
   }
 })
 
 
 