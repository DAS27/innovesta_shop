const uploadInput = document.querySelector("#room-scheme");
let allFiles = [];

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
          <p class="preview-file-name" title="${filesList[i].name}">${fileNameSlice(filesList[i].name)}</p>
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
    allFiles = allFiles.filter(file => file.name !== name);
    const dt = new DataTransfer();

    allFiles.forEach(file => dt.items.add(file));
    uploadInput.files = dt.files;

    return fillFilesPreview(dt.files);
}

function onInputChange() {
    const newFiles = Array.from(uploadInput.files);
    let filesSize = 0;

    allFiles.push(...newFiles);

    // Remove duplicates
    allFiles = allFiles.reduce((unique, o) => {
        if (!unique.some(obj => obj.name === o.name)) {
            unique.push(o);
        }
        return unique;
    }, []);

    for (const file of allFiles) {
        filesSize += file.size;
    }

    if (allFiles.length > 10) {
        alert("Вы не можете загрузить больше 10 файлов");
        allFiles = allFiles.slice(0, 10);
    }

    if (filesSize >= 15728640) {
        alert("Размер файлов не может превышать 15Мб");
        while (filesSize >= 15728640 && allFiles.length > 0) {
            const removedFile = allFiles.pop();
            filesSize -= removedFile.size;
        }
    }

    const dt = new DataTransfer();
    allFiles.forEach(file => dt.items.add(file));
    uploadInput.files = dt.files;

    fillFilesPreview(dt.files);
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
