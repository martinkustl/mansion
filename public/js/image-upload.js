const readInput = (input) => {
    if (input.files && input.files[0]) {
        const inputLabel = document.querySelector('#eventImageLabel')
        inputLabel.innerHTML = ''
        inputLabel.insertAdjacentHTML('afterbegin', `
                <img
                    src = ${URL.createObjectURL(input.files[0])}
                    style="position: absolute; object-fit: cover; height: inherit; width: inherit;"
                />
            `)
    }
}
