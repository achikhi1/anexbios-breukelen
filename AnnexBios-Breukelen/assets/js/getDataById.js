const fetchDataById = async () => {
    try {
      const queryString = window.location.search;
      const urlParams = new URLSearchParams(queryString);
      const movieId = urlParams.get("id");
  
      const response = await fetch(`https://annexbios.gluwebsite.nl/api/main.php?id=${movieId}`);
      const [data] = await response.json();
  
      const config = [
        { selector: ".film_tile", value: `<h2 class="film_title_">${data.name}</h2>` },
        { selector: ".film_poster", value: `<img src="${data.poster}" alt="" class="film_poster_">` },
        { selector: ".release_date", value: `<h3 class="release_date">${data.release_date}</h3>` },
        { selector: ".movie_desc", value: `<p class="release_date">${data.description}</p>` },
        { selector: ".genre", value: `<p class="genre_text_bold">Genre: <span>${data.genres}</span></p>` },
        { selector: ".filmlengte", value: `<p class="genre_text_bold">Filmlengte: <span>${data.duration}</span></p>` },
        { selector: ".land", value: `<p class="genre_text_bold">Land: <span>${data.language}</span></p>` },
        { selector: ".imdb_score", value: `<p class="genre_text_bold">Imdb score: <span>${data.rating}</span></p>` },
        { selector: ".regisseur", value: `<p class="genre_text_bold">Regisseur: <span>${data.directors}</span></p>` },
      ];
      updateElements(config);
    } catch (error) {
      console.error("Error:", error);
    }
  }
  
  const updateElements = (config) => {
    config.forEach(({ selector, value }) => {
      const element = document.querySelector(selector);
      if (element) {
        element.innerHTML = value;
      }
    });
  }
  
  fetchDataById();
  