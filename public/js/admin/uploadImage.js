document.getElementById("imageUpload").addEventListener("change", function () {
    const fileInput = this;
    const imagePreview = document.getElementById("imagePreview");

    // Clear existing images
    imagePreview.innerHTML = "";

    if (fileInput.files && fileInput.files.length > 0) {
        for (let i = 0; i < fileInput.files.length; i++) {
            const reader = new FileReader();
            const imageContainer = document.createElement("div");
            imageContainer.className = "image-container mr-3";

            const imageElement = document.createElement("img");
            imageElement.className = "preview-image mb-3 w-20 h-20";
            imageElement.src = "#"; // Initial source

            reader.onload = function (e) {
                imageElement.src = e.target.result;
            };

            reader.readAsDataURL(fileInput.files[i]);

            imageContainer.appendChild(imageElement);
            imagePreview.appendChild(imageContainer);
        }
    }
});
