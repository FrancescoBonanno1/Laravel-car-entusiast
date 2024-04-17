document.addEventListener("currentIndex" , function(){
    const card = document.querySelectorAll('.card');
    let currentIndex = 0;
    
    function mostraCard(numero) {
        for (let i= 0; i < card.length; i++) {
            if (i === numero) {
                card.style.display = 'block';
            }
            else {
                card.style.display = 'none';
            }
            
        }
    }
});

   function prossimaCard(){
      currentIndex = (currentIndex + 1) % cards.length;
      mostraCard(currentIndex);
   }
   function precedenteCard(){
    currentIndex = (currentIndex - 1) % cards.length;
    mostraCard(currentIndex);
 }
 mostraCard(currentIndex);

 const nextButton = document.createElement('button');
 nextButton.textContent('<i class="fa-solid fa-arrow-right"></i>');
 nextButton.addEventListener('click',prossimaCard );

 const previousButton = document.createElement('button');
 previousButton.textContent('<i class="fa-solid fa-arrow-left"></i>');
 previousButton.addEventListener('click', precedenteCard);

 document.body.appendChild(previousButton);
 document.body.appendChild(nextButtonButton);