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
      this.currentIndex = (currentIndex + 1) % cards.length;
      mostraCard(currentIndex);
   }
   function precedenteCard(){
    this.currentIndex = (currentIndex - 1) % cards.length;
    mostraCard(currentIndex);
 }