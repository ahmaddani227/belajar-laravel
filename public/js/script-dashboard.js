const title = document.querySelector("#title");
const slug = document.querySelector("#slug");

title.addEventListener("change", () => {
    fetch("/dashboard/posts/checkSlug?title=" + title.value)
        .then((response) => response.json())
        .then((data) => (slug.value = data.slug));
});

document.addEventListener("trix-file-accept", function (e) {
    e.preventDefault();
});

function previewImage() {
    const imgae = document.querySelector("#image");
    const imgPreview = document.querySelector(".img-preview");
    const divImgPreview = document.querySelector(".div-img-preview");

    imgPreview.style.display = "block";

    const oFReader = new FileReader();
    oFReader.readAsDataURL(imgae.files[0]);

    oFReader.onload = function (oFREvent) {
        imgPreview.src = oFREvent.target.result;
        divImgPreview.classList.toggle("col-sm-3");
    };
}
