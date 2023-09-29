document.getElementById("imageUpload").addEventListener("change", function () {
  const fileInput = this;
  const imagePreview = document.getElementById("previewImage");

  // Xóa tệp cũ nếu có
  const existingImage = document.getElementById("existingImage");
  if (existingImage) {
    existingImage.remove();
  }

  if (fileInput.files && fileInput.files[0]) {
    const reader = new FileReader();

    reader.onload = function (e) {
      imagePreview.src = e.target.result;
    };

    reader.readAsDataURL(fileInput.files[0]);
  } else {
    imagePreview.src = "#";
  }
});
