const uploadInput = document.querySelector("#room-scheme");

function fillFilesPreview(filesList) {
    const preview = document.querySelector(".preview");
    preview.innerHTML = "";

    for (let i = 0; i < filesList.length; i++) {
        const previewBlock = document.createElement("div");
        previewBlock.classList.add("preview-block");
        preview.appendChild(previewBlock);

        previewBlock.innerHTML = `
      <div class="preview-left">
        <div class="preview-image">
          <img
            src="${URL.createObjectURL(filesList[i])}"
            alt="${filesList[i].name}"
          />
        </div>
        <div class="preview-info">
          <p class="preview-file-name" title="${
            filesList[i].name
        }">${fileNameSlice(filesList[i].name)}</p>
          <p class="preview-file-size">${returnFileSize(filesList[i].size)}</p>
        </div>
      </div>

      <img
        class="preview-delete-icon"
        src="/img/icons/trashIcon.svg"
        alt="delete icon"
        onclick="onFileDelete('${filesList[i].name}')"
      />
    `;
    }
}

function onFileDelete(name) {
    const files = uploadInput.files;
    const dt = new DataTransfer();

    for (let i = 0; i < files.length; i++) {
        const file = files[i];

        if (name !== file.name) dt.items.add(file);
    }

    uploadInput.files = dt.files;

    return fillFilesPreview(dt.files);
}

function onInputChange() {
    const files = uploadInput.files;
    const preview = document.querySelector(".preview");

    while (preview.firstChild) {
        preview.removeChild(preview.firstChild);
    }

    if (files.length > 11) {
        this.value = "";
        alert("Вы не можете загрузить больше 10 файлов");
    }

    let filesSize = 0;

    for (const file of files) {
        filesSize += file.size;

        if (filesSize >= 15728640) {
            this.value = "";
            alert("Размер файлов не может превышать 15Мб");
        }
    }

    if (files.length === 0) {
        return;
    } else {
        fillFilesPreview(files);
    }
}

function fileNameSlice(name) {
    const maxLength = 10;

    if (name.length > maxLength) {
        return name.substring(0, maxLength) + "...";
    }

    return name;
}

function returnFileSize(number) {
    if (number < 1024) {
        return `${number} bytes`;
    } else if (number >= 1024 && number < 1048576) {
        return `${(number / 1024).toFixed(1)} KB`;
    } else if (number >= 1048576) {
        return `${(number / 1048576).toFixed(1)} MB`;
    }
}

uploadInput.addEventListener("change", onInputChange);
