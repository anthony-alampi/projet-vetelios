const blocs = document.querySelectorAll('.bloc').forEach((blocs) => {
    blocs.addEventListener('mouseover', () => {
        blocs.style.transform = "scale(1.05)";
        blocs.style.transition = "500ms";
        blocs.style.color = "#4262B5";
        blocs.style.filter = "grayscale(0%)";
    });

    blocs.addEventListener('mouseout', () => {
        blocs.style.transform = "scale(1)";
        blocs.style.transition = "500ms";
        blocs.style.color = "rgb(45, 45, 45)";
        blocs.style.filter = "grayscale(80%)";

    });
});

