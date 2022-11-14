console.log('grid loaded')

let mainCards = document.querySelectorAll(".right")

mainCards.forEach(card => {
    let dataId = card.getAttribute('data-id')
    // console.log(dataId)
    card.addEventListener('click', e => {

        let elements = document.getElementsByClassName(`section${dataId}`)
        let elementArray = [...elements]
        if (window.innerWidth >= 850) {
            let otherElementsArray = [...document.getElementsByClassName('sectioncontent')]
            otherElementsArray.forEach(element => {
                if (element.classList.contains(`section${dataId}`)) {
                    element.style.height = "block";
                } else {
                    element.style.display = "none"
                    elementArray.forEach(elem => {
                        elem.style.display = "block"
                    })
                }
            })
        } else {
            elementArray.forEach(element => {
                if (element.style.display === "block") {
                    element.style.display = "none"
                } else {
                    element.style.display = "block"
                }
            })
        }
    })
})
