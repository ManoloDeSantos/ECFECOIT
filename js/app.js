class TexteAnime {
  constructor(id, objetif) {
    this.texte = document.getElementById(id);
    this.objetif = document.getElementById(objetif);
    this.lettres = this.texte.innerText.split("");

    this.texte.innerText = "";

    this.lettres.forEach((lettre) => {
      let caractere = lettre === " " ? "&nbsp;" : lettre;

      this.texte.innerHTML =
        this.texte.innerHTML +
        `
				<div>
					<span>${caractere}</span>
					<span class="deuxieme-ligne">${caractere}</span>
				</div>
			`;
    });

    this.objetif.addEventListener("mouseenter", () => {
      let compte = 0;

      const intervalle = setInterval(() => {
        if (compte < this.texte.children.length) {
          this.texte.children[compte].classList.add("animation");
          compte += 1;
        } else {
          clearInterval(intervalle);
        }
      }, 30);
    });

    this.objetif.addEventListener("mouseleave", () => {
      let compte = 0;

      const intervalle = setInterval(() => {
        if (compte < this.texte.children.length) {
          this.texte.children[compte].classList.remove("animation");
          compte += 1;
        } else {
          clearInterval(intervalle);
        }
      }, 30);
    });
  }
}

new TexteAnime("logo", "logotipe");
