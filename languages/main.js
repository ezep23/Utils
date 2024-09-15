const langBtn = document.querySelectorAll("[data-language]");
const textsToChange = document.querySelectorAll("[data-section]");

langBtn.forEach((button) => {
    button.addEventListener("click", () => {
        // console.log(button.dataset.language); -> Retorna el valor del botón (data-language: )
        fetch(`../archivos/${button.dataset.language}.json`)
            .then(res => res.json())
            .then(data => {
                textsToChange.forEach((elem) => {
                    const section = elem.dataset.section;
                    const value =  elem.dataset.value;

                    elem.innerHTML = data[section][value];
                })
            })
    })
})