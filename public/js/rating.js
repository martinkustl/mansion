const ratingInputs = document.querySelectorAll('.rating input');

function setRating(element) {
    // proměnná star je rovná elementu, který je do funkce poslán jako argument
    // jedná se o hvězdu, na kterou bylo kliknuto
    const star = element;
    document.querySelectorAll('.rating .selected').forEach(function (element) {
        element.classList.remove('selected')
    })

    star.closest('label').classList.add('selected')
}


ratingInputs.forEach(element => {
    element.addEventListener('change', () => setRating(element))
})
