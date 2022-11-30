const arrow = document.getElementById('arrow')
const input = document.getElementById('email-input')

input.addEventListener('input', () => {
    if (input.value === '') {
        hideArrow()
    } else {
        arrow.setAttribute('data-open', '')
    }
})

input.addEventListener('focusout', () => {
    if (input.value === '' && input.hasAttribute('data-open')) {
        hideArrow()
    }
})

function hideArrow() {
    arrow.removeAttribute('data-open')
    arrow.setAttribute('data-closing', '')

    arrow.addEventListener('animationend', () => {
        arrow.removeAttribute('data-closing')
    }, {once: true})
}
