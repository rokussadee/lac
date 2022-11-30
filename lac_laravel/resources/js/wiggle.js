function wiggleWitIt() {
    wiggles = document.getElementsByClassName("wiggle");

    [...wiggles].forEach((wiggle) => {
        wiggle.innerHTML = wiggle
            .innerText
            .split("")
            .map((char, index) => {
                return `<span style='--animation-order: ${index + 1};'><h1>${char}</h1></span>`;
            })
            .join("");
    });
};

document.addEventListener("DOMContentLoaded", wiggleWitIt());
