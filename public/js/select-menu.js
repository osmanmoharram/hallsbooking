const options = document.querySelectorAll('.option');
const selectedValue = document.getElementById('selectedValue');

for (const option of options) {
	const input = option.querySelector('input[type=radio]');
	const checkmark = option.querySelector('span.checkmark');

	option.querySelector('label')
		.addEventListener('click', (event) => {
			event.preventDefault();
		});

	option.addEventListener('click', () => {
		for (opt of options) {
			if (opt.id !== option.id) {
				opt.checked = false;

				// Checkmark
				opt.querySelector('span.checkmark').classList.replace('flex', 'hidden');
			}
		}

		input.checked = true;
		checkmark.classList.replace('hidden', 'flex');
		selectedValue.innerHTML = option.children[0].innerHTML;
	});
}