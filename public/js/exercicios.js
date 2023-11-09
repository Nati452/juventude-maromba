function mostrarCorpo(btn) {
   for(let element of document.querySelectorAll('.corpo-humano')) {
      element.classList.add("hidden");
   }

   for(let element of btn.parentElement.querySelectorAll(".btn-tipo-corpo")) {
      element.classList.remove("escolhido");
   }

   document.querySelector("#" + btn.dataset.value).classList.remove("hidden");
   btn.classList.add("escolhido");
}

document.addEventListener("DOMContentLoaded", () => {
   destacarMusculoAlvo();
   musculosClicaveis();
});

function destacarMusculoAlvo() {
   let url_params = new URLSearchParams(location.search);

   let tipo_corpo = url_params.get('tipo_corpo');
   let btnCorpo = document.querySelector(".btn-tipo-corpo[data-value='"+ tipo_corpo +"']");
   let btnPrimeiroCorpo = document.querySelector(".btn-tipo-corpo");
   if(btnCorpo) btnCorpo.click(); else btnPrimeiroCorpo.click();

   let musculo_alvo = url_params.get('musculo_alvo');
   if(!musculo_alvo) return;
   let elMusculo = document.querySelector("#"+ tipo_corpo +" svg g#" + musculo_alvo);
   if(elMusculo) elMusculo.classList.add("destaque");
}

function musculosClicaveis() {
   for(let element of document.querySelectorAll(".corpo-humano svg g")) {
      element.addEventListener("click", () => {

         let visibleBodyType = element.parentElement.parentElement;
         console.log(visibleBodyType);

         let url = location.origin + location.pathname; ;
         let params = "?musculo_alvo=" + element.id + "&tipo_corpo=" + visibleBodyType.id;
         location.href = url + params;
         
      });
   }
}