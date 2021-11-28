const previewContainer = document.getElementById('preview-container');
const uploadContainer = document.getElementById('upload-container');

setInterval(() => {
	if (previewContainer.childElementCount === 0) {
		uploadContainer.style["display"] = 'flex';
		previewContainer.style["display"] = 'none';
	}
}, 200);

function preview(images) {
	uploadContainer.style["display"] = 'none';
	previewContainer.style["display"] = 'grid';

	for (image of images) {
		let imageContainer = document.createElement('div');
			imageContainer.classList.add(
				'relative',
				'w-32',
				'h-32',
			);		
		let	removeButton = document.createElement('span');
			removeButton.innerHTML = `
				<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
					<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
				</svg>
			`;
			
			removeButton.classList.add(
				'absolute',
				'top-1',
				'right-1',
				'text-coolgray-700',
				'hover:text-coolgray-900',
				'cursor-pointer'
			);

			imageContainer.appendChild(removeButton);

		let reader = new FileReader();
			reader.onload = () => {
		let img = document.createElement('img');
			img.src = reader.result;
			img.classList.add(
				'w-full',
				'h-full',
				'rounded-lg',
				'object-cover'
			)
			imageContainer.appendChild(img);
		}
		reader.readAsDataURL(image);

		previewContainer.appendChild(imageContainer);

		//removing an image
		removeButton.addEventListener('click', (event) => {
			// event.preventDefault();

			removeButton.parentElement.remove();
		});
	}
}

let uploadText = document.getElementById('upload-text');

//when images are over the drop area
uploadContainer.addEventListener('dragover', (event) => {
	event.preventDefault();

	uploadText.innerHTML = `<span>Release To Preview</span>`;
});

//when images leave the drop area
uploadContainer.addEventListener('dragleave', (event) => {
	uploadText.innerHTML = `
		<label for="photos" class="relative cursor-pointer rounded-md font-medium text-coolgray-800 focus:outline-none hover:underline">
			<span>Upload a file</span>
			<input type="file" id="photos" name="photos[]" class="sr-only" accept="images/*" multiple onchange="preview(this.files)">
		</label>
		<p class="pl-1">or drag and drop</p>
	`;
});

//when images are droped inside the upload container
uploadContainer.addEventListener('drop', (event) => {
	event.preventDefault();

	if ((event.dataTransfer.files.length) && (typeof preview === "function")) {
		preview(event.dataTransfer.files);	
	}

	uploadText.innerHTML = `
		<label for="photos" class="relative cursor-pointer rounded-md font-medium text-coolgray-800 focus:outline-none hover:underline">
			<span>Upload a file</span>
			<input type="file" id="photos" name="photos[]" class="sr-only" accept="images/*" multiple onchange="preview(this.files)">
		</label>
		<p class="pl-1">or drag and drop</p>
	`;
});