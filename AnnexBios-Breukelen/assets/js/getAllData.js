async function fetchDataAndRender() {
  try {
    const response = await fetch(
      "https://annexbios.gluwebsite.nl/api/main.php"
    );

    const data = await response.json();
    const movieCardContainer = document.querySelector(".movie_card__container");

    data.forEach((movie) => {
      const movieCard = document.createElement("div");
      movieCard.classList.add("movie_card");

      movieCard.innerHTML = `
          <div class="movie_card__picture">
          <a href="film?id=${movie.id}"><img src="${movie.poster}" alt=""></a>
          </div>
          <div class="movie_card_info__container">
            <div class="movie_card_info__wrapper">
              <h2>${movie.name}</h2>
              <div class="movie_rate">
                <img src="./assets/images/icons/ster.svg" alt="">
                <img src="./assets/images/icons/ster.svg" alt="">
                <img src="./assets/images/icons/ster.svg" alt="">
                <img src="./assets/images/icons/ster.svg" alt="">
                <img src="./assets/images/icons/ster_open.svg" alt="">
              </div>
              <h3>${movie.release_date}</h3>
              <div class="movie_desc">
                <p>${movie.description}</p>
              </div>
              <button><a href="film?id=${movie.id}">Meer info & Tickets</a></button>
            </div>
          </div>
        `;

      movieCardContainer.appendChild(movieCard);
    });
  } catch (error) {
    console.error("Error:", error);
  }
}
fetchDataAndRender();
