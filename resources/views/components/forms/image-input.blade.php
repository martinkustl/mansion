<label id="eventImageLabel" for="eventImage" style="cursor: pointer">
    <span>
        Nahrajte obrázek
    </span>
</label>
<input type="file" name="eventImage" id="eventImage" onchange="readInput(this)"
       style="position: absolute; opacity:0; z-index: -1">

<script>
    const readInput = (input) => {
        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function (e) {
                const inputLabel = document.querySelector('#eventImageLabel')
                inputLabel.insertAdjacentHTML('beforeend', `
                    <img
                        id="eventImage"
                        src=${e.target.result}
                        alt="obrázek"
                        width="100px"
                        height="100px"
                    />
                `)
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
