const date = document.getElementById("date")

if (date) {
    date.setAttribute("min", new Date().toISOString().split('.')[0].slice(0, -3));
}
